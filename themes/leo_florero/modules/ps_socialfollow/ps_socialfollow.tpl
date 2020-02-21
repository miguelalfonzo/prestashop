{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{block name='block_social'}
    <div class="block-social block links">
        <h4 class="title_block block-contact-title hidden-sm-down">{l s='Follow Us' d='Shop.Theme.Global'}</h4>
        <div class="title clearfix hidden-md-up" >
            <span class="h3 title_block">{l s='Follow Us' d='Shop.Theme.Global'}</span>
	    <span class="float-xs-right">
	      <span class="navbar-toggler">
	        <i class="fa fa-angle-down add" aria-hidden="true"></i>
              <i class="fa fa-angle-up remove" aria-hidden="true"></i>
	      </span>
	    </span>
        </div>
        <ul class="block_content">
            {foreach from=$social_links item='social_link'}
                <li><a class="{$social_link.class}" href="{$social_link.url}" title="{$social_link.label}" target="_blank">{$social_link.class}</a></li>
            {/foreach}
        </ul>
    </div>
{/block}