<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<title>Vérification</title>
	<link rel="stylesheet" href="public/css/age.css" />
    <meta name="author" content="Groupe J" />
    <title><?= $page_title?> </title>
</head>
<body>
    <header>

    </header>
    <main class="main-page">
        <h1>Bienvenue sur notre site</h1>
        <p>Pour rentrer sur le site, vous devez être majeur.<br>
            Veuillez confirmer que vous avez bien plus de 18 ans.<br>
        </p>
            <a href="./Accueil.php"><button class="true">Oui. J'ai plus de 18 ans</button></a>
            <a href="./Refuse.php"><button class="false">Non. Je suis mineur</button></a>
    </main>
</body>
