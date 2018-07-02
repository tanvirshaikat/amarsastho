<?php include "includes/admin_header.php"; ?>


    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">



<div class="col-md-12">
    <center><img src="../img/news_logo.png" class="img-respomsive" style="padding: 60px 0;"></center>
</div>
                <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">


<?php 

$query = " SELECT * FROM posts ";
$select_all_posts = mysqli_query($connection, $query);
$posts_counts = mysqli_num_rows($select_all_posts);

echo "<div class='huge'>{$posts_counts}</div>";

 ?>

                    
                    <div>News</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">Number of Total News</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

        <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

<?php 



$query = "SELECT * FROM posts WHERE post_status= 'published'";
$select_all_posts = mysqli_query($connection, $query);
$posts_counts = mysqli_num_rows($select_all_posts);

echo "<div class='huge'>{$posts_counts}</div>";


 ?>

                    <div>Published News</div>
                    </div>
                </div>
            </div>
                   <a href="posts.php">           
                <div class="panel-footer">

                    <span class="pull-left">Number of Published News</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

        <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

<?php 

$query = "SELECT * FROM posts WHERE post_status = 'draft'";
$select_all_posts = mysqli_query($connection, $query);
$posts_counts = mysqli_num_rows($select_all_posts);

echo "<div class='huge'>{$posts_counts}</div>";


 ?>

                    <div>Draft</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">Number of Drafts</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

        <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

<?php 

$query = "SELECT * FROM category";
$select_all_categories = mysqli_query($connection, $query);
$categories_counts = mysqli_num_rows($select_all_categories);

echo "<div class='huge'>{$categories_counts}</div>";

 ?>

                    <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">Number of Categories</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="col-md-12">
    <center><p style="font-weight: 600;">Copyright &copy2017 <a href="http://techsolutionsbd.com/" target="_blank">TechSolutions BD</a> || All Rights Reserved</p></center>
</div>


                <!-- /.row -->


<?php 

// $query = "SELECT * FROM posts WHERE post_status= 'draft' ";
// $select_all_draft_posts = mysqli_query($connection, $query);
// $posts_draft_counts = mysqli_num_rows($select_all_draft_posts);

// $query = "SELECT * FROM comments WHERE comment_status= 'unapproved' ";
// $unapproved_comments_query = mysqli_query($connection, $query);
// $unapproved_comments_counts = mysqli_num_rows($unapproved_comments_query);

// $query = "SELECT * FROM users WHERE user_role= 'subscriber' ";
// $subscriber_users = mysqli_query($connection, $query);
// $subscriber_counts = mysqli_num_rows($subscriber_users);

 ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include "includes/admin_footer.php"; ?>