<?php
//obtener e idioma de la URL por ejemplo: index.php?lang=es
$lang_code = $_GET['lang'] ?? 'en';

//validar idioma y carga de archivos

$available_langs = ['en', 'es'];
$lang_code = in_array($lang_code,$available_langs) ? $lang_code : 'en';
$lang = include "lang/$lang_code.php";

?>

<!DOCTYPE html>
<html lang="<?= $lang_code ?>">

<head>
    <meta charset="UTF-8">
    <title><?= $lang['welcome'] ?></title>
</head>

<body>
    <h1><?= $lang['welcome']?></h1>

    <nav>
        <a href="?lang=<? $lang_code ?>&page=about"><?= $lang['about'] ?></a>
        <a href="?lang=<? $lang_code ?>&page=contact"><?= $lang['contact'] ?></a>
    </nav>

    <p>cambio de idioma
        <a href="?lang=en">EN</a>
        <a href="?lang=es">ES</a>        
    </p>



</body>

</html>