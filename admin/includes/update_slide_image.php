                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
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
    $post_image = $row['post_image'];

    echo "<tr>";
    echo "<td>$post_id</td>";

    $query = "SELECT * FROM slide_image WHERE slide_image_title= {$slide_image_title} "; //edit categories id.
    $select_slide_image_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_slide_image_id)) {
    $slide_image_id = $row['slide_image_id'];
    $slide_image_title = $row['slide_image_title'];
    }

    echo "<td><img width='100' src='../images/$post_image' ></td>";
    echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
    echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";

    echo "</tr>";

}

 ?>


                            </tbody>
                        </table>
<?php 

    if (isset($_GET['delete'])) {
        $the_post_id = $_GET['delete'];
        $query = "DELETE FROM posts WHERE post_id = {$the_post_id} ";
        $delete_query = mysqli_query($connection, $query);
        header("Location: posts.php");
    }

 ?>