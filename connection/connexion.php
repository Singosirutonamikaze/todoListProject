<?php
session_start();
//$pdo = new PDO('mysql:host=localhost;dbname=binarysec', 'root', ''); // Assurez-vous que la connexion est active

if(isset($_POST['Envoyer'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = htmlspecialchars($_POST['email']);
        $password = sha1($_POST['password']);
        
        $recupUser = $pdo->prepare('SELECT * FROM users WHERE email= ? AND password= ? ');
        $recupUser->execute(array($email, $password));
        
        if($recupUser->rowCount() > 0){
            $user = $recupUser->fetch();
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['password'];
            header("Location: acceuil.php");
            exit();
        } else {
            echo "Adresse email ou mot de passe incorrect";
        }
    } else {
        echo "Veuillez compléter tous les champs";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>
    <form action="" class="form">
        <h2>Connexion</h2>
        <input type="email" name="email" class="box" placeholder="Entrer votre email">
        <input type="password" name="password" class="box" placeholder="Entrer votre email">
        <input type="submit" value="connexion" id="submit">
    </form>
</body>
</html>