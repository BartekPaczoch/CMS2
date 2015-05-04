<?php /* Smarty version Smarty-3.1.18, created on 2015-05-04 15:08:59
         compiled from "C:\xampp\htdocs\data\widgets\rate\rateView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2223455476f6bdc86a4-62098744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea5f1c2e16a47abf745def0f89c24bfaee9774e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\widgets\\rate\\rateView.tpl',
      1 => 1429905116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2223455476f6bdc86a4-62098744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'data' => 0,
    'rate' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55476f6be876e7_27457780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55476f6be876e7_27457780')) {function content_55476f6be876e7_27457780($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\xampp\\htdocs/data/functions\\function.L.php';
?><div class="rating-box">
	<?php if (isset($_smarty_tpl->tpl_vars['rate'])) {$_smarty_tpl->tpl_vars['rate'] = clone $_smarty_tpl->tpl_vars['rate'];
$_smarty_tpl->tpl_vars['rate']->value = $_smarty_tpl->tpl_vars['data']->value['ratesDB']->getElementRate($_smarty_tpl->tpl_vars['params']->value['ekey'],$_smarty_tpl->tpl_vars['params']->value['bucket']); $_smarty_tpl->tpl_vars['rate']->nocache = null; $_smarty_tpl->tpl_vars['rate']->scope = 0;
} else $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['ratesDB']->getElementRate($_smarty_tpl->tpl_vars['params']->value['ekey'],$_smarty_tpl->tpl_vars['params']->value['bucket']), null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['rate']->value>=1) {?>
		<?php echo smarty_function_L(array('key'=>"rate.rates.positive"),$_smarty_tpl);?>
 <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</span>
	<?php } elseif ($_smarty_tpl->tpl_vars['rate']->value<0) {?>
		<?php echo smarty_function_L(array('key'=>"rate.rates.negative"),$_smarty_tpl);?>
 <span class="label label-important"><?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
</span>
	<?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['data']->value['ratesDB']->checkUnique($_smarty_tpl->tpl_vars['params']->value['ekey'],$_smarty_tpl->tpl_vars['params']->value['bucket'])) {?>
	<div class="rate-<?php echo $_smarty_tpl->tpl_vars['params']->value['ekey'];?>
 rate-box">
		<?php if ($_smarty_tpl->tpl_vars['rate']->value==0) {?>
			<?php echo smarty_function_L(array('key'=>"rate.rates.befirst"),$_smarty_tpl);?>

		<?php }?>	
		<span onclick="CallDoAction('.rate-<?php echo $_smarty_tpl->tpl_vars['params']->value['ekey'];?>
','<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
do/rate/<?php echo $_smarty_tpl->tpl_vars['params']->value['bucket'];?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['ekey'];?>
/0/');" class="rate-btn" rel="nofollow"><i class="icon-thumbs-down"></i></span>
		<span onclick="CallDoAction('.rate-<?php echo $_smarty_tpl->tpl_vars['params']->value['ekey'];?>
','<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
do/rate/<?php echo $_smarty_tpl->tpl_vars['params']->value['bucket'];?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['ekey'];?>
/1/');" class="rate-btn" rel="nofollow"><i class="fa fa-thumbs-up"></i></span>
	</div>
<?php }?><?php }} ?>
