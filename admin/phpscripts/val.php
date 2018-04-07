<?php
	

	function form_errors($errors=array()){
		$op = "";
		if(!empty($errors)) {
			$op .= "Your attention is required on the following...";
			$op .= "<ul>";
			foreach($errors as $key => $error)
				{
				$op .= "<li>{$error}</li>";
			}
			$op .= "</ul>";
		}
		return $op;
	}
//once there is an error in the function, this will write out all of them into list, since there can be multiple of them.

	function has_value($value) {
		return isset($value) && $value !== "";
	}

	function max_length($max_lengths) {
		global $errors;
		foreach($max_lengths as $value => $max){
			$value = trim($_POST[$value]);
			if(!has_proper_length($value, $max)){
				$errors[$value] = ucfirst($value)."is too long";
			}
		}
	}

	function has_proper_length($value, $max) {
		return strlen($value) <= $max;
	}

?>