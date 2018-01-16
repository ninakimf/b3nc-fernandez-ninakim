<?php

require_once 'assets/lib/twelve_days.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title><?php echo getTitle(); ?> Lyrics</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<?php
		echo '<div id="title">' . getTitle() . '</div>';

	?>
<div class="main" id="main">
	
	<?php


		for ($i = 0; $i < count($days); $i++) {
		echo '<div id="lyrics">' . 'On the ' . '<strong>' . $days[$i] . '</strong>' . ' day of Christmas my true love gave to me <br>' ;
		if ($i == 0) 
			echo $gifts[$i] . '<br>' . '<br>';
		else 
			for ($j=$i; $j>=0; $j--) {
				if ($j == 0)
				echo 'And ' . $gifts[$j] . '<br>' . '<br>' . '</div>';
				else
				echo $gifts[$j] . '<br>';
				# code...
			}
	}

	?>

</div>
	<script type="text/javascript">
	</script>

</body>
</html>