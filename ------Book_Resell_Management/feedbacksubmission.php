<?php
session_start();
require "./functions/database_functions.php";
$conn = db_connect();
	if(isset($_POST['name'])){
		$isbn = trim($_POST['name']);
		$isbn = mysqli_real_escape_string($conn, $isbn);
		
		$title = trim($_POST['email']);
		$title = mysqli_real_escape_string($conn, $title);

		$author = trim($_POST['message']);
		$author = mysqli_real_escape_string($conn, $author);

		$query = "INSERT INTO feedback VALUES (' ','" . $isbn . "', '" . $title . "', '" . $author . "','0')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't add new data " . mysqli_error($conn);
			exit;
		} else {
			header("Location: contact.php");
		}
	}