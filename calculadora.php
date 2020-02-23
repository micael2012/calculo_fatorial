<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="container mt-5">
		<h1 class="text-center">Calculadora</h1>
	<div class="row justify-content-center mt-5">
		<form method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="dados" placeholder="Digite:">
				
			</div>

			<div class="form-group">
				<input type="submit" class="form-control btn btn-success" name="" value="Enviar" class="">
			</div>
		</form>
	</div>
	 
<div class="row justify-content-center">
	
<?php

if(isset($_POST['dados'])){

	$dados= $_POST['dados'];

	for($i = 1; $i <= $dados; $i++){
		//echo '<br>'.$i;

		echo '<br>'."$dados x $i = ". $dados * $i;

	}
}


?>


</div>

</div><!----- FIM CONTAINER-->


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/popover.js"></script>
</body>
</html>