<?php
$result = $bdd->query('SELECT * FROM russia_team ORDER BY russia_team.name ASC, id ASC');
// Loop to display all information about the teams

while ($data = $result->fetch())
    {
    ?>
<a href="#<?php echo $data['name']; ?>"><?php echo $data['name']; ?></a>
<?php }
?>