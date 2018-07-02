<div class="col-md-12">

        <center><h1><span class="news-header">Advertisement</span></h1></center>
        <br>
        

    </div>
<div class="col-md-12">

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Instruction</th>
                                    <th>URL</th>
                                    <th>Image</th>
                                    <th>Update</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                

<?php 

    $query = "SELECT * FROM adv"; //query for showing post.
    $select_posts = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_posts)) {
    $adv_id = $row['adv_id'];
    $adv_name = $row['adv_name'];
    $adv_link = $row['adv_link'];
    $adv_image_title = $row['adv_image_title'];


    echo "<tr>";
    echo "<td>$adv_id</td>";

    $query = "SELECT * FROM adv WHERE adv_id= {$adv_id} "; //edit categories id.
    $select_categories_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_categories_id)) {
    $adv_id = $row['adv_id'];
    $adv_image_title = $row['adv_image_title'];

    }
    echo "<td>$adv_name</td>";
    echo "<td>$adv_link</td>";
    echo "<td><img width='100' src='../advimages/$adv_image_title' ></td>";

    

    echo "<td><center><a style='text-decoration:none; color:#fff;' href='adv.php?source=edit_adv&p_id={$adv_id}'><button class='btn btn-success btn-sm' >Edit</button></a></center></td>";
// echo "<td><center><a style='text-decoration:none; color:#fff;' href='adv.php?delete={$adv_id}'><button class='btn btn-danger btn-sm' >Delete</button></a></center></td>";

    echo "</tr>";

}

 ?>


                            </tbody>
                        </table>
<?php 

	if (isset($_GET['delete'])) {
		$the_post_id = $_GET['delete'];
		$query = "DELETE FROM adv WHERE adv_id = {$the_post_id} ";
		$delete_query = mysqli_query($connection, $query);
		header("Location: adv.php");
	}

 ?>
 </div>