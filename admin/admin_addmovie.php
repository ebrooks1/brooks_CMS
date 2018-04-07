<?php
	require_once('phpscripts/config.php');
	
	$tbl = "tbl_genre";
	$genQuery = getAll($tbl);

	if(isset($_POST['submit'])){
		$cover = $_FILES['cover'];
		$title = $_POST['title'];
		$year = $_POST['year'];
		$run = $_POST['run'];
		$story = $_POST['story'];
		$trailer = $_POST['trailer'];
		$release = $_POST['release'];
		$genre = $_POST['genList'];
		$result = addMovie($cover, $title, $year, $run, $story, $trailer, $release, $genre);
		$message = $result;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="../css/main.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,800" rel="stylesheet">
<title>Add Movie</title>
</head>
<body>

<div id="container2">
	<?php
	include('../includes/nav.html');
	 if(!empty($message)){ echo $message;} ?>
	<form action="admin_addmovie.php" method="post" enctype="multipart/form-data">
		<label>Cover Image:</label>
		<input type="file" name="cover" value="">
		<br><br>
		<label>Movie Title:</label>
		<input type="text" name="title" value="">
		<br><br>
		<label>Movie Year:</label>
		<input type="text" name="year" value="">
		<br><br>
		<label>Movie Runtime:</label>
		<input type="text" name="run" value="">
		<br><br>
		<label>Movie Storyline:</label>
		<input type="text" name="story" value="">
		<br><br>
		<label>Movie Trailer:</label>
		<input type="text" name="trailer" value="">
		<br><br>
		<label>Movie Release:</label>
		<input type="text" name="release" value="">
		<br><br>
		<select name="genList">
			<option>Please select a movie genre...</option>
			<?php
			while($row = mysqli_fetch_array($genQuery)){
				echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
			}
			?>
		</select><br><br>
		<input type="submit" name="submit" value="Add Movie">
	</form>

</div>

</body>
</html>