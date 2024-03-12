<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./styles/sanaya.css" media="screen" >
		<title>Libellés des produits en promotion</title>

	</head>

	<body>
		
		<?php
		
			$intitulesProduits = array( 
			
				"Pipette Compte-Goutte" ,
				"Capsule aluminium 20/410" ,
				"Capsule service 20/410" , 
				"Bandelettes PH - Boîte de 50" ,
				"Spatule Inox"
			
			) ;
		
		?>
		
		
		<h1>Libellés des produits en promotion</h1>
		
        <ol>

			
				<?php for( $i=0 ; $i<count($intitulesProduits) ; $i=$i+1){ ?>
					<li><?=  $intitulesProduits[$i] ?></li>

				<?php } ?>





		</ol>
		<p><a href="../index.html" target="_blank">Page d'acceuil</a></p>
		
	</body>
	
</html>
