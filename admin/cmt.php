<html>
    
    <head>

	<link rel="stylesheet" href="../css/admin.css">
        
    </head>
    <body>
        
        
        <div style="width: 900px;margin:auto;height: 900px;
    background-color: lightgray;">
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
	<?php 
	$sql = "SELECT * FROM comment order by id_article desc limit 7";
	$result = $conn->query($sql);
     echo "<table>
				<tr>
					<th>cmt it</th>
					<th>article id</th>
					<th>comment</th>
					<th>nickname</th>
					<th>date_cmt</th>
                    <th>    </th>
				</tr>";
     while ( $art = mysqli_fetch_assoc($result)){
     	echo "<tr>
					<td>".$art['id_cmt']."</td>
					<td>".$art['id_article']."</td>
					<td>".$art['comment']."</td>
					<td>".$art['nickname']."</td>
					<td>".$art['date_cmt']."</td>
					"?>
            <td> <button type="button" value="Delete"><a href="?id_cmt=<?php echo $art["id_cmt"] ?>">supprimer</a></button> </td>
        </tr>

       <?php                                  
      
}
                                           
	 ?>                                       
	</div>
            </div>

    </body>

</html>