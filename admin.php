<?php
$servername = "127.0.0.1";
$dbname = "myDB";

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

<div id="admin">
	<img src="img/logo2.jpg" width="517" height="86" style="width:304px;height:200px">

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table id="login">
			<tr>
				<td>
					<p>
						Account:
					</p>
				</td>
				<td>
					<input type="text" name="account" id="account">
				</td>
			</tr>	
			<tr>
				<td>
					<p>
						Password:
					</p>
				</td>
				<td>
					<input type="password" name="password" id="password">
				</td>
			</tr>	
			<tr>
				<td colspan="2">
					<input type="submit" name="submit" value="Enviar" id="loginsubmit">
				</td>
			</tr>	
		</table>
	</form>
</div>
</div>
</body>
</html>