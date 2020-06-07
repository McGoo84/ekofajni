<?php
/* Smarty version 3.1.33, created on 2020-06-07 15:59:42
  from '/home/mcgoo/domains/ekofajni.pl/public_html/themes/TB_129_PS_Furniture_Wood_root/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edd0eee562e03_92451060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1042d0573f534f9d3637aaf0be91dd3d6044e7dc' => 
    array (
      0 => '/home/mcgoo/domains/ekofajni.pl/public_html/themes/TB_129_PS_Furniture_Wood_root/templates/page.tpl',
      1 => 1591524254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0eee562e03_92451060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19245004435edd0eee55d989_01088809', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_13835926695edd0eee55e397_56056652 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="page-header tbpage-header-title-wrapper"><h1 class="tbpage-header-title"><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1></header><?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_8129388175edd0eee55de52_08938631 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13835926695edd0eee55e397_56056652', 'page_title', $this->tplIndex);
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_8955342485edd0eee560609_50172419 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_4553548045edd0eee560fc5_20651849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page content --><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17952621175edd0eee5600e0_93940059 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content" class="page-content card card-block"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8955342485edd0eee560609_50172419', 'page_content_top', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4553548045edd0eee560fc5_20651849', 'page_content', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_14191747215edd0eee5621f5_06978103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Footer content --><?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_6640254305edd0eee561da2_92410242 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14191747215edd0eee5621f5_06978103', 'page_footer', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_19245004435edd0eee55d989_01088809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19245004435edd0eee55d989_01088809',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8129388175edd0eee55de52_08938631',
  ),
  'page_title' => 
  array (
    0 => 'Block_13835926695edd0eee55e397_56056652',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_17952621175edd0eee5600e0_93940059',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8955342485edd0eee560609_50172419',
  ),
  'page_content' => 
  array (
    0 => 'Block_4553548045edd0eee560fc5_20651849',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_6640254305edd0eee561da2_92410242',
  ),
  'page_footer' => 
  array (
    0 => 'Block_14191747215edd0eee5621f5_06978103',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8129388175edd0eee55de52_08938631', 'page_header_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17952621175edd0eee5600e0_93940059', 'page_content_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6640254305edd0eee561da2_92410242', 'page_footer_container', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'content'} */
}
