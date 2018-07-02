<div class="row">



	<div class="col-md-12">

		<center>
		  <h1><span class="news-header">Add News</span></h1>
        </center>
		

    </div>
  
	<div class="col-md-12">
	<div class="form-group">
		&nbsp; &nbsp; &nbsp;<a href="posts.php"><button class="btn btn-primary" ><i class="fa fa-newspaper-o" aria-hidden="true"></i> View All News</button></a>
	</div>
	



	<?php 
if (isset($_POST['create_post'])) {

	$post_category_id = mysqli_real_escape_string($connection,$_POST['post_category_id']);

	$post_author = mysqli_real_escape_string($connection,$_POST['post_author']);

	$post_title = mysqli_real_escape_string($connection,$_POST['post_title']);
	
	$post_intro = mysqli_real_escape_string($connection, $_POST['post_intro']);
	$post_intro = str_ireplace('\r\n', '', $post_intro);
	$post_content = mysqli_real_escape_string($connection, $_POST['post_content']);
	$post_content = str_ireplace('\r\n', '', $post_content);

	$post_image = $_FILES['image']['name'];
	$post_image = time().$post_image;
	$post_image_temp = $_FILES['image']['tmp_name'];

	$post_status = mysqli_real_escape_string($connection,$_POST['post_status']);

	$specific_section = mysqli_real_escape_string($connection,$_POST['specific_section']);

	$selected_post = mysqli_real_escape_string($connection,$_POST['selected_post']);

	$post_archive_date = date('d-m-y');
	
	$post_date = mysqli_real_escape_string($connection,$_POST['post_date']);



	move_uploaded_file($post_image_temp, "../images/news_images/$post_image");

	$query = "INSERT INTO posts(post_category_id, post_author, post_title, post_intro, post_content, post_image, post_status, specific_section, selected_post, post_archive_date,  post_date) ";

	$query .="VALUES('{$post_category_id}', '{$post_author}','{$post_title}', '{$post_intro}', '{$post_content}', '{$post_image}', '{$post_status}', '{$specific_section}', '{$selected_post}', now(), '{$post_date}') ";

	$create_post_query = mysqli_query($connection, $query);

	if (!$create_post_query) {
		die("Query FAILED" . mysqli_error($connection));
	} else {
		echo "<script> window.location='posts.php'; </script>";
	}
	
	
}

 ?>
	<form action="" method="post" enctype="multipart/form-data">



			<div class="form-group col-md-12">
				<label for="title">Title</label>
				<input type="text" name="post_title" placeholder="Enter your Post title" class="form-control" required>	
			</div>





<?php
require_once("../includes/BanglaDateTime.php");
date_default_timezone_set('Asia/Dhaka');
$BanglaDate=new ShowBanglaDateTime();
?>
				<input type="hidden" name="post_date" value="
<?php
echo $BanglaDate->bangla_date_time(date("h:i মিঃ, M j, Y"));
?>
				" class="form-control">	






			<div class="hidden form-group col-md-12">
				<label for="post_intro">Intro(Highlighted Text)</label>	
				<textarea name="post_intro" placeholder="Enter Intro Content" class="ckeditor form-control" cols="10" rows="10"></textarea>
			</div>




			<div class="form-group col-md-12">
				<label for="post_content">Content</label>
				<textarea name="post_content" placeholder="Enter your Posts Content" class="ckeditor form-control" cols="30" rows="10" required></textarea>	
			</div>




			<div class="form-group col-md-6">
				<label for="title">News Category</label>

				<select name="post_category_id" class="form-control" >

		<option selected disabled hidden>Choose</option>
<?php 				

	$query = "SELECT * FROM category ";
	$select_categories = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($select_categories)) {

	$category_id = $row['category_id'];
	$category_name = $row['category_name'];

	echo "<option value='$category_id'>{$category_name}</option>";

	}

	?>

				</select>

			</div>




			<div class="form-group col-md-6">
				<label for="title">Author</label>

				<select name="post_author" id="" class="form-control" >

		<option selected disabled hidden>Choose</option>
<?php 				

	$query = "SELECT * FROM author ";
	$select_categories = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($select_categories)) {


	$author_id = $row['author_id'];
	$author_name = $row['author_name'];

	echo "<option value='$author_id'>{$author_name}</option>";

	}

	?>

				</select>

			</div>








			<div class="form-group col-md-3">
				
				
				<label for="title">Image</label>
				<input type="file" name="image" class="form-control" required>
				<span style="color:red;"><h5><b> <q> Image size should be 640*400 pixel for best view!</q></b></h5></span>	
			</div>

			





			<div class="form-group col-md-3">
				<label for="title">Select News Status</label>

				<select name="post_status" id="" class="form-control" >

				<option value="published">Published</option>
				<option value="draft">Draft</option>
				

				</select>

			</div> 

			<div class="form-group col-md-6">
				
				
				<label for="title">যদি <strong style="color: green;">"আলোচিত"</strong> সেকশনে দেখাতে চান তাহলে নিচে চেক করুন </label>
				
				<div class="checkbox">
				    <input name="specific_section" value="0" type="hidden">
  					<label><input type="checkbox" value="1" name="specific_section">আলোচিত</label>
				</div>
			</div>

			<div class="hidden form-group col-md-3">
				
				
				<label for="title">যদি <strong style="color: green;">"নির্বাচিত"</strong> সেকশনে দেখাতে চান তাহলে নিচে চেক করুন </label>
				
				<div class="checkbox">
				    <input name="selected_post" value="0" type="hidden">
  					<label><input type="checkbox" value="1" name="selected_post">নির্বাচিত </label>
				</div>
			</div>

			<div class="clearfix"></div>
			

		<center>
			<div class="form-group">
				<input type="submit" name="create_post" value="Publish" class="btn btn-success">
				
			</div>
		</center>
		

	</form>

		

	</div>



</div>

