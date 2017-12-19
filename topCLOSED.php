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
<p><img src="images/flags/RUS.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Russie</strong></span><span class="large-hidden medium-hidden"><strong>RUS</strong></span></p>
<p><img src="images/flags/ASA.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Arabie Saoudite</strong></span><span class="large-hidden medium-hidden"><strong>ASA</strong></span></p>
<p><img src="images/flags/EGY.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Egypte</strong></span><span class="large-hidden medium-hidden"><strong>EGY</strong></span></p>
<p><img src="images/flags/URU.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Uruguay</strong></span><span class="large-hidden medium-hidden"><strong>URU</strong></span></p>
</div>

<div class="pal">
<h3>B</h3>
<p><img src="images/flags/POR.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Portugal</strong></span><span class="large-hidden medium-hidden"><strong>POR</strong></span></p>
<p><img src="images/flags/ESP.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Espagne</strong></span><span class="large-hidden medium-hidden"><strong>ESP</strong></span></p>
<p><img src="images/flags/MAR.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Maroc</strong></span><span class="large-hidden medium-hidden"><strong>MAR</strong></span></p>
<p><img src="images/flags/IRA.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Iran</strong></span><span class="large-hidden medium-hidden"><strong>IRA</strong></span></p>
</div>

<div class="pal">
<h3>C</h3>
<p><img src="images/flags/FRA.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>France</strong></span><span class="large-hidden medium-hidden"><strong>FRA</strong></span></p>
<p><img src="images/flags/AUS.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Australie</strong></span><span class="large-hidden medium-hidden"><strong>AUS</strong></span></p>
<p><img src="images/flags/PER.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Pérou</strong></span><span class="large-hidden medium-hidden"><strong>PER</strong></span></p>
<p><img src="images/flags/DAN.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Danemark</strong></span><span class="large-hidden medium-hidden"><strong>DAN</strong></span></p>
</div>

<div class="pal">
<h3>D</h3>
<p><img src="images/flags/ARG.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Argentine</strong></span><span class="large-hidden medium-hidden"><strong>ARG</strong></span></p>
<p><img src="images/flags/ISL.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Islande</strong></span><span class="large-hidden medium-hidden"><strong>ISL</strong></span></p>
<p><img src="images/flags/CRO.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Croatie</strong></span><span class="large-hidden medium-hidden"><strong>CRO</strong></span></p>
<p><img src="images/flags/NIG.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Nigéria</strong></span><span class="large-hidden medium-hidden"><strong>NIG</strong></span></p>
</div>

<div class="pal">
<h3>E</h3>
<p><img src="images/flags/BRE.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Brésil</strong></span><span class="large-hidden medium-hidden"><strong>BRE</strong></span></p>
<p><img src="images/flags/SUI.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Suisse</strong></span><span class="large-hidden medium-hidden"><strong>SUI</strong></span></p>
<p><img src="images/flags/CRC.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Costa Rica</strong></span><span class="large-hidden medium-hidden"><strong>CRC</strong></span></p>
<p><img src="images/flags/SRB.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Serbie</strong></span><span class="large-hidden medium-hidden"><strong>SRB</strong></span></p>
</div>

<div class="pal">
<h3>F</h3>
<p><img src="images/flags/ALL.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Allemagne</strong></span><span class="large-hidden medium-hidden"><strong>ALL</strong></span></p>
<p><img src="images/flags/MEX.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Mexique</strong></span><span class="large-hidden medium-hidden"><strong>MEX</strong></span></p>
<p><img src="images/flags/SUE.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Suède</strong></span><span class="large-hidden medium-hidden"><strong>SUE</strong></span></p>
<p><img src="images/flags/COR.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Corée</strong></span><span class="large-hidden medium-hidden"><strong>COR</strong></span></p>
</div>

<div class="pal">
<h3>G</h3>
<p><img src="images/flags/BEL.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Belgique</strong></span><span class="large-hidden medium-hidden"><strong>BEL</strong></span></p>
<p><img src="images/flags/PAN.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Panama</strong></span><span class="large-hidden medium-hidden"><strong>PAN</strong></span></p>
<p><img src="images/flags/TUN.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Tunisie</strong></span><span class="large-hidden medium-hidden"><strong>TUN</strong></span></p>
<p><img src="images/flags/ANG.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Angleterre</strong></span><span class="large-hidden medium-hidden"><strong>ANG</strong></span></p>
</div>

<div class="pal">
<h3>H</h3>
<p><img src="images/flags/POL.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Pologne</strong></span><span class="large-hidden medium-hidden"><strong>POL</strong></span></p>
<p><img src="images/flags/SEN.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Sénégal</strong></span><span class="large-hidden medium-hidden"><strong>SEN</strong></span></p>
<p><img src="images/flags/COL.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Colombie</strong></span><span class="large-hidden medium-hidden"><strong>COL</strong></span></p>
<p><img src="images/flags/JAP.png" width="35" height="30" alt="" /><span class="small-hidden tiny-hidden mls mrs"><strong>Japon</strong></span><span class="large-hidden medium-hidden"><strong>JAP</strong></span></p>
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
