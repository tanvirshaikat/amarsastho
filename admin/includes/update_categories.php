                             <form action="" method="post">
                                <div class="form-group">
                                    <level for="category_name">Edit Categories</level>

                                    <?php 

                                    if (isset($_GET['edit'])) {

                                        $cat_id = $_GET['edit'];
                                        $query = "SELECT * FROM category WHERE category_id= $cat_id "; //edit categories id.
                                        $select_categories_edit_id = mysqli_query($connection, $query);

                                        while ($row = mysqli_fetch_assoc($select_categories_edit_id)) {
                                        $category_id = $row['category_id'];
                                        $category_name = $row['category_name'];

                                        ?>

                                        <input value="<?php if (isset($category_name)) {
                                            echo $category_name;
                                        } ?>" name="category_name" type="text" class="form-control">

                                        <?php }} ?>
                                    
                                    <?php //update query

                                        if (isset($_POST['update_category'])) {
                                         $the_cat_title = $_POST['category_name'];
                                         $query = "UPDATE category SET category_name = '{$the_cat_title}' WHERE category_id= {$cat_id} ";
                                         $update_query = mysqli_query($connection, $query);
                                         
                                         if (!$update_query) {

                                             die("QUERY FAILED" . mysqli_error($connection));
                                         }
                                         else{
                                            echo "<script> window.location='categories.php'; </script>";
                                         }

                                  }


                                     ?>


                                    </div>
                                    <div class="form-group">
                                    <input type="submit" name='update_category' value="Update Categories" class="btn btn-success">
                                </div>
                            </form>
                        
