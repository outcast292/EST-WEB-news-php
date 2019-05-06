<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<?php session_start();
	$servername = "localhost";
            $username = "root";
            $password = "";
            $conn = new mysqli($servername, $username, $password,'news');
		if(!isset($_SESSION["id_ad"])){
			header("location: index.php");
		} ?>
	<div style="width: 900px;margin: auto;">
		<?php require "html/header.html" ?>
	<h2>Bonjour <?php echo $_SESSION['name']; ?></h2>	
	<div class="vue">
	<?php 
	$sql = "SELECT id_article,id_admin,contenu,da,label,views FROM article";
	$result = $conn->query($sql);
     echo "<table>
				<tr>
					<th>article id</th>
					<th>admin id</th>
					<th>da</th>
					<th>title</th>
					<th>views</th>
					<th>actions</th>
				</tr>";
     while ( $art = mysqli_fetch_assoc($result)){
     	echo "<tr>
					<td>".$art['id_article']."</td>
					<td>".$art['id_admin']."</td>
					<td>".$art['da']."</td>
					<td>".$art['label']."</td>
					<td>".$art['views']."</td>
					<td>
						<a href='modify.php?id=" . $art['id_article'] . "'>modifier</a>   
						<a href='delete.php?id=". $art['id_article'] . "'>supprimer</a>
					</td>
				</tr>";
     }
	 ?>
	</div>


	</div>




</body>
</html>