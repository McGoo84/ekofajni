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
{if Configuration::get('TBCMSFOOTERLOGO_IMG')}

    <div class='tbfooter-about-logo-wrapper col-xl-3 col-lg-3 col-md-12 col-xs-12 col-sm-12'>
        <div class=" tbfooter-about-logo-content">
            <div class='tbfooter-logo-block tbfooter-title-wrapper-content'>
                {if $show_fields['main_image']}
                <div class='tbfooter-img-block'>
                    <img src="{$path}{Configuration::get('TBCMSFOOTERLOGO_IMG')}" data-org-src="{$path}{Configuration::get('TBCMSFOOTERLOGO_IMG')}" />
                </div>
                {/if}

                {if $show_fields['main_title']}
                <div class='tbfooter-logo-title tbfooter-title'>
                    {Configuration::get('TBCMSFOOTERLOGO_TITLE', $id_lang)}
                </div>
                {/if}

                {if $show_fields['main_short_description']}
                <div class='tbfooter-logo-short-title'>
                    {Configuration::get('TBCMSFOOTERLOGO_SUB_DESCRIPTION', $id_lang)}
                </div>
                {/if}

                {if $show_fields['main_description']}
                <div class='tbfooter-logo-desc'>
                    {Configuration::get('TBCMSFOOTERLOGO_DESCRIPTION', $id_lang)}
                </div>
                {/if}
            </div>
        </div>
       
    </div>
{/if}
{/strip}
