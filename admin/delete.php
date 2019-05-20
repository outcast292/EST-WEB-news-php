<!DOCTYPE html>
<html>
<head>
	<title>modifer</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<div style="width: 900px;margin:auto;">
		<?php 
		session_start();
	$servername = "localhost";
            $username = "root";
            $password = "";
            $conn = new mysqli($servername, $username, $password,'news');
		if(!isset($_SESSION["id_ad"])){
			header("location: index.php");
		}
		if(isset($_GET["answer"]))
			if($_GET["answer"]==1){
			$sql= "DELETE FROM article WHERE id_article=".$_GET["id"];
			$result = $conn->query($sql);
			header("location: post.php");
			}
			



		require("html/header.html");







		 ?>
		
		 <h1>est-ce que vous êtes sure de supprimer l’article  N° <?php echo $_GET["id"]; ?></h1>
		 <fieldset>
		 	<form>
		 	<legend>surpression</legend>
		 	est-ce que vous êtes sure ?
		 	cette opération est irréversible !
		 	<input type="text" name="id" hidden="hidden" value=" <?php echo $_GET['id'] ?> ">
		 	<input type="radio" value="1" name="answer"> <span style="color: red;" >oui</span> 
		 	<input type="radio" value="2" name="answer"> <span style="color: green;">non</span> <br><br>
		 	<input type="submit" name="">
		 	</form>
		 </fieldset>


	</div>



</body>
</html>