<?php 

if (isset($_GET['edit_user'])) {
	$the_user_id = $_GET['edit_user'];

	$query = "SELECT * FROM users WHERE user_id= {$the_user_id} "; 
    $select_users_query = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_users_query)) {
    $user_id = $row['user_id'];
    $username = $row['username'];
    $user_password = $row['user_password'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_image = $row['user_image'];
    $user_role = $row['user_role'];

}
}


if (isset($_POST['edit_user'])) {

	$user_firstname = $_POST['user_firstname'];
	$user_lastname = $_POST['user_lastname'];
	$user_role = $_POST['user_role'];

	// $post_image = $_FILES['image']['name'];
	// $post_image_temp = $_FILES['image']['tmp_name'];

	$username = $_POST['username'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];

	// $post_date = date('d-m-y');

	//move_uploaded_file($post_image_temp, "../images/$post_image");


$query = "UPDATE users SET ";
		$query.= "user_firstname = '{$user_firstname}', ";
		$query.= "user_lastname = '{$user_lastname}', ";
		$query.= "user_role = '{$user_role}', ";
		$query.= "username = '{$username}', ";
		$query.= "user_email = '{$user_email}', ";
		$query.= "user_password = '{$user_password}' ";

		$query.= "WHERE user_id = {$the_user_id} ";

		$edit_user_query = mysqli_query($connection, $query);

		if (!$edit_user_query) {
			die("QUERY FAILED" . mysqli_error($connection));
		}else{
			echo "User info has been updated!";
		}




}

 ?>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="col-sm-6">
			
			<div class="form-group">
			<label for="firstname">First Name</label>
			<input type="text" name="user_firstname" value="<?php echo $user_firstname; ?>" class="form-control">	
			</div>

		

			<div class="form-group">
			<label for="lastname">Last Name</label>
			<input type="text" name="user_lastname" value="<?php echo $user_lastname; ?>" class="form-control">	
			</div>


				<div class="form-group">
				<label for="title">Select User Role</label>

				<select name="user_role" id="" class="form-control">

				<option value="subscriber"><?php echo $user_role; ?></option>

<?php 

if ($user_role == 'admin') {
	 
	 echo "<option value='subscriber'>subscriber</option>";

}
else{
	echo "<option value='admin'>admin</option>";
}

 ?>

				
				</select>

			</div>

<!-- 			<div class="form-group">
				<label for="title">Post Image</label>
				<input type="file" name="image" class="form-control">	
			</div> -->

			</div>
			

			<div class="col-sm-6">
			
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>" class="form-control">	
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="user_email" value="<?php echo $user_email; ?>" class="form-control">	
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="user_password" value="<?php echo $user_password; ?>" class="form-control">	
			</div>

			</br>
			<div class="form-group">
				<input type="submit" name="edit_user" value="Update User" class="btn btn-danger btn-lg">
			</div>
		</div>
	</form>
