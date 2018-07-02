

            <div class="slider_and_box">
                <div class="mian_slider clearfix container"> <!--Start Mian slider -->
                    <div class="big_silder col-md-8"><!-- Start big silder -->
                        <div class="row">
                            <ul id="big-slid-post" class="a-post-box">
<?php 

        if (isset($_GET['category'])) {
                $post_category_id =  $_GET['category'];
            }    

            $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 3";
                $select_all_posts_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = mb_substr($row['post_title'],0,200, "utf-8");
                    $post_author = mb_substr($row['post_author'],0,26, "utf-8");
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = mb_substr($row['post_content'],0,500, "utf-8");
                    $post_status = $row['post_status'];
                    $post_category_id = $row['post_category_id'];

                    if ($post_status == 'published'){ 

                    ?>

                                <li>
                                    <div class="feat-item img-section" data-bg-img="images/news_images/<?php echo $post_image; ?>">
                                    <div class="latest-overlay"></div>
                                        <div class="latest-txt">
<?php 

$query = "SELECT * FROM category WHERE category_id = $post_category_id";
$select_category_info = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($select_category_info);

$category_id = $row['category_id'];
$category_name = $row['category_name'];

?>




                                            <h4 style="font-size: 24px !important;" class="latest-title"><a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h4>
                                            <div class="big-latest-content">
                                                <p><?php echo  $post_content ; ?></p>
                                            </div>
                                            <span class="latest-cat"><a href="category.php?category=<?php echo $category_id?>"><?php echo $category_name; ?></a></span>
                                            <div class="hz_admin_pic"> 
                                                <!-- <img src="img/demo/pic.jpg" class="img-responsive" alt="Responsive image"> -->
                                            </div> |

<?php 

$query = "SELECT * FROM author WHERE author_id = '$post_author'";
$select_author_info = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($select_author_info);

$author_id = $row['author_id'];
$author_name = $row['author_name'];


 ?>


                                            <span class="hz_post_by"><i class="fa fa-user"></i><a href="#"><?php echo " " .  $author_name; ?></a></span>
                                            <span class="latest-meta">
                                                <span class="latest-date"><i class="fa fa-clock-o"></i><?php echo " " . $post_date; ?></span>
                                            </span>
                                        </div>
                                    </div>
                                </li>

<?php   } }  ?>

                            </ul>
                        </div>
                    </div><!-- End big silder -->

                    <div class="post_box col-md-4"><!--Start Post box -->
                        <div class="row">


<?php 

        if (isset($_GET['category'])) {
                $post_category_id =  $_GET['category'];
            }    

            $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 2 OFFSET 3";
                $select_all_posts_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = mb_substr($row['post_title'],0,200, "utf-8");
                    $post_author = mb_substr($row['post_author'],0,26, "utf-8");
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = mb_substr($row['post_content'],0,210, "utf-8");
                    $post_status = $row['post_status'];
                    $post_category_id = $row['post_category_id'];

                    if ($post_status == 'published'){ 

                    ?>

                                <article class="a-post-box">
                                    <figure class="latest-img"><img src="images/news_images/<?php echo $post_image; ?>" class="latest-cover"></figure>
                                    <div class="latest-overlay"></div>
                                    <div class="latest-txt">
                                        <h5 class="latest-title"><a href="post.php?p_id=<?php echo $post_id; ?>" rel="bookmark" title="<?php echo $post_title; ?>"><?php echo $post_title; ?></a></h5>

                                        <?php 

$query = "SELECT * FROM category WHERE category_id = $post_category_id";
$select_category_info = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($select_category_info);

$category_id = $row['category_id'];
$category_name = $row['category_name'];

?>
                                        
                                        <span class="latest-cat"><a href="category.php?category=<?php echo $category_id?>"><?php echo $category_name; ?></a></span>
                                        <span class="latest-meta">
                                            <span class="latest-date"><i class="fa fa-clock-o"></i><?php echo $post_date; ?></span>
                                        </span>
                                    </div>
                            </article>

<?php   } }  ?>                            

                            

                        </div>
                    </div><!--End Post box -->
                </div><!--End Mian slider -->
            </div>