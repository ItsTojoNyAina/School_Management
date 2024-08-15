<?php 
    include_once"enseignant.class.php";

    $ens= new Enseignant($_POST['nom'], $_POST['matricule'], $_POST['mdp']);

    $serveur="localhost";
    $login="root";
    $pass="";


    try{
        $connexion= new PDO ("mysql:host=$serveur;dbname=gestion_etudiant",$login,$pass);

        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete=$connexion->prepare("INSERT INTO enseignants (Nom,Matricule,mdp) VALUES (:nom,:matricule,:mdp)");

        $requete->bindParam(':nom',$ens->Nom);
        $requete->bindParam(':matricule',$ens->Matricule);
        $requete->bindParam(':mdp',$ens->mdp);

        $requete->execute();
    }

    catch(PDOException $e){
        echo 'Echec:'.$e->getMessage();
    }


    header("Location:../index.php");
    exit();
?>