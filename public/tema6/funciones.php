<?php
function showErrors($errors){
		echo '<ul>';
		foreach ($errors as $error) {
			echo '<li>'.$error.'</li>';
		}
		echo '</ul>';
}
function showField($field){
	/*
	Lo de abajo equivale a esto
	if (isset($field)) {
		return $field;
	}else{
		return '';
	}
	*/
	/*Todavia queda mas optimo de la forma de abajo
	return isset($field) ? $filed : '';
	*/
	return isset($_POST[$field]) ? $_POST[$field] : '';
}
function showErrorsField($field, $errors) {
		if (isset($errors[$field])) {
			echo '<span>' . $errors[$field] . '</span>';
		}
	}
?>