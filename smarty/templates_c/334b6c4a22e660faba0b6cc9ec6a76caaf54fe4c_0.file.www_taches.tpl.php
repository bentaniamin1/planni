<?php
/* Smarty version 3.1.32, created on 2024-05-14 09:08:11
  from '/home/planning/public_html/templates/www_taches.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_66430ddb7df5a5_12408751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '334b6c4a22e660faba0b6cc9ec6a76caaf54fe4c' => 
    array (
      0 => '/home/planning/public_html/templates/www_taches.tpl',
      1 => 1616428698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:www_header.tpl' => 1,
    'file:www_footer.tpl' => 1,
  ),
),false)) {
function content_66430ddb7df5a5_12408751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/planning/public_html/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_subTemplateRender("file:www_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
	<?php if (!in_array("tasks_readonly",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box">
				<div class="btn-group">
					<a href="javascript:xajax_ajoutPeriode();undefined;" class="btn btn-default"><i class="fa fa-calendar-plus-o fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuAjouterPeriode');?>
</a>
				</div>				
			</div>
		</div>
	</div>
	<?php }?>
	<form action="taches.php" method="POST" id="filtreTaches">
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box mt-2">
				<div class="form-group row col-md-12">
					<label class="col-form-label w100"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_filtreDate');?>
 :</label>
					<div class="form-inline">
					&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formDebut');?>
 :&nbsp;&nbsp;
						<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
							<input name="date_debut_affiche_tache" id="date_debut_affiche_tache" type="date" value="<?php echo forceISODateFormat($_smarty_tpl->tpl_vars['dateDebut']->value);?>
" class="form-control" />
						<?php } else { ?>
							<input name="date_debut_affiche_tache" id="date_debut_affiche_tache" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dateDebut']->value;?>
" class="form-control datepicker" />
						<?php }?>
					&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFin');?>
 :&nbsp;&nbsp;
						<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
						<input name="date_fin_affiche_tache" id="date_fin_affiche_tache" type="date" value="<?php echo forceISODateFormat($_smarty_tpl->tpl_vars['dateFin']->value);?>
" class="form-control" />
						<?php } else { ?>
						<input name="date_fin_affiche_tache" id="date_fin_affiche_tache" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dateFin']->value;?>
" class="form-control datepicker" />
						<?php }?>
				<button id="dateFilterButtonTask" class="btn btn-default ml-2" onClick="$('filtreTaches').submit();"><i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i></button>
					</div>
						<div id="taskListGroupeLabel">
					<label class="col-form-label offset-md-2 w100"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_groupeTaches');?>
 :</label>
				</div>
				<div id="taskListGroupeButton">
				<div class="btn-group" data-toggle="buttons-radio">
					<button type="button" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['grouperpar']->value == 'status') {?> btn-primary active<?php }?>" onclick="top.location='?grouperpar=status';"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_groupeStatus');?>
</button>
					<button type="button" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['grouperpar']->value == 'project') {?> btn-primary active<?php }?>" onclick="top.location='?grouperpar=project';"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_groupeProjet');?>
</button>
					<button type="button" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['grouperpar']->value == 'utilisateur') {?> btn-primary active<?php }?>" onclick="top.location='?grouperpar=utilisateur';"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_groupeUtilisateur');?>
</button>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box">
					<div id="taskListFiltreLabel">
					<label class="col-form-label w100"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_filtreTaches');?>
 :</label>
					</div>
					<div id="taskListFiltreButton">
					<div class="btn-group" data-toggle="buttons-radio">
						<button type="button" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['filtreTaches']->value == 'mestaches') {?> btn-primary active<?php }?>" onclick="top.location='?filtreTaches=mestaches';"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_MesTaches');?>
</button>
						<button type="button" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['filtreTaches']->value == 'tous') {?> btn-primary active<?php }?>" onclick="top.location='?filtreTaches=tous';"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_ToutesTaches');?>
</button>
					</div>				
					<div class="btn-group" id="dropdownTaskProjectFilter">
						<input type="hidden" name="filtreGroupeProjet" value="1" />
						<select name="filtreGroupeProjet" multiple="multiple" id="filtreGroupeProjet" class="d-none multiselect">
							<?php if (count($_smarty_tpl->tpl_vars['listeProjets']->value) == 0) {?>
								<option>&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreProjetAucunProjet');?>
</option>
							<?php } else { ?>
								<optgroup id="g0" label="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_sansGroupes');?>
">
								<?php $_smarty_tpl->_assignInScope('groupeTemp', '');?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeProjets']->value, 'projetCourant', false, NULL, 'loopProjets', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['projetCourant']->value) {
?>
									<?php if ($_smarty_tpl->tpl_vars['projetCourant']->value['groupe_id'] != $_smarty_tpl->tpl_vars['groupeTemp']->value) {?>
										</optgroup><optgroup id="g<?php echo $_smarty_tpl->tpl_vars['projetCourant']->value['groupe_id'];?>
" label="<?php echo $_smarty_tpl->tpl_vars['projetCourant']->value['groupe_nom'];?>
">
									<?php }?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['projetCourant']->value['projet_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['projetCourant']->value['projet_id'],$_smarty_tpl->tpl_vars['filtreGroupeProjet']->value)) {?>selected="selected"<?php }?>><?php echo xss_protect($_smarty_tpl->tpl_vars['projetCourant']->value['nom']);?>
 (<?php echo xss_protect($_smarty_tpl->tpl_vars['projetCourant']->value['projet_id']);?>
)</option> 								
								<?php $_smarty_tpl->_assignInScope('groupeTemp', $_smarty_tpl->tpl_vars['projetCourant']->value['groupe_id']);?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
							</optgroup></select>
					</div>

					<div class="btn-group" id="dropdownTaskUserFilter">
						<input type="hidden" name="filtreUser" value="1" />
						<select name="filtreUser" multiple="multiple" id="filtreUser" class="d-none multiselect">
							<?php if (count($_smarty_tpl->tpl_vars['users']->value) == 0) {?>
								<option>&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreProjetAucunProjet');?>
</option>
							<?php } else { ?>
								<optgroup id="e0" label="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cocheUserSansGroupe');?>
">
								<?php $_smarty_tpl->_assignInScope('groupeTemp', '');?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'userCourant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['userCourant']->value) {
?>
									<?php if ($_smarty_tpl->tpl_vars['userCourant']->value['user_groupe_id'] != $_smarty_tpl->tpl_vars['groupeTemp']->value) {?>
										</optgroup><optgroup id="e<?php echo $_smarty_tpl->tpl_vars['userCourant']->value['user_groupe_id'];?>
" label="<?php echo $_smarty_tpl->tpl_vars['userCourant']->value['groupe_nom'];?>
">
									<?php }?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['userCourant']->value['user_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['userCourant']->value['user_id'],$_smarty_tpl->tpl_vars['filtreUser']->value)) {?>selected="selected"<?php }?>><?php echo xss_protect($_smarty_tpl->tpl_vars['userCourant']->value['nom']);?>
 (<?php echo xss_protect($_smarty_tpl->tpl_vars['userCourant']->value['user_id']);?>
)</option> 								
								<?php $_smarty_tpl->_assignInScope('groupeTemp', $_smarty_tpl->tpl_vars['userCourant']->value['user_groupe_id']);?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
							</optgroup></select>
					</div>
					
					<div class="btn-group" id="dropdownTaskLieuxFilter">
																				<?php if (@constant('CONFIG_SOPLANNING_OPTION_LIEUX') == 1 && (count($_smarty_tpl->tpl_vars['listeLieux']->value)) > 0) {?>
										<button class="btn <?php if (count($_smarty_tpl->tpl_vars['filtreGroupeLieu']->value) > 0) {?>btn-danger<?php } else { ?>btn-default<?php }?> dropdown-toggle" data-toggle="dropdown" data-display="static"><i class="fa fa-map-marker fa-lg fa-fw" aria-hidden="true"></i><span class="d-none d-md-inline-block">&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_filtreLieux');?>
</span></button>
										<ul class="dropdown-menu">
										<li>
										<table onClick="event.cancelBubble=true;" class="planning-filter"><tr>
										<td class="planningDropdownFilter">											
											<input type="hidden" name="filtreGroupeLieu" value="1">
											<input type="hidden" name="maxGroupeLieu" value="<?php echo count($_smarty_tpl->tpl_vars['listeLieux']->value);?>
">
												<div class="form-horizontal col-md-12">
												<?php $_smarty_tpl->_assignInScope('groupeTemp', '');?>
												<?php echo smarty_function_math(array('assign'=>'nbColonnes','equation'=>"ceil(nbLieux / nbLieuxParColonnes)",'nbLieux'=>count($_smarty_tpl->tpl_vars['listeLieux']->value),'nbLieuxParColonnes'=>@constant('FILTER_NB_AERA_PER_COLUMN')),$_smarty_tpl);?>

												<?php echo smarty_function_math(array('assign'=>'maxCol','equation'=>"ceil(nbLieux / nbColonnes)",'nbLieux'=>count($_smarty_tpl->tpl_vars['listeLieux']->value),'nbColonnes'=>$_smarty_tpl->tpl_vars['nbColonnes']->value),$_smarty_tpl);?>

												<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', "0");?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeLieux']->value, 'lieuCourant', false, NULL, 'loopLieux', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lieuCourant']->value) {
?>
													<?php if ($_smarty_tpl->tpl_vars['tmpNbDansColCourante']->value >= $_smarty_tpl->tpl_vars['maxCol']->value) {?>
														<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', "0");?>
														</td>
													<td class="planningDropdownFilter">
													<?php }?>
													<label class="checkbox">
														<input type="checkbox" id="lieu_<?php echo $_smarty_tpl->tpl_vars['lieuCourant']->value['lieu_id'];?>
" name="lieu[]" value="<?php echo $_smarty_tpl->tpl_vars['lieuCourant']->value['lieu_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['lieuCourant']->value['lieu_id'],$_smarty_tpl->tpl_vars['filtreGroupeLieu']->value)) {?>checked="checked"<?php }?> /> <?php echo xss_protect($_smarty_tpl->tpl_vars['lieuCourant']->value['nom']);?>

													</label>	
													<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', $_smarty_tpl->tpl_vars['tmpNbDansColCourante']->value+1);?>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</div>
											</td>
											</tr></table>
										</li>
										<li><input type="submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit');?>
" class="btn btn-default ml-2" /></li>
										</ul>
										<?php }?>							
					</div>										
																				<?php if (@constant('CONFIG_SOPLANNING_OPTION_RESSOURCES') == 1 && (count($_smarty_tpl->tpl_vars['listeRessources']->value)) > 0) {?>									
					<div class="btn-group" id="dropdownTaskRessourceFilter">						
						<button class="btn <?php if (count($_smarty_tpl->tpl_vars['filtreGroupeRessource']->value) > 0) {?>btn-danger<?php } else { ?>btn-default<?php }?> dropdown-toggle" data-toggle="dropdown" data-display="static"><i class="fa fa-plug fa-lg fa-fw" aria-hidden="true"></i><span class="d-none d-md-inline-block">&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_filtreRessources');?>
</span></button>
										<ul class="dropdown-menu">
										<li>
										<table onClick="event.cancelBubble=true;" class="planning-filter"><tr>
											<td class="planningDropdownFilter">
											<input type="hidden" name="maxGroupeRessource" value="<?php echo count($_smarty_tpl->tpl_vars['listeRessources']->value);?>
">
											<input type="hidden" name="filtreGroupeRessource" value="1">
												<div class="form-horizontal col-md-12">
												<?php $_smarty_tpl->_assignInScope('groupeTemp', '');?>
												<?php echo smarty_function_math(array('assign'=>'nbColonnes','equation'=>"ceil(nbRessources / nbRessourcesParColonnes)",'nbRessources'=>count($_smarty_tpl->tpl_vars['listeRessources']->value),'nbRessourcesParColonnes'=>@constant('FILTER_NB_RESSOURCES_PER_COLUMN')),$_smarty_tpl);?>

												<?php echo smarty_function_math(array('assign'=>'maxCol','equation'=>"ceil(nbRessources / nbColonnes)",'nbRessources'=>count($_smarty_tpl->tpl_vars['listeRessources']->value),'nbColonnes'=>$_smarty_tpl->tpl_vars['nbColonnes']->value),$_smarty_tpl);?>

												<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', "0");?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeRessources']->value, 'ressourceCourant', false, NULL, 'loopRessources', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ressourceCourant']->value) {
?>
													<?php if ($_smarty_tpl->tpl_vars['tmpNbDansColCourante']->value >= $_smarty_tpl->tpl_vars['maxCol']->value) {?>
														<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', "0");?>
														</td>
														<td class="planningDropdownFilter">
													<?php }?>
													<label class="checkbox">
														<input type="checkbox" id="ressource_<?php echo $_smarty_tpl->tpl_vars['ressourceCourant']->value['ressource_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['ressourceCourant']->value['ressource_id'];?>
" name="ressource[]" <?php if (in_array($_smarty_tpl->tpl_vars['ressourceCourant']->value['ressource_id'],$_smarty_tpl->tpl_vars['filtreGroupeRessource']->value)) {?>checked="checked"<?php }?> /> <?php echo xss_protect($_smarty_tpl->tpl_vars['ressourceCourant']->value['nom']);?>

													</label>
													<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', $_smarty_tpl->tpl_vars['tmpNbDansColCourante']->value+1);?>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</div>
											</td>
											</tr></table>
											</li>
											<li><input type="submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit');?>
" class="btn btn-default ml-2" /></li>
											</ul>
											</div>
										<?php }?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box">
					<div id="taskStatusLabel">
					<label class="col-form-label w140"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_filtreStatut');?>
 :</label>
					</div>
					<div id="taskStatusCheckbox">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeStatusTaches']->value, 'statut');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['statut']->value) {
?>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="statut[]" id="<?php echo $_smarty_tpl->tpl_vars['statut']->value['status_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['statut']->value['status_id'];?>
" onclick="$('#filtreTaches').submit();" <?php if (in_array($_smarty_tpl->tpl_vars['statut']->value['status_id'],$_smarty_tpl->tpl_vars['listeStatuts']->value)) {?>checked="checked"<?php }?>>
						<label class="form-check-label" for="<?php echo $_smarty_tpl->tpl_vars['statut']->value['status_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['statut']->value['nom'];?>
</label>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<div class="btn-group" id="taskSearchbox" >
						<div class="input-group">
							<input type="text" class="form-control input-sm" name="rechercheTaches" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['rechercheTaches']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_groupeRecherche');?>
" />
							<span class="input-group-append">
								<button class="btn <?php if ($_smarty_tpl->tpl_vars['rechercheTaches']->value != '') {?>btn-danger<?php } else { ?>btn-default<?php }?>" type="submit"><i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i></button>
							</span>
						</div>
					</div>
					</div>
			</div>
		</div>
	</div>
	</form>
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box mt-2">
				<table class="table table-striped table-hover" id="taskTab">
					<thead>
					<tr>
						<th colspan="3">
							<?php if ($_smarty_tpl->tpl_vars['order']->value == "nom") {?>
								<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
									<a href="?order=nom&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_liste_taches');?>
 (<?php echo count($_smarty_tpl->tpl_vars['projets']->value);?>
)</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
								<?php } else { ?>
									<a href="?order=nom&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_liste_taches');?>
 (<?php echo count($_smarty_tpl->tpl_vars['projets']->value);?>
)</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
								<?php }?>
							<?php } else { ?>
								<a href="?order=nom&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_liste_taches');?>
 (<?php echo count($_smarty_tpl->tpl_vars['projets']->value);?>
)</a>
							<?php }?>
						</th>
						<th class="taskTabColTitre">
							<?php if ($_smarty_tpl->tpl_vars['order']->value == "titre") {?>
								<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
									<a href="?order=titre&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_tache');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
								<?php } else { ?>
									<a href="?order=titre&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_tache');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
								<?php }?>
							<?php } else { ?>
								<a href="?order=titre&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_tache');?>
</a>
							<?php }?>
						</th>
						<th class="taskTabColCreator">
							<?php if ($_smarty_tpl->tpl_vars['order']->value == "nom_personne") {?>
								<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
									<a href="?order=nom_personne&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_personne');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
								<?php } else { ?>
									<a href="?order=nom_personne&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_personne');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
								<?php }?>
							<?php } else { ?>
								<a href="?order=nom_personne&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_personne');?>
</a>
							<?php }?>
						</th>

						<th class="wrap d-none d-lg-table-cell">
							<?php if ($_smarty_tpl->tpl_vars['order']->value == "date_debut") {?>
								<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
									<a href="?order=date_debut&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_date_debut');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
								<?php } else { ?>
									<a href="?order=date_debut&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_date_debut');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
								<?php }?>
							<?php } else { ?>
								<a href="?order=date_debut&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_date_debut');?>
</a>
							<?php }?>
						</th>
						<th class="wrap d-none d-lg-table-cell">
							<?php if ($_smarty_tpl->tpl_vars['order']->value == "date_fin") {?>
								<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
									<a href="?order=date_fin&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_date_fin');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
								<?php } else { ?>
									<a href="?order=date_fin&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_date_fin');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
								<?php }?>
							<?php } else { ?>
								<a href="?order=date_fin&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_date_fin');?>
</a>
							<?php }?>
						</th>
						<th class="wrap d-none d-md-table-cell d-lg-table-cell">
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_commentaires');?>

						</th>
					</tr>
					</thead>
					<tbody>
					<?php if ($_smarty_tpl->tpl_vars['grouperpar']->value == 'project') {?>
						<?php $_smarty_tpl->_assignInScope('projetCourant', '');?>
					<?php } elseif ($_smarty_tpl->tpl_vars['grouperpar']->value == 'status') {?>
						<?php $_smarty_tpl->_assignInScope('statutCourant', '');?>
					<?php } elseif ($_smarty_tpl->tpl_vars['grouperpar']->value == 'utilisateur') {?>
						<?php $_smarty_tpl->_assignInScope('personneCourant', '');?>
					<?php }?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projets']->value, 'projet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['projet']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['grouperpar']->value == 'project') {?>
							<?php if ($_smarty_tpl->tpl_vars['projet']->value['projet_id'] != $_smarty_tpl->tpl_vars['projetCourant']->value) {?>
								<tr>
								<td colspan="8" class="task-group-head"><?php echo xss_protect($_smarty_tpl->tpl_vars['projet']->value['nom']);?>
</td>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['grouperpar']->value == 'status') {?>
							<?php if ($_smarty_tpl->tpl_vars['projet']->value['statut_tache'] != $_smarty_tpl->tpl_vars['statutCourant']->value) {?>
								<tr>
								<td colspan="8" class="task-group-head">
									<?php echo $_smarty_tpl->tpl_vars['projet']->value['status_nom'];?>

								</td>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['grouperpar']->value == 'utilisateur') {?>
							<?php if ($_smarty_tpl->tpl_vars['projet']->value['nom_personne'] != $_smarty_tpl->tpl_vars['personneCourant']->value) {?>
								<tr>
								<td colspan="8" class="task-group-head"><?php echo $_smarty_tpl->tpl_vars['projet']->value['nom_personne'];?>
</td>
							<?php }?>
						<?php }?>
						<tr>
							<td style="background-color:#<?php echo $_smarty_tpl->tpl_vars['projet']->value['couleur'];?>
;color:<?php echo buttonFontColor(("#").($_smarty_tpl->tpl_vars['projet']->value['couleur']));?>
"><?php echo $_smarty_tpl->tpl_vars['projet']->value['projet_id'];?>
</td>
							<td class="w140">
								<?php if (in_array("tasks_modify_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) || (in_array("tasks_modify_own_project",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) && $_smarty_tpl->tpl_vars['projet']->value['createur_id'] == $_smarty_tpl->tpl_vars['user']->value['user_id']) || (in_array("tasks_modify_own_task",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) && ($_smarty_tpl->tpl_vars['projet']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value['user_id']) || $_smarty_tpl->tpl_vars['projet']->value['createur_id'] == $_smarty_tpl->tpl_vars['user']->value['user_id']) || (in_array("tasks_modify_team",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) && $_smarty_tpl->tpl_vars['user']->value['user_groupe_id'] == $_smarty_tpl->tpl_vars['projet']->value['user_groupe_id'])) {?>									<a href="javascript:xajax_modifPeriode('<?php echo $_smarty_tpl->tpl_vars['projet']->value['periode_id'];?>
');undefined;"><i class="fa fa-pencil fa-lg fa-fw" aria-hidden="true"></i></a>
									<a href="javascript:xajax_supprimerPeriode('<?php echo $_smarty_tpl->tpl_vars['projet']->value['periode_id'];?>
');undefined;" 
									onclick="javascript: return confirm('<?php echo strtr($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_tache_confirmSuppr'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"><i class="fa fa-trash-o fa-lg fa-fw" aria-hidden="true"></i></a>
								<?php }?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/process/planning.php?filtreSurProjet=<?php echo $_smarty_tpl->tpl_vars['projet']->value['projet_id'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_filtre_sur_projet'), ENT_QUOTES, 'ISO-8859-1', true);?>
"><i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i></a>
								<?php if ($_smarty_tpl->tpl_vars['projet']->value['lien'] <> '') {?>
								<a href="<?php if (strpos($_smarty_tpl->tpl_vars['projet']->value['lien'],"http") !== 0 && strpos($_smarty_tpl->tpl_vars['projet']->value['lien'],"\\") !== 0) {?>http://<?php }
echo $_smarty_tpl->tpl_vars['projet']->value['lien'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_gotoLien'), ENT_QUOTES, 'ISO-8859-1', true);?>
" target="_blank"><i class="fa fa-globe fa-lg fa-fw" aria-hidden="true"></i></a>
								<?php } else { ?>
								<?php }?>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['grouperpar']->value != 'status') {?>
								<td>
								<?php echo $_smarty_tpl->tpl_vars['projet']->value['status_nom'];?>

								</td>
							<?php } else { ?>
							<td></td>
							<?php }?>
							<td class="taskTabColTitre">
								<?php echo xss_protect($_smarty_tpl->tpl_vars['projet']->value['titre']);?>

							</td>
							<td class="taskTabColCreator">
								<?php echo xss_protect($_smarty_tpl->tpl_vars['projet']->value['nom_personne']);?>

							</td>
							<td class="wrap d-none d-lg-table-cell">
								<?php if ($_smarty_tpl->tpl_vars['projet']->value['date_debut'] != '' && $_smarty_tpl->tpl_vars['projet']->value['date_debut'] != '0000-00-00') {?>
									<?php echo sqldate2userdate($_smarty_tpl->tpl_vars['projet']->value['date_debut']);?>

								<?php }?>
							</td>
							<td class="wrap d-none d-lg-table-cell">
								<?php if ($_smarty_tpl->tpl_vars['projet']->value['date_fin'] != '' && $_smarty_tpl->tpl_vars['projet']->value['date_debut'] != '0000-00-00') {?>
									<?php echo sqldate2userdate($_smarty_tpl->tpl_vars['projet']->value['date_fin']);?>

								<?php } else { ?>
									<?php if ($_smarty_tpl->tpl_vars['projet']->value['duree_details'] == 'AM') {?>
										<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_dureeDefautMatin');?>

									<?php } elseif ($_smarty_tpl->tpl_vars['projet']->value['duree_details'] == 'PM') {?>
										<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_dureeDefautApresmidi');?>

									<?php } elseif ($_smarty_tpl->tpl_vars['projet']->value['duree_details'] == 'duree') {?>
										<?php echo $_smarty_tpl->tpl_vars['projet']->value['duree'];?>
									
									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['projet']->value['duree_details'];?>

									<?php }?>	
								<?php }?>
							</td>
							<td class="wrap d-none d-md-table-cell d-lg-table-cell"><?php echo xss_protect($_smarty_tpl->tpl_vars['projet']->value['notes']);?>
</td>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['grouperpar']->value == 'project') {?>
							<?php $_smarty_tpl->_assignInScope('projetCourant', $_smarty_tpl->tpl_vars['projet']->value['projet_id']);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['grouperpar']->value == 'status') {?>
							<?php $_smarty_tpl->_assignInScope('statutCourant', $_smarty_tpl->tpl_vars['projet']->value['statut_tache']);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['grouperpar']->value == 'utilisateur') {?>
							<?php $_smarty_tpl->_assignInScope('personneCourant', $_smarty_tpl->tpl_vars['projet']->value['nom_personne']);?>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<?php echo '<script'; ?>
>
	

	var yscroll = getCookie('yposTaches');
	window.onscroll = function() {document.cookie='yposTaches=' + window.pageYOffset;};
	addEvent(window, 'load', chargerYScrollPos);
	$('#rechercheTaches').keypress(function(event) {
		if (event.keyCode == 13 || event.which == 13) {
			$('#filtreTaches').submit();
			event.preventDefault();
		}
	});
	
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
var listeProjets = new Array();
listeProjets[0] = new Array();
<?php $_smarty_tpl->_assignInScope('groupeTemp', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeProjets']->value, 'projetCourant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['projetCourant']->value) {
?>
	<?php if ($_smarty_tpl->tpl_vars['projetCourant']->value['groupe_id'] != $_smarty_tpl->tpl_vars['groupeTemp']->value) {?>
		listeProjets[<?php echo $_smarty_tpl->tpl_vars['projetCourant']->value['groupe_id'];?>
] = new Array();
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['projetCourant']->value['groupe_id'] == '') {?>
		listeProjets[0].push('<?php echo $_smarty_tpl->tpl_vars['projetCourant']->value['projet_id'];?>
');
	<?php } else { ?>
		listeProjets[<?php echo $_smarty_tpl->tpl_vars['projetCourant']->value['groupe_id'];?>
].push('<?php echo $_smarty_tpl->tpl_vars['projetCourant']->value['projet_id'];?>
');
	<?php }?>
	<?php $_smarty_tpl->_assignInScope('groupeTemp', $_smarty_tpl->tpl_vars['projetCourant']->value['groupe_id']);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


// coche ou decoche tous les projets
function filtreGroupeProjetCocheTous(action) {
	for (var groupe in listeProjets) {
		if (!document.getElementById('g' + groupe)) {
			// si pas une case ? cocher existantes, on sort
			continue;
		}
		document.getElementById('g' + groupe).checked = action;
		for (var projet in listeProjets[groupe]) {
			if (!document.getElementById('projet_' + listeProjets[groupe][projet])) {
				// si pas une case ? cocher existantes, on sort
				continue;
			}
			document.getElementById('projet_' + listeProjets[groupe][projet]).checked = action;
		}
	}
}

// coche ou decoche les projets d'un groupe
function filtreCocheGroupe(groupe) {
	var action = document.getElementById('g' + groupe).checked;
	for (var projet in listeProjets[groupe]) {
		if (!document.getElementById('projet_' + listeProjets[groupe][projet])) {
			// si pas une case ? cocher existantes, on sort
			continue;
		}
		document.getElementById('projet_' + listeProjets[groupe][projet]).checked = action;
	}
}


$("#filtreGroupeProjet").multiselect({
	selectAll:false,
	noUpdatePlaceholderText:true,
	nameSuffix: 'projet',
	desactivateUrl: 'taches.php?desactiverFiltreGroupeProjet=1',
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

$("#filtreUser").multiselect({
	selectAll:false,
	noUpdatePlaceholderText:true,
	nameSuffix: 'user',
	desactivateUrl: 'taches.php?desactiverFiltreUser=1',
	placeholder: '<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i><span class="d-none d-md-inline-block">&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formChoixUser');?>
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
$("#filtreUser").show();
$(document).scroll(function() {
	$(".ms-search").css({'position': 'relative'});
	$(".ms-options-wrap > .ms-options > ul").css({'margin-top': '0px'});
});
$(".ms-options").scroll(function() {
	$(".ms-search").css({'position': 'fixed'});
	$(".ms-options-wrap > .ms-options > ul").css({'margin-top': '70px'});
});		

<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:www_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
