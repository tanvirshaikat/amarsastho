<?php session_start(); ?>
<?php include "../includes/db.php";?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>

 <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="login">
 <center> <img width="70%" src="../img/news_logo.png"></center>

  <br>
    <form method="post">
      <input type="text" name="admin_username" placeholder="Username" required="required" />
        <input type="password" name="admin_password" placeholder="Password" required="required" />
        <br>
        <br>
        <center><button type="submit" class="btn btn-primary btn-login" name="login">Log In</button></center>
    </form>
    <br>
    <br>
    <br>

    <center><h5 style="color: #000;
                       font-weight: 600;
                       font-size: 14px;">
                       Designed & Developed By <a style="color: #138ccf; text-decoration:none; " href="http://techsolutionsbd.com" target="_blank">  Techsolutions BD</a>
          </h5></center>



<?php
if(isset($_POST['login'])){

$email = mysqli_real_escape_string($connection,$_POST['admin_username']);

$pass = mysqli_real_escape_string($connection,sha1($_POST['admin_password']));

$sel_user = "select * from admin_info where admin_username='$email' AND admin_password='$pass'";

$run_user = mysqli_query($connection, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['admin_username']=$email;

echo "<script> window.location='../admin'; </script>";

}

else {

echo "<script>alert('Username or Password is not correct, try again!')</script>";

}

}
?>

</div>

  
    <script src="js/index.js"></script>

</body>
</html>