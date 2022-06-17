<?php 


$ubicacion_actual = basename($_SERVER['PHP_SELF']);
$inicio = "";
$contacto = "";
$nosotros = "";
$proyectos = "";
$servicios = "";

if ($ubicacion_actual == "inicio.php") {
  $inicio = "active";
  $titulo = "Consultoria empresarial - EBALS";
}
if ($ubicacion_actual == "contacto.php") {
  $contacto = "active";
  $titulo = "Contacto - EBALS";
}
if ($ubicacion_actual == "nosotros.php") {
  $nosotros = "active";
  $titulo = "Nosotros - EBALS";
}
if ($ubicacion_actual == "proyectos.php") {
  $proyectos = "active";
  $titulo = "Proyectos - EBALS";
}
if ($ubicacion_actual == "servicios.php") {
  $servicios = "active";
  $titulo = "Servicios - EBALS";
}


?>
<head>
    <title><?php echo $titulo;?></title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/icono-ebals.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <script src='https://www.hCaptcha.com/1/api.js' async defer></script>
    <script src="https://kit.fontawesome.com/ede263ef31.js" crossorigin="anonymous"></script>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>