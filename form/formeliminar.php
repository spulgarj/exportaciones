<?php
$oProducto=new Producto();
?>
<meta charset='utf-8'>
<form method="post" action="accform/accProductoEliminar.php">
<?php
While($Registro=$oProducto->Selecciona()){

	?>
<input type="checkbox" name=elimina<?=$Registro->IdProducto()?> value="<?=$Registro->IdProducto()?>">
<?=$Registro->Nombre()?>/<?=$Registro->Ano()?>
<br>
<?php
}

?>
<input type="submit" value="Eliminar">
</form>