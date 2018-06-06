<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Practica</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
		<h2>Listado de productos</h2>

		<?php
		foreach ($products as $product) {
			echo "<strong> {$product-> name} </strong>- {product->description} <br>";
		}
		?>		

		<a href="pdf.php">Exportar PDF</a>


			</div>	


	</div>	

	</div>


</body>
</html>