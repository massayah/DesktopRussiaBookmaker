<footer>
<a href="#ancretop" title="retour haut de page"><p class="top"><span class="fa fa-angle-double-up fa-2x"></span></p></a>
<p class="txtcenter">Site entièrement fait par Laurène et Martine  
<?php
if (isset($_SESSION['username']))
{
	$isadmin = $bdd->prepare('SELECT isadmin FROM russia_user WHERE username = ?');
	$isadmin->execute(array($_SESSION['username']));
	$isadmindata = $isadmin->fetch();
	if ($isadmindata[0] == 1)
	{
?>

 - <a href="admin.php">Admin</a>
<?php
}
$isadmin->closeCursor();
}
?>
</p></footer>
