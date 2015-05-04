<?php /* Smarty version Smarty-3.1.18, created on 2015-05-04 15:09:12
         compiled from "C:\xampp\htdocs\app\templates\error404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2252555476f78957ee9-08266347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '897bd2444577a58112c0de1bce2895546f0e14e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app\\templates\\error404.tpl',
      1 => 1398323026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2252555476f78957ee9-08266347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55476f789b9573_36565864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55476f789b9573_36565864')) {function content_55476f789b9573_36565864($_smarty_tpl) {?><?php echo header('HTTP/1.x 404 Not Found');?>

<?php echo header("Status: 404 Not Found");?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/css/reset.css'>
		<link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/css/404.css'>
		<title>Error 404</title>
	</head>
<body>
	<div class="errorMessage">
		<img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/img/icon404.png"><br>
		Windu <strong>Error 404</strong>
		<p class="small">Page not exists! <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Home page</a></p>
	</div>
</body> 
</html><?php }} ?>
