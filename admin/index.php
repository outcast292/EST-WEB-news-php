<html>
<head>

	<link rel="stylesheet" href="../css/admin.css">
	<title> Admin pannel </title>

</head>
<body>
	<?php 
	session_start();
	$servername = "localhost";
            $username = "root";
            $password = "";
            $conn = new mysqli($servername, $username, $password,'news');
		if ((isset($_POST["name"]) && isset($_POST["pass"]) && !isset($_SESSION["id_ad"]))) {

            $sql = "SELECT * FROM admin where name='".$_POST['name'] ."'";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
            if($_POST["pass"]==$row["pass"]){
            	$_SESSION["id_ad"]=$row["id_ad"];
            	$_SESSION["name"]=$row["name"];
            }}

        if (!isset($_SESSION["id_ad"])) {
        	require 'php/login.php';
        }
		
	 
	else{
		
	?>

	<div style="width: 900px;margin:auto;height: 900px;">
		<?php require "html/header.html" ?>

	<h2 style="color:green;text-decoration: underline;">Bonjour <?php echo $_SESSION['name']; ?></h2>	
	<?php 
	 $sql = "SELECT sum(views) as sum FROM article";
	 $result = $conn->query($sql);
     $views = mysqli_fetch_assoc($result);
     $sql = "SELECT count(*) as count FROM article";
	 $result = $conn->query($sql);
     $art = mysqli_fetch_assoc($result);
     $sql = "SELECT count(*) as count FROM comment";
	 $result = $conn->query($sql);
     $cmt = mysqli_fetch_assoc($result);
	 ?>
	<div class="ct">

		<div class="vue">
			<legend style="text-decoration: underline;">statistique de site</legend>
			<br>
			<table>
				<tr>
					<th>views</th>
					<th>articles</th>
					<th>commantaires</th>
				</tr>
				<tr>
					<td><?php echo $views["sum"]; ?></td>
					<td><?php echo $art["count"]; ?></td>
					<td><?php echo $cmt["count"]; ?></td>
				</tr>
			</table>
		</div>
		<br>
	<br>
	<br>
	<br>
	
		<div class="vue">
			<legend style="text-decoration: underline;">les derniers 5 articles posté</legend>
			<br>
	<?php 
	$sql = "SELECT id_article,id_admin,contenu,da,label,views FROM article order by id_article desc limit 10";
	$result = $conn->query($sql);
     echo "<table>
				<tr>
					<th>article id</th>
					<th>admin id</th>
					<th>da</th>
					<th>title</th>
					<th>views</th>
				</tr>";
     while ( $art = mysqli_fetch_assoc($result)){
     	echo "<tr>
					<td>".$art['id_article']."</td>
					<td>".$art['id_admin']."</td>
					<td>".$art['da']."</td>
					<td>".$art['label']."</td>
					<td>".$art['views']."</td>
				</tr>";
     }
	 ?>

	</div>
	</div>
	


	</div>
	

	<?php  } ?>

</body>


</html>