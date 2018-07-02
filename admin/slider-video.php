<?php include "includes/admin_header.php"; ?>


    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header text-center">
                            <span class="news-header">Manage Videos For Slider</span>
                        </h2>
                        

                        <div class="col-md-5">
                        <h5><span class="news-header">Add New Video</span></h5>
                        <br>


                        <!-- Insert slide_video Function -->
                        <?php 
                        insert_slider_video(); 
                        ?>

                        <form action="slider-video.php" method="post">
                            <div class="form-group">
                            <level for="slide_video_title">Video Title/Caption</level>
                                <input type="text" name="slider_video_title" class = "form-control" placeholder="Enter Video Title" class="btn btn-success" required>
                            </div>

                            <div class="form-group">
                                <level for="slider_video_youtube_id">Youtube Video ID</level>
                                <input name="slider_video_youtube_id" type="text" class="form-control" placeholder="Enter Your Youtube Video ID (Like red portion of below example)" required>
                                <span ><h5><b>Example: </b> https://www.youtube.com/watch?v=<b style="color:red;">qn2x62G5GmM</b></h5></span>
                                </div>
                                <div class="form-group">
                                <input type="submit" name="submit" value="Add Youtube Video ID" class="btn btn-success">
                            </div>
                        </form>


                    <?php 

                    if (isset($_GET['edit'])) {
                        $slide_video_id = $_GET['edit'];

                        include "includes/update_slider_video.php";
                    }
                     ?>


                     </div>
                <div class="col-md-7">
                <h5><span class="news-header">All Video</span></h5>
                <br>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Video Title</td>
                            <td>Youtube Video ID</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>

                    <!-- Show All slide_video Function -->
                    <?php 
                    findAllslider_video();
                    ?>

                    <!-- Delete slide_video Function -->
                     <?php 
                     deleteslider_video();
                     ?>

                            </tbody>
                        </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include "includes/admin_footer.php"; ?>