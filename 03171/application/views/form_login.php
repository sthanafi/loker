<head>
<style>
  body {background-color:#33cc66}
  h2   {color:black;
  font-family:courier;}
  p    {color:red}
</style>
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<h2 align="center" >LOGIN</h2>

<?php 

	echo form_open('login/authenticate');
	echo "<table align='center' class='login'>";
	
	echo "<tr>";
	echo "<td><b>Username: </b></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>".form_input('username', '')."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>".form_error('username')."</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td><b>Password: </b></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>".form_password('password', '')."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>".form_error('password')."</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>".form_submit('submit', 'Login')."</td>";
	echo "</tr>";
	echo "</table>";
	echo form_close();

?>



