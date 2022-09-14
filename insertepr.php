<?php

require ('app/connect.php');


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$date = $_POST['date'];
$genre = $_POST['genre'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

if (!empty($nom) || !empty($prenom) || !empty($adresse) || !empty($date) || !empty($genre) || !empty($email) || !empty($phone) || !empty($pseudo) || !empty($password))  {
    /*$host = "locahost";
    $username = "root";
    $dbpassword = "";
    $dbname = "webcourse";

    //Création de la connection

    //$conn = new PDO($host, $username, $dbpassword, $dbname);

    $conn = new PDO('mysql:host=localhost;dbname=webcourse; charset=utf8', $username, $dbpassword);*/

    
    
    $SELECT = "SELECT co_email From coureur Where co_email = ? Limit 1";
    $INSERT = "INSERT Into coureur (co_nom, co_prenom, co_adresse, co_date, co_genre, co_tel, co_email, co_mdp, co_identifiant) values (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        //Préparer une déclaration


        $stmt = $conn->prepare($SELECT);
        $stmt->bindParam("1", $email);
        $stmt->execute();
        $rnum = $stmt->rowCount();


        if ($rnum==0) {

            $stmt = $conn->prepare($INSERT);
            $stmt->bindParam("1", $nom);
            $stmt->bindParam("2", $prenom);
            $stmt->bindParam("3", $adresse);
            $stmt->bindParam("4", $date);
            $stmt->bindParam("5", $genre);
            $stmt->bindParam("6", $email);
            $stmt->bindParam("7", $phone);
            $stmt->bindParam("8", $pseudo);
            $stmt->bindParam("9", $password);
            if ($stmt->execute()) {
                echo('Un nouvel enregistrement a été inséré avec succès');
            }
            else {
                echo('Erreur');
            }
           
        }
        else {
            echo "Quelqu'un s'est déja inscrit avec cette email";
        }
    
} 
else {
    echo "All field are required";
    die();
}
?>
