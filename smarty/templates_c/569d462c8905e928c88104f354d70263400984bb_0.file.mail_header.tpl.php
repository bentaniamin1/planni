<?php
/* Smarty version 3.1.32, created on 2024-05-28 10:27:18
  from '/home/planning/public_html/templates/mail_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_66559566e6da75_03924919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '569d462c8905e928c88104f354d70263400984bb' => 
    array (
      0 => '/home/planning/public_html/templates/mail_header.tpl',
      1 => 1603874318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66559566e6da75_03924919 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="fr">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title><?php if (isset($_smarty_tpl->tpl_vars['titre_email']->value)) {
echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'titre_email');
}?></title>
<style type="text/css">
	
	a { border: none; }
	img { border: none; }
	p { margin: 0; line-height: 1.3em; }
	#footer-msg a { color: #F3A836; }
	h1,h2,h3,h4,h5,h6 {font-size:100%;margin:0;}
	
</style>
</head>
<body style="margin: 0; padding: 0;" >
				
<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
<tr>
	<td align="center" style="padding: 37px 0;">
		<div style="padding: 0 0 10px">
			<table cellpadding="0" cellspacing="0" border="0" style="margin: 0; border: 1px solid #dddddd; color: #444444; font-family: arial; font-size: 12px; border-color: #dddddd;" width="90%">
			<tr>
				<td>
					<table cellpadding="0" cellspacing="0" border="0" style="margin: 0; border-collapse: collapse;" width="100%">
					<tr>
						<td style="color: #444444; font-family: arial; font-size: 12px; border-color: #dddddd; background-color: #EEEEEE;  padding: 5px 0;" align="left" width="100%">
							<table cellpadding="0" cellspacing="0" style="border-collapse:collapse;color: #444444; font-family: arial; font-size: 12px; border-color: #dddddd; background-color: #EEEEEE; ">
							<tr>
								<td width="10px"></td>
								<td width="90%" style="vertical-align: top; padding: 5px 0; ">
									<table cellpadding="0" cellspacing="0" style="border-collapse:collapse; text-align: center; width: 100%;min-width:250px;">
									<tr>
										<td style="border-collapse:collapse;color: #444444; font-family: arial; font-size: 18px; font-weight:bold;width: 100%" >
											<?php if (@constant('CONFIG_SOPLANNING_URL') != '') {?>
												<?php if (@constant('CONFIG_SOPLANNING_LOGO') != '') {?>
													<a class="navbar-brand navbar-brand-logo" href="<?php echo @constant('CONFIG_SOPLANNING_URL');?>
"><img src="<?php echo @constant('CONFIG_SOPLANNING_URL');?>
/upload/logo/<?php echo @constant('CONFIG_SOPLANNING_LOGO');?>
" alt='logo' class="logo" />
												<?php } else { ?>
													<a class="navbar-brand" href="<?php echo @constant('CONFIG_SOPLANNING_URL');?>
">
												<?php }?>
												<?php echo @constant('CONFIG_SOPLANNING_TITLE');?>

												</a>
											<?php } else { ?>
												<?php echo @constant('CONFIG_SOPLANNING_TITLE');?>

											<?php }?>
										</td>
									</tr>
									</table>
								</td>
							</tr>
							</table>
							<table cellpadding="0" cellspacing="0" style="border-collapse:collapse;color: #444444; font-family: arial; font-size: 14px; border-color: #dddddd; background-color: #EEEEEE; ">
							<tr>
								<td width="10px"></td>
								<td width="90%" style="vertical-align: top; padding: 5px 0; ">
									<table cellpadding="0" cellspacing="0" style="border-collapse:collapse;width:100%;color: #444444; font-family: arial; border-color: #dddddd; background-color: #EEEEEE; " width="100%">
									<tr>
										<td style="padding:5px 0 5px 5px;line-height:normal;color: #444444; font-family: arial; border-color: #dddddd; background-color: #EEEEEE; ">
<?php }
}
