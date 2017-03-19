<?php include('PHP/login.php'); ?>
<?php include("head.php"); ?>
<body id="page_accueil">
<?php include("header.php"); ?>
<?php include("menu.php"); ?>

<div id="content" class="pregrid">
<div class="mw2000p">
<div id="intro" class="mtl mbl">
<h1 class="txtcenter">It's Free, It's Fun, It's Competition</h1>
<div class="grid-2-small-1 has-gutter-xl">

<div class="pal">
<h2 class="h4-like ptl">En route pour la coupe du monde en Russie.</h2>
<p>La compétition se déroulera du 14 juin au 15 juillet 2018.</p>
<p>32 équipes - 1 champion</p>
<p><a href="bet1.php">Pariez sur chaque match</a></p>
<p><a href="top.php">Faites&nbsp;votre&nbsp;Top&nbsp;4</a></p>
<p>et Gagnez des cadeaux.</p>
</div>
<div class="pal">
<h2 class="h4-like ptl">Pendant les matchs, venez discuter sur la plate-forme <a href="http://assayah.com/Discussion">Discussion</a></h2>
<p>C'est un réseau privé que j'ai installé dans mon hébergement tout comme le site lui-même, donc pas de problème de confidentialité.</p>
<p>Au moment des matchs, il y aura toujours quelqu'un avec qui discuter, si ce n'est une grosse affluence pour les matchs à enjeu.</p>
<p>On peut s'en servir avec une tablette ou un smartphone, très pratiques pour discuter lorsqu'on regarde un match.</p>
</div>
</div><!--end grid-->
</div><!--end intro-->

<div class="register panel">
<h2 class="pal">1. Je m'inscris</h2>
<div class="grid-2-small-1 has-gutter-xl">
<div class="inscription pal">
<h3 class="mtl">Identifiant</h3>
<p>Choisissez&nbsp;:</p>
<ul>
<li>soit un pseudo que Laurène ou Martine puissent reconnaître FACILEMENT + l'initiale de votre nom<br>
ex. cricriF, chrisG, jpP, jpV</li>
<li>soit votre prénom + initiale de votre nom<br>
ex. ZezetteX</li>
</ul>
<h3 class="mtl">Mot de passe</h3>
<p>Choisissez un mot de passe facile à retenir.</p>
<p class="ptl"><a class="btn-rouge" href="register.php">Je m'inscris</a></p>
<p>Une fois inscrit, vous aurez accès aux pages qui permettent de parier.</p>
</div><!--end inscription--> 

<div class="connexion pal">
<h3 class="h2-like">Visites suivantes</h3>
<p>Connectez-vous avec votre identifiant et votre mot de passe.</p>
<h4 class=" h3-like mtl">Oubli de mot de passe</h4>
<p>ne créez pas plein de comptes, ça ne sert à rien.<br />
<a href="contact.php">Contactez-nous</a><br />
nous vous donnerons votre mot de passe.</p>
</div><!--end connexion--> 
</div><!--end grid-2--> 
</div><!--end register-->

<div class="grid-2-small-1 has-gutter-xl">
<div class="bet panel mtl pal">
<h2>2. Je fais mes paris</h2>
<h3>Avant le début de la compétition</h3>
<p><a href="top.php">Je choisis mon Top 4</a>.</p>
<p>ATTENTION : il ne sera plus possible de faire votre Top 4 dès que le coup d'envoi du premier match sera donné.</p>
<h3 class="ptm">Pendant la compétition</h3>
<p><a href="bet1.php">Je parie sur chaque match.</a></p>
<p>ATTENTION : pour chaque match, les paris seront <strong>ouverts</strong> au moment où on connaîtra les adversaires et seront <strong>fermés</strong> à partir du coup d'envoi du match.</p>

<p>Pari gagné sur 1 match = 1 point.</p>
</div><!--end bet-->

<div class="win panel mtl pal">
<h2>3. Je gagne</h2>
<h3>Top 4</h3>
<p>Il y aura des "AMAAZING prices" pour les 3 premiers qui approcheront le plus du résultat final.</p>
<h3 class="ptm">Points</h3>
<p>Il y aura des "AMAAAZING prices" pour les 3 premiers qui auront le plus de points.</p>
</div><!--end win-->
</div><!--end grid-2--> 

<h2 class="mtl">Les Règles de la compétition</h2>
<p>Les 32 équipes qualifiées sont réparties en 8 groupes de 4 par tirage au sort.</p>
<ul id="rules">
<li><strong>Phase de poule</strong>&nbsp;: dans chaque groupe, chaque équipe rencontre les 3 autres équipes de son groupe.<br>victoire = 3 points<br>match nul = 1 point<br>défaite = 0 point<br>Dans chaque groupe, les 2 équipes qui ont le plus de points accèdent aux 8èmes de finale.</li>
<li><strong>Huitièmes de finale</strong>&nbsp;: chaque Premier d'un groupe rencontre le Second d'un autre groupe. Les vainqueurs accèdent aux demi-finales.</li>
<li><strong>Quarts de finale</strong>&nbsp;: les vainqueurs accèdent aux demi-finales.</li>
<li><strong>Demi-finales</strong>&nbsp;: les vainqueurs accèdent à la finale.</li>
<li><strong>Petite finale</strong>&nbsp;: les demi-finalistes perdants se rencontreront pour les 3èmes et 4èmes places.</li>
<li><strong>Finale</strong>&nbsp;: le gagnant de la finale sera le champion du monde 2018.</li>
</ul>

<h2 class="mtl">Liens utiles</h2>
<ul class="unstyled pln">
<li>Tableau des matchs : <a href="#">site FIFA</a></li>
<li>Tout savoir sur les équipes : <a href="#">site FIFA</a></li>
<li>Le classement FIFA des équipes au 2 juin 2018 : <a href="http://fr.fifa.com/fifa-world-ranking/ranking-table/men/index.html">site FIFA</a></li>
</ul>

<h2 class="mtl">Bonne chance à tous !</h2>
<h2 class="mtl">Une équipe de filles pour un site sur le foot</h2>
<p>Laurène a créé tout le code interactif du site.</p>
<p>Martine a créé le design et le code de mise en page du site, et a installé et personnalisé le CMS WordPress avec extension BuddyPress pour la plate-forme Discussion.</p>

  
</div><!--end mw-->
</div><!--end content-->
<?php include("footer.php"); ?>
</body>
</html>
