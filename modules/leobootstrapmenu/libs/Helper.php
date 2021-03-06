<?php
/**
 * 2007-2015 Leotheme
 *
 * NOTICE OF LICENSE
 *
 * Leo Bootstrap Menu
 *
 * DISCLAIMER
 *
 *  @author    leotheme <leotheme@gmail.com>
 *  @copyright 2007-2015 Leotheme
 *  @license   http://leotheme.com - prestashop template provider
 */

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}

class LeoBtmegamenuHelper
{

    public static function getCategories()
    {
        $children = self::getIndexedCategories();
        $list = array();
        self::treeCategory(1, $list, $children);
        return $list;
    }

    public static function treeCategory($id, &$list, $children, $tree = "")
    {
        if (isset($children[$id])) {
            if ($id != 0) {
                $tree = $tree." - ";
            }
            foreach ($children[$id] as $v) {
                $v["tree"] = $tree;
                $list[] = $v;
                self::treeCategory($v["id_category"], $list, $children, $tree);
            }
        }
    }

    public static function getIndexedCategories()
    {
        global $cookie;
        $id_lang = $cookie->id_lang;
        $id_shop = Context::getContext()->shop->id;

        $join = 'JOIN `'._DB_PREFIX_.'category_shop` cs ON(c.`id_category` = cs.`id_category` AND cs.`id_shop` = '.(int)$id_shop.')';

        $allCat = Db::getInstance()->ExecuteS('
        SELECT c.*, cl.id_lang, cl.name, cl.description, cl.link_rewrite, cl.meta_title, cl.meta_keywords, cl.meta_description
        FROM `'._DB_PREFIX_.'category` c
        '.$join.'
        LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON (c.`id_category` = cl.`id_category` AND `id_lang` = '.(int)$id_lang.' AND cl.`id_shop` = '.(int)$id_shop.')
        LEFT JOIN `'._DB_PREFIX_.'category_group` cg ON (cg.`id_category` = c.`id_category`)
        WHERE `active` = 1
        GROUP BY c.`id_category`
        ORDER BY `id_category` ASC');
        $children = array();
        if ($allCat) {
            foreach ($allCat as $v) {
                $pt = $v["id_parent"];
                $list = @$children[$pt] ? $children[$pt] : array();
                array_push($list, $v);
                $children[$pt] = $list;
            }
            return $children;
        }
        return array();
    }

    public static function getFieldValue($obj, $key, $id_lang = NULL, $id_shop = null)
    {
        if (!$id_shop && $obj->isLangMultishop()) {
            $id_shop = Context::getContext()->shop->id;
        }

        if ($id_lang) {
            $defaultValue = ($obj->id && isset($obj->{$key}[$id_lang])) ? $obj->{$key}[$id_lang] : '';
        }
        else {
            $defaultValue = isset($obj->{$key}) ? $obj->{$key} : '';
        }

        return Tools::getValue($key.($id_lang ? '_'.$id_shop.'_'.$id_lang : ''), $defaultValue);
    }

    public static function getPost($keys = array(), $lang = false)
    {
        $post = array();
        if ($lang === false) {
            foreach ($keys as $key) {
                // get value from $_POST
                if ($key == 'icon_class') {
                    //DONGND:: remove single quote and double quote if fill class font icon
                    $icon_class = Tools::getValue($key);
                    if ($icon_class != strip_tags($icon_class)) {
                        $post[$key] = $icon_class;
                    } else {
                        $post[$key] = str_replace(array('\'', '"'), '', $icon_class);
                    }
                } else {
                    $post[$key] = Tools::getValue($key);
                }
            }
        }
        if ($lang === true) {
            foreach ($keys as $key) {
                // get value multi language from $_POST
                foreach (Language::getIDs(false) as $id_lang) {
                    $post[$key.'_'.(int)$id_lang] = Tools::getValue($key.'_'.(int)$id_lang);
                }
            }
        }
        return $post;
    }

    public static function getConfigKey($multi_lang = false)
    {
        if ($multi_lang == false) {
            return array(
                'saveleobootstrapmenu',
                'id_btmegamenu',
                'id_parent',
                'active',
                'show_title',
                'sub_with',
                'type',
                'product_type',
                'cms_type',
                'category_type',
                'manufacture_type',
                'supplier_type',
                'controller_type',
                'controller_type_parameter',
                'target',
                'menu_class',
                'icon_class',
                'filename',
                'is_group',
                'colums',
                'tab',
                'groupBox',
            );
        } else {
            return array(
                'title',
                'text',
                'url',
                'content_text',
            );
        }
    }

    public static function getBaseLink($id_shop = null, $ssl = null, $relative_protocol = false)
    {
        static $force_ssl = null;

        if ($ssl === null) {
            if ($force_ssl === null) {
                $force_ssl = (Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE'));
            }
            $ssl = $force_ssl;
        }
        $context = Context::getContext();
        if (!$id_shop) {
            $id_shop = (int)Context::getContext()->shop->id;
        }
        if (Configuration::get('PS_MULTISHOP_FEATURE_ACTIVE') && $id_shop !== null) {
            $shop = new Shop($id_shop);
        } else {
            $shop = Context::getContext()->shop;
        }

        $ssl_enable = Configuration::get('PS_SSL_ENABLED');
        if ($relative_protocol) {
            $base = '//'.($ssl && $ssl_enable ? $shop->domain_ssl : $shop->domain);
        } else {
            $base = (($ssl && $ssl_enable) ? 'https://'.$shop->domain_ssl : 'http://'.$shop->domain);
        }

        return $base.$shop->getBaseURI();
    }
    
    public static function getLangLink($id_lang = null, Context $context = null, $id_shop = null)
    {
        if (!$context) {
            $context = Context::getContext();
        }

        if (!$id_shop) {
            $id_shop = $context->shop->id;
        }

        $allow = (int)Configuration::get('PS_REWRITING_SETTINGS');
        if ((!$allow && in_array($id_shop, array($context->shop->id,  null))) || !Language::isMultiLanguageActivated($id_shop) || !(int)Configuration::get('PS_REWRITING_SETTINGS', null, null, $id_shop)) {
            return '';
        }

        if (!$id_lang) {
            $id_lang = $context->language->id;
        }

        return Language::getIsoById($id_lang).'/';
    }

    public static function leoCreateColumn($table_name, $col_name, $data_type)
    {
        $sql = 'SHOW FIELDS FROM `'._DB_PREFIX_.bqSQL($table_name) .'` LIKE "'.bqSQL($col_name).'"';
        $column = Db::getInstance()->executeS($sql);

        if (empty($column)) {
            $sql = 'ALTER TABLE `'._DB_PREFIX_.bqSQL($table_name).'` ADD COLUMN `'.bqSQL($col_name).'` '.pSQL($data_type);
            $res = Db::getInstance()->execute($sql);
        }
    }
    
    /**
     * @param
     * 0 no multi_lang
     * 1 multi_lang follow id_lang
     * 2 multi_lnag follow code_lang
     * @return array
     */
    public static function getPostAdmin($keys = array(), $multi_lang = 0)
    {
        $post = array();
        if ($multi_lang == 0) {
            foreach ($keys as $key) {
                // get value from $_POST
                $post[$key] = Tools::getValue($key);
            }
        } elseif ($multi_lang == 1) {

            foreach ($keys as $key) {
                // get value multi language from $_POST
                if (method_exists('Language', 'getIDs')) {
                    foreach (Language::getIDs(false) as $id_lang)
                        $post[$key.'_'.(int)$id_lang] = Tools::getValue($key.'_'.(int)$id_lang);
                }
            }
        } elseif ($multi_lang == 2) {
            $languages = self::getLangAtt();
            foreach ($keys as $key) {
                // get value multi language from $_POST
                foreach ($languages as $id_code)
                    $post[$key.'_'.$id_code] = Tools::getValue($key.'_'.$id_code);
            }
        }

        return $post;
    }
    
    public static function getLangAtt($attribute = 'iso_code')
    {
        $languages = array();
        foreach (Language::getLanguages(false, false, false) as $lang) {
            $languages[] = $lang[$attribute];
        }
        return $languages;
    }

    public static function getCookie()
    {
        $data = $_COOKIE;
        return $data;
    }
    
    public static function genKey()
    {
        return md5(time().rand());
    }
    
    static $id_shop;
    /**
     * FIX Install multi theme
     * LeoBtmegamenuHelper::getIDShop();
     */
    public static function getIDShop()
    {
        if ((int)self::$id_shop) {
            $id_shop = (int)self::$id_shop;
        } else {
            $id_shop = (int)Context::getContext()->shop->id;
        }
        return $id_shop;
    }
    
    public static function freeTextWhensubmit()
    {
        return 'We are sorry that you are using free version, hence, you cannot use this function. Please update to professional version.';
    }
    
    public static function freeTextDes($text='')
    {
        return '<i style="color:red">'.$text.'(Only for Professional Version.)</i>';
    }
    
    public static function freeText()
    {
        return '<div class="alert alert-warning ap-free-warning"><marquee direction="right" behavior="alternate">You are using free version of LeoBootstrapMenu. '
        . '<a target="_blank" href="http://apollotheme.com" title="professional version">Please click here to find out about professional version and how to update to this version</a></marquee></div>';
    }
    
    const FREE_LIMIT_GROUP = 2;
    public static function freeGroup()
    {
        return 'We are sorry that you are using free version module. You cannot add more Menu Group. Limit is ' . self::FREE_LIMIT_GROUP;
    }
    
    const FREE_LIMIT_MENU = 5;
    public static function freeMenu()
    {
        return 'We are sorry that you are using free version module. You cannot add more Menu. Limit is ' . self::FREE_LIMIT_MENU;
    }
}
