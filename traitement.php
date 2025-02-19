<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $dbb = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
    $dbb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(Exception $e){
    echo " erreur ".$e->getMessage()."";
}




if (isset($_POST["ok"])) {
    $nom =  $_POST["nom"] ;
    $prenom = $_POST["prenom"];
    $pseudo = $_POST["pseudo"] ;
    $mdp = $_POST["mdp"] ;
    $mail = $_POST["mail"] ;
    
    $requete = $dbb->prepare("INSERT INTO user values (0, :nom, :prenom, :pseudo, :mdp, :mail)");
    $requete->execute(
        array(
            "nom" => $nom,
            "prenom"=> $prenom,
            "pseudo" => $pseudo,
            "mail"=> $mail,
            "mdp" => $mdp,


        )
    );
    echo "incription reussie";
    
}


?>
