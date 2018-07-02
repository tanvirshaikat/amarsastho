                            
                             <form action="" method="post">
<?php 

 if (isset($_GET['edit'])) {

     $slider_video_id = $_GET['edit'];
     $query = "SELECT * FROM slider_video WHERE slider_video_id= $slider_video_id "; //edit slider_video id.
     $select_slider_video_edit_id = mysqli_query($connection, $query);

     while($row = mysqli_fetch_assoc($select_slider_video_edit_id)){
     $slider_video_id = $row['slider_video_id'];
     $slider_video_title = $row['slider_video_title'];
     $slider_video_youtube_id = $row['slider_video_youtube_id'];

?> 
                                <div class="form-group">
                                    <label for="slider_video_title">Edit Video Title</label>
                                        <input value="<?php echo $slider_video_title; ?>" name="slider_video_title" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="slider_video_title">Edit Youtube Video ID</label>
                                        <input value="<?php echo $slider_video_youtube_id; ?>" name="slider_video_youtube_id" type="text" class="form-control">
                                </div>


                                <div class="form-group">
                                    <input type="submit" name='update_slider_video' value="Update" class="btn btn-success">
                                </div>
    <?php }} ?>
                            </form>
 <?php //update query

if (isset($_POST['update_slider_video'])) {
 $slider_video_title = $_POST['slider_video_title'];
 $slider_video_youtube_id = $_POST['slider_video_youtube_id'];


  $query = "UPDATE slider_video SET slider_video_title = '{$slider_video_title}', slider_video_youtube_id = '{$slider_video_youtube_id}' WHERE slider_video_id= '{$slider_video_id}'";


 $update_query = mysqli_query($connection, $query);
                                         
if (!$update_query) {
                die("QUERY FAILED" . mysqli_error($connection));
                    }
else{
    echo "<script> window.location = 'slider-video.php'; </script>";
}

                                  }


                                     ?>
                        
