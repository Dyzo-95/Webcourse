<?php  $title = 'Inscription'; 
        require ('app/header.php');
        require ('app/function.php');
        require ('app/connect.php');
?>

<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="insert.php" method="POST">
            <table>
                <tr>
                    <td> Nom :</td>
                    <td><input type="text" name="nom" required></td>
                </tr>
                <tr>
                    <td> Prénom :</td>
                    <td><input type="text" name="prenom" required></td>
                </tr>
                <!--<tr>
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
                </tr>-->
                <tr>
                    <td> Email :</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <!--<tr>
                    <td> Téléphone :</td>
                    <td><input type="phone" name="phone" required></td>
                </tr>-->
                <tr>
                    <td> Identifiant :</td>
                    <td><input type="text" name="pseudo" required></td>
                </tr>
                <tr>
                    <td> Mot de passe :</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="Valider" value="Submit"></td>
                </tr>
            </table>
        </form>
        <?php
            
        ?>
        
	</body> 
</html>
