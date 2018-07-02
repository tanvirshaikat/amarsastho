  <div class="col-md-6">

<?php 
if (isset($_POST['create_post'])) {

    $slide_image_name = $_POST['slide_image_name'];

    $slide_image_title = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

    $time = time() + sprintf("%06d",(microtime(true) - floor(microtime(true))) * 1000000);

    $slide_image_title = $time.'_'.$slide_image_title;


    move_uploaded_file($post_image_temp, "../slideimages/$slide_image_title");

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
<div class="form-group">
                <label for="title">Slide Image Title</label>
                <input type="text" name="slide_image_name" class="form-control" required>   
            </div>
<div class="form-group">
<span style="color:red;"><h5><b> <q> Image size should be 810*500 pixel for best view!</q></b></h5></span>
                <label for="title">Upload Slide Image</label>
                <input type="file" name="image" class="form-control">   
            </div>
            <div class="form-group">
                <input type="submit" name="create_post" value="Upload" class="btn btn-danger btn-md">
            </div>
      
    </form>

  </div>


 <div class="col-md-6">

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                

<?php 

    $query = "SELECT * FROM slide_image"; //query for showing post.
    $select_posts = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_posts)) {
    $slide_image_id = $row['slide_image_id'];
    // $post_author = $row['post_author'];
    // $post_title = $row['post_title'];
    // $post_category_id = $row['post_category_id'];
    // $post_status = $row['post_status'];
    $slide_image_name = $row['slide_image_name'];
    $slide_image_title = $row['slide_image_title'];
    // $post_tags = $row['post_tags'];
    // $post_comment_count = $row['post_comment_count'];
    // $post_date = $row['post_date'];

    echo "<tr>";
    echo "<td>$slide_image_id</td>";
    // echo "<td>$post_author</td>";
    // echo "<td>$post_title</td>";

    $query = "SELECT * FROM slide_image WHERE slide_image_id= {$slide_image_id} "; //edit categories id.
    $select_categories_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_categories_id)) {
    $slide_image_id = $row['slide_image_id'];
    $slide_image_title = $row['slide_image_title'];

    //echo "<td>{$cat_title}</td>";
    }
    echo "<td>$slide_image_name</td>";
    //echo "<td>$post_status</td>";
    echo "<td><img width='100' src='../slideimages/$slide_image_title' ></td>";
    // echo "<td>$post_tags</td>";
    // echo "<td>$post_comment_count</td>";
    // echo "<td>$post_date</td>";
    

    echo "<td><center><a style='text-decoration:none; color:#fff;' href='slide_image.php?source=edit_image&p_id={$slide_image_id}'><button class='btn btn-success btn-sm' >Update</a></center></td>";
echo "<td><center><a style='text-decoration:none; color:#fff;' href='slide_image.php?delete={$slide_image_id}'><button class='btn btn-danger btn-sm' >Delete</button></a></center></td>";

    echo "</tr>";

}

 ?>


                            </tbody>
                        </table>
<?php 

	if (isset($_GET['delete'])) {
		$the_post_id = $_GET['delete'];
		$query = "DELETE FROM slide_image WHERE slide_image_id = {$the_post_id} ";
		$delete_query = mysqli_query($connection, $query);
		header("Location: slide_image.php");
	}

 ?>
 </div>