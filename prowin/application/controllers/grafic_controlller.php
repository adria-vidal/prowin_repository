<?php
require 'graphic_model.php';
$mg = new graphic_model();
$consulta = $mg -> getDatosGrafico();
echo json_encode($consulta);

?>
