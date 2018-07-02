<?php include "includes/admin_header.php"; ?>


    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <center><h1><span class="news-header">Manage Category</span>
                        </h1></center>
                        <hr>

                        <div class="col-md-6">
                        <h5><span class="news-header">Add New Category</span></h5>
                        <br>



                        <!-- Insert Categories Function -->
                        <?php 
                        insert_categories(); 
                        ?>

                        <form action="categories.php" method="post">
                            <div class="form-group">
                                <level for="category_name">Category Name</level>
                                <input name="category_name" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                <input type="submit" name="submit" value="Add Categories" class="btn btn-success">
                            </div>
                        </form>


                    <?php 

                    if (isset($_GET['edit'])) {
                        $cat_id = $_GET['edit'];

                        include "includes/update_categories.php";
                    }
                     ?>


                     </div>
                <div class="col-md-6">
                <h5><span class="news-header">All Category</span></h5>
                <br>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Category Name</td>
                            <td><center>Action</center></td>
                        </tr>
                    </thead>
                    <tbody>

                    <!-- Show All Categories Function -->
                    <?php 
                    findAllcategories();
                    ?>

                    <!-- Delete Categories Function -->
                     <?php 
                     deleteCategories();
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