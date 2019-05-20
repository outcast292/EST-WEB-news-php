<!DOCTYPE html>
<html>
<head>
	<title>modifer</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<div style="width: 900px;margin: auto;">
		<?php 
	session_start();
	$servername = "localhost";
            $username = "root";
            $password = "";
            $conn = new mysqli($servername, $username, $password,'news');
		if(!isset($_SESSION["id_ad"])){
			header("location: index.php");
		}
		
	require "html/header.html" ;
		if(isset($_POST["label"])){
			$sql= "UPDATE article SET label='".$_POST["label"]."',contenu='".$_POST["contenu"]."' where id_article=".$_GET["id"];
			$result = $conn->query($sql);
			echo "<h3 style='color:green;'>modifé avec succé !!! <h3>";
		}


	?>
		
	<?php 
		$sql = "SELECT id_article,label,da,contenu,name FROM article a join admin ad on a.id_admin=ad.id_ad where id_article=".$_GET["id"];
		$result = $conn->query($sql);
		$row=mysqli_fetch_assoc($result);
	 ?>
	<h2> modifions l'article N°<?php echo $row["id_article"]; ?> écrit par <?php echo $row["name"]; ?>  :</h2>

	<fieldset class="feild">
		<legend style="color: maroon">modifier</legend>
		<form method="post">
			label:<br><input type="text" name="label" style="width: 100%;padding: 5px;" value="<?php echo $row['label']; ?>"><br><br>
			contenu de l'article: <br><textarea style="width: 100%;box-sizing: border-box;resize: vertical;padding: 5px;" rows="10"  name="contenu"><?php echo $row['contenu'];  ?></textarea>
			<input type="submit" name="" value="modifier" style="float: right;margin-right: 7%; width:8%; color: blue;">
			
		</form>
	</fieldset>

	</div>
	
</body>
</html>