<?php /* Smarty version Smarty-3.1.18, created on 2015-05-04 15:08:58
         compiled from "C:\xampp\htdocs\data\themes\Basic-dark\tpl_views\news_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:653055476f6ae79bb8-07816312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fbc21d93e19ca6f6609d664c5fe31397d6f890d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\themes\\Basic-dark\\tpl_views\\news_page.tpl',
      1 => 1430221331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '653055476f6ae79bb8-07816312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'usersDB' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55476f6aeefd57_74207386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55476f6aeefd57_74207386')) {function content_55476f6aeefd57_74207386($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:653055476f6ae79bb8-07816312%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_W\')) include \'C:\\\\xampp\\\\htdocs/data/functions\\\\function.W.php\';
?>/*/%%SmartyNocache:653055476f6ae79bb8-07816312%%*/';?>
<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
   
<div class="container-narrow">
  <div class="box pad">
    <h4><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</h4>
        <div class="pad">
        
		<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['page']->value->content, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
		</div>
		<div class="box-footer">
			Opublikował: <span class="label"><?php echo $_smarty_tpl->tpl_vars['usersDB']->value->get($_smarty_tpl->tpl_vars['page']->value->authorId,'username');?>
</span> <span class="date"><?php echo $_smarty_tpl->tpl_vars['page']->value->createTime;?>
</span>
			<div class="pull-right">
				<?php echo '/*%%SmartyNocache:653055476f6ae79bb8-07816312%%*/<?php echo smarty_function_W(array(\'name\'=>\'rate\',\'ekey\'=>$_smarty_tpl->tpl_vars[\'page\']->value->ekey,\'bucket\'=>\'pagesDB\'),$_smarty_tpl);?>
/*/%%SmartyNocache:653055476f6ae79bb8-07816312%%*/';?>

			</div>
		</div>
 </div>    <?php echo '/*%%SmartyNocache:653055476f6ae79bb8-07816312%%*/<?php echo smarty_function_W(array(\'name\'=>\'commentsNormal\'),$_smarty_tpl);?>
/*/%%SmartyNocache:653055476f6ae79bb8-07816312%%*/';?>

</div> <!-- /container -->
<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
