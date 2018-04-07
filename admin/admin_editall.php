<?php
	require_once('phpscripts/config.php');
	if(isset($_GET['id'])) {
		//get the movie
		$id = $_GET['id'];
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="../css/main.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,800" rel="stylesheet">
<title>Edit All</title>
</head>
<body>
<div id="container2">
	<?php
		include('../includes/nav.html');
		echo single_edit("tbl_movies","movies_id",$id);
		//phpinfo();
	?>
</div>
</body>
</html>