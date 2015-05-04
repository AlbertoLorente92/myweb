<!DOCTYPE html>
<html>
<head>
	<title>A Dos Manos Creations - Performance Art</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/javascript.js"></script>
</head>
<body onload="checkSubmit();">
<?php include('header.php') ?>

<?php include('menu.php') ?>

	<div id="content">
		<h2>Envianos un correo!</h2>
		<p>* campo requerido</span></p>
		<form method="post" action=""> 
		   Nombre:
		     <input type="text" id="name" value="" onblur="checkName(this);">   
		    <span class="error">*</span>
		   <br>
		   <br>
		   E-mail:
		   <input type="text" id="email" value="" onblur="checkEmail(this);">   
		   <span class="error">*</span>
		   <br><br>
		   Mensaje: 
		   <br><textarea id="comment" rows="5" cols="40" onblur="checkText(this);"></textarea>
		   <br><br>
		   <input type="submit" id="submit" value="Enviar"> 
		</form>
	</div>

<?php include('footer.php') ?>
</body>
</html>