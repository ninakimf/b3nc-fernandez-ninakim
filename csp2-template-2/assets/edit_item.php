<?php

$id = $_GET['id'];

// successful processing

$file = file_get_contents('items.json');
$items = json_decode($file, true);

echo '
<div class="form-group">
	<label>Product name</label>
	<input name="name" class="form-control" type="text" value="'.$items[$id]['name'].'">

	<labe>Image</label>
	<input name="image" class="form-control" type="file" value="'.$items[$id]['image'].'">

	<labe>Price</label>
	<input name="price" class="form-control" type="number" value="'.$items[$id]['price'].'">

	<label>Description</label>
	<input name="description" class="form-control" type="text" value="'.$items[$id]['description'].'">
';
	echo '
	<label>Category</label>
	<select class="form-control" name="user_role">';
		for ($x = 1; $x <= 3; $x++)  {
			echo '<option selected>Category '.$x.'</option>';
		}
	echo'
	</select>
</div>';