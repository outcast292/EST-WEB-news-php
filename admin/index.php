<html>
<head>

	<link rel="stylesheet" href="../css/admin.css">
	<title> Admin pannel </title>

</head>
<body>
	<?php 
	session_start();
		if ((isset($_POST["name"]) && isset($_POST["pass"]) && !isset($_session["id_ad"]))) {
			$servername = "localhost";
            $username = "root";
            $password = "";
            $p=$_POST["pass"];
            $conn = new mysqli($servername, $username, $password,'news');
            $sql = "SELECT * FROM admin where name='root'";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
            if($_POST["pass"]==$row["pass"]){
            	$_session["id_ad"]=$row["id_ad"];
            }}

        if (!isset($_session["id_ad"])) {
        	require 'php/login.php';
        }
		
	 
	else{
		
	?>

	<div style="width: 900px;margin:auto;
    background-color: lightgray;">
		<header>
		<div id="title">
                    <div id="logo">
                        <img src="../images/zozor_logo.png" alt="LOGO" />
                        <h1>HELLO WORLD</h1>    
                    </div>
                    <h2>ADMIN PAGE</h2>
                </div>
                <nav >
        <ul>

         <li><a href="#">acceuil</a></li>
         <li><a href="#">aleatoire</a></li>
         <li><a href="#">feuilleter</a></li>
         <li><a href="#">contact</a></li>
          </ul>
    </nav>

	</header>
	

	</div>
	

	<?php  } ?>

</body>


</html>