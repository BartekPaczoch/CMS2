<?php /* Smarty version Smarty-3.1.18, created on 2015-05-04 15:08:59
         compiled from "C:\xampp\htdocs\data\widgets\navigation\navigationView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1508755476f6bc2fac8-82507149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8e73b3f7f3d0f4236f5a5be39465938b2e60461' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\widgets\\navigation\\navigationView.tpl',
      1 => 1429905114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1508755476f6bc2fac8-82507149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'page' => 0,
    'HOME' => 0,
    'allPages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55476f6bcedd49_34179464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55476f6bcedd49_34179464')) {function content_55476f6bcedd49_34179464($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs/app/plugins/html/smarty/plugins\\modifier.truncate.php';
?><ul class="breadcrumb">
  <?php if (isset($_smarty_tpl->tpl_vars['page'])) {$_smarty_tpl->tpl_vars['page'] = clone $_smarty_tpl->tpl_vars['page'];
$_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['data']->value['page']; $_smarty_tpl->tpl_vars['page']->nocache = null; $_smarty_tpl->tpl_vars['page']->scope = 0;
} else $_smarty_tpl->tpl_vars['page'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['page'], null, 0);?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value->parentId!=0) {?>
  	<li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Home</a> <span class="divider">/</span></li>
	<?php while ($_smarty_tpl->tpl_vars['page']->value->parentId>0) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['page'])) {$_smarty_tpl->tpl_vars['page'] = clone $_smarty_tpl->tpl_vars['page'];
$_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->fetchRow("id = ".((string)$_smarty_tpl->tpl_vars['page']->value->parentId)); $_smarty_tpl->tpl_vars['page']->nocache = null; $_smarty_tpl->tpl_vars['page']->scope = 0;
} else $_smarty_tpl->tpl_vars['page'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['pagesDB']->fetchRow("id = ".((string)$_smarty_tpl->tpl_vars['page']->value->parentId)), null, 0);?>
	  	<?php $_smarty_tpl->createLocalArrayVariable('allPages', null, 0);
$_smarty_tpl->tpl_vars['allPages']->value[] = $_smarty_tpl->tpl_vars['page']->value;?>
	<?php }?>
	  
	<?php if (isset($_smarty_tpl->tpl_vars['pom'])) {$_smarty_tpl->tpl_vars['pom'] = clone $_smarty_tpl->tpl_vars['pom'];
$_smarty_tpl->tpl_vars['pom']->value = asort($_smarty_tpl->tpl_vars['allPages']->value); $_smarty_tpl->tpl_vars['pom']->nocache = null; $_smarty_tpl->tpl_vars['pom']->scope = 0;
} else $_smarty_tpl->tpl_vars['pom'] = new Smarty_variable(asort($_smarty_tpl->tpl_vars['allPages']->value), null, 0);?>
	
	<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allPages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
	 	<?php if ($_smarty_tpl->tpl_vars['page']->value->status==1&&$_smarty_tpl->tpl_vars['page']->value->parentId!=0) {?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value->urlKey;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value->name,40);?>
</a> <span class="divider">/</span></li>
	  	<?php }?>
	<?php } ?>
	<li class="active"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['page']->name,40);?>
</li>
  <?php } else { ?>
  	<li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Home</a></li> 
  <?php }?>
</ul><?php }} ?>
