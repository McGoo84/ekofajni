<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:57:56
  from '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmscategoryslider/views/templates/admin/display_manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0e84cf45e0_36321925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01b7af627b43bd3879029bbeff4fe2ae7eb8923f' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/modules/tbcmscategoryslider/views/templates/admin/display_manage.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0e84cf45e0_36321925 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['array_list']->value) {?><div class="panel"><div class="seperation"> </div><table id="table-data" class="table tbcmstable tbcmscategoryslider"><thead><tr class="nodrag nodrop"><th class="fixed-width-xs center"><span class="title_box active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category Images','mod'=>'tbcmscategoryslider'),$_smarty_tpl ) );?>
</span></th><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['category_title'] == true) {?><th class="fixed-width-xs center"><span class="title_box active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category Name','mod'=>'tbcmscategoryslider'),$_smarty_tpl ) );?>
</span></th><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['title'] == true) {?><th class="fixed-width-xs center"><span class="title_box active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category Custom Name','mod'=>'tbcmscategoryslider'),$_smarty_tpl ) );?>
</span></th><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['short_description'] == true) {?><th class="fixed-width-xs center"><span class="title_box active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category Description','mod'=>'tbcmscategoryslider'),$_smarty_tpl ) );?>
</span></th><?php }?><th class="fixed-width-xs center status"><span class="title_box active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'tbcmscategoryslider'),$_smarty_tpl ) );?>
</span></th><th class="fixed-width-xs center action"><span class="title_box active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'tbcmscategoryslider'),$_smarty_tpl ) );?>
</span></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_list']->value, 'Data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Data']->value) {
?><tr id="recordsArray_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Data']->value['id'],'htmlall','UTF-8' ));?>
"><td class="pointer fixed-width-xs center"><img src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,"html","UTF-8" ));?>
views/img/<?php echo $_smarty_tpl->tpl_vars['Data']->value['image'];?>
' width="100px" /></td><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['category_title'] == true) {?><td class="pointer fixed-width-xs center"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category_list']->value[$_smarty_tpl->tpl_vars['Data']->value['id_category']],'htmlall','UTF-8' ));?>
</td><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['title'] == true) {?><td class="pointer fixed-width-xs center"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Data']->value['title'],'htmlall','UTF-8' ));?>
</td><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['short_description'] == true) {?><td class="pointer fixed-width-xs center"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Data']->value['short_description'],'htmlall','UTF-8' ));?>
</td><?php }?><td class="pointer fixed-width-xs center"><?php if ($_smarty_tpl->tpl_vars['Data']->value['status'] == 1) {?><i class="icon-check greenColor"></i><?php } else { ?><i class="icon-close redColor"></i><?php }?></td><td class="pointer fixed-width-xs center"><form action="" class="actionEdit" name="actionEdit" method="post"><input type="hidden" name="id" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Data']->value['id'],'html','UTF-8' ));?>
"><input type="hidden" name="action" value="edit"><button title="Edit" class="edit" onclick="$(this).parent('.actionEdit').trigger('submit');" ><i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'tbcmscategoryslider'),$_smarty_tpl ) );?>
 </button></form><form action="" class="actionDelete" name="actionDelete" method="post"><input type="hidden" name="id" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Data']->value['id'],'html','UTF-8' ));?>
"><input type="hidden" name="action" value="remove"><button title="Delete" class="delete tbcmsdelete"><i class='icon-trash'></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'tbcmscategoryslider'),$_smarty_tpl ) );?>
 </button></form></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><?php }?><div id="growls" class="default"></div>
<?php }
}
