<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/sanaya.css" media="screen" >
		<title>Produits en promotion</title>

	</head>

	<body>
		
		<?php
		
			$produitsPromo = array( 
			
				"Pipette Compte-Goutte:Accessoire:1" ,
				"Capsule aluminium 20/410:Flaconnage:0.2" ,
				"Capsule service 20/410:Flaconnage:0.25" , 
				"Bandelettes PH - Boîte de 50:Fabrication:2.9" ,
				"Spatule Inox:Fabrication:1.9"
			
			) ;
		
		?>
		
		
		<h1>Produits en promotion</h1>
		<table border=1>
			 <tr>
            <th>Libellé</th>
            <th>Catégorie</th>
            <th>Prix</th>
        </tr>
        <?php
        foreach ($produitsPromo as $produits) {
            $extrait = explode(":", $produits);
            $libelle = $extrait[0];
            $categorie = $extrait[1];
            $prix = $extrait[2];
            echo "<tr>
                    <td>$libelle</td>
                    <td>$categorie</td>
                    <td>$prix €</td>
                </tr>";
        }
        ?>
        
    </table>
    <p><a href="/index.html" target="_blank">Page d'acceuil</a></p>
	</body>
	
</html>
