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
         if($_GET["id"]!=NULL){
         	 $sql = "SELECT id_article,label,da,contenu,name FROM article a join admin ad on a.id_admin=ad.id_admin where id_article=".$_GET["id"];
         } 
        else{
        	 $sql = "SELECT id_article,label,da,contenu,name FROM article a join admin ad on a.id_admin=ad.id_admin order by rand() limit 1";
        }
         $result = mysqli_query($conn, $sql);
         $data=mysqli_fetch_assoc($result);


         ?>
         <section>
         <article>
         	<br><br>
         	<div class="date"><?php echo "Le " . $data["da"] . " par " . $data["name"];?></div>
         	<br><br>
         	<?php echo '<img src="images/post/'.$data["id_article"].'.jpg" >';  ?>
         	<h1 id="tit" style="border-bottom: 1px solid maroon;"><?php echo $data["label"];?></h1>
         	<div ><?php echo $data["contenu"];?></div>
         </article>
         </section>
         <br><br>
         <article>
         	<?php  $sql = "SELECT * FROM comment where id_article=".$data['id_article'];
         	mysqli_free_result($result);
         			$es = mysqli_query($conn, $sql);
        			while ($data=mysqli_fetch_array($es)) { ?>
        			<div id="comment">
                		<h4><?php echo  $data["nickname"]?></h4>
                		<p><?php echo $data["comment"]?></p>
                		<h5><?php echo $data["date_cmt"]?></h4>
                		<br>
                		<br>
                		<br>
            		</div>
        			<?php };
         	  ?>
         	
         </article>
         <br>
         <br>
         <br>
		<?php require "html/footer.html"; ?>
	</div>
</body>
</html>