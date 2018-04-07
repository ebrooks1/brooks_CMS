<?php
	require_once('phpscripts/config.php');

	$errors = array();

	if(isset($_POST['submit'])){
		//echo "Works";
		$name = trim($_POST['name']);
		$phone = trim($_POST['phone']);
		$address = trim($_POST['address']);

		$required = array("name", "phone", "address");
		foreach($required as $require) {
			$value = trim($_POST[$require]);
			if(!has_value($value)){
				$errors[$require] = ucfirst($require)."cannot be blank.";
			}
		}

		$max_lengths = array("name" => 15, "phone" => 8);
		max_length($max_lengths);

	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Form Val...</title>
</head>
<body>
	<?php echo form_errors($errors);

	$no_attack = "&\'";
	$attack = "\x8F!!!";
	//echo htmlspecialchars($no_attack, ENT_QUOTES, 'UTF-8')."<br>";
	//echo htmlspecialchars($attack, ENT_QUOTES, 'UTF-8');

?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">  <!-- THIS MAKES IT SO THAT THIS FORM KNOWS THE PAGE THAT IT IS ONE INSTEAD OF HAVING TO CHANGE IT FOR EVERY PAGE  -->
		<label>Name:</label>
		<input type="text" name="name" value="">
		<br>
		<label>Phone</label>
		<input type="tel" name="phone" value="">
		<br><br>
		<label>Address</label>
		<input type="text" name="address" value="">
		<br><br>
		<input type="submit" name="submit" value="Show me the money">
	</form>

</body>
</html>