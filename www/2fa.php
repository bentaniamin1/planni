<?php

require('./base.inc');
require(BASE .'/../config.inc');
require(BASE .'/../includes/header.inc');

$g = new \Google\Authenticator\GoogleAuthenticator();

if($user->google_2fa != 'ok'){
	// we generate a new secret here to avoid repeat attack
	$secret = $g->generateSecret();
	$user->cle = $secret;
	$user->db_save();
}

$finalSecret = $user->cle;
$qrcode = $g->getURL($user->user_id, cleanStr(CONFIG_SOPLANNING_TITLE), $finalSecret);
$smarty->assign('qrcode', $qrcode);

$smarty->assign('xajax', $xajax->getJavascript("", "assets/js/xajax.js"));


$smarty->display('www_2fa.tpl');

?>