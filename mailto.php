<!DOCTYPE HTML> 
<html>
<head>
   <title>A Dos Manos Creations - Performance Art</title>
   <link href="css/style.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="js/javascript.js"></script>
</head>
<body> 

<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
   $comment = wordwrap($comment, 70, "\r\n");

   mail($email,"ADosManosCreations",$comment);
   
}
   function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }
?>
<div id="content">
<h2>Envianos un correo!</h2>
<p><span class="error">* campo requerido.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Nombre: <input type="text" name="name" id="name" onblur="checkName(this);">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" id="email"  onblur="checkEmail(this);">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Mensaje: <textarea name="comment" rows="5" cols="40" id="comment" onblur="checkText(this);"></textarea>
   <br><br>
   <input type="submit" name="submit" value="Enviar" id="submit">
</form>

</div>   
</body>
</html>