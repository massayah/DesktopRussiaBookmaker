<header id="ancretop" class="pregrid">
<div class="mw2000p header flex-container">
<div class="logodiv">
<a href="index.php" title="Retour Accueil"><img class="logo-standard" src="images/header.png" alt="Russia Bookmaker" /><img class="logo-600-1023" src="images/header320.png" alt="Russia Bookmaker" /></a>
</div><!--end logodiv-->

<?php
if (isset($_SESSION['username']))
{
	echo "<div id=\"login\"  class=\"flex-item-fluid flex-item-center\"><h3 class=\"h4-like\">Bienvenue " . $_SESSION['username'] . "</h3>";
?>
<form id="header_connected_form" method="post" action="index.php">
<input type="submit" class="btn-rouge" name="logout" value="Je me déconnecte">


<?php
}
else
{
?>
<div id="login" class="flex-item-fluid flex-item-center">
<p class="h4-like" title="cliquez pour vous connecter">Connexion</p>
<div id="inscript" class="login-inscription"><a href="register.php" title="vers la page d'inscription">Inscription</a></div>
<div id="login-form">
<form id="header_form" method="post" action="index.php">

	<label for="usernameConnect">Nom</label>
	<input type="text" id="usernameConnect" name="usernameConnect" autofill="usernameConnect" size="10" required autofocus><br>
	<label for="passwordConnect">Mot de Passe <span class="smaller"><a href="contact.php">Oubli&nbsp;?</a></span></label>
	<input type="password" id="passwordConnect" name="passwordConnect" autofill="passwordConnect" size="10" required>
	<input type="submit" class="mtl btn-rouge" name="connection" value="OK">
	<?php if (isset($error)) echo "<br><span class=\"error_message\">$error</span>";} ?>
</form>

<?php
if (!isset($_SESSION['username']))
{
    echo "</div><!--end login-form non connecté -->";
?>
<?php } 
?>

</div><!--end login-->
<?php
if (isset($_SESSION['username']))
{
	$isadmin = $bdd->prepare('SELECT isadmin FROM russia_user WHERE username = ?');
	$isadmin->execute(array($_SESSION['username']));
	$isadmindata = $isadmin->fetch();
	if ($isadmindata[0] == 1)
	{
?>

<p class="mw2000p txtright admin-connect"><a class="btn-rouge" href="admin.php">Admin</a></p>
<?php
}
$isadmin->closeCursor();
}
?>
</div><!--end header flex-container-->
</header>