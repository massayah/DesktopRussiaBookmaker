<?php include('PHP/login.php'); 
?>
<?php include("head.php"); ?>
<body id="page_top">
<?php include("header.php"); ?>
<?php include("menu.php"); ?>

<?php include("PHP/set_top.php"); ?>

<div id="content"  class="pregrid">
<div class="mw2000p mtl">
<!-- Message displayed if the user is not logged in -->
<?php
if (!isset($_SESSION['username']))
{
	echo "<div id=\"logged_error_message\" class=\"mtl\">Vous n'êtes pas connecté : pour accéder à cette page, vous devez vous connecter avec votre nom d'utilisateur et votre mot de passe, ou <a href=\"register.php\">vous inscrire comme nouveau membre.</div>";
?>
	<script>
	setTimeout("window.location='index.php'",3000);
	</script>
<!-- End Message displayed if the user is not logged in -->
	
<?php
}
else
{
?>

<!-- Display of a table with the teams ordered by group, all teams are draggable -->
<div class="panel mbl">
<h2 class="ptl txtcenter">Votre Top 4</h2>
<div id="top4-choice" class="grid-4-small-2 has-gutter-xl">
<?php
$gettop = $bdd->prepare('SELECT * FROM russia_top WHERE username = ?');
$gettop->execute(array($_SESSION['username']));
if ($gettop->rowCount() != 0)
{
	$gettopdata = $gettop->fetch();
	$team1 = $gettopdata['team1'];
	$team2 = $gettopdata['team2'];
	$team3 = $gettopdata['team3'];
	$team4 = $gettopdata['team4'];
}
?>
<div id="top4-choice1" class="plm">
	<h2 class="h4-like pts txtcenter">1er</h2>
	<div>
		<ul class="unstyled pln">
		<?php if (isset($team1) && !empty($team1)) { ?>
			<li id="team1"><?php echo $team1; ?></li>
		<?php } else { ?>
			<li class="placeholder1"><a href="#jefaismontop">Faites votre choix</a></li>
		<?php } ?>
		</ul>
	<div id="result"></div>
	</div><!--end class ui-widget-content-->
</div><!--end id top4-choice1-->

<div id="top4-choice2" class="plm">
	<h2 class="h4-like pts txtcenter">2ème</h2>
	<div>
		<ul class="unstyled pln">
		<?php if (isset($team2) && !empty($team2)) { ?>
			<li id="team2"><?php echo $team2; ?></li>
		<?php } else { ?>
			<li class="placeholder2"><a href="#jefaismontop">Faites votre choix</a></li>
		<?php } ?>
		</ul>
	</div><!--end class ui-widget-content-->
</div><!--end id top4-choice2-->

<div id="top4-choice3" class="plm">
	<h2 class="h4-like pts txtcenter">3ème</h2>
	<div>
		<ul class="unstyled pln">
		<?php if (isset($team3) && !empty($team3)) { ?>
			<li id="team3"><?php echo $team3; ?></li>
		<?php } else { ?>
			<li class="placeholder3"><a href="#jefaismontop">Faites votre choix</a></li>
		<?php } ?>
		</ul>
	</div><!--end class ui-widget-content-->
</div><!--end id top4-choice3-->

<div id="top4-choice4" class="plm">
	<h2 class="h4-like pts txtcenter">4ème</h2>
	<div>
		<ul class="unstyled pln">
		<?php if (isset($team4) && !empty($team4)) { ?>
			<li id="team4"><?php echo $team4; ?></li>
		<?php } else { ?>
			<li class="placeholder4"><a href="#jefaismontop">Faites votre choix</a></li>
		<?php } ?>
		</ul>
	</div>
</div><!--end id top4-choice4-->
</div><!--fin grid-->
</div><!--fin panel-->

<div class="panel grpes">
<h2 class="ptl txtcenter">Les Groupes</h2>
<div class="grid-4-small-2 has-gutter">

<div class="pal">
<h3>A</h3>
<p><img src="images/flags/russie.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Russie</strong></span><span class="large-hidden medium-hidden"><strong>RUS</strong></span></p>
<p><img src="images/flags/uruguay.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Uruguay</strong></span><span class="large-hidden medium-hidden"><strong>URU</strong></span></p>
<p><img src="images/flags/suisse.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Suisse</strong></span><span class="large-hidden medium-hidden"><strong>SUI</strong></span></p>
<p><img src="images/flags/zambie.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Zambie</strong></span><span class="large-hidden medium-hidden"><strong>ZAM</strong></span></p>
</div>

<div class="pal">
<h3>B</h3>
<p><img src="images/flags/allemagne.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Allemagne</strong></span><span class="large-hidden medium-hidden"><strong>ALL</strong></span></p>
<p><img src="images/flags/australie.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Australie</strong></span><span class="large-hidden medium-hidden"><strong>AUS</strong></span></p>
<p><img src="images/flags/gabon.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Gabon</strong></span><span class="large-hidden medium-hidden"><strong>GAB</strong></span></p>
<p><img src="images/flags/equateur.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Equateur</strong></span><span class="large-hidden medium-hidden"><strong>EQU</strong></span></p>
</div>

<div class="pal">
<h3>C</h3>
<p><img src="images/flags/belgique.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Belgique</strong></span><span class="large-hidden medium-hidden"><strong>BEL</strong></span></p>
<p><img src="images/flags/colombie.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Colombie</strong></span><span class="large-hidden medium-hidden"><strong>COL</strong></span></p>
<p><img src="images/flags/usa.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>USA</strong></span><span class="large-hidden medium-hidden"><strong>USA</strong></span></p>
<p><img src="images/flags/tunisie.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Tunisie</strong></span><span class="large-hidden medium-hidden"><strong>TUN</strong></span></p>
</div>

<div class="pal">
<h3>D</h3>
<p><img src="images/flags/argentine.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Argentine</strong></span><span class="large-hidden medium-hidden"><strong>ARG</strong></span></p>
<p><img src="images/flags/ghana.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Ghana</strong></span><span class="large-hidden medium-hidden"><strong>GHA</strong></span></p>
<p><img src="images/flags/paysgalles.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>P. Galles</strong></span><span class="large-hidden medium-hidden"><strong>GAL</strong></span></p>
<p><img src="images/flags/iran.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Iran</strong></span><span class="large-hidden medium-hidden"><strong>IRA</strong></span></p>
</div>

<div class="pal">
<h3>E</h3>
<p><img src="images/flags/france.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>France</strong></span><span class="large-hidden medium-hidden"><strong>FRA</strong></span></p>
<p><img src="images/flags/paysbas.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Pays-Bas</strong></span><span class="large-hidden medium-hidden"><strong>PBA</strong></span></p>
<p><img src="images/flags/senegal.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Sénégal</strong></span><span class="large-hidden medium-hidden"><strong>SEN</strong></span></p>
<p><img src="images/flags/islande.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Islande</strong></span><span class="large-hidden medium-hidden"><strong>ISL</strong></span></p>
</div>

<div class="pal">
<h3>F</h3>
<p><img src="images/flags/espagne.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Espagne</strong></span><span class="large-hidden medium-hidden"><strong>ESP</strong></span></p>
<p><img src="images/flags/chili.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Chili</strong></span><span class="large-hidden medium-hidden"><strong>CHI</strong></span></p>
<p><img src="images/flags/trinite.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Trinité Tobago</strong></span><span class="large-hidden medium-hidden"><strong>TRI</strong></span></p>
<p><img src="images/flags/portugal.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Portugal</strong></span><span class="large-hidden medium-hidden"><strong>POR</strong></span></p>
</div>

<div class="pal">
<h3>G</h3>
<p><img src="images/flags/italie.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Italie</strong></span><span class="large-hidden medium-hidden"><strong>ITA</strong></span></p>
<p><img src="images/flags/japon.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Japon</strong></span><span class="large-hidden medium-hidden"><strong>JAP</strong></span></p>
<p><img src="images/flags/pologne.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Pologne</strong></span><span class="large-hidden medium-hidden"><strong>POL</strong></span></p>
<p><img src="images/flags/costarica.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Costa Rica</strong></span><span class="large-hidden medium-hidden"><strong>COS</strong></span></p>
</div>

<div class="pal">
<h3>H</h3>
<p><img src="images/flags/angleterre.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Angleterre</strong></span><span class="large-hidden medium-hidden"><strong>ANG</strong></span></p>
<p><img src="images/flags/mexique.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Mexique</strong></span><span class="large-hidden medium-hidden"><strong>MEX</strong></span></p>
<p><img src="images/flags/croatie.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Croatie</strong></span><span class="large-hidden medium-hidden"><strong>CRO</strong></span></p>
<p><img src="images/flags/coree.png" width="20" height="20" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Corée</strong></span><span class="large-hidden medium-hidden"><strong>COR</strong></span></p>
</div>

</div><!--fin grid-->
</div><!--fin panel-->



<!-- End Display of the droppable zone for the four positions of the top -->

</div><!--end center-->
</div><!--end content-->
<?php } ?>
<?php include("footer.php"); ?>
</div><!--end#container-->

</body>
</html>
