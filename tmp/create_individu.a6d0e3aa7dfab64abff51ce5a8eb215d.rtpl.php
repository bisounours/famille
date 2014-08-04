<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("composant/head") . ( substr("composant/head",-1,1) != "/" ? "/" : "" ) . basename("composant/head") );?>


<!-- IMPORT DU STYLE CSS DE LA PAGE -->

<!-- IMPORT DU JS ET CSS DU DATEPICKER -->
<link rel="stylesheet" type="text/css" href="template/../lib/datepicker/css/datepicker.css">
<script type="text/javascript" src="template/../lib/datepicker/js/datepicker.js"></script>
<script type="text/javascript" src="template/../lib/datepicker/js/lang/fr.js"></script>

<!-- SECTION DE CREATION D'UNE OPERATION -->
<div id="div_create_individu" class="section section_haute">
	<h1>Ajouter un nouveau membre</h1>
	<table>
		<tr>
			<td>Nom :</td>
			<td><input type="text" id="txt_nom" name="txt_nom" class="input_large" data-type="string" data-label="Le nom" /></td>
		</tr>
		<tr>
			<td>Prenoms :</td>
			<td><input type="text" id="txt_prenoms" name="txt_prenoms" class="input_large" data-type="string" data-label="Les prénoms" /></td>
		</tr>
		<tr>
			<td>Date de naissance :</td>
			<td><input type="text" id="txt_date_naissance" name="txt_date_naissance" class="input_medium" data-type="date" data-label="La date de naissance" /></td>
		</tr>
		<tr>
			<td>Date de d&eacute;c&egrave;s :</td>
			<td><input type="text" id="txt_date_deces" name="txt_date_deces" class="input_medium" data-type="date" data-label="La date de décès" /></td>
		</tr>
		<tr>
			<td>P&egrave;re :</td>
			<td><input type="text" id="txt_date_deces" name="txt_date_deces" class="input_large" data-type="date" data-label="La date de décès" /></td>
		</tr>
		<tr>
			<td>M&egrave;re :</td>
			<td><input type="text" id="txt_date_deces" name="txt_date_deces" class="input_large" data-type="date" data-label="La date de décès" /></td>
		</tr>
	</table>
	<button id="btn_ajouter">Ajouter</button>
</div>

<!-- IMPORT DU FICHIER JS DE LA PAGE -->

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("composant/foot") . ( substr("composant/foot",-1,1) != "/" ? "/" : "" ) . basename("composant/foot") );?>