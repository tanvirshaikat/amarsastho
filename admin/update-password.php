<?php include "includes/admin_header.php"; ?>


    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>





        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


<?php 
    //$connection = mysqli_connect('localhost', 'root', '', 'change_password');
        //$connection = mysql_connect("localhost","root","") or die();
        //$sel_db = mysql_select_db("change_password",$connection) or die();
        if(isset($_POST['re_password']))
        {
        $old_pass=sha1($_POST['old_pass']);
        $new_pass=$_POST['new_pass'];
        $re_pass=$_POST['re_pass'];
        $chg_pwd=mysqli_query($connection,"select * from admin_info where admin_id='1'");
        $chg_pwd1=mysqli_fetch_array($chg_pwd);
        $data_pwd=$chg_pwd1['admin_password'];
        if($data_pwd==$old_pass){
        if($new_pass==$re_pass){
            $update_pwd=mysqli_query($connection,"update admin_info set admin_password=sha1('$new_pass') where admin_id='1'");
            echo "<h5 style='color:#077647; text-align:center;'><b>Your Password Has Been Updated Successfully!</b></h5>";
        }
        else{
            echo "<script>alert('Your new and Retype Password is not match'); window.location=''</script>";
        }
        }
        else
        {
        echo "<script>alert('Your old password is wrong'); window.location=''</script>";
        }}
    ?>
<form action="" method="post">
        <div class="col-md-6 col-md-offset-3">
            
            <div class="form-group">

            <center><h1><span class="news-header">Update Password</span></h1></center>
            </br>
            
            <div class="form-group">
                <label for="password">Old Password</label>
                <input type="password" name="old_pass" value="" class="form-control" placeholder="Old Password..." required> 
            </div>

            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" name="new_pass" value="" class="form-control" placeholder="New Password..." required> 
            </div>

            <div class="form-group">
                <label for="password">Retype Password</label>
                <input type="password" name="re_pass" value="" class="form-control" placeholder="Retype New Password..." required> 
            </div>

            </br>
            <center><div class="form-group">
                <input type="submit" name="re_password" value="Update Password" class="btn btn-success">
            </div></center>
        </div>
    </form>                       


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