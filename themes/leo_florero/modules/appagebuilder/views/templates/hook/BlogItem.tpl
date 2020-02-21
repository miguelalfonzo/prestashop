{*
 *  @Module Name: AP Page Builder
 *  @Website: apollotheme.com - prestashop template provider
 *  @author Apollotheme <apollotheme@gmail.com>
 *  @copyright Apollotheme
 *  @description: ApPageBuilder is module help you can build content for your  
*}
<!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
<div class="blog-container" itemscope itemtype="https://schema.org/Blog">
    <div class="left-block">
        <div class="blog-image-container">
            <a class="blog_img_link" href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" itemprop="url">
                {if isset($formAtts.bleoblogs_sima) && $formAtts.bleoblogs_sima}
                    <img class="img-fluid" src="{if (isset($blog.preview_thumb_url) && $blog.preview_thumb_url != '')}{$blog.preview_thumb_url}{else}{$blog.preview_url}{/if}{*full url can not escape*}"
                         alt="{if !empty($blog.legend)}{$blog.legend|escape:'html':'UTF-8'}{else}{$blog.title|escape:'html':'UTF-8'}{/if}"
                         title="{if !empty($blog.legend)}{$blog.legend|escape:'html':'UTF-8'}{else}{$blog.title|escape:'html':'UTF-8'}{/if}"
                         {if isset($formAtts.bleoblogs_width)}width="{$formAtts.bleoblogs_width|escape:'html':'UTF-8'}" {/if}
                            {if isset($formAtts.bleoblogs_height)} height="{$formAtts.bleoblogs_height|escape:'html':'UTF-8'}"{/if}
                         itemprop="image" />
                {/if}
            </a>
            <div class="blog-meta">
                {if isset($formAtts.bleoblogs_scre) && $formAtts.bleoblogs_scre}
                    <span class="created"><span class=""></span>
                        <i class="material-icons">&#xE8B5;</i>
                        <time class="date" datetime="{strtotime($blog.date_add)|date_format:"%Y"}{*convert to date time*}">
                            {assign var='blog_month' value=strtotime($blog.date_add)|date_format:"%B"}
                            {l s=$blog_month mod='appagebuilder'}
                            {assign var='blog_date_add' value=strtotime($blog.date_add)|date_format:"%d"}<!-- day of month -->
                            {assign var='blog_day' value=strtotime($blog.date_add)|date_format:"%e"}
                            {l s=$blog_day mod='appagebuilder'}
                            {assign var='blog_daycount' value=$formAtts.leo_blog_helper->string_ordinal($blog_date_add)},
                            {assign var='blog_year' value=strtotime($blog.date_add)|date_format:"%Y"}
                            {l s=$blog_year mod='appagebuilder'}	<!-- year -->
                        </time>
				    </span>
                {/if}
                {if isset($formAtts.bleoblogs_saut) && $formAtts.bleoblogs_saut}
                    <span class="author">
                        <i class="material-icons">&#xE254;</i>
					<span class="icon-author"> {l s='By' d='Shop.Theme.Global'}</span> {$blog.author|escape:'html':'UTF-8'}
				</span>
                {/if}
            </div>
        </div>
    </div>
    <div class="right-block">
        {if isset($formAtts.show_title) && $formAtts.show_title}
            <h5 class="blog-title" itemprop="name"><a href="{$blog.link}{*full url can not escape*}" title="{$blog.title|escape:'html':'UTF-8'}">{$blog.title|strip_tags:'UTF-8'|truncate:80:'...'}</a></h5>
        {/if}
        {if isset($formAtts.show_desc) && $formAtts.show_desc}
            <p class="blog-desc" itemprop="description">
                {$blog.description|strip_tags:'UTF-8'|truncate:160:'...'}
            </p>
        {/if}
    </div>

    <div class="hidden-xl-down hidden-xl-up datetime-translate">
        {l s='Sunday' mod='appagebuilder'}
        {l s='Monday' mod='appagebuilder'}
        {l s='Tuesday' mod='appagebuilder'}
        {l s='Wednesday' mod='appagebuilder'}
        {l s='Thursday' mod='appagebuilder'}
        {l s='Friday' mod='appagebuilder'}
        {l s='Saturday' mod='appagebuilder'}

        {l s='January' mod='appagebuilder'}
        {l s='February' mod='appagebuilder'}
        {l s='March' mod='appagebuilder'}
        {l s='April' mod='appagebuilder'}
        {l s='May' mod='appagebuilder'}
        {l s='June' mod='appagebuilder'}
        {l s='July' mod='appagebuilder'}
        {l s='August' mod='appagebuilder'}
        {l s='September' mod='appagebuilder'}
        {l s='October' mod='appagebuilder'}
        {l s='November' mod='appagebuilder'}
        {l s='December' mod='appagebuilder'}

        {l s='st' mod='appagebuilder'}
        {l s='nd' mod='appagebuilder'}
        {l s='rd' mod='appagebuilder'}
        {l s='th' mod='appagebuilder'}
    </div>
</div>
