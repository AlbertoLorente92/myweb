<?php
$servername = "127.0.0.1";
$dbname = "myDB";
$conected = false;

$account = $password = "";

define("MYSQL_CONN_ERROR", "Unable to connect to database."); 

// Ensure reporting is setup correctly 
mysqli_report(MYSQLI_REPORT_STRICT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $ok = 0;	
   if (!empty($_POST["account"])) {
     $account = test_input($_POST["account"]);
     $ok = $ok + 1;
   }
   
   if (!empty($_POST["password"])) {
     $password = test_input($_POST["password"]);
     $ok = $ok + 1;
   }

   if($ok==2){
   	$log = true;
   	$conn;
   	try{
   		$conn = new mysqli($servername, $account, $password, $dbname);
   		$conected = true;
   	} catch(mysqli_sql_exception $e){
   		$log = false;
   	}



	if($log)
		$conn->close();
   }
   
}
   function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }


?>

<!DOCTYPE html>
<html>
<head>
	<title>A Dos Manos Creations - Performance Art</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/javascript.js"></script>
</head>
<body>

<?php 
if($conected == FALSE){
	include("login.php");
}else{
	include("index.php");
}

?>

</body>
</html>