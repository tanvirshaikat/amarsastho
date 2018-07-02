<?php 

       if (isset($_GET['edit'])) {

       $author_id = $_GET['edit'];
       $query = "SELECT * FROM author WHERE author_id= $author_id "; //edit author id.
       $select_author_edit_id = mysqli_query($connection, $query);

       while ($row = mysqli_fetch_assoc($select_author_edit_id)) {
       $author_id = $row['author_id'];
       $author_name = $row['author_name'];
       $author_email = $row['author_email'];
       $author_phone_number = $row['author_phone_number'];

?>                            
                             <form action="" method="post">
                                <div class="form-group">
                                    <level for="author_name">Edit Author Name</level>



                                        <input value="<?php echo $author_name; ?>" name="author_name" type="text" class="form-control">




                                    </div>
                                    <div class="form-group">
                                    <level for="author_email">Edit Author Email</level>



                                        <input value="<?php echo $author_email; ?>" name="author_email" type="email" class="form-control">




                                    </div>
                                    <div class="form-group">
                                    <level for="author_name">Edit Author Phone Number</level>



                                        <input value="<?php echo $author_phone_number; ?>" name="author_phone_number" type="text" class="form-control">




                                    </div>
                                    <div class="form-group">
                                    <input type="submit" name='update_author' value="Update author" class="btn btn-success">
                                </div>


    <?php }} ?>
                                    
 <?php //update query

    if (isset($_POST['update_author'])) {
      $author_name = $_POST['author_name'];
      $author_email = $_POST['author_email'];
      $author_phone_number = $_POST['author_phone_number'];



      $query = "UPDATE author SET author_name = '{$author_name}', author_email = '{$author_email}', author_phone_number = '{$author_phone_number}' WHERE author_id= '{$author_id}'";


    // $query= "UPDATE author SET(author_name,author_email,author_phone_number) ";
    // $query.= "VALUE('{$author_name}','{$author_email}','{$author_phone_number}'), ";
    // $query.= "WHERE author_id= {$author_id}";



      // $query = "UPDATE author SET author_name = '{$author_name}' WHERE author_id= {$author_id} ";
      $update_query = mysqli_query($connection, $query);
      
                                         if (!$update_query) {
          die("QUERY FAILED" . mysqli_error($connection));
      }

      else{
        echo " <script> window.location='author.php'; </script>";
      }

}


    ?>


                            </form>
                        
