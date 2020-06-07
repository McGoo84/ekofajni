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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2019 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{strip}
{if $dis_arr_result['status']}
	<div class='tbcmscategory-slider container-fluid bottom-to-top hb-animate-element'>
		<div class='tbcategory-slider container'>

			{include file='_partials/tbcms-main-title.tpl' main_heading=$main_heading path=$dis_arr_result['path']}
			
			<div class="tbcategory-slider-inner-info-box">
				<div class='tbcategory-slider-content-box owl-theme owl-carousel'>
					{foreach $dis_arr_result['data'] as $data}
						<div class="item tbcategory-slider-wrapper-info">
							<div class="tbcategory-slider-inner">
								<div class="tbcategory-img-block">
									<img src="{$dis_arr_result['path']}{$data['image']}" alt="{$data['title']}" />
								</div>
								<div class='tbcategory-slider-info-box'>
									<a href="{$link->getCategoryLink($data['id_category'])}" title="{$data['title']}">
										<div class="tbcategory-slider-title">{$data['title']}</div>
									</a>
									{* <div class="tbcategory-slider-short-desc">{$data['short_description']}</div> *}
								</div>
							</div>
						</div>
					{/foreach}
				</div>
				{* <div class='tbcategory-slider-pagination-wrapper tb-pagination-wrapper'>
					<div class="tbcategory-slider-pagination">
						<div class="tbcategory-slider-next-pre-btn tbcms-next-pre-btn tbleft-btn-wrapper">
							<div class="tbcategory-slider-prev tbcmsprev-btn"><i class='material-icons'>&#xe314;</i></div>
							<div class="tbcategory-slider-next tbcmsnext-btn"><i class='material-icons'>&#xe315;</i></div>
						</div>
					</div>
				</div> *}
			</div>
		</div>
	</div>
{/if}
{/strip}
