<?php

function getTitle() {
	return '12 Days of Christmas';
}

$days = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eigth', 'ninth', 'tenth', 'elevent', 'twelfth');

$gifts = array(
		'A partridge in a pear tree',
		'Two turtle doves',
		'Three French hens',
		'Four calling birds',
		'Five golden rings',
		'Six geese a-laying',
		'Seven swans a-swimming',
		'Eight maids a-milking',
		'Nine ladies dancing',
		'Ten lords a-leaping',
		'Eleven pipers piping',
		'Twelve drummers drumming');

function getLyrics($day) {

	$days = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eigth', 'ninth', 'tenth', 'elevent', 'twelfth');

	$gifts = array(
		'A partridge in a pear tree',
		'Two turtle doves',
		'Three French hens',
		'Four calling birds',
		'Five golden rings',
		'Six geese a-laying',
		'Seven swans a-swimming',
		'Eight maids a-milking',
		'Nine ladies dancing',
		'Ten lords a-leaping',
		'Eleven pipers piping',
		'Twelve drummers drumming'
	);

	for ($i = 0; $i < count($days); $i++) {
		echo 'On the ' .$days[$i] . ' day of Christmas my true love gave to me <br>' ;
		if ($i == 0) 
			echo $gifts[$i] . '<br>';
		else 
			for ($j=$i; $j>=0; $j--) {
				if ($j == 0)
				echo 'And ' . $gifts[$j] . '<br>';
				else
				echo $gifts[$j] . '<br>' . '<br>';
			}
		// if ($x = 0; $x <= $count($gifts); $x++)
		// 	echo '<br>';

	}

}
