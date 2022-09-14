<?php

require ('app/connect.php');


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$date = $_POST['date'];
$genre = $_POST['genre'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$ndossard = $_POST['dossard'];
$tmaillot = $_POST['maillot'];
$categorie = $_POST['categorie'];
$epreuve = $_POST['epreuve'];

if (!empty($nom) || !empty($prenom) || !empty($adresse) || !empty($date) || !empty($genre) || !empty($phone) || !empty($email) || !empty($ndossard) || !empty($tmaillot) || !empty($categorie) || !empty($epreuve))  {
    /*$host = "locahost";
    $username = "root";
    $dbpassword = "";
    $dbname = "webcourse";

    //Création de la connection

    //$conn = new PDO($host, $username, $dbpassword, $dbname);

    $conn = new PDO('mysql:host=localhost;dbname=webcourse; charset=utf8', $username, $dbpassword);*/

    
    /*$stmt = $dbh->prepare("INSERT INTO coureur (co_nom, co_prenom, co_adresse, co_datenais, co_sexe, co_tel, co_email) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $value);*/

    
    $INSERT = $conn->prepare("INSERT Into coureur (co_nom, co_prenom, co_adresse, co_datenais, co_sexe, co_tel, co_email) values (?, ?, ?, ?, ?, ?, ?)");
    $SELECT1 = $conn->prepare("SELECT co_id FROM coureur ORDER BY co_id DESC Limit 1");
    $coid = '$SELECT1(co_id)';
    $INSERT2 = $conn->prepare("INSERT Into inscire (ins_id, ins_date, ins_dossard, ins_taillemaillot, ins_certif) values (?, ?, ?, ?, ?)");
    $SELECT2 = $conn->prepare("SELECT ins_id FROM inscrire ORDER BY ins_id DESC Limit 1");
    $iNSid = '$SELECT2(ins_id)';
    $INSERT3 = $conn->prepare("INSERT Into inscire (ep_id, reg_id, co_id, cat_id) values (?, ?, ?, ?) where ins_id = $iNSid");


        //Préparer une déclaration


        $stmt = $conn->execute($coid);
        $stmt->bindParam("1", $coid);
        $stmt->execute();
        $rnum = $stmt->rowCount();


        if ($rnum==0) {

            $stmt = $conn->prepare($INSERT);
            $stmt->bindParam("1", $nom);
            $stmt->bindParam("2", $prenom);
            $stmt->bindParam("3", $adresse);
            $stmt->bindParam("4", $date);
            $stmt->bindParam("5", $genre);
            $stmt->bindParam("6", $phone);
            $stmt->bindParam("7", $email);

            if ($stmt->execute()) {
                echo('Un nouvel enregistrement a été inséré avec succès');
                header('location:/WebCourse/public/index.php');
            }
            else {
                echo('Erreur');
                var_dump($stmt->errorInfo());
            }
           
        }
        else if ($rnum==0) {

            $stmt = $conn->prepare($INSERT2);
            $stmt->bindParam("1", $ndossard);
            $stmt->bindParam("2", $tmaillot);
            $stmt->bindParam("3", $categorie);
            $stmt->bindParam("4", $epreuve);

            if ($stmt->execute()) {
                echo('Un nouvel enregistrement a été inséré avec succès');
                header('location:/WebCourse/public/index.php');
            }
            else {
                echo('Erreur');
                var_dump($stmt->errorInfo());
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
