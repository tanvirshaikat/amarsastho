<?php 

	if (isset($_GET['p_id'])) {

    	$the_post_id = $_GET['p_id'];
    }

	$query = "SELECT * FROM slide_image WHERE slide_image_id= $the_post_id "; //query for showing post.
    $the_posts_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($the_posts_id)) {
    $slide_image_id = $row['slide_image_id'];
    $slide_image_name = $row['slide_image_name'];
    // $post_title = $row['post_title'];
    // $post_category_id = $row['post_category_id'];
    // $post_status = $row['post_status'];
    $slide_image_title = $row['slide_image_title'];
    // $post_content = $row['post_content'];
    // $post_tags = $row['post_tags'];
    // $post_comment_count = $row['post_comment_count'];
    // $post_date = $row['post_date'];

}

	if (isset($_POST['update_image'])) {
		
		// $post_author = $_POST['post_author'];
		// $post_title = $_POST['post_title'];
		// $post_category_id = $_POST['post_category'];
		$slide_image_name = $_POST['slide_image_name'];
		$slide_image_title = $_FILES['image']['name'];
		$slide_image_title_temp = $_FILES['image']['tmp_name'];
		// $post_content = $_POST['post_content'];
		// $post_tags = $_POST['post_tags'];

		move_uploaded_file($slide_image_title_temp, "../slideimages/$slide_image_title");

		if (empty($slide_image_title)) {
			
			$query = "SELECT * FROM slide_image WHERE slide_image_id = $the_post_id ";
			$select_image = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_array($select_image)) {
				
				$slide_image_title = $row['slide_image_title'];
			}
		}

		$query = "UPDATE slide_image SET ";
		// $query.= "post_title = '{$post_title}', ";
		// $query.= "post_category_id = '{$post_category_id}', ";
		// $query.= "post_date = now(), ";
		// $query.= "post_author = '{$post_author}', ";
		// $query.= "post_status = '{$post_status}', ";
		// $query.= "post_tags = '{$post_tags}', ";
		$query.= "slide_image_name = '{$slide_image_name}', ";
		$query.= "slide_image_title = '{$slide_image_title}' ";
		$query.= "WHERE slide_image_id = {$the_post_id} ";

		$update_post = mysqli_query($connection,$query);

		if (! $update_post) {
			die("QUERY FAILED" . mysqli_error($connection));
		} else {
			echo "<script>window.location.href='slide_image.php' </script>";
		}
		
	}
    

 ?>

<form action="" method="post" enctype="multipart/form-data">


		<div class="col-sm-6">
		<div class="form-group">
			
				<label for="title">Image Title</label>
				<input type="text" name="slide_image_name" class="form-control" value="<?php echo $slide_image_name; ?>">	
			</div>


			<div class="form-group">
			<span style="color:red;"><h5><b> <q> Image size should be 810*500 pixel for best view!</q></b></h5></span>
				<label for="title">Select Image</label>

				<img src="../slideimages/<?php echo $slide_image_title; ?>" alt="" width="100">
				<input type="file" name="image" class="form-control">	
			</div>

			</br>
			<div class="form-group">
				<input type="submit" name="update_image" value="UPDATE" class="btn btn-danger btn-md">
			</div>
		</div>
	</form>