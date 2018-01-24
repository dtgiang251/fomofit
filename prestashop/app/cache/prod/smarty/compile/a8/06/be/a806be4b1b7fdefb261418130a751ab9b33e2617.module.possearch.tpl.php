<?php /* Smarty version Smarty-3.1.19, created on 2018-01-23 08:41:27
         compiled from "module:possearchproducts/possearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3896145705a673b87a71735-67730257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a806be4b1b7fdefb261418130a751ab9b33e2617' => 
    array (
      0 => 'module:possearchproducts/possearch.tpl',
      1 => 1516669390,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '3896145705a673b87a71735-67730257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'url_search' => 0,
    'cate_on' => 0,
    'categories_option' => 0,
    'child' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a673b87acb3d2_56449440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a673b87acb3d2_56449440')) {function content_5a673b87acb3d2_56449440($_smarty_tpl) {?>

<!-- pos search module TOP -->
<div id="pos_search_top" class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" id="searchbox" class="form-inline form_search"  data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url_search']->value,'html'), ENT_QUOTES, 'UTF-8');?>
">
		<label for="pos_query_top"></label>
		
        <input type="hidden" name="controller" value="search">
		<div class="pos_search form-group">
			<i class="material-icons" style="float: left;">search</i>
             <?php if ($_smarty_tpl->tpl_vars['cate_on']->value==1) {?>
                <select class="bootstrap-select" name="poscats">
					<option value="0"><?php echo smartyTranslate(array('s'=>'All categories','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories_option']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
							<?php echo $_smarty_tpl->getSubTemplate ("modules/possearchproducts/category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'main'=>true), 0);?>

						<?php } ?>
				</select>
            <?php }?> 
        </div>
		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Enter a keyword to search','mod'=>'possearchcategories'),$_smarty_tpl);?>
" id="pos_query_top" class="search_query form-control ac_input" >
		<button type="submit" class="btn btn-default search_submit">
			Go<i style="margin-left: 5px;" class="fa fa-angle-right"></i>
		</button>
    </form>
</div>

<!-- /pos search module TOP -->
<?php }} ?>
