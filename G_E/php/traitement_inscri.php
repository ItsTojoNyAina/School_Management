<?php 
    include_once"Etudiant.class.php";

    $etu= new Etudiant($_POST['nom'], $_POST['classe'], $_POST['mdp']);

    $serveur="localhost";
    $login="root";
    $pass="";


    try{
        $connexion= new PDO ("mysql:host=$serveur;dbname=gestion_etudiant",$login,$pass);

        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete=$connexion->prepare("INSERT INTO etudiants (Nom,Classe,mdp) VALUES (:nom,:classe,:mdp)");

        $requete->bindParam(':nom',$etu->Nom);
        $requete->bindParam(':classe',$etu->Classe);
        $requete->bindParam(':mdp',$etu->mdp);

        $requete->execute();
    }

    catch(PDOException $e){
        echo 'Echec:'.$e->getMessage();
    }


    header("Location:../index.php");
    exit();
?>