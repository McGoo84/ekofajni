<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__d7616bc68184128a18ccc9c87419c5c447edbccb467c88c3cf59dd4ed4cb1507 */
class __TwigTemplate_2c67b3c5c35c5f046dd4fd53430511ee46305e95e2360bd42255f8fa637c514b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Szablony > Szablon • ekofajni.pl</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.6.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Złożono nowe zamówienie w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'Nowy klient zarejestrował się w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomość pojawiła się w Twoim sklepie.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = '8ed83d26070f75fe789759b898fc3b85';
    var token_admin_orders = '8b44cb68db9aa36f30be5ca0dc68123f';
    var token_admin_customers = '272d70337c0df6c7aeb76a7ac4051aea';
    var token_admin_customer_threads = 'b5fc8231fb93f8ae5ff5a788027b0851';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '4f16dc64891149e4611bea72d31b3ae2';
    var choose_language_translate = 'Wybierz język';
    var default_language = '2';
    var admin_modules_link = '/g5t0nlm1qfl0mbyz/index.php/improve/modules/catalog/recommended?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw';
    var admin_notification_get_link = '/g5t0nlm1qfl0mbyz/index.php/common/notifications?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw';
    var admin_notification_push_link = '/g5t0nlm1qfl0mbyz/index.php/common/notifications/ack?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw';
    var tab_modules_list = 'easywebtoapp';
    var update_success_msg = 'Aktualizacja powiodła się';
    var errorLogin = 'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/g5t0nlm1qfl0mbyz/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/ui/themes/base/jquery.ui.core.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/ui/themes/base/jquery.ui.theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/tbcmscustomsetting/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/tbcmstabproducts/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/tbcmspaymenticon/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/tbcmstestimonial/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/tbcmsbrandlist/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/tbcmscategoryslider/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/g5t0nlm1qfl0mbyz/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/g5t0nlm1qfl0mbyz\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/g5t0nlm1qfl0mbyz\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/ui/jquery.ui.core.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/ui/jquery.ui.widget.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/ui/jquery.ui.mouse.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/ui/jquery.ui.sortable.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/tbcmscustomsetting/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/modules/tbcmstabproducts/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/modules/tbcmspaymenticon/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/modules/tbcmstestimonial/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/modules/tbcmsbrandlist/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/modules/tbcmscategoryslider/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/modules/tbcmsinstagramslider/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/g5t0nlm1qfl0mbyz/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/g5t0nlm1qfl0mbyz/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/g5t0nlm1qfl0mbyz/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/g5t0nlm1qfl0mbyz/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/g5t0nlm1qfl0mbyz/themes/default/js/bundle/module/module_card.js?v=1.7.6.5\"></script>

  <script>
            var admin_gamification_ajax_url = \"https:\\/\\/ekofajni.pl\\/g5t0nlm1qfl0mbyz\\/index.php?controller=AdminGamification&token=5508a63ba4fedb4f0108dbdb727e0a7b\";
            var current_id_tab = 53;
        </script>

";
        // line 109
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-pl adminthemes\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminDashboard&amp;token=7887e1a6c2eddec9d259c7c2291130eb\"></a>
      <span id=\"shop_version\">1.7.6.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php/sell/catalog/categories/new?token=98790f954387dbb3bb4c8193378dbdc0\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item\"
         href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b9ec4f6ba2b09e843a05b0287118377f\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item\"
         href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php/sell/catalog/products/new?token=98790f954387dbb3bb4c8193378dbdc0\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item\"
         href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9daf702301c79ec6ca35a34bea7f7adb\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item\"
         href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminModules&amp;&amp;configure=tbcmsblog&amp;token=e4611037261eb818dcbede859c0d8a14\"
                 data-item=\"TemplateBeta Settings\"
      >TemplateBeta Settings</a>
          <a class=\"dropdown-item\"
         href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php/improve/modules/manage?token=98790f954387dbb3bb4c8193378dbdc0\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item\"
         href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminOrders&amp;token=8b44cb68db9aa36f30be5ca0dc68123f\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"118\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes\"
        data-post-link=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminQuickAccesses&token=9951528f9d7fef1f9991426d79438996\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Szablony - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj bieżącą stronę do zakładki
      </a>
        <a class=\"dropdown-item\" href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminQuickAccesses&token=9951528f9d7fef1f9991426d79438996\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj szybkim dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/g5t0nlm1qfl0mbyz/index.php?controller=AdminSearch&amp;token=0b38df2f87c9ea5f3cf250d7f037d846\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, SKU, odniesienie...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nazwisko...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Twój sklep jest w trybie konserwacji.</strong></p><p class='text-left'>Odwiedzający i klienci nie mają dostępu do sklepu, kiedy jest on w trybie konserwacji.&lt;br /&gt; Aby zarządzać ustawieniami konserwacji, przejdź do zakładki Preferencje &amp;gt; Przerwa techniczna.</p>\" href=\"/g5t0nlm1qfl0mbyz/index.php/configure/shop/maintenance/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\"
          >
            <i class=\"material-icons\">build</i>
            <span>Przerwa techniczna</span>
          </a>
        </div>
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://ekofajni.pl/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Zobacz sklep
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdzałeś ostatnio współczynnik konwersji?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy wysłałeś ostatnio jakiekolwiek pozyskujące e-maile?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/biuro%40magwebstudio.pl.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie Site</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/g5t0nlm1qfl0mbyz/index.php/configure/advanced/employees/1/edit?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\">
      <i class=\"material-icons\">settings</i>
      Twój profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\"><i class=\"material-icons\">book</i> Materiały</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminLogin&amp;logout=1&amp;token=a3246fae3485a7bedcab770b111b38c0\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/g5t0nlm1qfl0mbyz/index.php/configure/advanced/employees/toggle-navigation?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminDashboard&amp;token=7887e1a6c2eddec9d259c7c2291130eb\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sprzedaż</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminOrders&amp;token=8b44cb68db9aa36f30be5ca0dc68123f\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Zamówienia
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminOrders&amp;token=8b44cb68db9aa36f30be5ca0dc68123f\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/sell/orders/invoices/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Faktury
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminSlip&amp;token=0d7e6ab4a19370e9c66551c7a66ec8aa\" class=\"link\"> Druki kredytowe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/sell/orders/delivery-slips/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Druk wysyłki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminCarts&amp;token=b45fc33337f59a31b8110c0331bc409c\" class=\"link\"> Koszyki zakupowe
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/g5t0nlm1qfl0mbyz/index.php/sell/catalog/products?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Katalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/sell/catalog/products?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/sell/catalog/categories?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Kategorie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminTracking&amp;token=4b66008ba697ecac950f35779b2b5ba2\" class=\"link\"> Monitorowanie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminAttributesGroups&amp;token=f8168b14b0827d0548e0f7cc1e310466\" class=\"link\"> Atrybuty &amp; Cechy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/sell/catalog/brands/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Marki &amp; Dostawcy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminAttachments&amp;token=4c8f4bf4d79e9d4786036deda5671586\" class=\"link\"> Pliki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminCartRules&amp;token=b9ec4f6ba2b09e843a05b0287118377f\" class=\"link\"> Rabaty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/sell/stocks/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/g5t0nlm1qfl0mbyz/index.php/sell/customers/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Klienci
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/sell/customers/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminAddresses&amp;token=31b66eeee317575dcb17dbd3f099ded5\" class=\"link\"> Adresy
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminCustomerThreads&amp;token=b5fc8231fb93f8ae5ff5a788027b0851\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Obsługa klienta
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminCustomerThreads&amp;token=b5fc8231fb93f8ae5ff5a788027b0851\" class=\"link\"> Obsługa klienta
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminOrderMessage&amp;token=8992cab47bbc654ec13be4b4337cb0f0\" class=\"link\"> Wiadomości zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminReturn&amp;token=0430bbabf4d1d07aee189d4f8ed79cb8\" class=\"link\"> Zwroty produktów
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminStats&amp;token=9daf702301c79ec6ca35a34bea7f7adb\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statystyki
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Ulepszenia</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/modules/manage?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Moduły
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/modules/manage?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/modules/addons/modules/catalog?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/design/themes/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Wygląd
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"168\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/design/themes/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Szablony
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/modules/addons/themes/catalog?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/design/mail_theme/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Szablon maila
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/design/cms-pages/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Strony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/design/modules/positions/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Pozycje
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminImages&amp;token=723b65ebc639c73cb938526f8d3976f4\" class=\"link\"> Zdjęcia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/modules/link-widget/list?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminCarriers&amp;token=603e96cbd305604c72086f6aef703209\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Wysyłka
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminCarriers&amp;token=603e96cbd305604c72086f6aef703209\" class=\"link\"> Przewoźnicy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/shipping/preferences?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/payment/payment_methods?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Płatność
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/payment/payment_methods?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Płatności
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/payment/preferences?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/international/localization/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Międzynarodowy
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/international/localization/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Lokalizacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminZones&amp;token=9c936100f0f650c040af2d7583564130\" class=\"link\"> Położenie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/international/taxes/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Podatki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/international/translations/settings?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Tłumaczenia
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                  <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminEmarketing&amp;token=cf2517182fb6d40bde5fee4753a7223d\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"139\" id=\"subtab-Adminxprtdashboard\">
                  <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmspost&amp;token=ae9cd3bab2ff8afdc51927e65271745d\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    TemplateBeta Blog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-139\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"140\" id=\"subtab-Admintbcmspost\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmspost&amp;token=ae9cd3bab2ff8afdc51927e65271745d\" class=\"link\"> Blog Posts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"141\" id=\"subtab-Admintbcmscategory\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmscategory&amp;token=4ef8e424360aad0e82e87be54a555c0b\" class=\"link\"> Blog Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"142\" id=\"subtab-Admintbcmscomment\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmscomment&amp;token=7b70e45533ae076ff5b54ef89a113107\" class=\"link\"> Blog Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"143\" id=\"subtab-Admintbcmsimagetype\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsimagetype&amp;token=cd09373c0bae16d0683f353321b4a24b\" class=\"link\"> Blog Image Type
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Konfiguruj</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/shop/preferences/preferences?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Preferencje
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/shop/preferences/preferences?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Ogólny
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/shop/order-preferences/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/shop/product-preferences/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/shop/customer-preferences/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/shop/contacts/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Kontakt
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/shop/seo-urls/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Ruch
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminSearchConf&amp;token=14954b83b2b82cb74329f343b45d37dd\" class=\"link\"> Szukaj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminGamification&amp;token=5508a63ba4fedb4f0108dbdb727e0a7b\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/advanced/system-information/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Zaawansowane
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/advanced/system-information/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Informacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/advanced/performance/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Wydajność
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/advanced/administration/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Administracja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/advanced/emails/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Adres e-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/advanced/import/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Importuj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/advanced/employees/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Zespół
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/advanced/sql-requests/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Baza danych
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/advanced/logs/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> Logi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/g5t0nlm1qfl0mbyz/index.php/configure/advanced/webservice-keys/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" class=\"link\"> API
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"144\" id=\"tab-AdminTemplateBeta\">
              <span class=\"title\">TemplateBeta Extension</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"145\" id=\"subtab-AdminTemplateBetaModules\">
                  <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsblogdisplayposts&amp;token=0990c7f419f6c8bf1479420e81d14dd0\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    TemplateBeta Configure
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-145\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"146\" id=\"subtab-Admintbcmsblogdisplayposts\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsblogdisplayposts&amp;token=0990c7f419f6c8bf1479420e81d14dd0\" class=\"link\"> Blog on Home Page
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"147\" id=\"subtab-Admintbcmsbrandlist\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsbrandlist&amp;token=1a11dc73f7d966ba4e38e241a071d099\" class=\"link\"> Brand List
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"148\" id=\"subtab-Admintbcmscookiesnotice\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmscookiesnotice&amp;token=f3fc5b97bd823a2f8c5fdb4505099ee7\" class=\"link\"> Cookies Text
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"150\" id=\"subtab-Admintbcmsfootercategory\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsfootercategory&amp;token=a730c25db2871f6218ce555cd788c2db\" class=\"link\"> Footer Cateogry
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"151\" id=\"subtab-Admintbcmsinfinitescroll\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsinfinitescroll&amp;token=73512651a8cac3f8a4333276a9ead794\" class=\"link\"> Infinite Scroll
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"152\" id=\"subtab-Admintbcmsnewsletterpopup\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsnewsletterpopup&amp;token=88caf6281fc034007014d62e40e5be88\" class=\"link\"> Newsletter Popup
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"153\" id=\"subtab-Admintbcmspaymenticon\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmspaymenticon&amp;token=660c4b40d80b333979b4b77827d98418\" class=\"link\"> Payment Icon
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"154\" id=\"subtab-Admintbcmsproductcomments\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsproductcomments&amp;token=f9cdf4831b3cb4726f8b724c92dbb52f\" class=\"link\"> Product Comment
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"155\" id=\"subtab-Admintbcmsrightsideofferbanner\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsrightsideofferbanner&amp;token=4c8f82aa4d29bff910978e567c42f9b7\" class=\"link\"> Right Side Offer Banner
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"156\" id=\"subtab-Admintbcmssingleblock\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmssingleblock&amp;token=439fbe51d870ccacff32a54d404ce7b9\" class=\"link\"> Single Block
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-Admintbcmsslider\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsslider&amp;token=3dfb3f4aeabd790b53c446eeba668a61\" class=\"link\"> Main Slider
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"158\" id=\"subtab-Admintbcmsstockinfo\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsstockinfo&amp;token=60d7623d53d15b584d952675bec4e806\" class=\"link\"> Stock Indicator
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"159\" id=\"subtab-Admintbcmstabproducts\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmstabproducts&amp;token=ea855facd5aa3bc2abb2861001dfa75d\" class=\"link\"> Tab Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"160\" id=\"subtab-Admintbcmstestimonial\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmstestimonial&amp;token=b29cef7a307c23ca983030275bc21c29\" class=\"link\"> Testimonial
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"161\" id=\"subtab-Admintbcmswishlist\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmswishlist&amp;token=da5f4a154228b32dbbff0cf5d7a0ee2c\" class=\"link\"> Customer&#039;s Wishlist
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"162\" id=\"subtab-Admintbcmstwoofferbanner\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmstwoofferbanner&amp;token=3345a47adaf70e7e8ffd7bd5a83af701\" class=\"link\"> Two Offer Banner
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"163\" id=\"subtab-Admintbcmscategoryslider\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmscategoryslider&amp;token=39674de95df568fab3a6f088ad697067\" class=\"link\"> Category Slider
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"164\" id=\"subtab-Admintbcmscustomerservices\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmscustomerservices&amp;token=55a174da67c5cd6e5c24e2ea2ca41aa5\" class=\"link\"> Customer Services
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"165\" id=\"subtab-Admintbcmsfooterlogo\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsfooterlogo&amp;token=9a6e089b683eba688671e0956b813d40\" class=\"link\"> Footer Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"166\" id=\"subtab-Admintbcmsinstagramslider\">
                              <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmsinstagramslider&amp;token=b32d9db2c59f4f04ac271441623bd47b\" class=\"link\"> Instagram Photos
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"149\" id=\"subtab-Admintbcmscustomsetting\">
                  <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=Admintbcmscustomsetting&amp;token=5e1f7074ea84c3bc768b810e66527bea\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Custom Setting
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Szablony</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Szablony &gt; Szablon          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/g5t0nlm1qfl0mbyz/index.php/improve/design/themes/import?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\"                  title=\"Dodaj Szablon\"                >
                  <i class=\"material-icons\">add</i>                  Dodaj Szablon
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/g5t0nlm1qfl0mbyz/index.php/improve/design/themes/export?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\"                  title=\"Eksportuj obecny szablon\"                >
                  <i class=\"material-icons\">cloud_download</i>                  Eksportuj obecny szablon
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/g5t0nlm1qfl0mbyz/index.php/improve/modules/catalog?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\"                title=\"Rekomendowane moduły\"
                              >
                Rekomendowane moduły
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/g5t0nlm1qfl0mbyz/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminThemes%253Fversion%253D1.7.6.5%2526country%253Dpl/Pomoc?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li class=\"nav-item\">
                    <a href=\"/g5t0nlm1qfl0mbyz/index.php/improve/design/themes/?_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"53\">
                      Szablony
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminPsThemeCustoConfiguration&token=3ebca31461b42a36da81848c81411f87\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"169\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminPsThemeCustoAdvanced&token=ada2b7e27f06a5957f635c55dcac1d19\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"170\">
                      Advanced Customization
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
    </div>
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Zalecane moduły i usługi',
        'Close': 'Zamknij',
      },
      recommendedModulesUrl: '/g5t0nlm1qfl0mbyz/index.php/modules/addons/modules/recommended?tabClassName=AdminThemes&_token=nz12eVcLf_sHSHLybsjFOK2OrudDVNYW_yNb4KggOEw',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1423
        $this->displayBlock('content_header', $context, $blocks);
        // line 1424
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1425
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1426
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1427
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"https://ekofajni.pl/g5t0nlm1qfl0mbyz/index.php?controller=AdminDashboard&amp;token=7887e1a6c2eddec9d259c7c2291130eb\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=biuro%40magwebstudio.pl&amp;firstname=Site&amp;lastname=Owner&amp;website=http%3A%2F%2Fekofajni.pl%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/g5t0nlm1qfl0mbyz/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Połącz swój sklep z rynkiem PrestaShop, żeby automatycznie importować wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj siłę PrestaShop Addons! Przeglądaj Oficjalny Rynek PrestaShop i znajdź ponad 3500 innowacyjnych modułów i szablonów, które optymalizują stopnie konwersji, zwiększają ruch, budują lojalność klientów i zwiększają Twoją produktywność</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Połącz się z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=biuro%40magwebstudio.pl&amp;firstname=Site&amp;lastname=Owner&amp;website=http%3A%2F%2Fekofajni.pl%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtwórz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj się
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1534
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 109
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1423
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1424
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1425
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1426
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1534
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__d7616bc68184128a18ccc9c87419c5c447edbccb467c88c3cf59dd4ed4cb1507";
    }

    public function getDebugInfo()
    {
        return array (  1624 => 1534,  1619 => 1426,  1614 => 1425,  1609 => 1424,  1604 => 1423,  1595 => 109,  1587 => 1534,  1478 => 1427,  1475 => 1426,  1472 => 1425,  1469 => 1424,  1467 => 1423,  149 => 109,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d7616bc68184128a18ccc9c87419c5c447edbccb467c88c3cf59dd4ed4cb1507", "");
    }
}
