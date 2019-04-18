<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription - 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Thasadith" rel="stylesheet">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="verif.css">
</head>

<body>

        <p>S'inscrire</p>

        <form method="POST" action="inscriptionverification.php">
            <label>Adresse mail</label>
            <input name="usernamelog" type="email" value="test@gmail.com" required>
            <label>Mot de passe</label>
            <input name="password" type="password" id="password" value="password" required>
            <label>Nom</label>
            <input name="nom" type="text" id="nom" value="Votre nom" required>
            <input type="submit" value="Je m'inscris">
        </form>
    </article>
</body>