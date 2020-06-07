<?php
/**
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
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once('classes/tbcmscategoryslider_image_upload.class.php');
include_once('classes/tbcmscategoryslider_status.class.php');

class TbcmsCategorySlider extends Module
{
    private $html = '';
    private $category_list = array();
    private $admin_obj = '';
    public $id_shop_group = '';
    public $id_shop = '';
    public function __construct()
    {
        $this->name = 'tbcmscategoryslider';
        $this->tab = 'front_office_features';
        $this->version = '2.1.9';
        $this->author = 'TemplateBeta';
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;

        parent::__construct();
        $this->displayName = $this->l('TemplateBeta - Categroy Slider');
        $this->description = $this->l('Display Category Slider in Front Side');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->module_key = '';

        $this->confirmUninstall = $this->l('Warning: all the data saved in your database will be deleted.'
            .' Are you sure you want uninstall this module?');
        
        $this->id_shop_group = (int)Shop::getContextShopGroupID();
        $this->id_shop = (int)Context::getContext()->shop->id;
    }
    
    public function install()
    {
        $this->createDefaultData();
        $this->installTab();
        return parent::install()
            && $this->registerHook('displayBackOfficeHeader')
            && $this->registerHook('displayHeader')
            && $this->registerHook('displayHome');
            // && $this->registerHook('displayLeftColumn');
            // && $this->registerHook('displayNavFullWidth');
    }

    public function installTab()
    {
        $response = true;

        // First check for parent tab
        $parentTabID = Tab::getIdFromClassName('AdminTemplateBeta');

        if ($parentTabID) {
            $parentTab = new Tab($parentTabID);
        } else {
            $parentTab = new Tab();
            $parentTab->active = 1;
            $parentTab->name = array();
            $parentTab->class_name = "AdminTemplateBeta";
            foreach (Language::getLanguages() as $lang) {
                $parentTab->name[$lang['id_lang']] = "TemplateBeta Extension";
            }
            $parentTab->id_parent = 0;
            $parentTab->module = $this->name;
            $response &= $parentTab->add();
        }
        
        // Check for parent tab2
        $parentTab_2ID = Tab::getIdFromClassName('AdminTemplateBetaModules');
        if ($parentTab_2ID) {
            $parentTab_2 = new Tab($parentTab_2ID);
        } else {
            $parentTab_2 = new Tab();
            $parentTab_2->active = 1;
            $parentTab_2->name = array();
            $parentTab_2->class_name = "AdminTemplateBetaModules";
            foreach (Language::getLanguages() as $lang) {
                $parentTab_2->name[$lang['id_lang']] = "TemplateBeta Configure";
            }
            $parentTab_2->id_parent = $parentTab->id;
            $parentTab_2->module = $this->name;
            $response &= $parentTab_2->add();
        }
        // Created tab
        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = 'Admin'.$this->name;
        $tab->name = array();
        foreach (Language::getLanguages() as $lang) {
            $tab->name[$lang['id_lang']] = "Category Slider";
        }
        $tab->id_parent = $parentTab_2->id;
        $tab->module = $this->name;
        $response &= $tab->add();

        return $response;
    }

    // Store Default Data Such As CreateVariable, CreateTable & Insert Data
    public function createDefaultData()
    {
        $num_of_data = 8;
        $this->createVariable();
        $this->createTable();
        $this->insertSmapleData($num_of_data);
    }

    // Create Default Variable form Frist Form
    public function createVariable()
    {
        $result = array();
        $languages = Language::getLanguages();

        foreach ($languages as $lang) {
            $result['TBCMSCATEGORY_SLIDER_TITLE'][$lang['id_lang']] = 'Top Category';
            $result['TBCMSCATEGORY_SLIDER_SUB_DESCRIPTION'][$lang['id_lang']] = 'This is Show Short Description';
            $result['TBCMSCATEGORY_SLIDER_DESCRIPTION'][$lang['id_lang']] = 'Description';
            $result['TBCMSCATEGORY_SLIDER_IMG'][$lang['id_lang']] = 'demo_title.jpg';
        }
        $tmp = $result['TBCMSCATEGORY_SLIDER_TITLE'];
        Configuration::updateValue('TBCMSCATEGORY_SLIDER_TITLE', $tmp);
        $tmp = $result['TBCMSCATEGORY_SLIDER_SUB_DESCRIPTION'];
        Configuration::updateValue('TBCMSCATEGORY_SLIDER_SUB_DESCRIPTION', $tmp);
        $tmp = $result['TBCMSCATEGORY_SLIDER_DESCRIPTION'];
        Configuration::updateValue('TBCMSCATEGORY_SLIDER_DESCRIPTION', $tmp);
        $tmp = $result['TBCMSCATEGORY_SLIDER_IMG'];
        Configuration::updateValue('TBCMSCATEGORY_SLIDER_IMG', $tmp);
    }

    // Create Table For Second Form
    

    // Insert Semple Data Form Second Form
    public function createTable()
    {
        $create_table = array();
        $create_table[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'tbcmscategory_slider` (
                        `id_tbcmscategory_slider` int(11) AUTO_INCREMENT PRIMARY KEY,
                        `id_category` int(11),
                        `id_shop_group` int(11),
                        `id_shop` int(11),
                        `position` int(11),
                        `image` VARCHAR(100),
                        `status` varchar(3)
                    ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

        $create_table[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'tbcmscategory_slider_lang` (
                        `id_tbcmscategory_slider_lang` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        `id_tbcmscategory_slider` INT NOT NULL,
                        `id_category` INT,
                        `id_shop_group` int(11),
                        `id_shop` int(11),
                        `id_lang` INT NOT NULL,
                        `title` VARCHAR(255),
                        `short_description` TEXT
                    ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

        foreach ($create_table as $table) {
            Db::getInstance()->execute($table);
        }
    }

    // Insert Semple Data Form Second Form
    public function insertSmapleData($num_of_data)
    {
        $data = array();
        $cat_key = 0;
        $category = $this->getAllCategory();
        for ($i=1; $i<=6; $i++) {
            $data[] = 'INSERT INTO `'._DB_PREFIX_.'tbcmscategory_slider`
                        SET 
                            id_tbcmscategory_slider = \''.$i.'\',
                            id_category = \''.$category[$cat_key]['id_category'].'\',
                            `id_shop_group` = '.$this->id_shop_group.',
                            `id_shop` = '.$this->id_shop.',
                            image = \'demo_img_'.$i.'.png\',
                            status = \'1\'';

            $languages = Language::getLanguages();
            foreach ($languages as $lang) {
                $data[] = 'INSERT INTO `'._DB_PREFIX_.'tbcmscategory_slider_lang`
                        SET 
                            id_tbcmscategory_slider_lang = NULL,
                            id_tbcmscategory_slider = \''.$i.'\',
                            id_category = \''.$category[$cat_key]['id_category'].'\',
                            `id_shop_group` = '.$this->id_shop_group.',
                            `id_shop` = '.$this->id_shop.',
                            id_lang = \''.$lang['id_lang'].'\',
                            title = \'Title '.$i.'\',
                            short_description = \'Short Description'.$i.'\'';
            }
            $cat_key++;
        }

        $cat_key = 0;
        $category = $this->getAllCategory();
        for ($i=$i; $i<=$num_of_data; $i++) {
            $data[] = 'INSERT INTO `'._DB_PREFIX_.'tbcmscategory_slider`
                        SET 
                            id_tbcmscategory_slider = \''.$i.'\',
                            id_category = \''.$category[$cat_key]['id_category'].'\',
                            `id_shop_group` = '.$this->id_shop_group.',
                            `id_shop` = '.$this->id_shop.',
                            image = \'demo_img_'.$i.'.png\',
                            status = \'1\'';

            $languages = Language::getLanguages();
            foreach ($languages as $lang) {
                $data[] = 'INSERT INTO `'._DB_PREFIX_.'tbcmscategory_slider_lang`
                        SET 
                            id_tbcmscategory_slider_lang = NULL,
                            id_tbcmscategory_slider = \''.$i.'\',
                            id_category = \''.$category[$cat_key]['id_category'].'\',
                            `id_shop_group` = '.$this->id_shop_group.',
                            `id_shop` = '.$this->id_shop.',
                            id_lang = \''.$lang['id_lang'].'\',
                            title = \'Title '.$i.'\',
                            short_description = \'Short Description'.$i.'\'';
            }
            $cat_key++;
        }

        foreach ($data as $query) {
            Db::getInstance()->execute($query);
        }
    }

    public function maxId()
    {
        $select_data = 'SELECT MAX(id_tbcmscategory_slider) as max_id FROM `'._DB_PREFIX_.'tbcmscategory_slider`';
        $ans = Db::getInstance()->executeS($select_data);
        return $ans[0]['max_id'];
    }

    // Select All Category id From Table
    public function selectAllIdFromTable()
    {
        $select_data = 'SELECT MAX(id_tbcmscategory_slider) as max_id FROM `'._DB_PREFIX_.'tbcmscategory_slider`'
            .' WHERE `id_shop_group` = '.$this->id_shop_group.' AND `id_shop` = '.$this->id_shop.';';

        $ans = Db::getInstance()->executeS($select_data);
        $final_ans = array();
        foreach ($ans as $a) {
            $final_ans[] = $a['id_tbcmscategory_slider'];
        }
        return $final_ans;
    }


    // Select All Language By id From Table
    public function selectAllLangIdById($id_tbcmscategory_slider)
    {
        $select_data = 'SELECT 
                            id_lang 
                        FROM 
                            `'._DB_PREFIX_.'tbcmscategory_slider_lang` 
                        WHERE 
                            `id_shop_group` = '.$this->id_shop_group.'
                            AND `id_shop` = '.$this->id_shop.'
                            AND id_tbcmscategory_slider = '.$id_tbcmscategory_slider;
        $ans = Db::getInstance()->executeS($select_data);
        $return = array();
        foreach ($ans as $a) {
            $return[] = $a['id_lang'];
        }
        return $return;
    }

    // Insert & Update Data Which Customer Add.
    public function insertData($data)
    {
        $insert_data = array();
        if ($data['id']) {
            $id = $data['id'];
            $insert_data[] = 'UPDATE `'._DB_PREFIX_.'tbcmscategory_slider`
                        SET 
                            id_category = \''.$data['id_category'].'\',
                            image = \''.$data['image'].'\',
                            status = \''.$data['status'].'\'
                        WHERE
                            `id_shop_group` = '.$this->id_shop_group.'
                            AND `id_shop` = '.$this->id_shop.'
                            AND `id_tbcmscategory_slider` = '.$id.';';


            $result = $this->selectAllLangIdById($id);

            $languages = Language::getLanguages();
            foreach ($languages as $lang) {
                if (in_array($lang['id_lang'], $result)) {
                    $insert_data[] = 'UPDATE `'._DB_PREFIX_.'tbcmscategory_slider_lang`
                            SET 
                                id_category = \''.$data['id_category'].'\',
                                id_lang = \''.$lang['id_lang'].'\',
                                title = \''.$data['lang_info'][$lang['id_lang']]['custom_title'].'\',
                                short_description = \''.$data['lang_info'][$lang['id_lang']]['short_description'].'\'
                            WHERE
                                    `id_shop_group` = '.$this->id_shop_group.'
                                AND 
                                    `id_shop` = '.$this->id_shop.'
                                AND
                                    `id_tbcmscategory_slider` = '.$id.'
                                AND
                                    `id_lang` = '.$lang['id_lang'].';';
                } else {
                    $insert_data[] = 'INSERT INTO `'._DB_PREFIX_.'tbcmscategory_slider_lang`
                        SET 
                            id_tbcmscategory_slider_lang = NULL,
                            id_tbcmscategory_slider = '.$id.',
                            id_category = \''.$data['id_category'].'\',
                            `id_shop_group` = '.$this->id_shop_group.',
                            `id_shop` = '.$this->id_shop.',
                            id_lang = \''.$lang['id_lang'].'\',
                            title = \''.$data['lang_info'][$lang['id_lang']]['custom_title'].'\',
                            short_description = \''.$data['lang_info'][$lang['id_lang']]['short_description'].'\';';
                }
            }
        } else {
            $max_id = $this->maxId();
            $new_id = $max_id+1;

            $insert_data[] = 'INSERT INTO `'._DB_PREFIX_.'tbcmscategory_slider`
                        SET 
                            id_tbcmscategory_slider = '.$new_id.',
                            id_category = \''.$data['id_category'].'\',
                            position = '.$new_id.',
                            `id_shop_group` = '.$this->id_shop_group.',
                            `id_shop` = '.$this->id_shop.',
                            image = \''.$data['image'].'\',
                            status = \''.$data['status'].'\';';

            $languages = Language::getLanguages();
            foreach ($languages as $lang) {
                $insert_data[] = 'INSERT INTO `'._DB_PREFIX_.'tbcmscategory_slider_lang`
                        SET 
                            id_tbcmscategory_slider_lang = NULL,
                            id_tbcmscategory_slider = '.$new_id.',
                            id_category = \''.$data['id_category'].'\',
                            `id_shop_group` = '.$this->id_shop_group.',
                            `id_shop` = '.$this->id_shop.',
                            id_lang = \''.$lang['id_lang'].'\',
                            title = \''.$data['lang_info'][$lang['id_lang']]['custom_title'].'\',
                            short_description = \''.$data['lang_info'][$lang['id_lang']]['short_description'].'\';';
            }
        }


        foreach ($insert_data as $data) {
            Db::getInstance()->execute($data);
        }
    }


    // Get all Category Which Key is Id And Value is Category Name
    public function getAllCategory()
    {
        $category = Category::getAllCategoriesName();
        $all_category_id = array();
        $i = 0;
        unset($category[0]);
        unset($category[1]);
        foreach ($category as $cat) {
            $all_category_id[$i]['id_category'] = $cat['id_category'];
            $all_category_id[$i]['name'] = $cat['name'];
            $i++;
        }
        return $all_category_id;
    }

    // Show Admin Data in Table
    public function showAdminData()
    {
        $result = array();
        $return_data = array();
        $default_lang_id = $this->context->language->id;

        $select_data = 'SELECT * FROM `'._DB_PREFIX_.'tbcmscategory_slider`'
            .' WHERE `id_shop_group` = '.$this->id_shop_group.' AND `id_shop` = '.$this->id_shop
            .' ORDER BY `position`;';

        $result['tbcmscategory_slider'] = Db::getInstance()->executeS($select_data);

        $select_data = 'SELECT * FROM `'._DB_PREFIX_.'tbcmscategory_slider_lang`'
            .' WHERE `id_shop_group` = '.$this->id_shop_group.' AND `id_shop` = '.$this->id_shop.';';

        $result['tbcmscategory_slider_lang'] = Db::getInstance()->executeS($select_data);

        foreach ($result['tbcmscategory_slider'] as $key => $data) {
            $return_data[$key]['id'] = $data['id_tbcmscategory_slider'];
            $id = $data['id_tbcmscategory_slider'];

            foreach ($result['tbcmscategory_slider_lang'] as $lang) {
                if ($default_lang_id == $lang['id_lang'] && $id == $lang['id_tbcmscategory_slider']) {
                    // $lang_id = $lang['id_lang'];
                    $return_data[$key]['id_lang'] = $lang['id_lang'];
                    $return_data[$key]['title'] = $lang['title'];
                    $return_data[$key]['short_description'] = $lang['short_description'];
                }
            }

            $return_data[$key]['id_category'] = $data['id_category'];
            $return_data[$key]['image'] = $data['image'];
            $return_data[$key]['status'] = $data['status'];
        }

        return $return_data;
    }

    // Show Front Side Data
    public function showData($id = null)
    {
        $result = array();
        $return_data = array();

        $select_data = '';
        $select_data .= 'SELECT * FROM `'._DB_PREFIX_.'tbcmscategory_slider` 
                WHERE 
                `id_shop_group` = '.$this->id_shop_group
                .' AND `id_shop` = '.$this->id_shop;
        if ($id) {
            $select_data .= ' AND `id_tbcmscategory_slider` = '.$id;
        } else {
            $select_data .= ' ORDER BY `position`';
        }



        $result['tbcmscategory_slider'] = Db::getInstance()->executeS($select_data);

        $select_data = '';
        $select_data .= 'SELECT * FROM `'._DB_PREFIX_.'tbcmscategory_slider_lang`'
            .' WHERE `id_shop_group` = '.$this->id_shop_group.' AND `id_shop` = '.$this->id_shop;
        if ($id) {
            $select_data .= ' AND id_tbcmscategory_slider = '.$id;
        }

        $result['tbcmscategory_slider_lang'] = Db::getInstance()->executeS($select_data);

        foreach ($result['tbcmscategory_slider'] as $key => $data) {
            $return_data[$key]['id'] = $data['id_tbcmscategory_slider'];
            $id = $data['id_tbcmscategory_slider'];
            foreach ($result['tbcmscategory_slider_lang'] as $lang) {
                // $lang_id = $lang['id_lang'];
                if ($data['id_tbcmscategory_slider'] == $lang['id_tbcmscategory_slider']) {
                    $return_data[$key]['lang_info'][$lang['id_lang']]['id_lang'] = $lang['id_lang'];
                    $return_data[$key]['lang_info'][$lang['id_lang']]['title'] = $lang['title'];
                    $return_data[$key]['lang_info'][$lang['id_lang']]['short_description'] = $lang['short_description'];
                }
            }

            $return_data[$key]['id_category'] = $data['id_category'];
            $return_data[$key]['image'] = $data['image'];
            $return_data[$key]['status'] = $data['status'];
        }
        return $return_data;
    }

    public function showFrontData()
    {
        $cookie = Context::getContext()->cookie;
        $id_lang = $cookie->id_lang;

        $select_data = '
            SELECT 
                mainTable.id_tbcmscategory_slider AS code,
                mainTable.id_category,
                mainTable.image,
                subTable.title,
                subTable.short_description
            FROM 
                `'._DB_PREFIX_.'tbcmscategory_slider` mainTable
            LEFT JOIN
                '._DB_PREFIX_.'tbcmscategory_slider_lang subTable
            ON
                mainTable.id_tbcmscategory_slider = subTable.id_tbcmscategory_slider
            WHERE 
                mainTable.id_shop_group = '.$this->id_shop_group.' 
            AND 
                mainTable.id_shop = '.$this->id_shop.'
            AND 
                mainTable.status = 1
            AND
                subTable.id_lang = '.$id_lang.'
            ORDER BY `position`';
      
        $result = Db::getInstance()->executeS($select_data);

        return $result;
    }

    public function getAllCategoryByIdsKey()
    {
        $category = Category::getAllCategoriesName();
        $all_category_id = array();
        foreach ($category as $cat) {
            $all_category_id[$cat['id_category']] = $cat['name'];
        }

        return $all_category_id;
    }


    public function uninstall()
    {
        $this->uninstallTab();
        $this->deleteVariable();
        $this->deleteTable();
        return parent::uninstall();
    }
    
    // Delete All Variable of Frist Form
    public function deleteVariable()
    {
        Configuration::deleteByName('TBCMSCATEGORY_SLIDER_TITLE');
        Configuration::deleteByName('TBCMSCATEGORY_SLIDER_SUB_DESCRIPTION');
        Configuration::deleteByName('TBCMSCATEGORY_SLIDER_DESCRIPTION');
        Configuration::deleteByName('TBCMSCATEGORY_SLIDER_IMG');
    }

    // Delete Record by id Form Table
    public function removeRecord($id)
    {
        $this->removeImage($id);

        $delete_data = array();
        $delete_data[] = 'DELETE FROM `'._DB_PREFIX_.'tbcmscategory_slider`
            WHERE 
                    `id_shop_group` = '.$this->id_shop_group.'
                AND 
                    `id_shop` = '.$this->id_shop.' 
                AND 
                    `id_tbcmscategory_slider` = '.$id;


        $delete_data[] = 'DELETE FROM `'._DB_PREFIX_.'tbcmscategory_slider_lang` 
            WHERE 
                    `id_shop_group` = '.$this->id_shop_group.'
                AND 
                    `id_shop` = '.$this->id_shop.' 
                AND 
                    id_tbcmscategory_slider = '.$id;

        foreach ($delete_data as $data) {
            Db::getInstance()->execute($data);
        }
    }

    // Delete All table
    public function deleteTable()
    {
        $delete_table = array();
        $delete_table[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'tbcmscategory_slider`';
        $delete_table[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'tbcmscategory_slider_lang`';

        foreach ($delete_table as $table) {
            Db::getInstance()->execute($table);
        }
    }

    public function uninstallTab()
    {
        $id_tab = Tab::getIdFromClassName('Admin'.$this->name);
        $tab = new Tab($id_tab);
        $tab->delete();
        return true;
    }

    public function removeImage($id)
    {
        $remove_images = array();
        $result = $this->showData($id);

        $remove_images[] = $result[0]['image'];

        foreach ($remove_images as $image) {
            // Match Pattern Which image you Don't want to delete.
            $res = preg_match('/^demo_img_.*$/', $image);
            if (file_exists(dirname(__FILE__).'./views/img/'.$image)
                && $res != '1') {
                unlink(dirname(__FILE__).'./views/img/'.$image);
            }
        }
    }

    public function getContent()
    {
        $languages = Language::getLanguages();
        $message = '';
        $result = array();
        if (Tools::getValue('action')) {
            $action = Tools::getValue('action');
            $id = Tools::getValue('id');
            if ($action == 'remove') {
                // remove record
                $this->removeRecord($id);

                $message .= $this->displayConfirmation($this->l("Record is Deleted."));
            }
        }

        if (Tools::isSubmit('submitTbcmsCategoryForm')) {
            $old_file = '';
            $no_image_selected = false;
            $result['id'] = '';
            if (Tools::getValue('id')) {
                $id = Tools::getValue('id');
                $result['id'] = $id;
                $data = $this->showData($id);
                $old_file = $data[0]['image'];
            }

            $tbcms_obj = new TbcmsCategorySliderStatus();
            $show_fields = $tbcms_obj->fieldStatusInformation();

            $result['image'] = '';
            if ($show_fields['image']) {
                $this->obj_image = new TbcmsCategorySliderImageUpload();
                if (!empty($_FILES['image']['name'])) {
                    $new_file = $_FILES['image'];
                    $ans = $this->obj_image->imageUploading($new_file, $old_file);
                    if ($ans['success']) {
                        $result['image'] = $ans['name'];
                    } else {
                        $message .= $ans['error'];
                        $result['image'] = $old_file;
                        if (!Tools::getValue('id')) {
                            $no_image_selected = true;
                        }
                    }
                } else {
                    $result['image'] = $old_file;
                    if (!Tools::getValue('id')) {
                        $message .= $this->displayError($this->l("Please Select Image."));
                        $no_image_selected = true;
                    }
                }
            }

            if (!$no_image_selected) {
                foreach ($languages as $lang) {
                    $tmp = Tools::getValue('custom_title_'.$lang['id_lang']);
                    $result['lang_info'][$lang['id_lang']]['custom_title'] = $tmp;
                    $tmp = Tools::getValue('short_description_'.$lang['id_lang']);
                    $result['lang_info'][$lang['id_lang']]['short_description'] = addslashes($tmp);
                }

                $result['id_category'] = Tools::getValue('id_category');
                $result['status'] = Tools::getValue('status');
                
                $this->insertData($result);
                $this->clearCustomSmartyCache('tbcmscategoryslider_display_home.tpl');

                if (Tools::getValue('id')) {
                    $message .= $this->displayConfirmation($this->l("Record is Updated."));
                } else {
                    $message .= $this->displayConfirmation($this->l("Record is Inserted."));
                }
            }
        }

        if (Tools::isSubmit('submitTbcmsCategoryTitle')) {
            foreach ($languages as $lang) {
                $this->obj_image = new TbcmsCategorySliderImageUpload();
                if (!empty($_FILES['TBCMSCATEGORY_SLIDER_IMG_'.$lang['id_lang']]['name'])) {
                    $old_file = Configuration::get('TBCMSCATEGORY_SLIDER_IMG', $lang['id_lang']);
                    $new_file = $_FILES['TBCMSCATEGORY_SLIDER_IMG_'.$lang['id_lang']];
                    $ans = $this->obj_image->imageUploading($new_file, $old_file);
                    if ($ans['success']) {
                        $result['TBCMSCATEGORY_SLIDER_IMG'][$lang['id_lang']] = $ans['name'];
                    } else {
                        $message .= $ans['error'];
                        $result['TBCMSCATEGORY_SLIDER_IMG'][$lang['id_lang']] = $old_file;
                    }
                } else {
                    $old_file = Configuration::get('TBCMSCATEGORY_SLIDER_IMG', $lang['id_lang']);
                    $result['TBCMSCATEGORY_SLIDER_IMG'][$lang['id_lang']] = $old_file;
                }

                $tmp = Tools::getValue('TBCMSCATEGORY_SLIDER_TITLE_'.$lang['id_lang']);
                $result['TBCMSCATEGORY_SLIDER_TITLE'][$lang['id_lang']] = $tmp;

                $tmp = Tools::getValue('TBCMSCATEGORY_SLIDER_SUB_DESCRIPTION_'.$lang['id_lang']);
                $result['TBCMSCATEGORY_SLIDER_SUB_DESCRIPTION'][$lang['id_lang']] = $tmp;

                $tmp = Tools::getValue('TBCMSCATEGORY_SLIDER_DESCRIPTION_'.$lang['id_lang']);
                $result['TBCMSCATEGORY_SLIDER_DESCRIPTION'][$lang['id_lang']] = $tmp;
            }

            $tmp = $result['TBCMSCATEGORY_SLIDER_TITLE'];
            Configuration::updateValue('TBCMSCATEGORY_SLIDER_TITLE', $tmp);
            $tmp = $result['TBCMSCATEGORY_SLIDER_SUB_DESCRIPTION'];
            Configuration::updateValue('TBCMSCATEGORY_SLIDER_SUB_DESCRIPTION', $tmp);
            $tmp = $result['TBCMSCATEGORY_SLIDER_DESCRIPTION'];
            Configuration::updateValue('TBCMSCATEGORY_SLIDER_DESCRIPTION', $tmp);
            $tmp = $result['TBCMSCATEGORY_SLIDER_IMG'];
            Configuration::updateValue('TBCMSCATEGORY_SLIDER_IMG', $tmp);

            $message .= $this->displayConfirmation($this->l("Category Slider Title Updated."));
        }

        $this->html .= $message;
        $this->html .= $this->renderForm();
        $this->html .= $this->showRecord();
        return $this->html;
    }

    public function clearCustomSmartyCache($cache_id)
    {
        if (Cache::isStored($cache_id)) {
            Cache::clean($cache_id);
        }
    }

    // Show All Admin data in getContent Function
    public function showRecord()
    {
        $array_list = $this->showAdminData();
        $category_list = $this->getAllCategoryByIdsKey();
        
        $tbcms_obj = new TbcmsCategorySliderStatus();
        $show_fields = $tbcms_obj->fieldStatusInformation();
        $default_lang_id = $this->context->language->id;

        $this->context->smarty->assign('array_list', $array_list);
        $this->context->smarty->assign('category_list', $category_list);
        $this->context->smarty->assign('show_fields', $show_fields);
        $this->context->smarty->assign('default_lang_id', $default_lang_id);

        return $this->display(__FILE__, 'views/templates/admin/display_manage.tpl');
    }

    public function getConfigFormValues()
    {
        $cookie = Context::getContext()->cookie;
        $id_lang = $cookie->id_lang;
        $this->context->smarty->assign('id_lang', $id_lang);
        $fields = array();
        $languages = Language::getLanguages();


        // Frist Form Information
        foreach ($languages as $lang) {
            $a = Configuration::get('TBCMSCATEGORY_SLIDER_TITLE', $lang['id_lang']);
            $fields['TBCMSCATEGORY_SLIDER_TITLE'][$lang['id_lang']] = $a;

            $a = Configuration::get('TBCMSCATEGORY_SLIDER_SUB_DESCRIPTION', $lang['id_lang']);
            $fields['TBCMSCATEGORY_SLIDER_SUB_DESCRIPTION'][$lang['id_lang']] = $a;

            $a = Configuration::get('TBCMSCATEGORY_SLIDER_DESCRIPTION', $lang['id_lang']);
            $fields['TBCMSCATEGORY_SLIDER_DESCRIPTION'][$lang['id_lang']] = $a;

            $a = Configuration::get('TBCMSCATEGORY_SLIDER_IMG', $lang['id_lang']);
            $fields['TBCMSCATEGORY_SLIDER_IMG'][$lang['id_lang']] = $a;
        }

        $path = _MODULE_DIR_.$this->name."/views/img/";
        $this->context->smarty->assign("path", $path);
        $all_category = $this->getAllCategory();
        $this->context->smarty->assign('all_category', $all_category);


        // Second Form Information
        $fields['id'] = '';
        foreach ($languages as $lang) {
            $fields['custom_title'][$lang['id_lang']] = '';
            $fields['short_description'][$lang['id_lang']] = '';
        }
        $fields['image'] = '';
        $fields['status'] = 1;
        $this->context->smarty->assign('id_category_select', '0');

        if (Tools::getValue('action') == 'edit') {
            $id = Tools::getValue('id');
            $data = $this->showData($id);
            $data = $data[0];

            $fields['id'] = $id;
            foreach ($languages as $lang) {
                $fields['custom_title'][$lang['id_lang']] = $data['lang_info'][$lang['id_lang']]['title'];
                $tmp = $data['lang_info'][$lang['id_lang']]['short_description'];
                $fields['short_description'][$lang['id_lang']] = $tmp;
            }
            $fields['status'] = $data['status'];
            $fields['image'] = $data['image'];

            $this->context->smarty->assign('id_category_select', $data['id_category']);
        }

        return $fields;
    }


    public function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->show_cancel_button = true;
        $module = "tbcmscategoryslider";
        $url ='index.php?controller=AdminModules&configure='.$module.'&token='.Tools::getAdminTokenLite('AdminModules');

        $helper->back_url = $url;


        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        $form = array();
        $tbcms_obj = new TbcmsCategorySliderStatus();
        $show_fields = $tbcms_obj->fieldStatusInformation();

        if ($show_fields['main_status']) {
            $form[] = $this->tbcmsCategoryTitle();
        }

        if ($show_fields['record_form']) {
            $form[] = $this->tbcmsCategoryForm();
        }

        return $helper->generateForm($form);
    }


    protected function tbcmsCategoryForm()
    {
        $input = array();
        $tbcms_obj = new TbcmsCategorySliderStatus();
        $show_fields = $tbcms_obj->fieldStatusInformation();

        if (Tools::getValue('action')) {
            if (Tools::getValue('action') == 'edit') {
                $input[] = array(
                        'type' => 'hidden',
                        'name' => 'id',
                    );
            }
        }

        if ($show_fields['image']) {
            $input[] = array(
                        'col' => 9,
                        'type' => 'tbcmscategory_img',
                        'name' => 'image',
                        'label' => $this->l('Category Image'),
                    );
        }

        $input[] = array(
                        'col' => 9,
                        'type' => 'tbcmscategory_select',
                        'name' => 'id_category',
                        'label' => $this->l('Category'),
                        'lang' => true,
                    );

        if ($show_fields['title']) {
            $input[] = array(
                        'col' => 9,
                        'class' => 'tbcmsvategory-slider-custom-name',
                        'type' => 'text',
                        'name' => 'custom_title',
                        'label' => $this->l('Custom Name'),
                        'lang' => true,
                    );
        }

        if ($show_fields['short_description']) {
            $input[] =  array(
                        'col' => 9,
                        'type' => 'text',
                        'name' => 'short_description',
                        'label' => $this->l('Short Description'),
                        'lang' => true,
                        // 'cols' => 40,
                        // 'rows' => 10,
                        // 'class' => 'rte',
                        // 'autoload_rte' => true,
                    );
        }

        $input[] = array(
                        'col' => 9,
                        'type' => 'switch',
                        'name' => 'status',
                        'label' => $this->l('Status'),
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Show')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Hide')
                            )
                        )
                    );

        
        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Category Slider'),
                'icon' => 'icon-image',
                ),
                'input' => $input,
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name' => 'submitTbcmsCategoryForm',
                ),
            ),
        );
    }

    protected function tbcmsCategoryTitle()
    {
        $input = array();
        $tbcms_obj = new TbcmsCategorySliderStatus();
        $show_fields = $tbcms_obj->fieldStatusInformation();

        if ($show_fields['main_title']) {
            $input[] = array(
                        'col' => 7,
                        'type' => 'text',
                        'name' => 'TBCMSCATEGORY_SLIDER_TITLE',
                        'label' => $this->l('Category Title'),
                        'lang' => true,
                    );
        }

        if ($show_fields['main_sub_title']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TBCMSCATEGORY_SLIDER_SUB_DESCRIPTION',
                    'label' => $this->l('Short Description'),
                    'lang' => true,
                );
        }

        if ($show_fields['main_description']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TBCMSCATEGORY_SLIDER_DESCRIPTION',
                    'label' => $this->l('Description'),
                    'lang' => true,
                );
        }

        if ($show_fields['main_image']) {
            $input[] = array(
                        'type' => 'image_file',
                        'name' => 'TBCMSCATEGORY_SLIDER_IMG',
                        'label' => $this->l('Title Image'),
                );
        }

        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Category Slider Title'),
                'icon' => 'icon-image',
                ),
                'input' => $input,
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name' => 'submitTbcmsCategoryTitle',
                ),
            ),
        );
    }


    public function hookDisplayBackOfficeHeader()
    {
        $this->context->controller->addJqueryUI('ui.sortable');
        $this->context->controller->addJS($this->_path.'views/js/back.js');
        $this->context->controller->addCSS($this->_path.'views/css/back.css');
    }

    public function hookdisplayHeader()
    {
        $this->context->controller->addCSS($this->_path.'views/css/front.css');
        $this->context->controller->addJS($this->_path.'views/js/front.js');
    }

    public function hookdisplayLeftColumn()
    {
        return $this->hookDisplayHome();
    }

    public function hookDisplayNavFullWidth()
    {
        return $this->hookDisplayHome();
    }

    public function getArrMainTitle($main_heading, $main_heading_data)
    {
        if (!$main_heading['main_title'] || empty($main_heading_data['title'])) {
            $main_heading['main_title'] = false;
        }
        if (!$main_heading['main_sub_title'] || empty($main_heading_data['short_desc'])) {
            $main_heading['main_sub_title'] = false;
        }
        if (!$main_heading['main_description'] || empty($main_heading_data['desc'])) {
            $main_heading['main_description'] = false;
        }
        if (!$main_heading['main_image'] || empty($main_heading_data['image'])) {
            $main_heading['main_image'] = false;
        }
        if (!$main_heading['main_title'] &&
            !$main_heading['main_sub_title'] &&
            !$main_heading['main_description'] &&
            !$main_heading['main_image']) {
            $main_heading['main_status'] = false;
        }
        return $main_heading;
    }

    public function showFrontSideResult()
    {
        $cookie = Context::getContext()->cookie;
        $id_lang = $cookie->id_lang;

        $tbcms_obj = new TbcmsCategorySliderStatus();
        $main_heading = $tbcms_obj->fieldStatusInformation();

        if ($main_heading['main_status']) {
            $main_heading_data = array();
            $main_heading_data['title'] = Configuration::get('TBCMSCATEGORY_SLIDER_TITLE', $id_lang);
            $main_heading_data['short_desc'] = Configuration::get('TBCMSCATEGORY_SLIDER_SUB_DESCRIPTION', $id_lang);
            $main_heading_data['desc'] = Configuration::get('TBCMSCATEGORY_SLIDER_DESCRIPTION', $id_lang);
            $main_heading_data['image'] = Configuration::get('TBCMSCATEGORY_SLIDER_IMG', $id_lang);
            $main_heading = $this->getArrMainTitle($main_heading, $main_heading_data);
            $main_heading['data'] = $main_heading_data;
        }

        $disArrResult = array();
        $disArrResult['data'] = $this->showFrontData();
        $disArrResult['status'] = empty($disArrResult['data'])?false:true;
        $disArrResult['path'] = _MODULE_DIR_.$this->name."/views/img/";
        $disArrResult['id_lang'] = $id_lang;

        $this->context->smarty->assign('main_heading', $main_heading);
        $this->context->smarty->assign('dis_arr_result', $disArrResult);

        return $disArrResult['status']?true:false;
    }

    public function hookDisplayHome()
    {
        if (!Cache::isStored('tbcmscategoryslider_display_home.tpl')) {
            $result = $this->showFrontSideResult();
            if ($result) {
                $output = $this->display(__FILE__, 'views/templates/front/display_home.tpl');
            } else {
                $output = '';
            }

            Cache::store('tbcmscategoryslider_display_home.tpl', $output);
        }

        return Cache::retrieve('tbcmscategoryslider_display_home.tpl');
    }
}
