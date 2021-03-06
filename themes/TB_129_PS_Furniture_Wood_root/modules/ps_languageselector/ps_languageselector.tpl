 {**
 * 2007-2019 PrestaShop
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
 * @copyright 2007-2019 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{strip}
<div id="tbcmsdesktop-language-selector" class="tbcms-header-language">
    <div class="tbheader-language-wrapper">
        <span class="tb-language-lable">{l s='Language:' d='Shop.Theme.Global'}</span>
        <div class="tbheader-language-btn-wrapper">
            <button class="btn-unstyle tb-language-btn">
                {* <img class="tbimage-lazy lang-flag" src="{$urls.img_lang_url}{$current_language.id_lang}.jpg" /> *}
                <span class="tb-language-span">{$current_language.name_simple}</span>
                <i class="material-icons expand-more">&#xe313;</i>
            </button>
            <ul class="tb-language-dropdown tb-dropdown">
                {foreach from=$languages item=language}
                <li {if $language.id_lang==$current_language.id_lang}class="current"{/if}>
                    <a href="{url entity='language' id=$language.id_lang}" title='{$language.name_simple}'>
                        {* <img class="tbimage-lazy lang-flag" src="{$urls.img_lang_url}{$language.id_lang}.jpg"/> *}
                        <span>{$language.name_simple}</span>
                    </a>
                </li>
                {/foreach}
            </ul>
        </div>
    </div>
</div>
{/strip}
