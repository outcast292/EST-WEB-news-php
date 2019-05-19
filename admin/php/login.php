<style type="text/css">
	fieldset{
		background-color: white;
		width :300px;
		margin:auto;
		margin-top: 25px;
	}
	input{
		width: 100%;
	}
	a:hover{
		text-decoration: underline;
	}
	#log{
		margin: auto;
		display: block;
	}
</style>
<div style="width: 900px; margin: auto;padding-bottom: 50px;margin-top: 70px;">
	<div >
	<img style="margin:auto;" src="img/zozor_logo.png">
	<h1  style="margin:auto; display: inline-block;" >Hello world</h1>
</div>
<fieldset>
	<p>pour entrer a l'interface de gestion de site, merci d'entrer vos données</p>
	<img id="log" src="img/login.png" width="70%" height="20%">
	<form method="POST">
		<legend>login</legend>
		<input placeholder="user id"  type="text" name="name" required="required"><br><br>
		<input placeholder="passord"  type="password" name="pass" required="required"><br><br>
		<input type="submit" name="">
		<p>mot de passe oublié?<a href="mailto:outhman.mdarhri@gmail.com" style="color: red;text-decoration: none">contacter l'admin</a></p>
</form>
	
</fieldset> </div>
