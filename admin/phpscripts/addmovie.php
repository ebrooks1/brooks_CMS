<?php
	
	function addMovie($cover, $title, $year, $run, $story, $trailer, $release, $genre) {
		include("connect.php");
		if($cover['type'] == "image/jpg" || $cover['type'] == "image/jpeg"){
			$targetpath = "../images/{$cover['name']}";

			if(move_uploaded_file($cover['tmp_name'], $targetpath)){
				//echo "File transfer complete";
			$th_copy = "../images/TH_{$cover['name']}";
				if(!copy($targetpath, $th_copy)){
					$message = "Whoops, that didn't work.";
					return $message;
				}

				//Add to database

			}

			//$size = getimagesize($targetpath);
			//echo $size[2];
			$addstring = "INSERT INTO tbl_movies VALUES(NULL, '{$cover['name']}','{$title}','{$year}','{$runtime}','{$story}','{$trailer}','{$release}')";
			$addresult = mysqli_query($link, $addstring);
			if($addresult){
				$qstring = "SELECT * FROM tbl_movies ORDER BY movies_ID DESC LIMIT 1";
			$lastmovie = mysqli_query($link, $qstring);
			$row = mysqli_fetch_array($lastmovie);
			$lastID = $row['movies_id'];
			//echo $lastID;
			$genstring = "INSERT INTO tbl_mov_genre VALUES(NULL. {$lastID}, {$genre})";
			$genresult = mysqli_query($link, $genstring);
			redirect_to("admin_index.php");
		}
	  }
	
	mysqli_close($link);
  }
?>