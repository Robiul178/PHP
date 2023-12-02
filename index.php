<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<p>
		<?php
			if($_SESSION['msg']!=""){
				echo $_SESSION['msg'];
				echo $_SESSION['msg']="";
			}

		?>
	</p>
	<form action="entry_action.php" method="post">
ID: <input type="text" name="_id" /> <br />
Name: <input type="text" name="name" /> <br />
<select name="price">
	<option value="100">Select Price</option>
	<option value="99">99</option>
	<option value="88">88</option>
	<option value="77">77</option>
	<option value="66">66</option>
	<option value="55">55</option>
	<option value="44">44</option>
	<option value="33">33</option>
	<option value="22">22</option>
	<option value="11">11</option>
	<option value="10">10</option>
</select>
<br />
	<input type="submit" name="btn" value="Enter" />
	</form>
</body>
</html>