<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<?php

	// $lyrics = array('stars', 'shine', 'yellow');

	// echo "Look at the $lyrics[0], Look how they $lyrics[1] for you, and everything you do.<br>Yeah, they were all $lyrics[2].";
	// echo "<ul> <li> $lyrics[0] </li>";
	// echo "<li> $lyrics[1] </li>";
	// echo "<li> $lyrics[2] </li> </ul>";

	$firstNames = array('Steph', 'Russell','LeBron');
	$lastNames = array('Curry', 'Westbrook', 'James');
	$team = array('Warriors', 'Thunders', 'Cavaliers');
	$jersey = array('30', '0', '23');

	// echo "Player: $firstNames[0] $lastNames[0] <br>";
	// echo "Team: $team[0] <br>";
	// echo "Jersey: $jersey[0] <br> <br>";

	// echo "Player: $firstNames[1] $lastNames[1] <br>";
	// echo "Team: $team[1] <br>";
	// echo "Jersey: $jersey[1] <br> <br>";

	// echo "Player: $firstNames[2] $lastNames[2] <br>";
	// echo "Team: $team[2] <br>";
	// echo "Jersey: $jersey[2]";

	?>
	
	<table>
		
		<tr>
			<th>Player</th>
			<th>Team</th>
			<th>Jersey</th>
		</tr>
		<tr>
			<td><?php echo "$firstNames[0] $lastNames[0]"; ?></td>
			<td><?php echo "$team[0]"; ?></td>
			<td><?php echo "$jersey[0]"; ?></td>
		</tr>
		<tr>
			<td><?php echo "$firstNames[1] $lastNames[1]"; ?></td>
			<td><?php echo $team[1]; ?></td>
			<td><?php echo $jersey[1]; ?></td>
		</tr>
		<tr>
			<td><?php echo "$firstNames[2] $lastNames[2]"; ?></td>
			<td><?php echo $team[2]; ?></td>
			<td><?php echo $jersey[2]; ?></td>
		</tr>

	</table>
</body>

</body>

</body>
</html>