<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?> 

<?php include('PHP/login.php'); ?>
<?php include("head.php"); ?>
<body id="page_bet2">
<?php include("header.php"); ?>
<?php include("menu.php"); ?>
<?php include("PHP/bet_functions.php"); ?>
<script src="javascript/jquery.min.js"></script>
<script src="javascript/jquery-1.4.3.min.js"></script>
<script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script src="javascript/teams.js"></script>
<script src="javascript/search.js"></script>

<div id="content" class="pregrid">
<div class="mw2000p">
<!-- Message displayed if the user is not logged in -->
<?php
if (!isset($_SESSION['username']))
{
	echo "<div id=\"logged_error_message\">Vous n'êtes pas connecté : pour accéder à cette page,vous devez vous connecter avec votre nom d'utilisateur et votre mot de passe, ou vous enregistrer comme nouveau membre.</div>";
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

<h1 class="ptl h2-like txtcenter">Pariez sur les Matchs Éliminatoires</h1>
<div id="search_team" class="mtl mbl txtcenter"><label for="info_team">Rechercher une équipe&nbsp;:&nbsp;</label><input id="info_team" /></div>

<div class="panel mbl" id="datematch">
<h2 class="txtcenter ptl">Accès direct</h2>

<div class="grid-3-small-1 has-gutter">
<div class="prl pbl pll">
<p class="ptl plm">8èmes de finale</p>
<p><a href="#June30">Samedi 30 juin</a><br>
<a href="#July1">Dimanche 1er juillet</a><br>
<a href="#July2">Lundi 2 juillet</a><br>
<a href="#July3">Mardi 3 juillet</a></p>
</div>
<div class="prl pbl pll">
<p class="ptl plm">Quarts de finale</p>
<p><a href="#July6">Vendredi 6 juillet</a><br>
<a href="#July7">Samedi 7 juillet</a></p>
</div>
<div class="prl pbl pll">
<p class="ptl plm">Demi-finales et Finale
</p>
<p><a href="#July10">Mardi 10 juillet</a><br>
<a href="#July11">Mercredi 11 juillet</a><br>
<a href="#July14">Samedi 14 juillet</a><br>
<a href="#July15">Dimanche 15 juillet</a></p>
</div>

</div><!--end grid-3-->
</div><!--end Panel-->

<?php 
$daymatch = $bdd->query('SELECT t1.name AS tn1, t2.name AS tn2, HOUR(date) as hour, es.id AS sid 
FROM russia_schedule es JOIN russia_team t1 ON team1 = t1.id 
JOIN russia_team t2 ON t2.id = team2 WHERE DATE(date) LIKE CURDATE()');
if ($daymatch->rowCount() > 0)
{
	echo "<div class=\"panel pal mbl\" id=\"daymatch\">
<h2>Les paris du jour</h2>";
while ($daymatchdata = $daymatch->fetch())
{
	echo "<a href=\"#bet" . $daymatchdata['sid'] . "\" >" . $daymatchdata['tn1'] . "/" . $daymatchdata['tn2'] . " - " . $daymatchdata['hour'] . "h </a>";
}
echo "</div>";
}
?>

<!-- Loop to display all matches in chronological order with a select element to select the potential winning team -->
<div class="grid-2-small-1 has-gutter" id="mainblock">
<?php
$bets = $bdd->prepare('SELECT t1.name AS tn1, t2.name AS tn2, t1.flag AS tf1, t2.flag as tf2, es.id as sid, team1result, team2result, available, 
MONTHNAME(date) as month, DAY(date) as day, HOUR(date) as hour, MINUTE(date) as minute, win, available, t1.previous as previous1, t2.previous as previous2, 
t1.smallname AS smallname1, t2.smallname AS smallname2, MONTHNAME(NOW()) as monthnow, DAY(NOW()) AS daynow, tempname1, tempname2, en.name AS title, t1.id as idt1, t2.id as idt2, t1.starplayer as starplayer1, t2.starplayer as starplayer2, t1.coach as coach1, t2.coach as coach2, overtime, 
team1penalty as t1pen, team2penalty as t2pen 
FROM russia_schedule es  LEFT OUTER JOIN russia_bet eb ON es.id = eb.match_id AND username = ? LEFT OUTER JOIN russia_team t1 ON team1 = t1.id 
LEFT OUTER JOIN russia_team t2 ON t2.id = team2 JOIN russia_namematch en ON en.id_match = es.id WHERE es.group IS NULL ORDER BY date');
$bets->execute(array($_SESSION['username']));
while ($betsdata = $bets->fetch())
{
$team1 = $betsdata['tn1'] != NULL ? $betsdata['tn1'] : $betsdata['tempname1'];
$team2 = $betsdata['tn2'] != NULL ? $betsdata['tn2'] : $betsdata['tempname2'];
$teamresult1 = $betsdata['team1result'];
$teamresult2 = $betsdata['team2result'];
$id = $betsdata['sid'];
$pathflag = "images/flags/flag.png";
$hasplayed = $teamresult1 != NULL && $teamresult2 != NULL;
$idt1 = $betsdata['idt1'];
$idt2 = $betsdata['idt2'];
$prolong = $betsdata['overtime'];
$peno1 = $betsdata['t1pen'];
$peno2 = $betsdata['t2pen'];


?>




<div class="bet-match-poule ptl pbl class1test">
<p class="h4-like pam" id="<?php echo $betsdata['month'] . $betsdata['day']; ?>"><span class="couleur"><?php echo $betsdata['day']; if ($betsdata['month'] == "June") echo " Juin"; else if ($betsdata['day'] == "1" 
&& $betsdata['month'] == "July") echo "er Juillet"; else echo " Juillet";
	?></span> - <?php echo $betsdata['hour'] . ":";
	if ($betsdata['minute'] < 10)
		echo "0";
	echo $betsdata['minute']; 
	echo " " . $betsdata['title'];
	?></p>
<div class="panel txtcenter">
<p class="ptl pbl"><img src="<?php echo $betsdata['tf1'] != NULL ? $betsdata['tf1'] : $pathflag;?>" alt="<?php echo $team1; ?>" width="50" height="50"> 
<span class="h4-like small-hidden tiny-hidden mls mrs"><strong><?php echo $team1; ?></strong></span>
<span class="h4-like large-hidden medium-hidden mls mrs"><strong><?php echo $betsdata['smallname1']; ?></strong></span> vs <span class="h4-like small-hidden tiny-hidden mls mrs"><strong><?php echo $team2; ?></strong></span>
<span class="h4-like large-hidden medium-hidden mls mrs"><strong><?php echo $betsdata['smallname2']; ?></strong></span> 
<img src="<?php echo $betsdata['tf2'] != NULL ? $betsdata['tf2'] : $pathflag;?>" alt="<?php echo $team2; ?>" width="50" height="50">
</p>
<p class="txtcenter h5-like mtn mbl"><strong>
<?php
if ($hasplayed)
{
	echo $betsdata['team1result'] . " - " . $betsdata['team2result'];
	if ($prolong == 1 )
	{
	  echo " prolongations<br />";
	  if ($peno1 != NULL && $peno2 != NULL)
	    echo "t.a.b " . $peno1 . " à " . $peno2;
	 }
}
else
	echo "non joué";
?>
</strong></p>
<?php
if ($betsdata['tn1'] != NULL)
	setLightbox($team1, $betsdata['previous1'], $betsdata['smallname1'], $betsdata['starplayer1'], $betsdata['coach1']);
if ($betsdata['tn2'] != NULL)
	setLightbox($team2, $betsdata['previous2'], $betsdata['smallname2'], $betsdata['starplayer2'], $betsdata['coach2']);
?>

		<!-- End Setting the lightbox for each team available if we click on the name of the team -->
 


<div class="grid-2-small-1">
<div>
<form id="bet<?php echo $id; ?>" action="bet2.php#bet<?php echo $id; ?>" method="POST" class="border-bet-form">
<ul class="unstyled pls pts bet-choix txtleft">
			<li><label for="<?php echo $team1; ?>"><input type="radio" value="<?php echo $betsdata['idt1']; ?>" name="select_bet<?php echo $id; ?>">&nbsp;<?php echo $team1; ?></label></li>
			<li><label for="<?php echo $team2; ?>"><input type="radio" value="<?php echo $betsdata['idt2']; ?>" name="select_bet<?php echo $id; ?>">&nbsp;<?php echo $team2; ?></label></li>
			<?php
				if ($betsdata['available'] == "1") {
			?>
			<li class="mtm"><input type="submit" class="btn-rouge mts mbs" name="save_bet<?php echo $id; ?>" id="save_bet<?php echo $id; ?>" value="Valider"></li>
			<?php } else { ?>
			<li class="pam"><strong>Paris fermés</strong></li>
			<?php } ?>
</ul></form>
</div>
<div class="pam">
<p class="big pbn">Votre choix</p>
<p class="couleur mtn"><?php 
if ($betsdata['win'] != "")
	{
		$chosenbet = $bdd->prepare('SELECT name FROM russia_team WHERE id = ?');
		$chosenbet->execute(array($betsdata['win']));
		$chosenbetdata = $chosenbet->fetch();
		echo $chosenbetdata['name'];
	}
    else
      echo "Non Parié";
?></p>
<p class="mtm big pbn">Résultat</p>
<?php
if ($teamresult1 != NULL && $teamresult2 != NULL)
{
	if ($teamresult1 > $teamresult2)
		$winningteam = $idt1;
	else if ($teamresult2 > $teamresult1)
		$winningteam = $idt2;
	else
	{
		if ($teamresult1 == $teamresult2 && $betsdata['group'] == null)
		{
			if ($betsdata['team1penalty'] > $betsdata['team2penalty'])
				$winningteam = $idt1;
			else
				$winningteam = $idt2;
				
		}
		else
			$winningteam = 33;
	}
	if ($winningteam == $betsdata['win'])
		echo "<p class=\"couleur mtn\">Gagné</p>";
	else
		echo "<p class=\"couleur mtn\">Perdu</p>";
}
else
{
	echo "<p class=\"couleur mtn\">Match non joué</p>";
}
?>
</div>
</div><!--end grid-2-->
</div><!--end panel-->
</div><!--end poule ang esp-->
<?php
}
?>
<!--</div>--><!--end grid-2-->

</div><!--end center-->

</div><!--end content-->
<?php } ?>
<?php include("footer.php"); ?>
</div><!--end#container-->
</body>
</html>
