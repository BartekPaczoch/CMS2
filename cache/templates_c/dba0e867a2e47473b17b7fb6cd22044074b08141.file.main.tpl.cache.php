<?php /* Smarty version Smarty-3.1.18, created on 2015-05-04 15:08:58
         compiled from "C:\xampp\htdocs\data\themes\Basic-dark\tpl_main\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2518855476f6aa62e58-55969736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dba0e867a2e47473b17b7fb6cd22044074b08141' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\themes\\Basic-dark\\tpl_main\\main.tpl',
      1 => 1430221331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2518855476f6aa62e58-55969736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta' => 0,
    'cssFile' => 0,
    'lessFile' => 0,
    'HOME' => 0,
    'jsFile' => 0,
    'pageTpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55476f6ac35470_62917165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55476f6ac35470_62917165')) {function content_55476f6ac35470_62917165($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'C:\\xampp\\htdocs/data/functions\\function.W.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="INDEX, FOLLOW">
        <meta name="GOOGLEBOT" content="INDEX, FOLLOW">
        <meta name="revisit-after" content="7 days">
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value->description;?>
">
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value->keywords;?>
">
        <meta name="copyright" content="Copyright (c) WinduCMS">
        <meta name="distribution" content="global">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
		<?php  $_smarty_tpl->tpl_vars['cssFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssFile']->_loop = false;
 $_from = resourceManager::loadFrontCSS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->key => $_smarty_tpl->tpl_vars['cssFile']->value) {
$_smarty_tpl->tpl_vars['cssFile']->_loop = true;
?>
			<link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
'>
		<?php } ?>	
		<?php  $_smarty_tpl->tpl_vars['lessFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lessFile']->_loop = false;
 $_from = resourceManager::loadFrontLESS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lessFile']->key => $_smarty_tpl->tpl_vars['lessFile']->value) {
$_smarty_tpl->tpl_vars['lessFile']->_loop = true;
?>
			<link rel='stylesheet/less' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['lessFile']->value;?>
'>
		<?php } ?>	
		<script type="text/javascript">
			window.HOME = "<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
";
			window.TEMPLATE = "<?php echo config::get('template');?>
";
		</script>	
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

		<?php  $_smarty_tpl->tpl_vars['jsFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsFile']->_loop = false;
 $_from = resourceManager::loadFrontJS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsFile']->key => $_smarty_tpl->tpl_vars['jsFile']->value) {
$_smarty_tpl->tpl_vars['jsFile']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>
"></script>
		<?php } ?>
		<title><?php echo $_smarty_tpl->tpl_vars['meta']->value->title;?>
</title>
	</head>
<body>
	<?php echo smarty_function_W(array('name'=>'notify'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['pageTpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</body> 
</html><?php }} ?>
