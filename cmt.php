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
            $conn = new mysqli($servername, $username, $password,'news3');?>
        
        <div class="vue">
	<?php 
	$sql = "SELECT id_article,comment,nickname,date_cmt FROM comment order by id_article desc limit 7";
	$result = $conn->query($sql);
     echo "<table>
				<tr>
					<th>article id</th>
					<th>comment</th>
					<th>nickname</th>
					<th>date_cmt</th>
                    <th>    </th>
				</tr>";
     while ( $art = mysqli_fetch_assoc($result)){
     	echo "<tr>
					<td>".$art['id_article']."</td>
					<td>".$art['id_admin']."</td>
					<td>".$art['da']."</td>
					<td>".$art['label']."</td>
					?>
            <td> <button type="button" value="Delete">Delete</button> </td>
                                         
                                         <?php
if(isset($_GET['id_article'])){
 
	// retrieve id from url
	$id = (int)$_GET['id_article'];
 
	// sql delete query
	$query = "DELETE FROM comment WHERE id =" . $id;
}
                                            
			echo "</tr>";
     }
	 ?>
                                         
                                         

	</div>
            </div>

    </body>

</html>