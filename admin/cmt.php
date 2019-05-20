<html>
    
    <head>
    <title>commentaire</title>
	<link rel="stylesheet" href="../css/admin.css">
        
    </head>
    <body>
        
        
        <div style="width: 900px;margin:auto;height: 900px;">
		<?php require "html/header.html" ?>
        
<?php 
	session_start();
	$servername = "localhost";
            $username = "root";
            $password = "";
            $conn = new mysqli($servername, $username, $password,'news');

            if(isset($_GET['id_cmt'])){
 
	// retrieve id from url
	$id = (int)$_GET['id_cmt'];
 
	// sql delete query
	$query = "DELETE FROM comment WHERE id_cmt =" . $id;
	$res=mysqli_query($conn,$query);
}

            ?>

        
        <div class="vue">
        	<br><br>
       		<legend style="text-decoration: underline;font-size: 1.2em;">interface de gestion des commentaires</legend>
       		<br><br>
	<?php 
	$sql = "SELECT * FROM comment order by id_article desc limit 7";
	$result = $conn->query($sql);
     echo "<table>
				<tr>
					<th>N°commentaire</th>
					<th>Id article</th>
					<th>Commentaire</th>
					<th>Surnom</th>
					<th>Date</th>
                    <th>Actions</th>
				</tr>";
     while ( $art = mysqli_fetch_assoc($result)){
     	echo "<tr>
					<td>".$art['id_cmt']."</td>
					<td>".$art['id_article']."</td>
					<td>".$art['comment']."</td>
					<td>".$art['nickname']."</td>
					<td>".$art['date_cmt']."</td>
					"?>
            <td> <button type="button" value="Delete" style="width: 100%;margin: auto;padding: 5px;" ><a href="?id_cmt=<?php echo $art["id_cmt"] ?>">supprimer</a></button> </td>
        </tr>

       <?php                                  
      
}
                                           
	 ?>                                       
	</div>
            </div>

    </body>

</html>