<?php /* Smarty version Smarty-3.1.18, created on 2015-05-04 15:08:59
         compiled from "C:\xampp\htdocs\data\widgets\commentsNormal\commentsNormalView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:589955476f6bee1512-84243972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7e2582405252c92da70d8249530129a86c288f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\widgets\\commentsNormal\\commentsNormalView.tpl',
      1 => 1429905108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '589955476f6bee1512-84243972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55476f6bf31769_94625347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55476f6bf31769_94625347')) {function content_55476f6bf31769_94625347($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\xampp\\htdocs/data/functions\\function.L.php';
?><h3><?php echo smarty_function_L(array('key'=>"comments.normal.addcomments"),$_smarty_tpl);?>
</h3>
<div class="box box-comments-form">
	<?php if (empty($_smarty_tpl->tpl_vars['data']->value['user'])&&config::get('commentsLoggedUser')) {?>
		<div class="pad" style="padding-top:0px;">
			<?php echo smarty_function_L(array('key'=>"comments.normal.mustlogin"),$_smarty_tpl);?>

		</div>
	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['data']->value['form']->toHtml();?>

	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['data']->value['commentsDB']->fetchCount("bucket=".((string)$_smarty_tpl->tpl_vars['data']->value['bucket'])." and status = 1")>0) {?>
	<h3><?php echo smarty_function_L(array('key'=>"comments.normal.comments"),$_smarty_tpl);?>
</h3>
	<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['commentsDB']->getByBucket($_smarty_tpl->tpl_vars['data']->value['bucket'],"status = 1"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
	<div class="box box-comments">
		<?php echo $_smarty_tpl->tpl_vars['comment']->value->content;?>

		<div class="box-comments-footer">
			<?php echo $_smarty_tpl->tpl_vars['comment']->value->name;?>
<span class="date"><?php echo $_smarty_tpl->tpl_vars['comment']->value->createTime;?>
</span>
		</div>
	</div>
	<?php } ?>
<?php }?><?php }} ?>
