<html>
<head>

	<link rel="stylesheet" href="../css/adim4.css">
	<title> Admin pannel </title>
	<center><h1> News Now </h1></center>

</head>

<body>

<div id="header">
</br>


<h3> Admin name</h3>
<div class="info"> Root    <input type="button" value="logout" >
	<p><time>10:00</time>   11/11/1111.</p>
	<center><p class="do">last login:   <time>10:00</time> 11/11/1111.</p></center>
</div>
</div>

<div id="sidebare">
<ul>

<li> <a href="#add">ADD</a></li>
<li><a href="#delete">delete</a></li>
<li> <a href="#modify">Modify</a></li>



</ul>

</div>

<div id="data">

<center> INFO</center>

	<form name="add_articl" method="POST" action="admin.php">
<table id="fo">
	</br>
	</br>
	<tr><td> <h3> ajouter</h3></td></tr>
	<tr> <td> Titer</td> <td> <input type="text" value="titre"></td></tr>
	<tr> <td> contenu</td> <td> <textarea  rows="4" cols="50" value="..."></textarea></td></tr>
	<tr> <td>     </td> <td> <input type="submit" value="submit"> </td></tr>

</table>
</form>

	<form name="delete_articl" method="POST" action="admin.php">
<table id="fo">
	<tr><td> <h3 id="delete"> suprimer</h3></td></tr>
	<tr> <td> id article</td> <td> <input type="number" value=""></td></tr>
	
	<tr> <td>     </td> <td> <input type="submit" value="Delet"> </td></tr>

</table>
</form>

<form name="add_articl" method="POST" action="admin.php">
<table id="fo">
	</br>
	</br>
	<tr> <td><h3 id="modify"> Modify </h3><td></tr>
		<tr> <td> ID article</td> <td> <input type="number" value=""></td></tr>
	<tr> <td> nouveau Titer</td> <td> <input type="text" value=""></td></tr>
	<tr> <td> nouveau contenu</td> <td> <textarea  rows="4" cols="50" value="..."></textarea></td></tr>
	<tr> <td>     </td> <td> <input type="submit" value="submit"> </td></tr>

</table>
</form>

</div>

 </body>



</html>