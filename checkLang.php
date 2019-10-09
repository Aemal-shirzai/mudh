<?php
session_start();

if(isset($_GET["lang"])){
	$lang = $_GET["lang"];
	if($lang == "eng"){
		$_SESSION["language"] = "lang/eng.php";
	}
	if($lang == "dari"){
		$_SESSION["language"] = "lang/dari.php";
	}
	if($lang == "pashto"){
		$_SESSION["language"] = "lang/pashto.php";
	}
}

$path = $_SERVER["HTTP_REFERER"];
header("location:$path");


?>