<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./styles/sanaya.css" media="screen" >
		<title>Produits en promotion version tableau associatifs</title>

	</head>

	<body>
		
		<?php
		
			$intitules = array( 
			
				"Pipette Compte-Goutte" ,
				"Capsule aluminium 20/410" ,
				"Capsule service 20/410" , 
				"Bandelettes PH - Boîte de 50" ,
				"Spatule Inox"
			
			) ;
			
			$categories = array(
			
				"Accessoire" ,
				"Flaconnage" ,
				"Flaconnage" ,
				"Fabrication" ,
				"Fabrication"
				
			) ;
			
			$prix = array(
			
				1 ,
				0.2 ,
				0.25 ,
				2.9 ,
				1.9
			
			) ;
		
		?>
		
		
		<h1>Produits en promotion version tableau associatifs</h1>
		
        
        <table border="1">
			<thead>
				<tr>
					<th>Intitules</th>
					<th>Categories</th>
					<th>Prix</th>
				</tr>
			</thead>
			<tbody>
				<?php for($i=0 ; $i<count($intitules) ; $i=$i+1){?>
					<tr>
						<td><?= $intitules[$i] ?></td>
						<td><?= $categories[$i] ?></td>
						<td><?= $prix[$i] ?></td>

				
				
					</tr>
				<?php }?>

				


			</tbody>
		</table>
		<p><a href="/index.html" target="_blank">Page d'acceuil</a></p>
		
	</body>
	
</html>
