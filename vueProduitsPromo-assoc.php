<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styles/sanaya.css" media="screen" >
		<title>Produits en promotion version tableau associatif</title>

	</head>

	<body>
		<?php
		
			$produitsPromo = array(
			
				array(
				
					"intitule" => "Pipette Compte-Goutte" ,
					"categorie" => "Accessoire" ,
					"prix" => 1
				
				) ,
				
				array(
				
					"intitule" => "Capsule aluminium 20/410" ,
					"categorie" => "Flaconnage" ,
					"prix" => 0.2
				
				) ,
				
				array(
				
					"intitule" => "Capsule service 20/410" ,
					"categorie" => "Flaconnage" ,
					"prix" => 0.25
				
				) ,
				
				array(
				
					"intitule" => "Bandelettes PH - Boîte de 50" ,
					"categorie" => "Flaconnage" ,
					"prix" => 2.9
				
				) ,
				
				array(
				
					"intitule" => "Spatule Inox" ,
					"categorie" => "Fabrication" ,
					"prix" => 1.9
				
				)
				
			) ;
		
		?>
		
		
		<h1>Produits en promotion version tableau associatif</h1>
		
        
		<table border=1>
			 <tr>
            <th>Intitule</th>
            <th>Catégorie</th>
            <th>Prix</th>
        </tr>
		<p><a href="/index.html" target="_blank">Page d'acceuil</a></p>
		<?php
			foreach ($produitsPromo as $produits) {
				$libelle = $produits["intitule"];
				$categorie = $produits["categorie"];
				$prix = $produits["prix"];
				echo "<tr>
						<td>$libelle</td>
						<td>$categorie</td>
						<td>$prix €</td>
					</tr>";


			}
		?>
		
	</body>
	
</html>

