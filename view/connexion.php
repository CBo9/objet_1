<?php 
$titre='Connexion';

ob_start();?>
<h1>Se connecter</h1>

<form method="post">
	<input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
	<br>
	<input type="password" name="password" id="password" placeholder="Mot de passe">
	<br>
	<input type="submit" value="Se connecter">
</form>

<?php
$content = ob_get_clean();
require'template.php';