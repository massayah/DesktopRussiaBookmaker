<?php

include('../PHP/database_access.php');

  $top = $bdd->prepare('SELECT rt1.name as name1, rt1.flag_mobile as flag1, rt1.smallname as smallname1, rt2.name as name2, rt2.flag_mobile as flag2, rt2.smallname as smallname2, rt3.name as name3, rt3.flag_mobile as flag3, rt3.smallname as smallname3, rt4.name as name4, rt4.flag_mobile as flag4, rt4.smallname as smallname4 FROM russia_top rt JOIN russia_team rt1 ON rt1.name = rt.team1 JOIN russia_team rt2 ON rt2.name = rt.team2 JOIN russia_team rt3 ON rt3.name = rt.team3 JOIN russia_team rt4 ON rt4.name = rt.team4 WHERE username = ?');

  $top->execute(array($_POST['username']));

  // Checking if there is a user with the same information username and password
  if ($top->rowCount() != 0) {
    $result = $top->fetch();

    $response = array(
      "team1" => array("name" => $result['name1'], "flag" => $result['flag1'], "smallname" => $result["smallname1"]),
      "team2" => array("name" => $result['name2'], "flag" => $result['flag2'], "smallname" => $result["smallname2"]),
      "team3" => array("name" => $result['name3'], "flag" => $result['flag3'], "smallname" => $result["smallname3"]),
      "team4" => array("name" => $result['name4'], "flag" => $result['flag4'], "smallname" => $result["smallname4"])
    );

    print json_encode($response);
  } else {
    $response = array(
      "team1" => "",
      "team2" => "",
      "team3" => "",
      "team4" => ""
    );

    echo json_encode($response);
  }
  $top->closeCursor();

?>
