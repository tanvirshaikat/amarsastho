<?php 
if (isset($_POST['create_post'])) {

	// $post_title = $_POST['title'];
	// $post_author = $_POST['author'];
	// $post_category_id = $_POST['post_category'];
	// $post_tag_id = $_POST['post_tag'];
	// $post_status = $_POST['post_status'];

	$slide_image_name = $_POST['slide_image_name'];

	$slide_image_title = $_FILES['image']['name'];
	$slide_image_title_temp = $_FILES['image']['tmp_name'];

	//$post_tags = $_POST['post_tags'];
	// $post_content = $_POST['post_content'];
	// $post_date = date('d-m-y');
	// $post_comment_count = 4;

	move_uploaded_file($slide_image_title_temp, "../slideimages/$slide_image_title");

	$query = "INSERT INTO slide_image(slide_image_title,slide_image_name) ";

	$query .="VALUES('{$slide_image_title}','{$slide_image_name}') ";

	$create_post_query = mysqli_query($connection, $query);

	//confirmQuery($create_post_query);

	if (!$create_post_query) {
		die("Query FAILED" . mysqli_error($connection));
	} else {
		echo "Your Image has been Uploaded!";
	}
	
	
}

 ?>
	<form action="" method="post" enctype="multipart/form-data">

		<div class="col-sm-6">


			<div class="form-group">
				<label for="title">Slide Image Title</label>
				<input type="text" name="slide_image_name" class="form-control" required>	
			</div>
			
			<div class="form-group">
				<label for="title">Select Slide Image</label>
				<input type="file" name="image" class="form-control" required>	
			</div>


			</br>
			<div class="form-group">
				<input type="submit" name="create_post" value="Upload" class="btn btn-danger btn-lg">
			</div>
		</div>
	</form>
