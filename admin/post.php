<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<style type="text/css">
		
	</style>
</head>
<body>
	<?php session_start();
	$servername = "localhost";
            $username = "root";
            $password = "";
            $conn = new mysqli($servername, $username, $password,'news');
		if(!isset($_SESSION["id_ad"])){
			header("location: index.php");
		} 
		
		?>
	<div style="width: 900px;margin: auto;">
		<?php require "html/header.html" ?>
	<h2>Bonjour <?php echo $_SESSION['name']; ?></h2>
		<?php 
		if (isset($_POST["submit"])) {
			$target="../images/post/";
			$t_file = $target .  basename($_FILES["img"]["name"]);
			$ext = strtolower(pathinfo($t_file,PATHINFO_EXTENSION));
			if($ext!="jpg"){
				echo "<h3 style='color:red'>fichier introduit n'est pas une image jpg</h3>";
			}
			else{
				
				$sql="INSERT INTO article(id_article,contenu,id_admin,label,views) VALUES(NULL,'".str_replace("'","",htmlspecialchars($_POST["contenu"]))."','".$_SESSION["id_ad"]."','".str_replace("'","",htmlspecialchars($_POST["label"]))."','0')"; 
				if($result = mysqli_query($conn, $sql)){
					$sql="SELECT id_article as id from article order by id desc limit 1";
				$result = mysqli_query($conn, $sql);
				$row=mysqli_fetch_assoc($result);
				$t_file = $target . $row["id"] .".jpg";
				if (move_uploaded_file($_FILES["img"]["tmp_name"], $t_file)) {
						
				        echo "<h3 style='color:green'>poste ajouté avec succé </h3>";
				    } else {
				        echo "<h3 style='color:red'>erreur dans l'upload de l'image</h3>";
				    }
					}
					else{
						printf("%s",mysqli_error($conn));
					}	
				}
				
		}




		 ?>

		<fieldset class="feild">
		<legend style="color: maroon;text-decoration: underline;">ajouter nouveau article</legend>
		<form method="post" enctype="multipart/form-data">
			label:<br><input type="text" name="label" style="width: 100%;padding: 5px;"><br><br>
			contenu de l'article: <br><textarea style="width: 100%;box-sizing: border-box;resize: vertical;padding: 5px;" rows="10"  name="contenu"></textarea>
			<br><br>
			l'image en format jpg :    <input type="file" name="img" id="img">

			<input type="submit" name="submit" value="send" style="float: right;margin-right: 7%; width:8%; color: blue;">
			
		</form>


	</fieldset>
	<br><br>
	<br><br>
	<h2 style="text-decoration: underline;color: maroon;">gestion d'anciens article:</h2>
	<div class="vue">
	<?php 
	$sql = "SELECT id_article,id_admin,contenu,da,label,views,name FROM article a join admin ad on a.id_admin=ad.id_ad";
	$result = $conn->query($sql);
     echo "<table>
				<tr>
					<th>id d'article</th>
					<th>nom ecrivain</th>
					<th>date</th>
					<th>titre</th>
					<th>visites</th>
					<th>actions</th>
				</tr>";
     while ( $art = mysqli_fetch_assoc($result)){
     	echo "<tr>
					<td>".$art['id_article']."</td>
					<td>".$art['name']."</td>
					<td>".$art['da']."</td>
					<td>".$art['label']."</td>
					<td>".$art['views']."</td>
					<td>
						<button style='margin:3px;width:90%;'><a href='modify.php?id=" . $art['id_article'] . "'>modifier</a></button>   
						<button style='margin:3px;width:90%;'><a href='delete.php?id=". $art['id_article'] . "'>supprimer</a></button>
					</td>
				</tr>";
     }
	 ?>
	</div>


	</div>




</body>
</html>