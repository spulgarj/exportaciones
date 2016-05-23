<?php
$oProducto=new Producto();
?>
<form method="post" action="accform/accProductoAgregar.php">
<div>Nombre Producto:</div><div><input name="nombre" type=text id="nombre"></div>
<br>
<div>Total USD:</div><div><input name="valor" type="text" id="valor"></div>
<div>Año:</div><div><input name="anio" type="text" id="anio"></div>
<input type="submit" value=Acceder>
</form>