<?php



$nom_in=$_POST['nom'];
$mvc=$_POST['mvc'];
$csharp=$_POST['csharp'];
$tdn=$_POST['tdn'];
$tds=$_POST['tds'];
$merise=$_POST['merise'];

$serveur="localhost";
$login="root";
$pass="";


try{
    $connexion= new PDO ("mysql:host=$serveur;dbname=gestion_etudiant",$login,$pass);

    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete=$connexion->prepare("SELECT Nom FROM notes WHERE Nom=$nom_in" );
    
    $donnees=$requete->fetch(PDO::FETCH_ASSOC);

    $nom=$donnees['Nom'];
    

    if ($nom==$nom_in){
        $requete=$connexion->prepare("UPDATE notes SET MVC=$mvc,Csharp=$csharp,TDN=$tdn,TDS=$tds,Merise=$merise WHERE Nom=$nom");
        $requete->execute();
    }
    
    else{
    $requete=$connexion->prepare("INSERT INTO notes (Nom,MVC,Csharp,TDN,TDS,Merise) VALUES (:nom,:mvc,:csharp,:tdn,:tds,:merise)");

    $requete->bindParam(':nom',$_POST['nom']);
    $requete->bindParam(':mvc',$_POST['mvc']);
    $requete->bindParam(':csharp',$_POST['csharp']);
    $requete->bindParam(':tdn',$_POST['tdn']);
    $requete->bindParam(':tds',$_POST['tds']);
    $requete->bindParam(':merise',$_POST['merise']);


    $requete->execute();
    }
}

catch(PDOException $e){
    echo 'Echec:'.$e->getMessage();
}


header("Location:notes_envoyes.php");
exit();

?>