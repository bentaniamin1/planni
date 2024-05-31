<?php
/* Smarty version 3.1.32, created on 2024-05-14 09:03:58
  from '/home/planning/public_html/templates/www_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_66430cded69a92_97278362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c3d2e878ea75f104c973cbeeac9016df30cf4c' => 
    array (
      0 => '/home/planning/public_html/templates/www_index.tpl',
      1 => 1619418943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:www_footer.tpl' => 1,
  ),
),false)) {
function content_66430cded69a92_97278362 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="reply-to" content="support@soplanning.org" />
	<meta name="email" content="support@soplanning.org" />
	<meta name="Identifier-URL" content="http://www.soplanning.org" />
	<meta name="robots" content="noindex,follow" />
	<title>
		<?php if (@constant('CONFIG_SOPLANNING_TITLE') != "SOPlanning") {?>
			<?php echo xss_protect(@constant('CONFIG_SOPLANNING_TITLE'));?>

		<?php } else { ?>
			SOPlanning - Simple Online Planning
		<?php }?>
	</title>
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
?<?php echo $_smarty_tpl->tpl_vars['infoVersion']->value;?>
" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/jquery-multiselect-2.4.1/jquery.multiselect.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/styles.css?<?php echo $_smarty_tpl->tpl_vars['infoVersion']->value;?>
" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/mobile.css?<?php echo $_smarty_tpl->tpl_vars['infoVersion']->value;?>
" media="screen and (max-width: 1165px)" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/print.css?<?php echo $_smarty_tpl->tpl_vars['infoVersion']->value;?>
" media="print">
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
/assets/js/fonctions.js?<?php echo $_smarty_tpl->tpl_vars['infoVersion']->value;?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
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

	<meta http-equiv="X-Frame-Options" content="deny">
	<?php echo $_smarty_tpl->tpl_vars['xajax']->value;?>

</head>
<body>
<div class="container">
	<h3 class="text-center">
		<?php if (@constant('CONFIG_SOPLANNING_LOGO') != '') {?>
				<img src="./upload/logo/<?php echo @constant('CONFIG_SOPLANNING_LOGO');?>
" alt='logo' style='height:40px;' id="logo" /><br />
		<?php }?>
		<?php if (@constant('CONFIG_SOPLANNING_TITLE') != "SOPlanning") {?>
			<span class="soplanning_index_title1"><?php echo xss_protect(@constant('CONFIG_SOPLANNING_TITLE'));?>
</span>
		<?php } else { ?>
			<span class="soplanning_index_title2">Simple Online Planning</span>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['infoVersion']->value)) {?>
			<small>v<?php echo $_smarty_tpl->tpl_vars['infoVersion']->value;?>
</small>
		<?php }?>
	</h3>
	<div class="small-container">
		<?php if (isset($_smarty_tpl->tpl_vars['alerte']->value)) {?>
			<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['alerte']->value;?>
</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['smartyData']->value['message'])) {?>
			<?php $_smarty_tpl->_assignInScope('messageFinal', formatMessage($_smarty_tpl->tpl_vars['smartyData']->value['message']));?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<i class="fa fa-lg fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['messageFinal']->value;?>

			</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['blocked']->value)) {?>
			<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['blocked']->value;?>
</div>
			<br><br><br>
		<?php } else { ?>
			<form action="process/login.php" method="post" class="form-horizontal box" id="formLogin">
				<div class="form-group row col-md-12">
					<label for="login" class="col-md-4 col-sm-4 control-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'login_login');?>
 :</label>
					<div class="col-md-8 col-sm-8">
						<input type="text" class="form-control" name="login" id="login" />
					</div>
				</div>
				<div class="form-group row col-md-12">
					<label for="password" class="col-md-4 col-sm-4 control-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'login_password');?>
 :</label>
					<div class="col-md-8 col-sm-8">
						<input type="password" class="form-control" name="password" id="password" />
					</div>
				</div>
				<div class="form-group row col-md-12">
					<label for="password" class="col-md-4 col-sm-4 control-label">&nbsp;</label>
					<div class="col-md-8 col-sm-8">
						<input class="form-check-input" type="checkbox" name="remember" id="remember" value="remember" style="margin-left:0px">
						<label class="form-check-label" for="remember" style="margin-left:20px"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'remember_checkbox');?>
</label>
					</div>
				</div>
				<div class="form-group">
					<div  class="col-12 text-center">
						<input class="btn btn-primary" type="submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'loginTxt');?>
" />
					
						<?php if (isset($_smarty_tpl->tpl_vars['google_auth_url']->value)) {?>
							<br><br>
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ou');?>
<br><br>
							<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['google_auth_url']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'google_oauth_bouton');?>
</a>
						<?php }?>

					</div >
				</div>

			</form>
			<div class="form-group text-center">
			<?php if (@constant('CONFIG_SOPLANNING_OPTION_ACCES') == 1) {?>
				<a href="planning.php?public=1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'accesPublic');?>
</a> &middot;
			<?php }?>
			<a href="#pwdReminderModal" role="button" data-toggle="modal"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rappelPwdTitre');?>
</a><br /><br />
			</div>
			<div id="divTranslation">
				<ul class="list-inline flag text-right">
					<li class="list-inline-item"><a href="?language=en" class="tooltipEvent" data-title="English"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/en.png" alt="English" title="English"/></a></li>
					<li class="list-inline-item"><a href="?language=fr" class="tooltipEvent" data-title="French"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/fr.png" alt="French" title="French"/></a></li>
					<li class="list-inline-item"><a href="?language=nl" class="tooltipEvent" data-title="Dutch"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/nl.png" alt="Dutch" title="Dutch"/></a></li>
					<li class="list-inline-item"><a href="?language=it" class="tooltipEvent" data-title="Italian"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/it.png" alt="Italian" title="Italian"/></a></li>
					<li class="list-inline-item"><a href="?language=pl" class="tooltipEvent" data-title="Polish"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/pl.png" alt="Polish" title="Polish"/></a></li>
					<li class="list-inline-item"><a href="?language=pt" class="tooltipEvent" data-title="Portuguese"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/pt.png" alt="Portuguese" title="Portuguese"/></a></li>
					<li class="list-inline-item"><a href="?language=br" class="tooltipEvent" data-title="English"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/br.png" alt="Brazilian Portuguese" title="Brazilian Portuguese"/></a></li>
					<li class="list-inline-item"><a href="?language=es" class="tooltipEvent" data-title="Spanish"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/es.png" alt="Spanish" title="Spanish" /></a></li>
					<li class="list-inline-item"><a href="?language=de" class="tooltipEvent" data-title="German"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/de.png" alt="German" title="German"/></a></li>
					<li class="list-inline-item"><a href="?language=da" class="tooltipEvent" data-title="Danish"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/da.png" alt="Danish" title="Danish"/></a></li>
					<li class="list-inline-item"><a href="?language=hu" class="tooltipEvent" data-title="Hungarian"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/hu.png" alt="Hungarian" title="Hungarian"/></a></li>
					<li class="list-inline-item"><a href="?language=id" class="tooltipEvent" data-title="Indonesian"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/id.png" alt="Indonesian" title="Indonesian"/></a></li>
				</ul>
				<p class="text-right text-info"><small><a href="mailto:support@soplanning.org"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'proposerTrad');?>
</a></small></p>
			</div>
			<div id="infosVersion" class="alert alert-warning" style="display:none"></div>
		<?php }?>
	</div>
</div>
		<div class="modal" tabindex="-1" role="dialog" id="pwdReminderModal">
		<div class="modal-dialog modal-dialog-normal" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rappelPwdTitre');?>
</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<input type="text" id="rappel_pwd" placeholder="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rappelPwdVotreEmail');?>
" class="form-control" />
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" id="changePwd"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit');?>
</button>
				</div>
			</div>
		</div>
		</div>
	<?php echo '<script'; ?>
 type="text/javascript" src="assets/js/login.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="assets/js/fonctions.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	document.getElementById('login').focus();
	setTimeout("xajax_checkAvailableVersion('home');", 3000);
	<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:www_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
