<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php

    $servername = "localhost";
    $username= "root";
    $password1= "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password1);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        if (!empty($email) && !empty($password)) {
            $stmt = $conn->prepare("SELECT * FROM user WHERE mail = :email AND password = :password");
            $stmt->execute(['email' => $email, 'password' => $password]); // Corrected here
            $sql = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($sql) {
                echo "Bienvenue";
            } else {
                echo "Email ou mots de passe incorrect";
            }
        }
    }
    ?>
    
    <form method="post" action="">
        <label for="email">Votre email</label>
        <input type="email" placeholder="Entrez votre e-mail....." id="email" name="email" required>
        <br>
        <label for="password">Votre Mots de passe</label>
        <input type="password" placeholder="Entre votre mots de passe....." id="password" name="password" required>
        <br>
        <input type="submit" name="ok" value="Se connecter"> 
    </form>
</body>
</html>
