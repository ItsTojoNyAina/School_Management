<?php 

    $nom_input=$_POST['nom_i'];
    $mdp_input=$_POST['mdp_i'];

    $serveur="localhost";
    $login="root";
    $pass="";


    try{
        $connexion= new PDO("mysql:host=$serveur;dbname=gestion_etudiant",$login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $requete=$connexion->prepare("SELECT Nom,mdp FROM admin WHERE Nom='$nom_input'");
        $requete->execute();

        $donnee= $requete->fetch(PDO::FETCH_ASSOC);
        
        $nom=$donnee['Nom'];
        $mdp=$donnee['mdp'];

        
    
    }

    catch (PDOException $e){
        echo "Error: ".$e->getMessage();
    }



    if($nom==$nom_input && $mdp==$mdp_input){
        header("Location:../Pages/Back-office Administration/IndexAdmin.php");
        exit();
    }
    else{
        header("Location:log_erreur_admin.php");
        exit();
    }
?>