<?php
require '../vendor/autoload.php';
require '../config/database.php';
ob_start();
$products=app\entidades\product::get();

 include "../resource/views/list.php";
$dompdf = new Dompdf\Dompdf();
$dompdf->loadHtml(ob_get_clean());
$dompdf->render();
$dompdf->stream();

?>