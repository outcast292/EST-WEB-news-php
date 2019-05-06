<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<?php session_start();
		if(!isset($_SESSION["id_ad"])){
			header("location: index.php");
		} ?>
	<div style="width: 900px;margin: auto;">
		<?php require "html/header.html" ?>
	<h2>Bonjour <?php echo $_SESSION['name']; ?></h2>	
	</div>





</body>
</html>