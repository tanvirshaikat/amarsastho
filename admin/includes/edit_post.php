<div class="row">

	<div class="col-md-12">

		<center><h1><span class="news-header">Edit News</span></h1></center>
		

    </div>

	<div class="col-md-12">
<div class="form-group">
		&nbsp; &nbsp; &nbsp;<a href="posts.php"><button class="btn btn-primary" ><i class="fa fa-newspaper-o" aria-hidden="true"></i> View All News</button></a>
	</div>		
	

<?php 

	if (isset($_GET['p_id'])) {

    	$the_post_id = $_GET['p_id'];
    }

	$query = "SELECT * FROM posts WHERE post_id= $the_post_id "; //query for showing post.
    $the_posts_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($the_posts_id)) {

    $post_id = $row['post_id'];

    $post_author = $row['post_author'];

    $post_title = $row['post_title'];

    $post_intro = $row['post_intro'];

    $post_content = $row['post_content'];

    $post_category_id = $row['post_category_id'];

    $post_image = $row['post_image'];

    $post_status = $row['post_status'];

}

	if (isset($_POST['update_post'])) {
		
		$post_author = mysqli_real_escape_string($connection, $_POST['post_author']);
		$post_title = mysqli_real_escape_string($connection, $_POST['post_title']);
		$post_intro = mysqli_real_escape_string($connection, $_POST['post_intro']);
		$post_intro = str_ireplace('\r\n', '', $post_intro);
		$post_content = mysqli_real_escape_string($connection, $_POST['post_content']);
		$post_content = str_ireplace('\r\n', '', $post_content);
		$post_category_id = mysqli_real_escape_string($connection, $_POST['post_category_id']);
		$post_image = $_FILES['image']['name'];
		$post_image_temp = $_FILES['image']['tmp_name'];
		$post_status = mysqli_real_escape_string($connection, $_POST['post_status']);
		$specific_section = mysqli_real_escape_string($connection,$_POST['specific_section']);
		$selected_post = mysqli_real_escape_string($connection,$_POST['selected_post']);



		move_uploaded_file($post_image_temp, "../images/news_images/$post_image");

		if (empty($post_image)) {
			
			$query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
			$select_image = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_array($select_image)) {
				
				$post_image = $row['post_image'];
			}
		}

		$query = "UPDATE posts SET ";
		$query.= "post_author = '{$post_author}', ";
		$query.= "post_title = '{$post_title}', ";
		$query.= "post_intro = '{$post_intro}', ";
		$query.= "post_content = '{$post_content}', ";
		$query.= "post_category_id = '{$post_category_id}', ";
		$query.= "post_image = '{$post_image}', ";		
		$query.= "post_status = '{$post_status}', ";
		$query.= "specific_section = '{$specific_section}', ";
		$query.= "selected_post = '{$selected_post}' ";



		$query.= "WHERE post_id = {$the_post_id} ";

		$update_post = mysqli_query($connection,$query);

		if (! $update_post) {
			die("QUERY FAILED" . mysqli_error($connection));
		} else {
			echo "<center><h4 style='color:green;font-weight:600;'>Your News Has Been Updated!</h4></center>";
		}
		
	}
    

 ?>






<form action="" method="post" enctype="multipart/form-data">



			<div class="form-group col-md-12">
				<label for="title">Title</label>
				<input type="text" name="post_title" value="<?php echo $post_title; ?>" class="form-control" >	
			</div>



			<div class="hidden form-group col-md-12">
				<label for="post_intro">Intro(Highlighted Text)</label>
				<textarea name="post_intro" class="ckeditor form-control" cols="10" rows="10" ><?php echo $post_intro; ?></textarea>	
			</div>




			<div class="form-group col-md-12">
				<label for="post_content">Content</label>
				<textarea name="post_content"  class="ckeditor form-control" cols="30" rows="10" ><?php echo $post_content; ?></textarea>	
			</div>




			<div class="form-group col-md-6">
				<label for="title">News Category</label>

							<select name="post_category_id" id="" class="form-control" >

			<?php 


			$query = "SELECT * FROM category WHERE category_id= {$post_category_id} "; //edit categories id.
			$select_categories_id = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_assoc($select_categories_id)) {
			$category_id = $row['category_id'];
			$category_name = $row['category_name'];

			echo "<option value='$category_id'>{$category_name}</option>";
			}

			 ?>

				
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

			<?php 


			$query = "SELECT * FROM author WHERE author_id = {$post_author} "; //edit categories id.
			$select_author_info = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_assoc($select_author_info)) {
			$author_id = $row['author_id'];
			$author_name = $row['author_name'];

			echo "<option value='$author_id'>{$author_name}</option>";
			}

			 ?>

				
			<?php 				

			$query = "SELECT * FROM author ";
			$select_author = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_assoc($select_author)) {
			$author_id = $row['author_id'];
			$author_name = $row['author_name'];

			echo "<option value='$author_id'>{$author_name}</option>";


			}

			?>
			
			</select>

							
			</div>








			<div class="form-group col-md-3">
			    <label for="image">Image</label>
				<input type="file" name="image" class="form-control">
				<img src="../images/news_images/<?php echo $post_image; ?>" alt="" width="200">
				<span style="color:red;"><h5><b> <q> Image size should be 640*400  pixel for best view!</q></b></h5></span>	
			</div>





			<div class="form-group col-md-3">
				<label for="post_status">Select News Status</label>

				<select name="post_status" id="" class="form-control">

					<option value="<?php echo $post_status; ?>"><?php echo $post_status; ?></option>

					<?php 

					if ($post_status == 'draft') {
	 
						echo "<option value='published'>Published</option>";

					}
					else{
						echo "<option value='draft'>Draft</option>";
					}

					?>

				
				</select>

			</div>

			<div class="form-group col-md-6">
				
				
				<label for="title">যদি <strong style="color: green;">"আলোচিত"</strong> সেকশনে দেখাতে চান তাহলে নিচে চেক করুন </label>
				
				<div class="checkbox">
				    <input name="specific_section" value="0" type="hidden">

<?php
$query = "SELECT * FROM posts where post_id= $the_post_id";
			$select_talk = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_assoc($select_talk)) {
			$specific_section = $row['specific_section'];
		}
?>			    
  					<label><input type="checkbox" value="1" name="specific_section" 
		<?php 
		if ($specific_section == 1) 
		{
			echo "checked";
		}
		elseif ($specific_section == 0) 
		{
			echo "unchecked";
		} 

		?>>

			আলোচিত</label>

				</div>
			</div>

	<div class="hidden form-group col-md-3">
				
				
				<label for="title">যদি <strong style="color: green;">"নির্বাচিত"</strong> সেকশনে দেখাতে চান তাহলে নিচে চেক করুন </label>
				
				<div class="checkbox">
					<input name="selected_post" value="0" type="hidden">

<?php
$query = "SELECT * FROM posts where post_id= $the_post_id";
			$select_s_post = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_assoc($select_s_post)) {
			$selected_post = $row['selected_post'];
		}
?>						
  					<label><input type="checkbox" value="1" name="selected_post"<?php 
		if ($selected_post == 1) 
		{
			echo "checked";
		}
		elseif ($selected_post == 0) 
		{
			echo "unchecked";
		} 

		?>>নির্বাচিত </label>
				</div>
			</div>

			<div class="clearfix"></div>
			

		<center>
			<div class="form-group">
				<input type="submit" name="update_post" value="Update" class="btn btn-success">
				
			</div>
		</center>
		

	</form>



</div>
</div>







