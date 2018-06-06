<?php

require '../vendor/autoload.php';
require '../config/database.php';

$product=App\entidades\product::get();
 include "../resource/views/list.php";


?>