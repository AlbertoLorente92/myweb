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
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $website = test_input($_POST["website"]);
   $comment = test_input($_POST["comment"]);
   $gender = test_input($_POST["gender"]);
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
   <p>* campo requerido</span></p>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
      Nombre: 
      <input type="text" name="name" onblur="checkName(this);">
      <span class="error">*</span>
      <br><br>
      E-mail: 
      <input type="text" name="email" onblur="checkEmail(this);">
      <span class="error">*</span>
      <br><br>
      Mensaje: <textarea name="comment" rows="5" cols="40" onblur="checkText(this);"></textarea>
      <br><br>
      <input type="submit" name="submit" value="Submit"> 
   </form>


   <?php
   echo "<h2>Muchas Gracias por tu correo $name</h2>";
   echo $name;
   echo "<br>";
   echo $email;
   echo "<br>";
   echo $website;
   echo "<br>";
   echo $comment;
   echo "<br>";
   echo $gender;
   ?>
</div>
</body>
</html>