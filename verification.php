<?php

require ('app/connect.php');


session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    $username= $_POST['username'];
    $password= $_POST['password'];;
    /*// connexion à la base de données
    $db_username = 'root';
    $db_password = 'mot_de_passe_bdd';
    $db_name     = 'nom_bdd';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));*/
    
    if($username !== "" && $password !== "")
    {
        
        $requete = "SELECT * FROM membre WHERE mem_pseudo = ? AND mem_mdp = ?";
        $stmt = $conn->prepare($requete);
        $stmt->bindParam("1", $username);
        $stmt->bindParam("2", $password);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: principale.php');
        }
        else
        {
           header('Location: inscrit.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: inscrit.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: inscrit.php');
}
// mysqli_close($db); // fermer la connexion
