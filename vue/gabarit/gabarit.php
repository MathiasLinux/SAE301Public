<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Découvrez notre sélection exclusive de châteaux à vendre en France. Nous avons soigneusement sélectionné les plus belles propriétés pour vous offrir le rêve de devenir propriétaire d'un château historique. Visitez notre site pour parcourir les annonces et trouver le château de vos rêves en France.">
    <title><?= $title ?></title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <link rel='stylesheet' media='screen and (min-width: 800px) and (max-width: 1439px)'
          href='styles/medium-style.css'/>
    <link rel="stylesheet" media="screen and (min-device-width: 1440px)" href="styles/desktop-style.css"/>
</head>
<body>
<?php require("vue/gabarit/header.php"); ?>
<?= $contenue ?>
<?php require("vue/gabarit/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/principal.js"></script>
</body>
</html>
