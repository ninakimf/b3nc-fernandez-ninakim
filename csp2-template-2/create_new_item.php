<?php

function getTitle() {
	echo 'Register';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Create New Item Page</h1>
		
		<form id="newItemForm" method="POST" action="assets/createnewitem.php" class="form-group">
			<label for="productName">Product Name</label>
			<input type="text" name="productName" id="productName" placeholder="Enter new product name" class="form-control" required>

			<label for="image">Image</label>
			<input type="file" name="image" placeholder="Enter URL" id="image" class="form-control" required>

			<label for="price">Price</label>
			<input type="number" name="price" id="price" placeholder="PHP 0.00" class="form-control" required>

			<label for="description">Description</label>
			<input type="text" name="description" id="description" placeholder="Enter description" class="form-control" required diasbled>


			<label for="categories">Categories</label>
			<select name="categories">Categories
			<option value="category1">Category 1</option>
			<option value="category2">Category 2</option>
			<option value="category3">Category 3</option>
			<option value="category4">Category 4</option>
			<option value="category5">Category 5</option>
			<option value="category6">Category 6</option>
			</select>
			<input type="submit" name="submit" id="submit" value="Create Item" class="btn btn-primary">
			
		</form>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

	<script type="text/javascript">
		// $('#username').keyup(function() {
		// $('#username').on('input', function() {
		// 	var usernameText = $(this).val();
		// 	// console.log(usernameText);

		// 	$.post('assets/username_validation.php',
		// 		{username: usernameText},
		// 		function(data, status) {
		// 			// console.log('Processed: ' + data);

		// 			$('[for="username"]').html(data);
		// 		});
		// });

		// $('#password, #confirmPassword').on('input', function () {
		//   if ($('#password').val() == $('#confirmPassword').val()) {
		//    	$('[for="password"]').text('Password <span class="green-message">matched</span>');
		//   } else {
		//    	$('[for="password"]').text('Password <span class="red-message">mismatched</span>');
		//   } 
		    
		// });

		// $('#email').on('input', function() {
		// 	var emailText = $(this).val();
		// 	// console.log(usernameText);

		// 	$.post('assets/email_address_validation.php',
		// 		{email: emailText},
		// 		function(data, status) {
		// 			// console.log('Processed: ' + data);

		// 			$('[for="email"]').html(data);
		// 		});
		// });

		// $('#confirmPassword').on('input', function (){
		// 	var passwordText = $('#password').val();
		// 	var confirmPasswordText = $('#confirmPassword').val();

		// 	if ($passwordText == $confirmPasswordText) {
		// 		// console.log($('[for="password"]').text());
		// 	} 
		// });

	</script>

</body>
</html>