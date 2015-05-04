<?php /* Smarty version Smarty-3.1.18, created on 2015-05-04 15:08:58
         compiled from "C:\xampp\htdocs\data\widgets\notify\notifyView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:327755476f6ad07234-99887899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e5ba47982451c75e30101b897c29ee683dcd480' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\widgets\\notify\\notifyView.tpl',
      1 => 1429905115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '327755476f6ad07234-99887899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55476f6ae03456_06576462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55476f6ae03456_06576462')) {function content_55476f6ae03456_06576462($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\xampp\\htdocs/data/functions\\function.L.php';
?><?php if ($_smarty_tpl->tpl_vars['data']->value['notifyMessageNegative']!='') {?>
	<div class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['data']->value['notifyMessageNegative']),$_smarty_tpl);?>

	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['notifyMessagePositive']!='') {?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['data']->value['notifyMessagePositive']),$_smarty_tpl);?>

	</div>
<?php }?>
<?php }} ?>
