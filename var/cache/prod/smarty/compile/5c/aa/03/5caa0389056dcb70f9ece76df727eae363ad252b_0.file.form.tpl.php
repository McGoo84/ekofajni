<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:56:31
  from '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmscustomsetting/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0e2f1297b0_85376085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5caa0389056dcb70f9ece76df727eae363ad252b' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmscustomsetting/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0e2f1297b0_85376085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4890219205edd0e2f0c74e2_22076431', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_4890219205edd0e2f0c74e2_22076431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_4890219205edd0e2f0c74e2_22076431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_upload') {?>
        <div class="col-lg-9">
            <div class="form-group">
                <div class="col-lg-9">
                    <div class="dummyfile input-group">
                        <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
" type="file" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
" class="hide-file-upload" />
                        <span class="input-group-addon"><i class="icon-file"></i></span>
                        <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
-name" type="text" class="disabled" name="filename" readonly />
                        <span class="input-group-btn">
                            <button id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
                               <i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>

                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <?php $_smarty_tpl->_assignInScope('width', '250');?>
            <?php $_smarty_tpl->_assignInScope('height', '275');?>
            <div class="form-group">
                <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
-images-thumbnails" class="col-lg-12">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'htmlall','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'htmlall','UTF-8' ));?>
" class="img-thumbnail" />
                    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please Select Image.','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>
 (Size:- <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['width']->value,'htmlall','UTF-8' ));?>
 X <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['height']->value,'htmlall','UTF-8' ));?>
 )</p>
                </div>
            </div>
            <?php echo '<script'; ?>
>
                $(document).ready(function(){
                    $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
-selectbutton').click(function(e){
                        $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
').trigger('click');
                    });
                    $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
-name').click(function(e){
                        $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
').trigger('click');
                    });
                    $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
').change(function(e){
                        var val = $(this).val();
                        var file = val.split(/[\\/]/);
                        $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
-name').val(file[file.length-1]);
                    });
                });
            <?php echo '</script'; ?>
>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_upload_2') {?>
        <div class="col-lg-9">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    <div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
                <?php }?>
                <div class="form-group">
                    <div class="col-lg-9">
                        <div class="dummyfile input-group">
                            <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" type="file" name="tbcmscustomsetting_left_image_name_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" class="hide-file-upload" />
                            <span class="input-group-addon"><i class="icon-file"></i></span>
                            <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
-name" type="text" class="disabled" name="filename" readonly />
                            <span class="input-group-btn">
                                <button id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
                                    <i class="icon-folder-open"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>

                                </button>
                            </span>
                        </div>
                    </div>
                    <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                        <div class="col-lg-3">
                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>

                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
                                <li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8' ));?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</a></li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php }?>
                </div>
                <?php $_smarty_tpl->_assignInScope('width', '450');?>
                <?php $_smarty_tpl->_assignInScope('height', '588');?>
                <div class="form-group">
                    <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' )),'htmlall','UTF-8' ));?>
-images-thumbnails" class="col-lg-12">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'htmlall','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'htmlall','UTF-8' ));?>
" class="img-thumbnail" />
                        <p class="help-block">Please Select Image. (Size:- <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['width']->value,'htmlall','UTF-8' ));?>
 X <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['height']->value,'htmlall','UTF-8' ));?>
 )</p>
                    </div>
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    </div>
                <?php }?>
                <?php echo '<script'; ?>
>
                $(document).ready(function(){
                    $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],"htmlall","UTF-8" ));?>
-selectbutton').click(function(e){
                        $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],"htmlall","UTF-8" ));?>
').trigger('click');
                    });
                    $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],"htmlall","UTF-8" ));?>
-name').click(function(e){
                        $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],"htmlall","UTF-8" ));?>
').trigger('click');
                    });
                    $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],"htmlall","UTF-8" ));?>
').change(function(e){
                        var val = $(this).val();
                        var file = val.split(/[\\/]/);
                        $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],"htmlall","UTF-8" ));?>
-name').val(file[file.length-1]);
                    });
                });
            <?php echo '</script'; ?>
>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_upload_3') {?>
        <div class="col-lg-9">
            <div class="form-group">
                <div class="col-lg-9">
                    <div class="tbcmsall-pattern-show">
                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                        <?php
 while ($_smarty_tpl->tpl_vars['i']->value <= 30) {?>
                            <?php $_smarty_tpl->_assignInScope('tmp', ('pattern').($_smarty_tpl->tpl_vars['i']->value));?>
                            <div class="tball-pattern-show <?php if ($_smarty_tpl->tpl_vars['background_pattern']->value == $_smarty_tpl->tpl_vars['tmp']->value) {?>tbcms_custom_setting_active<?php }?>" id="pattern<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" style="background:url(<?php echo $_smarty_tpl->tpl_vars['front_pattern_path']->value;?>
pattern/pattern<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
.png)"></div>
                            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                        <?php }?>

                        <div class="col-lg-12 tball-pattern-custom-pattern" style="padding: 0;">
                            <input type="file" name="tbcmscustomsetting_custom_pattern" title="Add One Custom Pattern">
                            <input type="hidden" id="tbcmscustomsetting_pattern" name="tbcmscustomsetting_pattern" value="<?php echo $_smarty_tpl->tpl_vars['background_pattern']->value;?>
">
                            <?php if ($_smarty_tpl->tpl_vars['custom_pattern']->value) {?>
                                <div class="tball-pattern-show custom_pattern <?php if ($_smarty_tpl->tpl_vars['background_pattern']->value == 'custompattern') {?>tbcms_custom_setting_active<?php }?>" id="custompattern" style="background:url(<?php echo $_smarty_tpl->tpl_vars['path']->value;
echo $_smarty_tpl->tpl_vars['custom_pattern']->value;?>
)"></div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <p class="help-block">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Your Pattern or Update Your Custom Pattern.','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>

            </p>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_upload_4') {?>
        <div class="col-lg-9">
            <div class="form-group">
                <div class="col-lg-9">
                    <div class="tbcmsall-pattern-show">
                        <?php $_smarty_tpl->_assignInScope('i', 1);?>
                        <?php
 while ($_smarty_tpl->tpl_vars['i']->value <= 30) {?>
                            <?php $_smarty_tpl->_assignInScope('tmp', ('pattern').($_smarty_tpl->tpl_vars['i']->value));?>
                            <div class="tball-body-pattern-show <?php if ($_smarty_tpl->tpl_vars['body_background_pattern']->value == $_smarty_tpl->tpl_vars['tmp']->value) {?>tbcms_custom_setting_body_active<?php }?>" id="pattern<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" style="background:url(<?php echo $_smarty_tpl->tpl_vars['front_pattern_path']->value;?>
pattern/pattern<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
.png)"></div>
                            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                        <?php }?>

                        <div class="col-lg-12 tball-pattern-custom-pattern" style="padding: 0;">
                            <input type="file" name="tbcmscustomsetting_custom_body_pattern" title="Add One Custom Pattern">
                            <input type="hidden" id="tbcmscustomsetting_body_pattern" name="tbcmscustomsetting_body_pattern" value="<?php echo $_smarty_tpl->tpl_vars['body_background_pattern']->value;?>
">
                            <?php if ($_smarty_tpl->tpl_vars['custom_body_pattern']->value) {?>
                                <div class="tball-body-pattern-show custom_body_pattern <?php if ($_smarty_tpl->tpl_vars['body_background_pattern']->value == 'custombodypattern') {?>tbcms_custom_setting_body_active<?php }?>" id="custombodypattern" style="background:url(<?php echo $_smarty_tpl->tpl_vars['path']->value;
echo $_smarty_tpl->tpl_vars['custom_body_pattern']->value;?>
)"></div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <p class="help-block">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Your Pattern or Update Your Custom Pattern.','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>

            </p>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'custom_theme_option') {?>
        <div class="col-lg-9" id="TBCMSCUSTOMSETTING_THEME_OPTION">
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="radio" id="TBCMSCUSTOMSETTING_THEME_OPTION1" name="TBCMSCUSTOMSETTING_THEME_OPTION" value="" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == '') {?> checked <?php }?>> 
                    <div class="color-wrapper theme1">
                        <div class="first"></div>
                    </div><p><label for="TBCMSCUSTOMSETTING_THEME_OPTION1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme 1','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>
</label></p>
                    <!-- <input type="radio" id="TBCMSCUSTOMSETTING_THEME_OPTION2" name="TBCMSCUSTOMSETTING_THEME_OPTION" value="theme2" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == 'theme2') {?> checked <?php }?>> 
                    <div class="color-wrapper theme2">
                        <div class="first"></div>
                    </div><p><label for="TBCMSCUSTOMSETTING_THEME_OPTION2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme 2','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>
</label></p>
                    <input type="radio" id="TBCMSCUSTOMSETTING_THEME_OPTION3" name="TBCMSCUSTOMSETTING_THEME_OPTION" value="theme3" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == 'theme3') {?> checked <?php }?>>
                    <div class="color-wrapper theme3">
                        <div class="first"></div>
                    </div><p><label for="TBCMSCUSTOMSETTING_THEME_OPTION3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme 3','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>
</label></p>
                    <input type="radio" id="TBCMSCUSTOMSETTING_THEME_OPTION4" name="TBCMSCUSTOMSETTING_THEME_OPTION" value="theme4" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == 'theme4') {?> checked <?php }?>>
                    <div class="color-wrapper theme4">
                        <div class="first"></div>
                    </div><p><label for="TBCMSCUSTOMSETTING_THEME_OPTION4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme 4','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>
</label></p> -->
                    <input type="radio" id="TBCMSCUSTOMSETTING_THEME_OPTION_CUSTOM" name="TBCMSCUSTOMSETTING_THEME_OPTION" value="theme_custom" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == 'theme_custom') {?> checked <?php }?>>
                    <div class="color-wrapper theme_custom">
                        <div class="first" style="background-color: <?php echo Configuration::get('TBCMSCUSTOMSETTING_THEME_COLOR_1');?>
"></div>
                    </div><p><label for="TBCMSCUSTOMSETTING_THEME_OPTION_CUSTOM"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>
</label></p>
                </div>
                    <p class="help-block">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Front Side Theme.','mod'=>'tbcmscustomsetting'),$_smarty_tpl ) );?>

                    </p>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'custom_color') {?>
        <div class="col-lg-9">
            <div class="form-group">
                <div class="col-lg-2">
                    <div class="row">
                        <div class="input-group">
                            <input type="text" data-hex="true" class="color mColorPickerInput mColorPicker" name="TBCMSCUSTOMSETTING_THEME_COLOR_1" value="#0f0010" id="color_0" style="background-color: rgb(255, 255, 255); color: black;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "input"} */
}
