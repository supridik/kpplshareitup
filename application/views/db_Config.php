<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "share";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	if(isset($_POST['submit'])) {
		$namaUser = ($_POST['user']);
		$username = ($_POST['username']);
		$password = ($_POST['password']);
		$sha1 = sha1($password);

		$sql = "INSERT INTO user (id_user,nama_user,username,password)
			VALUES (NULL,'$namaUser','$username','$sha1')";

		if ($conn->query($sql) === TRUE) {
			$message = "Anda berhasil mendaftar";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} 
		else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	$conn->close();
	}
?>