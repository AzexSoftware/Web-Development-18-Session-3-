<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username = $_POST['test'];
		if(strlen($username) < 3){
			echo "sometext";
		}
	}
?>
<form method="post" action="test0.php">
	Name: <input type="text" name="test">
	<input type="submit">
</form>
