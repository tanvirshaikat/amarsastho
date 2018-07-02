<?php include "includes/admin_header.php"; ?>


    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <center><h1><span class="news-header">Manage Author Info</span>
                        </h1></center>
                        <hr>

                        <div class="col-md-4">
                        <h5><span class="news-header">Add New Author</span></h5>
                        <br>


                        <!-- Insert author Function -->
                        <?php 
                        insert_author(); 
                        ?>

                        <form action="author.php" method="post">

                                <div class="form-group">
                                <level for="author_name">Author Name</level>
                                <input name="author_name" type="text" class="form-control" required>
                                </div>


                                <div class="form-group">
                                <level for="author_email">Author Email</level>
                                <input name="author_email" type="email" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <level for="author_phone_number">Author Phone Number</level>
                                <input name="author_phone_number" type="number" class="form-control" required>
                                </div>


                                <div class="form-group">
                                <input type="submit" name="submit" value="Add Author" class="btn btn-success">
                            </div>
                        </form>


                    <?php 

                    if (isset($_GET['edit'])) {
                        $author_id = $_GET['edit'];

                        include "includes/update_author.php";
                    }
                     ?>


                     </div>
                <div class="col-md-8">
                <h5><span class="news-header">All Author</span></h5>
                <br>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Author Name</td>
                            <td>Author Email</td>
                            <td>Author Phone Number</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>

                    <!-- Show All author Function -->
                    <?php 
                    findAllauthor();
                    ?>

                    <!-- Delete author Function -->
                     <?php 
                     deleteauthor();
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