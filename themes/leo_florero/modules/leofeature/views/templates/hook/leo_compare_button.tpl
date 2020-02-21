{* 
* @Module Name: Leo Feature
* @Website: leotheme.com.com - prestashop template provider
* @author Leotheme <leotheme@gmail.com>
* @copyright Leotheme
* @description: Leo feature for prestashop 1.7: ajax cart, review, compare, wishlist at product list 
*}
<div class="compare clearfix">
	<a class="leo-compare-button btn btn-product btn{if $added} added{/if}" href="#" data-id-product="{$leo_compare_id_product}" title="{if $added}{l s='Remove from Compare' d='Shop.Theme.Global'}{else}{l s='Add to Compare' d='Shop.Theme.Global'}{/if}">
		<span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
		<span class="leo-compare-bt-content">
            <i class="material-icons">&#xE02F;</i>
			<span class="hidden">{l s='COMPARE' d='Shop.Theme.Global'}</span>
		</span>
	</a>
</div>