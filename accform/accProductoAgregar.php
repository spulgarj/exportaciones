<?php
include("../librerias.php");
session_start();
$oPro=new Producto($nid=NULL,$snom=NULL,$ntot=NULL,$nano=NULL);

$valor=$_POST['valor'];
$snom=$_POST['nombre'];
$anio=$_POST['anio'];

//var_dump($_POST);

if (!isset($_SESSION["oUsuario"])){
	?>
<!-- Reenvio a la página principal-->
<script>
	document.location.href="index.php";
</script>
<?php

//$oPro=$_SESSION["oPro"];
//var_dump($oPro);
if($oPro->Ingresar($snom,$valor,$anio)) echo "Producto ingresado"; else echo "ERROR";
}

?>
