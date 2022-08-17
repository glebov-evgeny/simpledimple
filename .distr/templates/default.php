<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';

include_once $ROOT . 'version.php';

?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <base href="<?=$BASE_HREF?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    {% block meta %}
    <title><?= $title ?></title>
    <meta property="og:title" content="<?= $title ?>">
    <meta name="description" content="<?= $description ?>">
    <meta property="og:description" content="<?= $description ?>">
    {% endblock %}
    <meta property="og:url" content="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    {% block styles %}
    <link rel="stylesheet" href="css/style.css">
    {% endblock %}

    <link href="https://glebov-evgeny.github.io/dish-recipes/favicon.ico" type="image/x-icon" rel="icon">

</head>



<body class="<?= $version ? 'version-' . $version : '' ?>" id="body">

  {% import 'form/macro.php' as form %}

  <div class="wrapper">
    {% block blocks %}
    {% endblock %}

    <section class="popups" hidden>
        {% block popups %}
        {% endblock %}
    </section>

  </div><!-- wrapper -->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>

  {% block js %}
  {% endblock %}

</body>
</html>