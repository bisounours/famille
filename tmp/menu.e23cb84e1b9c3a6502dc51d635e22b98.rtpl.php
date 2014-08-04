<?php if(!class_exists('raintpl')){exit;}?><div id="menu">
	<?php if( $connected_user ){ ?>

		Connecté (<a href="traitement/identification.php?fonction=deconnexion">D&eacute;connexion</a>)
	<?php }else{ ?>

		<a href="index.php?do=identification">Administration</a>
	<?php } ?>

</div>