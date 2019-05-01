<body>


<form name="add_articl" method="POST" action="admin.php">
<table id="fo">
	</br>
	</br>
	<tr><td> <h3> ajouter</h3></td></tr>
	<tr> <td> Titer</td> <td> <input type="text" value="titre"></td></tr>
	<tr> <td> contenu</td> <td> <textarea  rows="4" cols="50" value="contenu"></textarea></td></tr>
	<tr> <td>     </td> <td> <input type="submit" value="submit"> </td></tr>

</table>
</form>
<?php  
if((isset($_['titre'])) && (isset($_['contenu']))){
$titre=$_POST['titre'];
$contenu=$_POST['contenu'];

$conn = new mysql-connect("localhost","root","");
if ($conn->connect_error){
	die("connection failed: ". $conn->connect_error);
}

  mysql-select-db("news");
  $conn->exec =(insert into Article (id,titre,contenu) values ("",$titre,$contenu));
  echo " article was added properly ";
  


}


?>


</body>