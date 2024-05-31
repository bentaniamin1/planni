<?php
/* Smarty version 3.1.32, created on 2024-05-14 09:02:48
  from '/home/planning/public_html/templates/install_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_66430c98bc3114_63642814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc886a36bed604f5fb6e984669df92bd00cfd967' => 
    array (
      0 => '/home/planning/public_html/templates/install_index.tpl',
      1 => 1619418943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:www_footer.tpl' => 1,
  ),
),false)) {
function content_66430c98bc3114_63642814 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="reply-to" content="support@soplanning.org" />
	<meta name="email" content="support@soplanning.org" />
	<meta name="Identifier-URL" content="http://www.soplanning.org" />
	<meta name="robots" content="noindex,follow" />
	<title>SoPlanning Installation</title>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/favicon-16x16.png" />
	<link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/site.webmanifest" />
	<link rel="mask-icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/safari-pinned-tab.svg" color="#5bbad5" />
	<meta name="msapplication-TileColor" content="#da532c" />
	<meta name="theme-color" content="#ffffff" />

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/bootstrap-4.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/themes/<?php echo @constant('CONFIG_SOPLANNING_THEME');?>
" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/jquery-multiselect-2.4.1/jquery.multiselect.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/styles.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/mobile.css" media="screen and (max-width: 1165px)" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/print.css" media="print">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/select2-4.0.13/dist/css/select2.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/select2-bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/spectrum-1.8.1/spectrum.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/timepicker/jquery.ui.timepicker.css" />
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/js/fonctions.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/js/jquery-3.6.0min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/jquery-multiselect-2.4.1/jquery.multiselect.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/select2-4.0.13/dist/js/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/select2-4.0.13/dist/js/i18n/fr.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/spectrum-1.8.1/spectrum.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/jquery-timepicker-1.11.15/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/textarea-autosize/autosize.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/timepicker/jquery.ui.timepicker.js"><?php echo '</script'; ?>
>

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/simplePage.css" />	
		<?php echo $_smarty_tpl->tpl_vars['xajax']->value;?>


	<meta http-equiv="X-Frame-Options" content="deny">
	</head>
	<body>
		<div class="container">
			<h3 class="text-center">
				<span class="soplanning_install_title">Simple Online Planning</span>
			</h3>
			<div class="small-container">
				<?php if (isset($_smarty_tpl->tpl_vars['smartyData']->value['message'])) {?>
					<?php $_smarty_tpl->_assignInScope('messageFinal', formatMessage($_smarty_tpl->tpl_vars['smartyData']->value['message']));?>
					<div class="alert alert-danger" id="divMessage" >
						<div class="row noprint">
							<div class="col-md-10">
								<?php echo $_smarty_tpl->tpl_vars['messageFinal']->value;?>

							</div>
						</div>
					</div>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['checkInstall']->value['checkPhpVersion'])) {?>
					<div class="alert alert-danger">
						<h4><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_wrongPhpVersion');?>
</h4>
						<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_currentPhpVersion');?>
 :<?php echo $_smarty_tpl->tpl_vars['phpversion']->value;?>

						<br />
						<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_requiredPhpVersion');?>
 : 5.6
					</div>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['checkInstall']->value['checkWritableDatabaseInc'])) {?>
					<div class="alert alert-danger">
						<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_checkWritableDatabaseInc');?>

					</div>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['checkInstall']->value['checkGD'])) {?>
					<div class="alert alert-danger">
						<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_checkGD');?>

					</div>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['checkInstall']->value['checkDatabaseVersion'])) {?>
					<div class="alert alert-warning">
						<h4><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_DBUpgradeResult');?>
</h4>
						<?php if (isset($_smarty_tpl->tpl_vars['checkInstall']->value['databaseUpgradeResult'])) {?>
							<?php echo $_smarty_tpl->tpl_vars['checkInstall']->value['databaseUpgradeResult'];?>

						<?php }?>
						<br><br>
						<a href="../"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_clickLoginAgain');?>
</a><br />
					</div>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['checkInstall']->value['checkDBAccess']) || (isset($_smarty_tpl->tpl_vars['checkInstall']->value['checkDatabaseVersion']) && $_smarty_tpl->tpl_vars['checkInstall']->value['checkDatabaseVersion'] == 'database_empty')) {?>
					<form action="database.php" method="post" class="form-horizontal box">
						<h2><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_installationDB');?>
</h2>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" for="cfgHostname"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_mysqlServer');?>
 :</label>
							<div class="col-md-6">
								<input type="text" size="20" name="cfgHostname" id="cfgHostname" value="<?php echo $_smarty_tpl->tpl_vars['cfgHostname']->value;?>
" class="form-control" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" for="cfgDatabase"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_DBName');?>
 :<br/><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_missingDBCreated');?>
.</span></label>
							<div class="col-md-6">
								<input type="text" size="20" name="cfgDatabase" id="cfgDatabase" value="<?php echo $_smarty_tpl->tpl_vars['cfgDatabase']->value;?>
" class="form-control" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" for="cfgHostname"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_mysqlLogin');?>
 :</label>
							<div class="col-md-4">
								<input type="text" size="20" name="cfgUsername" id="cfgUsername" value="<?php echo $_smarty_tpl->tpl_vars['cfgUsername']->value;?>
" class="form-control" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" for="cfgPassword"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_mysqlPassword');?>
 :</label>
							<div class="col-md-4">
								<input type="password" size="20" name="cfgPassword" id="cfgPassword" value="<?php echo $_smarty_tpl->tpl_vars['cfgPassword']->value;?>
" class="form-control" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label"></label>
							<div class="col-md-6">
								<input class="btn btn-primary" type="submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_startInstallButton');?>
" />
							</div>
						</div>
					</form>
				<?php }?>
			<div id="divTranslation">
				<ul class="list-inline flag text-right">
					<li class="list-inline-item"><a tabindex="1" href="?language=pl" class="tooltipEvent" data-title="Polish"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/pl.png" alt="Polish" title="Polish"/></a></li>
					<li class="list-inline-item"><a tabindex="2" href="?language=pt" class="tooltipEvent" data-title="Portuguese"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/pt.png" alt="Portuguese" title="Portuguese"/></a></li>
					<li class="list-inline-item"><a tabindex="3" href="?language=es" class="tooltipEvent" data-title="Spanish"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/es.png" alt="Spanish" title="Spanish" /></a></li>
					<li class="list-inline-item"><a tabindex="4" href="?language=de" class="tooltipEvent" data-title="German"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/de.png" alt="German" title="German"/></a></li>
					<li class="list-inline-item"><a tabindex="5" href="?language=da" class="tooltipEvent" data-title="Danish"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/da.png" alt="Danish" title="Danish"/></a></li>
					<li class="list-inline-item"><a tabindex="6" href="?language=hu" class="tooltipEvent" data-title="Hungarian"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/hu.png" alt="Hungarian" title="Hungarian"/></a></li>
					<li class="list-inline-item"><a tabindex="7" href="?language=nl" class="tooltipEvent" data-title="Dutch"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/nl.png" alt="Dutch" title="Dutch"/></a></li>
					<li class="list-inline-item"><a tabindex="8" href="?language=it" class="tooltipEvent" data-title="Italian"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/it.png" alt="Italian" title="Italian"/></a></li>
					<li class="list-inline-item"><a tabindex="9" href="?language=fr" class="tooltipEvent" data-title="French"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/fr.png" alt="French" title="French"/></a></li>
					<li class="list-inline-item"><a tabindex="10" href="?language=en" class="tooltipEvent" data-title="English"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/en.png" alt="English" title="English"/></a></li>
				</ul>
				<p class="text-right text-info"><small><a href="mailto:support@soplanning.org"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'proposerTrad');?>
</a></small></p>
			</div>
				<p class="text-right text-info"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_intro');?>
</p>
			</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:www_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
