<?php 
    include_once"admin.class.php";

    $admin= new Admin($_POST['nom'], $_POST['matricule'], $_POST['mdp']);

    $serveur="localhost";
    $login="root";
    $pass="";


    try{
        $connexion= new PDO ("mysql:host=$serveur;dbname=gestion_etudiant",$login,$pass);

        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete=$connexion->prepare("INSERT INTO admin (Nom,Matricule,mdp) VALUES (:nom,:matricule,:mdp)");

        $requete->bindParam(':nom',$admin->Nom);
        $requete->bindParam(':matricule',$admin->Matricule);
        $requete->bindParam(':mdp',$admin->mdp);

        $requete->execute();
    }

    catch(PDOException $e){
        echo 'Echec:'.$e->getMessage();
    }


    header("Location:../index.php");
    exit();
?>