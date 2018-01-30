<?php

session_start();

if (!isset($_SESSION['current_user'])) {
	header('location: login.php');
}

function getTitle() {
	echo 'Profile';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Profile Page</h1>

		<?php

		$_SESSION['username'] = $username;

		?>


		<table>
			<tr>
				<td>Username</td>
				<td><?php echo $username; ?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php echo $users[$id]['password']; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $users[$id]['email']; ?></td>
			</tr>
			<tr>
				<td>Upload Image</td>
				<td><input type="file" class="form-control" name="image"></td>
			</tr>
		</table>

		<a href="settings.php">
			<button class="btn btn-default">Back</button>
		</a>
		
	</main>
		
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>