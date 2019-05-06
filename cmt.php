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
	$sql = "SELECT id_article,id_admin,contenu,da,label,views FROM article order by id_article desc limit 5";
	$result = $conn->query($sql);
     echo "<table>
				<tr>
					<th>article id</th>
					<th>admin id</th>
					<th>da</th>
					<th>title</th>
					<th>views</th>
                                        <th>    </th>
				</tr>";
     while ( $art = mysqli_fetch_assoc($result)){
     	echo "<tr>
					<td>".$art['id_article']."</td>
					<td>".$art['id_admin']."</td>
					<td>".$art['da']."</td>
					<td>".$art['label']."</td>
					<td>".$art['views']."</td>"?>
            <td> <button type="button" value="Delete">Delete</button> </td>
                                         
                                         <?php
if(isset($_GET['id'])){
 
	// retrieve id from url
	$id = (int)$_GET['id'];
 
	// sql delete query
	$query = "DELETE FROM user_info WHERE id =" . $id;
}
                                            
			echo "</tr>";
     }
	 ?>
                                         
                                         

	</div>
            </div>

    </body>

</html>