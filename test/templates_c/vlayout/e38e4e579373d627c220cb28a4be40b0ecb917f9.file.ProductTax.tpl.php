<?php /* Smarty version Smarty-3.1.7, created on 2015-01-05 14:16:55
         compiled from "/Applications/MAMP/htdocs/vtiger/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/ProductTax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85959968454aa9cd7aad5d1-15056077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e38e4e579373d627c220cb28a4be40b0ecb917f9' => 
    array (
      0 => '/Applications/MAMP/htdocs/vtiger/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/ProductTax.tpl',
      1 => 1420390923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85959968454aa9cd7aad5d1-15056077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TAXCLASS_DETAILS' => 0,
    'tax' => 0,
    'tax_count' => 0,
    'MODULE' => 0,
    'check_value' => 0,
    'show_value' => 0,
    'COUNTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54aa9cd7bdec0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54aa9cd7bdec0')) {function content_54aa9cd7bdec0($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["tax_count"] = new Smarty_variable(1, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['tax'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TAXCLASS_DETAILS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->key => $_smarty_tpl->tpl_vars['tax']->value){
$_smarty_tpl->tpl_vars['tax']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['tax']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['tax']->value['check_value']==1){?>
		<?php $_smarty_tpl->tpl_vars['check_value'] = new Smarty_variable("checked", null, 0);?>
		<?php $_smarty_tpl->tpl_vars['show_value'] = new Smarty_variable("visible", null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['check_value'] = new Smarty_variable('', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['show_value'] = new Smarty_variable("hidden", null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tax_count']->value>1){?>
	<td class="fieldLabel">
		<label class="muted pull-right marginRight10px">
	<?php }?>
			<span class="taxLabel alignBottom"><?php echo vtranslate($_smarty_tpl->tpl_vars['tax']->value['taxlabel'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="paddingLeft10px">(%)</span></span>
			<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['tax']->value['check_name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['tax']->value['check_name'];?>
" class="taxes" data-tax-name=<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
 <?php echo $_smarty_tpl->tpl_vars['check_value']->value;?>
>
		</label>
	</td>
	<td class="fieldValue">
		<input type="text" class="detailedViewTextBox <?php if ($_smarty_tpl->tpl_vars['show_value']->value=="hidden"){?> hide <?php }else{ ?> show <?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['tax']->value['percentage'];?>
" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" />
	</td>
	<?php $_smarty_tpl->tpl_vars["tax_count"] = new Smarty_variable($_smarty_tpl->tpl_vars['tax_count']->value+1, null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?>
		</tr><tr>
		<?php $_smarty_tpl->tpl_vars["COUNTER"] = new Smarty_variable(1, null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars["COUNTER"] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?>
	<?php }?>
<?php } ?>
<?php }} ?>