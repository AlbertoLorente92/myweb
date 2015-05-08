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