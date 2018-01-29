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

		$id = $_GET['id'];

		$file = file_get_contents('assets/users.json');
		$users = json_decode($file, true);

		if (isset($_SESSION['current_user'])) {
			echo '
		<table>
			<tr>
				<td>Username</td>' .
				'<td>' . $users[$id]['username']. '</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>' . $users[$id]['password']. '</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>' . $users[$id]['email'] . '</td>
			</tr>
			<tr>
				<td>Upload Image</td>
				<td><input type="file" class="form-control" name="image"></td>
			</tr>
		</table> ';
		
		}

		?>
<!-- <button class="btn btn-primary">Edit</button> -->
		<!-- Trigger the modal with a button -->
		<button id="editUser" type="button" class="btn btn-info" data-toggle="modal"  data-target="#editUserModal" data-index="<?php echo $id; ?>">Edit</button>

	</main>

	<!-- edit modal -->
	<div id="editUserModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <form method="POST" action="assets/update_user.php">
	    	<input hidden name="user_id" value="<?php echo $id; ?>">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Edit User Details</h4>
		      </div>
		      <div id="editUserModalBody" class="modal-body">
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-default">Save</button>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		      </div>
		    </div>
	    </form>

	  </div>
	</div>

	

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

	<script type="text/javascript">
		$(document).ready(function() {

			$('#editUser').click(function() {
				var userId = $(this).data('index');

				$.get('assets/edit_user.php',
					{
						id: userId
					},
					function(data, status) {
						$('#editUserModalBody').html(data);
				});
			});

			// $('#deleteUser').click(function() {
			// 	var userId = $(this).data('index');

			// 	$.get('assets/remove_user.php',
			// 		{
			// 			id: userId
			// 		},
			// 		function(data, status) {
			// 			$('#editUserModalBody').html(data);
			// 	});
			// });
		});
	</script>

</body>
</html>