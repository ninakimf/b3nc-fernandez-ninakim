<?php

// $username = $_POST['email'];

// processing

$file = file_get_contents('users.json');
$users = json_decode($file, true);
$emails = [];

foreach ($users as $user) {
	array_push($emails, $user['email']);
}

if (isset($_POST['email'])) {
	$email_entered =$_POST['email'];

	empty($email_entered);

	if (in_array($email_entered, $emails)) {
		echo 'Email <span class="red-message">not valid</span>';
	} else {
		echo 'Email <span class="green-message">valid</span>';
	}
} else {
	echo 'Email';
} 

// var_dump($usernames);

// echo $username;