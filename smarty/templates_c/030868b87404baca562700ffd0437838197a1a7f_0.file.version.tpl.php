<?php
/* Smarty version 3.1.32, created on 2024-05-14 09:04:03
  from '/home/planning/public_html/templates/version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_66430ce3934a19_58223336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '030868b87404baca562700ffd0437838197a1a7f' => 
    array (
      0 => '/home/planning/public_html/templates/version.tpl',
      1 => 1603874319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66430ce3934a19_58223336 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'info', false, 'titre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['titre']->value => $_smarty_tpl->tpl_vars['info']->value) {
?>
	<?php $_smarty_tpl->_assignInScope('nomTexteTmp', ("version_").($_smarty_tpl->tpl_vars['titre']->value));?>
	<b><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['nomTexteTmp']->value);?>
</b> : <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

	<br />
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div class="text-right">
	<a href="javascript:$('#infosVersion').hide();jQuery('#myModal').modal('hide');desactiverRappelVersion();undefined"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'version_nePlusRappeler');?>
</a>
</div>

<?php }
}
