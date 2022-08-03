<?php
	include 'dados_login.php';

	if(!$_SESSION['logged']){

		include_once "form_login.php";
	}else{
		include_once "pag_01.php";
	}
?>