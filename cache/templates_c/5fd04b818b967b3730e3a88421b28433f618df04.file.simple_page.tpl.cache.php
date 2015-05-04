<?php /* Smarty version Smarty-3.1.18, created on 2015-05-04 15:09:12
         compiled from "C:\xampp\htdocs\data\themes\Basic-dark\tpl_views\simple_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2226655476f781ee933-56976428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fd04b818b967b3730e3a88421b28433f618df04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\themes\\Basic-dark\\tpl_views\\simple_page.tpl',
      1 => 1430221331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2226655476f781ee933-56976428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'imagesDB' => 0,
    'image' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55476f7825d702_35493774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55476f7825d702_35493774')) {function content_55476f7825d702_35493774($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

  <div class="container-narrow">
    <div class="box pad">       
      <h4><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</h4>
          
      <div class="pad">      
           <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['page']->value->content, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>          
      </div>
   </div>   
  </div> <!-- /container -->
<div class="container-narrow shadow logos">
  <div  style="text-align:center;"> 
    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagesDB']->value->getByBucket(759); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->description;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['image']->value->ekey;?>
/140/200/fit/" alr="strony www"></a>
    <?php } ?>
  </div> 
</div>    
<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
