<?php 
if (isset($_POST['create_user'])) {

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

	$query = "INSERT INTO users(user_firstname, user_lastname, user_role, 
		username, user_email, user_password ) ";

	$query .="VALUES('{$user_firstname}', '{$user_lastname}',  
	'{$user_role}', '{$username}', '{$user_email}', '{$user_password}') ";

	$create_user_query = mysqli_query($connection, $query);

	if ($create_user_query) {
		echo "User has been added";
	} else {
		die("QUERY Failed" . mysqli_error($connection));
	}
	
	
}

 ?>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="col-sm-6">
			
			<div class="form-group">
			<label for="firstname">First Name</label>
			<input type="text" name="user_firstname" placeholder="Enter Your First Name" class="form-control">	
			</div>

		

			<div class="form-group">
			<label for="lastname">Last Name</label>
			<input type="text" name="user_lastname" placeholder="Enter Your Last Name" class="form-control">	
			</div>


				<div class="form-group">
				<label for="title">Select User Role</label>

				<select name="user_role" id="" class="form-control" >

				<option value="subscriber">Select</option>
				<option value="admin">admin</option>
				<option value="subscriber">subscriber</option>

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
				<input type="text" name="username" placeholder="Enter Your Username" class="form-control">	
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="user_email" placeholder="Enter Your Email" class="form-control">	
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="user_password" placeholder="Enter Your Password" class="form-control">	
			</div>

			</br>
			<div class="form-group">
				<input type="submit" name="create_user" value="Add User" class="btn btn-danger btn-lg">
			</div>
		</div>
	</form>
