<!DOCTYPE html>
<html>
<head>
	<title>HELLLO WORLD</title>
	<meta charset="utf-8" />
    	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	 <div id="bloc_page">
		<?php require "html/header.html";
		if(!(isset($_GET["id"]))){
			header("location: index.php"); 
		}
		 $servername = "localhost";
         $username = "root";
         $password = "";
         $conn = new mysqli($servername, $username, $password,'news'); 
         $sql = "SELECT id_article,label,da,contenu,name FROM article a join admin ad on a.id_admin=ad.id_admin where id_article=".$_GET["id"];
         $result = mysqli_query($conn, $sql);
         $data=mysqli_fetch_assoc($result);



         ?>
         <section>
         <article>
         	<br><br>
         	<div class="date"><?php echo "Le " . $data["da"] . " par " . $data["name"];?></div>
         	<br><br>
         	<?php echo '<img src="images/post/'.$_GET['id'].'.jpg" >';  ?>
         	<h1><?php echo $data["label"];?></h1>
         	<div class="post"><?php echo $data["contenu"];?></div>
         </article>
         </section>
         <br>
		<?php require "html/footer.html"; ?>
	</div>
</body>
</html>