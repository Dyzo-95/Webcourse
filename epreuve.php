<?php  $title = 'Inscription Coureur'; 
        require ('app/header.php');
        require ('app/function.php');
        require ('app/connect.php');
?>

<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="insertepr.php" method="POST">
            <table>
                
                <tr>
                    <td> Nom du coureur :</td>
                    <td><input type="text" name="nom" required></td>
                </tr>
                <tr>
                    <td> Prénom du coureur :</td>
                    <td><input type="text" name="prenom" required></td>
                </tr>
                <tr>
                    <td> Numéro du dossard :</td>
                    <td><input type="text" name="dossard" required></td>
                </tr>
                <tr>
                    <td> Taille maillot :</td>
                    <td>
                    <select name="Taille Maillot" id="Maillot">
						<option value="">--Taille Maillot--</option>
						<?php
							$getMaillot = getMaillot($conn);

							foreach ($getMaillot as $i) {
								echo '<option value="'
								.$i["ins_id"].
								'">'.$i["ins_taillemaillot"].'</option>';
							}
						?>
					</select>
                    </td>
                </tr>
                <tr>
                    <td> Catégorie :</td>
                    <td>
                    <select name="Nom de catégorie" id="Catégoriep">
						<option value="">--Catégorie--</option>
						<?php
							$getCategorie = getCategorie($conn);

							foreach ($getCategorie as $i) {
								echo '<option value="'
								.$i["cat_id"].
								'">'.$i["cat_nom"].'</option>';
							}
						?>
					</select>                
                    </td>
                </tr>
                <tr>
                    <td> Epreuve:</td>
                    <td><select name="Nom Epreuve" id="Epreuve">
						<option value="">--Epreuve--</option>
						<?php
							$getEpreuve = getEpreuve($conn);

							foreach ($getEpreuve as $i) {
								echo '<option value="'
								.$i["ep_id"].
								'">'.$i["ep_nom"].'</option>';
							}
						?>
					</select></td>
                </tr>
                <tr>
                    <td> M :</td>
                    <td><input type="phone" name="phone" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="Valider" value="Submit"></td>
                </tr>
            </table>
        </form>
        
	</body> 
</html>
