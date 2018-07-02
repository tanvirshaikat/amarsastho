<div class="col-md-12">

		<center><h1><span class="news-header">Edit Advertisement</span></h1></center>
		<br>
		

    </div>
<?php 

	if (isset($_GET['p_id'])) {

    	$the_post_id = $_GET['p_id'];
    }

	$query = "SELECT * FROM adv WHERE adv_id= $the_post_id "; //query for showing post.
    $the_posts_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($the_posts_id)) {
    $adv_id = $row['adv_id'];
    $adv_name = $row['adv_name'];
    $adv_link = $row['adv_link'];

    $adv_image_title = $row['adv_image_title'];


}

	if (isset($_POST['update_image'])) {
		
		$adv_link = $_POST['adv_link'];
		$adv_image_title = $_FILES['image']['name'];
		$adv_image_title_temp = $_FILES['image']['tmp_name'];


		move_uploaded_file($adv_image_title_temp, "../advimages/$adv_image_title");

		if (empty($adv_image_title)) {
			
			$query = "SELECT * FROM adv WHERE adv_id = $the_post_id ";
			$select_image = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_array($select_image)) {
				
				$adv_image_title = $row['adv_image_title'];
			}
		}

		$query = "UPDATE adv SET ";
		$query.= "adv_link = '{$adv_link}', ";
		$query.= "adv_image_title = '{$adv_image_title}' ";
		$query.= "WHERE adv_id = {$the_post_id} ";

		$update_post = mysqli_query($connection,$query);

		if (! $update_post) {
			die("QUERY FAILED" . mysqli_error($connection));
		} else {
			echo "<script>window.location.href='adv.php' </script>";
		}
		
	}
    

 ?>

<form action="" method="post" enctype="multipart/form-data">


		<div class="col-sm-6 col-md-offset-3">
		<div class="form-group">
			
				<label for="title">Advertisement Instruction</label>
				<input type="text" class="form-control" value="<?php echo $adv_name; ?>"  disabled>	
			</div>

			<div class="form-group">
			
				<label for="title">Advertisement Link</label>
				<input type="text" name="adv_link" class="form-control" value="<?php echo $adv_link; ?>">	
			</div>


			<div class="form-group">
			<center><img src="../advimages/<?php echo $adv_image_title; ?>" alt="" height="100"></center>
				<label for="title">Select Image</label>

				
				<input type="file" name="image" class="form-control">	
			</div>

			</br>
			<div class="form-group">
				<input type="submit" name="update_image" value="UPDATE" class="btn btn-danger btn-md">
			</div>
		</div>
	</form>