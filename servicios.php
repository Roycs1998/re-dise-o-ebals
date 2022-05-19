<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<?php
$enlace = mysqli_connect("localhost", "root", "", "ebalsconsultores-bd");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
<?php  include('php/head-link.php');?>

<?php 

  if (isset($_GET["tipo"])){
    $tipo_servicio = $_GET["tipo"];
    $consulta = 'SELECT * FROM servicios WHERE clave_servicios = "'.$tipo_servicio.'" ';
    $resultado = $enlace->query($consulta);
    $fila = mysqli_fetch_row($resultado);
  }
 ?>
  <body>
    <div class="ie-panel"></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div>
    <div class="page">
      <div id="home">
        <!-- Top Banner-->
        <!-- Page Header-->
        <?php  include('php/header.php');?>
      </div>
      <?php include("$fila[3]");?>
    <!-- Cta-->
    
      <!-- Page Footer-->
      <?php include('php/footer.php');?>

      

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Himic-->
  </body>
</html>