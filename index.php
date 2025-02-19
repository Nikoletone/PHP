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
