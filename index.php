<?php
	require_once('admin/phpscripts/config.php');


	if(isset($_GET['filter'])){
		$tbl = "tbl_movies";
		$tbl2 = "tbl_genre";
		$tbl3 = "tbl_mov_genre";
		$col = "movies_id";
		$col2 = "genre_id";
		$col3 = "genre_name";
		$filter = "action";
		$getMovies = filterResults($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_movies";
		$getMovies = getAll($tbl);
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="css/main.css">
<title>Welcome to the Finest Selection of Blu-rays on the internets!</title>
</head>
<body>
	<div id="homelogin">
<a href="admin/admin_index.php">Login</a>
	</div>
</body>
</html>