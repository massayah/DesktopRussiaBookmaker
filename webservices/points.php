<?php
include('database_access.php');
$jsonresponse = array();

$users = $bdd->prepare('SELECT ru.username as username, ru.points, rt1.smallname as team1, rt1.flag_mobile as flag1, rt2.smallname as team2, rt2.flag_mobile as flag2, rt3.smallname as team3, rt3.flag_mobile as flag3, rt4.smallname as team4, rt4.flag_mobile as flag4 FROM russia_user as ru  
LEFT OUTER JOIN russia_top as rt ON ru.username = rt.username 
LEFT OUTER JOIN russia_team as rt1 ON rt1.name = rt.team1 
LEFT OUTER JOIN russia_team as rt2 ON rt2.name = rt.team2 
LEFT OUTER JOIN russia_team as rt3 ON rt3.name = rt.team3
LEFT OUTER JOIN russia_team as rt4 ON rt4.name = rt.team4
WHERE ru.isadmin = 0 ORDER BY ru.points DESC, username ASC');
$users->execute(array());
$i = 1;
$j = 1;
$prev_points = -1;
while ($userdata = $users->fetch())
{
	//if ($userdata['points'] == $prev_points)
	if ($i == 1)
	{
		$rank = $i ;//. "er";
		$prev_points = $userdata['points'];
	}
	else
	{		
		if ($prev_points == $userdata['points'])
		{
			$i--;
		}
		else
		{
			$i = $j;
			$prev_points = $userdata['points'];
		}
			/*if ($i == 1)
				$rank = $i . "er";
			else
				$rank = utf8_encode ( $i . "ème");*/
				$rank = $i;
	}

	$user = array(	'user' => $userdata['username'],
					'points' => $userdata['points'],
					'rank' => $rank,
					'team1' => array('smallname' => $userdata['team1'],
									 'flag' => $userdata['flag1']),
					'team2' => array('smallname' => $userdata['team2'],
									 'flag' => $userdata['flag2']),
					'team3' => array('smallname' => $userdata['team3'],
									 'flag' => $userdata['flag3']),
					'team4' => array('smallname' => $userdata['team4'],
									 'flag' => $userdata['flag4']));
	array_push($jsonresponse, $user);
		$i++;
		$j++;
}

echo json_encode($jsonresponse);

