<?php 

function confirmQuery($result){
	global $connection;
	if ($result) {
		echo "Your post has been published!";
	} else {
		die("QUERY FAILED" . mysqli_error($connection));
	}
}

function insert_categories() {


	global $connection;

	if (isset($_POST['submit'])) {
	$category_name = $_POST['category_name'];

	if ($category_name=="" || empty($category_name)) {
	echo "This field should not be empty!";
	} else {
	$query= "INSERT INTO category(category_name) ";
	$query.= "VALUE('{$category_name}') ";

	$cat_query= mysqli_query($connection, $query);
	if (!$cat_query) {
	die("QUERY FAILRD" . mysql_error($cat_query));
	} else {
	echo "<script> window.location='categories.php'; </script>";
	}

	}

	}


}

function insert_slider_video() {


	global $connection;

	if (isset($_POST['submit'])) {
	$slider_video_title = $_POST['slider_video_title'];
	$slider_video_youtube_id = $_POST['slider_video_youtube_id'];

	if ($slider_video_title=="" || empty($slider_video_title)) {
	echo "This field should not be empty!";
	} else {
	$query= "INSERT INTO slider_video(slider_video_title, slider_video_youtube_id) ";
	$query.= "VALUE('{$slider_video_title}', '{$slider_video_youtube_id}') ";

	$slider_video_query= mysqli_query($connection, $query);
	if (!$slider_video_query) {
	die("QUERY FAILRD" . mysql_error($slider_video_query));
	} else {
	echo "<script> window.location = 'slider-video.php'; </script>";
	}

	}

	}


}

function insert_author() {


	global $connection;

	if (isset($_POST['submit'])) {
	$author_name = $_POST['author_name'];
	$author_email = $_POST['author_email'];
	$author_phone_number = $_POST['author_phone_number'];

	if ($author_name=="" || empty($author_name)) {
	echo "This field should not be empty!";
	} else {
	$query= "INSERT INTO author(author_name,author_email,author_phone_number) ";
	$query.= "VALUE('{$author_name}','{$author_email}','{$author_phone_number}') ";

	$author_query= mysqli_query($connection, $query);
	if (!$author_query) {
	die("QUERY FAILRD" . mysql_error($author_query));
	} else {
	echo " <script> window.location='author.php'; </script>";
	}

	}

	}


}

function findAllcategories(){

	global $connection;

	$query = "SELECT * FROM category"; //find all categories id.
	$select_categories = mysqli_query($connection, $query);

	while ($row = mysqli_fetch_assoc($select_categories)) {
	$category_id = $row['category_id'];
	$category_name = $row['category_name'];

	echo "<tr>";
	echo "<td>$category_id</td>";
	echo "<td>$category_name</td>";


	echo "<td><center><a style='text-decoration:none; color:green;font-size: 30px;' href='categories.php?edit={$category_id}'><i class='fa fa-pencil-square' aria-hidden='true'></i></a> &nbsp; &nbsp;
		</center></td>";

// Delete option for categories: 
// <a onclick='return ask_for_delete()' style='text-decoration:none; color:red;font-size: 30px;' href='categories.php?delete={$category_id}'><i class='fa fa-trash' aria-hidden='true'></i></a>






	// echo "<td><a href='categories.php?delete={$category_id}'>Delete</a></td>";
	// echo "<td><a href='categories.php?edit={$category_id}'>Update</a></td>";
	echo "</tr>";
	}


}

function findAllslider_video(){

	global $connection;

	$query = "SELECT * FROM slider_video "; //find all slide_video id.
	$select_slider_video = mysqli_query($connection, $query);

	while ($row = mysqli_fetch_assoc($select_slider_video)) {
	$slider_video_id = $row['slider_video_id'];
	$slider_video_title = $row['slider_video_title'];
	$slider_video_youtube_id = $row['slider_video_youtube_id'];

	echo "<tr>";
	echo "<td>$slider_video_id</td>";
	echo "<td>$slider_video_title</td>";
	echo "<td>$slider_video_youtube_id</td>";
	// echo "<td><a href='slide_video.php?delete={$slide_video_id}'>Delete</a></td>";
	// echo "<td><a href='slide_video.php?edit={$slide_video_id}'>Update</a></td>";


	echo "<td><center><a style='text-decoration:none; color:green;font-size: 30px;' href='slider-video.php?edit={$slider_video_id}'><i class='fa fa-pencil-square' aria-hidden='true'></i></a> &nbsp; &nbsp;
		

		<a onclick='return ask_for_delete()' style='text-decoration:none; color:red;font-size: 30px;' href='slider-video.php?delete={$slider_video_id}'><i class='fa fa-trash' aria-hidden='true'></i></a></center></td>";
    


	echo "</tr>";
	}


}

function findAllauthor(){

	global $connection;

	$query = "SELECT * FROM author"; //find all author id.
	$select_author = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($select_author)) {
	$author_id = $row['author_id'];
	$author_name = $row['author_name'];
	$author_email = $row['author_email'];
	$author_phone_number = $row['author_phone_number'];

	echo "<tr>";
	echo "<td>$author_id</td>";
	echo "<td>$author_name</td>";
	echo "<td>$author_email</td>";
	echo "<td>$author_phone_number</td>";


	echo "<td><center><a style='text-decoration:none; color:green;font-size: 30px;' href='author.php?edit={$author_id}'><i class='fa fa-pencil-square' aria-hidden='true'></i></a> &nbsp; &nbsp;
		</center></td>";



	//<a onclick='return ask_for_delete()' style='text-decoration:none; color:red;font-size: 30px;' href='author.php?delete={$author_id}'><i class='fa fa-trash' aria-hidden='true'></i></a>
	// echo "<td><a href='author.php?delete={$author_id}'>Delete</a></td>";
	// echo "<td><a href='author.php?edit={$author_id}'>Update</a></td>";
	echo "</tr>";
	}


}

function deleteCategories(){

	global $connection;
	if (isset($_GET['delete'])) {
	$the_cat_id = $_GET['delete'];
	$query = "DELETE FROM category WHERE category_id= {$the_cat_id} ";
	$delete_query = mysqli_query($connection, $query);
	header("Location: categories.php");

	}
	}

function deleteslider_video(){

	global $connection;
	if (isset($_GET['delete'])) {
	$the_slider_video_id = $_GET['delete'];
	$query = "DELETE FROM slider_video WHERE slider_video_id= {$the_slider_video_id} ";
	$delete_query = mysqli_query($connection, $query);
	echo "<script> window.location='slider-video.php'; </script>";

	}
	}

function deleteslide_image(){

	global $connection;
	if (isset($_GET['delete'])) {
	$the_slide_image_id = $_GET['delete'];
	$query = "DELETE FROM slide_image WHERE slide_image_id= {$the_slide_image_id} ";
	

	$delete_query = mysqli_query($connection, $query);
	echo " <script> window.location='slide_image.php'; </script>";

	}
	}

function deleteauthor(){

	global $connection;
	if (isset($_GET['delete'])) {
	$the_author_id = $_GET['delete'];
	$query = "DELETE FROM author WHERE author_id= {$the_author_id} ";
	$delete_query = mysqli_query($connection, $query);
	echo " <script> window.location='author.php'; </script>";

	}
	}



?>