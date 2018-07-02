<?php include "includes/admin_header.php"; ?>


    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>

                        <div class="col-xs-6">


                        <!-- Insert slide_video Function -->
                        <?php 
                        insert_slide_video(); 
                        ?>

                        <form action="slide_video.php" method="post">
                            <div class="form-group">
                                <level for="slide_video_title">Add slide_video</level>
                                <input name="slide_video_title" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                <input type="submit" name="submit" value="Add slide_video" class="btn btn-danger">
                            </div>
                        </form>


                    <?php 

                    if (isset($_GET['edit'])) {
                        $slide_video_id = $_GET['edit'];

                        include "includes/update_slide_video.php";
                    }
                     ?>


                     </div>
                <div class="col-xs-6">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Youtube Video ID</td>
                            
                            <td>UPDATE</td>
                            <td>DELETE</td>
                        </tr>
                    </thead>
                    <tbody>

                    <!-- Show All slide_video Function -->
                    <?php 
                    findAllslide_video();
                    ?>

                    <!-- Delete slide_video Function -->
                     <?php 
                     deleteslide_video();
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