<?php

require '../vendor/autoload.php';
require '../config/database.php';

$products=app\entidades\product::get();
 include "../resource/views/list.php";


?>