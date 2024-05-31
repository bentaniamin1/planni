<?php
/* Smarty version 3.1.32, created on 2024-05-14 09:04:02
  from '/home/planning/public_html/templates/www_planning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_66430ce2c33169_15920448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f530ff63af2cfa246a03f3ccf41c5c16d99bab1e' => 
    array (
      0 => '/home/planning/public_html/templates/www_planning.tpl',
      1 => 1618304246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:www_header.tpl' => 1,
    'file:www_planning_filtre.tpl' => 1,
    'file:www_footer.tpl' => 1,
  ),
),false)) {
function content_66430ce2c33169_15920448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:www_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:www_planning_filtre.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<div class="position-relative" id="thirdLayer">
				<?php if ($_smarty_tpl->tpl_vars['fleches']->value == 1) {?>
					<div id="left-scroll">					
						<span class="fa-stack">
							<i class="fa fa-chevron-left fa-2x" id="left-button" aria-hidden="true"></i>				
						</span>
					</div>
				<?php }?>
				<div id="divConteneurPlanning" style="width:99vw;">
					<?php echo $_smarty_tpl->tpl_vars['htmlTableau']->value;?>

				</div>
				<?php if ($_smarty_tpl->tpl_vars['fleches']->value == 1) {?>
					<div id="right-scroll">						
						<span class="fa-stack">
							<i class="fa fa-chevron-right fa-2x" id="right-button" aria-hidden="true"></i>				
						</span>
					</div>
				<?php }?>
		 </div> 
	<?php if (isset($_smarty_tpl->tpl_vars['htmlRecap']->value) && $_smarty_tpl->tpl_vars['htmlRecap']->value != '') {?>
	<div class="vw-100 noprint" id="divRecap">
		<div >
			<div id="divPlanningRecap" class="soplanning-box pt-0" >
				<?php echo $_smarty_tpl->tpl_vars['htmlRecap']->value;?>

			</div>
		</div>
	</div>
	
	<?php echo '<script'; ?>
>
	$(window).scroll(function(){
    $('#divRecap').css({
        'left': $(this).scrollLeft() + 0 
		});
	});
	<?php echo '</script'; ?>
>
	
	<?php }?>
<div id="divChoixDragNDrop" onMouseOut="masquerSousMenuDelai('divChoixDragNDrop');" onMouseOver="AnnuleMasquerSousMenu('divChoixDragNDrop');" onfocus="AnnuleMasquerSousMenu('divChoixDragNDrop')">
	<a href="javascript:windowPatienter();xajax_moveCasePeriode(idCaseEnCoursDeplacement, idCaseDestination, false, 'seule');undefined;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_deplacer');?>
<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'action_aide_deplacer_seule');?>
" class="align-self-center cursor-help tooltipster" style="display:block;float:right;margin-left:0px;"><i class="fa fa-question-circle" aria-hidden="true"></i></div></a>
	<a href="javascript:windowPatienter();xajax_moveCasePeriode(idCaseEnCoursDeplacement, idCaseDestination, false, 'toutes');undefined;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_deplacer_toutestaches');?>
<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'action_aide_deplacer_toutestaches');?>
" class="align-self-center cursor-help tooltipster" style="display:block;float:right;margin-left:0px;"><i class="fa fa-question-circle" aria-hidden="true"></i></div></a>
	<a href="javascript:windowPatienter();xajax_moveCasePeriode(idCaseEnCoursDeplacement, idCaseDestination, true);undefined;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_copier');?>
</a>
	<a href="javascript:masquerSousMenu('divChoixDragNDrop');document.location.reload();"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_annuler');?>
</a>
</div>
<?php echo '<script'; ?>
>

Reloader.init(<?php echo @constant('CONFIG_REFRESH_TIMER');?>
);

<?php if (isset($_smarty_tpl->tpl_vars['direct_periode_id']->value)) {?>
	addEvent(window, 'load', function(){xajax_modifPeriode(<?php echo $_smarty_tpl->tpl_vars['direct_periode_id']->value;?>
)});
<?php }?>

var js_choisirProjet = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_choisirProjet'));?>
';
var js_choisirUtilisateur = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_choisirUtilisateur'));?>
';
var js_choisirDateDebut = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_choisirDateDebut'));?>
';
var js_saisirFormatDate = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_saisirFormatDate'));?>
';
var js_dateFinInferieure = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_dateFinInferieure'));?>
';
var js_deposerCaseSurDate = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_deposerCaseSurDate'));?>
';
var js_deplacementOk = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_deplacementOk'));?>
';
var js_patienter = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_patienter'));?>
';
var idDrag;
var dragElementParent;
var oldDragBorder;
var displayMode = <?php echo json_encode($_smarty_tpl->tpl_vars['modeAffichage']->value);?>
;
var dateDebut = <?php echo json_encode($_smarty_tpl->tpl_vars['dateDebut']->value);?>
;
var dateFin = <?php echo json_encode($_smarty_tpl->tpl_vars['dateFin']->value);?>
;

	// Gestion du filtre Projet
		$("#filtreGroupeProjet").multiselect({
			selectAll:false,
			noUpdatePlaceholderText:true,
			search   : true,
			nameSuffix: 'projet',
			desactivateUrl: 'process/planning.php?desactiverFiltreGroupeProjet=1',
			placeholder: '<i class="fa fa-book fa-lg fa-fw" aria-hidden="true"></i><span class="d-none d-md-inline-block">&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_filtreProjets');?>
</span>',
			texts: {
				selectAll    : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreProjetCocherTous');?>
',
				unselectAll    : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreProjetDecocherTous');?>
',
				disableFilter : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreProjetDesactiver');?>
',
				validateFilter : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit');?>
',
				search : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'search');?>
'
			},
		});
		$("#filtreGroupeProjet").show();
	// Gestion du filtre User
		$("#filtreUser").multiselect({
			selectAll:false,
			noUpdatePlaceholderText:true,
			search   : true,
			nameSuffix: 'user',
			desactivateUrl: 'process/planning.php?desactiverFiltreUser=1',
			placeholder: '<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i><span class="d-none d-md-inline-block">&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formChoixUser');?>
</span>',
			texts: {
				selectAll    : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserCocherTous');?>
',
				unselectAll    : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserDecocherTous');?>
',
				disableFilter : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserDesactiver');?>
',
				validateFilter : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit');?>
',
				search : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'search');?>
'
			},
		});
		$("#filtreUser").show();
	// Ajout des boutons de scroll de planning
	var e = $("#divConteneurPlanning").get(0);
	if (e.scrollWidth > e.clientWidth)
	{
		
		<?php if ($_smarty_tpl->tpl_vars['fleches']->value == 1) {?>
		
			$('#left-scroll').show();
			$('#right-scroll').show();
			$('#right-button').click(function() {
				window.scrollBy({
				    top: 0,
					left: 800,
					behavior : "smooth"
				});
			});
			$('#left-button').click(function() {
				window.scrollBy({
				    top: 0,
					left: -800,
					behavior : "smooth"
				});
			});
		
		<?php }?>
		
	}
		
		<?php if ($_smarty_tpl->tpl_vars['baseligne']->value == "heures") {?>
			
				$('#divConteneurPlanning').attr('style','overflow:visible');
			
		<?php }?>		
	
	// Affichage du formulaire période si clic sur case vide
	$('#tabContenuPlanning td.week,#tabContenuPlanning td.weekend,#tabContenuPlanning .cellProject,#tabContenuPlanning .cellProjectBiseau1, #tabContenuPlanning .cellProjectBiseau2').click(function(ev){
		ev.preventDefault();
		if (!$(this).hasClass("read-only")){
			if ($(this).hasClass("cellProject") || $(this).hasClass("cellProjectBiseau1")  || $(this).hasClass("cellProjectBiseau2")) {
				cellClic(this.id,0);
			} else {
				<?php if (isset($_smarty_tpl->tpl_vars['droitAjoutPeriode']->value) && $_smarty_tpl->tpl_vars['droitAjoutPeriode']->value == true) {?>
				cellClic(this.id,1);
				<?php }?>

			}
			return false;
		};	
	});
	
		
	function resizeDivConteneur()
	{

	}

	// Gestion du cookie de positionnement
	function writeCookie(displayMode){
		if (displayMode == 'mois'){
			document.cookie='yposMoisWin=' + window.pageYOffset;
			document.cookie='xposMoisWin=' + window.pageXOffset;
		}else if (displayMode == 'jour'){
			document.cookie='yposJoursWin=' + window.pageYOffset;
			document.cookie='xposJoursWin=' + window.pageXOffset;
		}
	}
	
	// Mémorisation scrolling
	<?php if (isset($_COOKIE['dateDebut'])) {?>
		var cookieDateDebut = '<?php echo $_COOKIE['dateDebut'];?>
';
	<?php } else { ?>
		var cookieDateDebut = 0;
	<?php }?>
	<?php if (isset($_COOKIE['dateFin'])) {?>
		var cookieDateFin = '<?php echo $_COOKIE['dateFin'];?>
';
	<?php } else { ?>
		var cookieDateFin = 0;
	<?php }?>
	
	if (dateDebut != cookieDateDebut || dateFin != cookieDateFin)  
	{
		document.cookie='dateDebut=' + dateDebut ;
		document.cookie='dateFin=' + dateFin ;
		document.cookie='xposMoisWin=0';
		document.cookie='xposJoursWin=0';
		document.cookie='yposMoisWin=0';
		document.cookie='yposJoursWin=0';
	}
	// Récuperation
	if (displayMode == 'mois')
	{
		
		<?php if (isset($_COOKIE['xposMoisWin'])) {?>
			var xscrollWin = <?php echo $_COOKIE['xposMoisWin'];?>
;
		<?php } else { ?>
			var xscrollWin = 0;
		<?php }?>
		<?php if (isset($_COOKIE['yposMoisWin'])) {?>
			var yscrollWin = <?php echo $_COOKIE['yposMoisWin'];?>
;
		<?php } else { ?>
			var yscrollWin = 0;
		<?php }?>
		
	}else if (displayMode == 'jour'){
		
		<?php if (isset($_COOKIE['xposJoursWin'])) {?>
			var xscrollWin = <?php echo $_COOKIE['xposJoursWin'];?>
;
		<?php } else { ?>
			var xscrollWin = 0;
		<?php }?>
		<?php if (isset($_COOKIE['yposJoursWin'])) {?>
			var yscrollWin = <?php echo $_COOKIE['yposJoursWin'];?>
;
		<?php } else { ?>
			var yscrollWin = 0;
		<?php }?>
		
	}
	window.scroll(xscrollWin,yscrollWin);
	window.onscroll = function() {writeCookie(displayMode)};
	
			

			resizeDivConteneur();
		
	// Onload
	jQuery(function() {
		<?php if ($_SESSION['isMobileOrTablet'] == 0) {?>
		
		// hack pour empecher fermeture du layer au click sur les boutons du calendrier1
		$("#ui-datepicker-div").click( function(event) {
			event.stopPropagation();
		});
		jQuery('#dropdownDateSelector .dropdown-menu').on({
		"click":function(e){
				e.stopPropagation();
			}
		});
		
		<?php }?>
	});
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:www_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
