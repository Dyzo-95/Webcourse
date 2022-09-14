<?php

require ('app/connect.php');


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

if (!empty($nom) || !empty($prenom) || !empty($email) || !empty($pseudo) || !empty($password)) {
    /*$host = "locahost";
    $username = "root";
    $dbpassword = "";
    $dbname = "webcourse";

    //Création de la connection

    //$conn = new PDO($host, $username, $dbpassword, $dbname);

    $conn = new PDO('mysql:host=localhost;dbname=webcourse; charset=utf8', $username, $dbpassword);*/

    
    
    $SELECT = "SELECT * From membre Where mem_email = ? OR mem_pseudo = ? Limit 1";
    $INSERT = "INSERT Into membre (mem_nom, mem_prenom, mem_email, mem_pseudo, mem_mdp) values (?, ?, ?, ?, ?)";

        //Préparer une déclaration


        $stmt = $conn->prepare($SELECT);
        $stmt->bindParam("1", $email);
        $stmt->bindParam("2", $pseudo);
        $stmt->execute();
        $rnum = $stmt->rowCount();


        if ($rnum==0) {

            $stmt = $conn->prepare($INSERT);
            $stmt->bindParam("1", $nom);
            $stmt->bindParam("2", $prenom);
            $stmt->bindParam("3", $email);
            $stmt->bindParam("4", $pseudo);
            $stmt->bindParam("5", $password);
           if($stmt->execute()){
               header('location:/WebCourse/public/index.php');
           } 
           else{
               var_dump($stmt->errorInfo());
           }
        }
        else {
            echo "Username ou Email déjà utilisée(s)";
        }
    
} 
else {
    echo "All field are required";
    die();
}
?>
