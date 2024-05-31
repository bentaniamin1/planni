<?php
/* Smarty version 3.1.32, created on 2024-05-28 10:27:18
  from '/home/planning/public_html/templates/mail_modif_tache.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_66559566e51994_31699352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '445af2d625d5365b458a158bb26d6908216e4cc8' => 
    array (
      0 => '/home/planning/public_html/templates/mail_modif_tache.tpl',
      1 => 1603874318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mail_header.tpl' => 1,
    'file:mail_footer.tpl' => 1,
  ),
),false)) {
function content_66559566e51994_31699352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('titre_email', "mail_modifTache_sujet");
$_smarty_tpl->_subTemplateRender("file:mail_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mail_modifTache_corps');?>

<br/>
<br/>

<?php if ($_smarty_tpl->tpl_vars['periode']->value['titre'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_titre');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['periode']->value['titre'];?>

	<br/>
<?php }?> 
<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_projet');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['projet']->value['nom'];?>
 (<?php echo $_smarty_tpl->tpl_vars['projet']->value['projet_id'];?>
)
<br/>
<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_debut');?>
</b> : <?php echo sqldate2userdate($_smarty_tpl->tpl_vars['periode']->value['date_debut']);?>
 
<br/>
<?php if ($_smarty_tpl->tpl_vars['periode']->value['date_fin'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_fin');?>
</b> : <?php echo sqldate2userdate($_smarty_tpl->tpl_vars['periode']->value['date_fin']);
} else { ?><b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mail_tacheDuree');?>
</b> : <?php echo sqltime2usertime($_smarty_tpl->tpl_vars['periode']->value['duree']);?>

	<br/>
<?php }?> 
<?php if (isset($_smarty_tpl->tpl_vars['heure_debut']->value) && $_smarty_tpl->tpl_vars['heure_debut']->value != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mail_heure_debut');?>
</b> : <?php echo sqltime2usertime($_smarty_tpl->tpl_vars['heure_debut']->value);?>

	<br/>
<?php }?> 
<?php if (isset($_smarty_tpl->tpl_vars['heure_fin']->value) && $_smarty_tpl->tpl_vars['heure_fin']->value != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mail_heure_fin');?>
</b> : <?php echo sqltime2usertime($_smarty_tpl->tpl_vars['heure_fin']->value);?>

	<br/>
<?php }
if ($_smarty_tpl->tpl_vars['periode']->value['statut_tache'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_statut');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['status']->value;?>

	<br/>
<?php }
if ($_smarty_tpl->tpl_vars['periode']->value['lieu_id'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_lieu');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['periode']->value['nom'];?>

	<br/>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['periode']->value['ressource_id'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_ressource');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['periode']->value['ressource_id'];?>

	<br/>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['periode']->value['notes'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_commentaires');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['periode']->value['notes'];?>

	<br/>
<?php }
if ($_smarty_tpl->tpl_vars['periode']->value['lien'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_lien');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['periode']->value['lien'];?>

	<br/>
<?php }
if ($_smarty_tpl->tpl_vars['periode']->value['fichiers'] != '') {?>
	<br/>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_fichier');?>
</b> :<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fichiers']->value, 'fichier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fichier']->value) {
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/upload/files/<?php echo $_smarty_tpl->tpl_vars['periode']->value['link_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['fichier']->value;?>
" target="_blank" class="ellipsis fileupload"><?php echo $_smarty_tpl->tpl_vars['fichier']->value;?>
</a></li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['lienTache']->value)) {?>
	<br><br>
	<a href="<?php echo $_smarty_tpl->tpl_vars['lienTache']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'modifier_tache');?>
</a>
<?php }?>

<br><br> 
--------------------------------------------------------------------------------------------- 
<br>
<?php if ($_smarty_tpl->tpl_vars['oldPeriode']->value['titre'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_titre');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['oldPeriode']->value['titre'];?>

	<br/>
<?php }?> 
<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_projet');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['projet']->value['nom'];?>
 (<?php echo $_smarty_tpl->tpl_vars['projet']->value['projet_id'];?>
)
<br/>
<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_debut');?>
</b> : <?php echo sqldate2userdate($_smarty_tpl->tpl_vars['oldPeriode']->value['date_debut']);?>
 
<br/>
<?php if ($_smarty_tpl->tpl_vars['oldPeriode']->value['date_fin'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_fin');?>
</b> : <?php echo sqldate2userdate($_smarty_tpl->tpl_vars['oldPeriode']->value['date_fin']);
} else { ?><b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mail_tacheDuree');?>
</b> : <?php echo sqltime2usertime($_smarty_tpl->tpl_vars['oldPeriode']->value['duree']);?>

	<br/>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['heure_debut_old']->value != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mail_heure_debut');?>
</b> : <?php echo sqltime2usertime($_smarty_tpl->tpl_vars['heure_debut_old']->value);?>

	<br/>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['heure_fin_old']->value != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mail_heure_fin');?>
</b> : <?php echo sqltime2usertime($_smarty_tpl->tpl_vars['heure_fin_old']->value);?>

	<br/>
<?php }
if ($_smarty_tpl->tpl_vars['oldPeriode']->value['statut_tache'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_statut');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['oldStatus']->value;?>

	<br/>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['oldPeriode']->value['lieu_id'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_lieu');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['oldPeriode']->value['lieu_id'];?>

	<br/>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['oldPeriode']->value['ressource_id'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_ressource');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['oldPeriode']->value['ressource_id'];?>

	<br/>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['oldPeriode']->value['notes'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_commentaires');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['oldPeriode']->value['notes'];?>

	<br/>
<?php }
if ($_smarty_tpl->tpl_vars['oldPeriode']->value['lien'] != '') {?>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_lien');?>
</b> : <?php echo $_smarty_tpl->tpl_vars['oldPeriode']->value['lien'];?>

	<br/>
<?php }
if ($_smarty_tpl->tpl_vars['periode']->value['fichiers'] != '') {?>
	<br/>
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_fichier');?>
</b> :<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fichiers']->value, 'fichier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fichier']->value) {
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/upload/files/<?php echo $_smarty_tpl->tpl_vars['periode']->value['link_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['fichier']->value;?>
" target="_blank" class="ellipsis fileupload"><?php echo $_smarty_tpl->tpl_vars['fichier']->value;?>
</a></li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:mail_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
