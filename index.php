<?php
// $servername = "localhost";
// $username = "root";
// $password = '';

// try{
//     $dbname = new PDO("mysql:host=$servername;dbname=test", $username, $password);
//     $dbname->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "bravo t'es genial nikauly!!!";
// }
// catch(PDOException $e){
//     echo "Connection failed: " . $e->getMessage();
//}

// $sql = "SELECT * FROM test";
// $req = $dbname->query($sql);
// while ($reqs = $req->fetch()){
//     echo $reqs['p'];
//}
//?> 


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <style>
        input{
            margin-bottom: 10px;
        }
    </style>
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 50px;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style> -->
</head>
<body>

<div class="form-container">
    <h2>Connexion</h2>
    <form action="process.php" method="post">
        <label for="nom"> Votre nom</label>
        <input type="text" name="nom" id="nom" placeholder="Votre nom" required>
        <br>
        <label for="prenom"> Votre prenom</label>
        <input type="text" name="prenom" id="prenom" placeholder="Votre prenom" required>
        <br>
        <label for="pseudo"> Votre pseudo</label>
        <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" required>
        <br>
        <label for="mot de passe"> mot de passe</label>
        <input type="password" name="mdp" id="mot de passe" placeholder="mot de passe" required>
        <br>
        <label for="mail">Votre mail</label>
        <input type="text" name="mail" id="mail" placeholder="Votre mail" required>
        <br>
        <input type="submit" value="Envoyer" name="ok">
    </form>
</div>

</body>
</html>