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
		<form action="inserteve.php" method="POST">
            <table>
                
                <tr>
                    <td> Nom :</td>
                    <td><input type="text" name="nom" required></td>
                </tr>
                <tr>
                    <td> Prénom :</td>
                    <td><input type="text" name="prenom" required></td>
                </tr>
                <tr>
                    <td> Adresse :</td>
                    <td><input type="text" name="adresse" required></td>
                </tr>
                <tr>
                    <td> Date de naissance :</td>
                    <td><input type="date" name="date" required></td>
                </tr>
                <tr>
                    <td> Genre :</td>
                    <td>
                        <input type="radio" name="genre" value="1" required>Homme
                        <input type="radio" name="genre" value="2" required>Femme                   
                    </td>
                </tr>
                <tr>
                    <td> Téléphone :</td>
                    <td><input type="phone" name="phone" required></td>
                </tr>
                <tr>
                    <td> Email :</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td> Numéro du dossard :</td>
                    <td><input type="text" name="dossard" required></td>
                </tr>
                <tr>
                    <td> Taille maillot :</td>
                    <td>
                    <select name="maillot" id="Maillot">
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
                    <select name="categorie" id="Catégoriep">
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
                    <td><select name="epreuve" id="Epreuve">
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
                    <td><input type="submit" name="Valider" value="Submit"></td>
                </tr>
            </table>
        </form>
        
	</body> 
</html>
