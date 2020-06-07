{**
* 2007-2019 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2019 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{strip}
<div class="post_format_items tbcmsblog-gallery-slider tbcmsblog-gallery-slider-{$blog_id}" data-slider-id='tbcmsblog-gallery-slider-{$blog_id}'>
	<div class="{if count($gallery_lists) > 1}owl-theme owl-carousel{/if} tbblog-wrapper-slider">

	{if isset($gallery_lists) && $gallery_lists}
	{foreach from=$gallery_lists item=galleryimg}
		<div class="item post_video tbblog-slider swiper-slide">
			<div class="post_gallery_img item">
				<img class="tbcmsblog_img img-responsive tbblog-balance-height" src="{$galleryimg.$imagesize}" alt="">
			</div>
		</div>
	{/foreach}
	{/if}
	</div>
	{if count($gallery_lists) > 1}
	<div class="tbcmsblog-gallery-slider-pagination">
        <div class="tbcmsblog-gallery-next-pre-btn">
          	<div class="tbcmsblog-gallery-slider-prev"><i class='material-icons'>&#xe314;</i></div>
          	<div class="tbcmsblog-gallery-slider-next"><i class='material-icons'>&#xe315;</i></div>
        </div>
    </div>
    {/if}
</div>

{/strip}
