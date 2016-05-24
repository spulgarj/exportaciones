<?php
include("../librerias.php");
session_start();




//var_dump($_POST);

if (!isset($_SESSION["oUsuario"])){
	?>
<!-- Reenvio a la página principal-->
<script>
	document.location.href="index.php";
</script>
<?php
}

//$oPro=$_SESSION["oPro"];
$valor=$_POST['valor'];
$snom=$_POST['nombre'];
$anio=$_POST['anio'];

$oPro=new Producto($snom,$valor,$anio);

//var_dump($oPro);

if($oPro->Ingresar($snom,$valor,$anio)) echo "Producto Agregado"; else echo "ERROR";




?>

