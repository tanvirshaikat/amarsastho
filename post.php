<?php include "includes/header.php" ?>

<?php include "includes/menu.php" ?>
			
			<div class="main_content container">

				<div class="posts_sidebar layout_right_sidebar clearfix"><!-- Start posts sidebar -->

					<div class="inner_single col-md-8"> <!-- Start inner single -->
						<div class="row">	
									
							<article class="hz_post"><!-- Start article -->
								<div class="video_post post_wrapper">



<?php 

            if (isset($_GET['p_id'])) {
                $the_post_id = $_GET['p_id'];
            }

            

            $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
                $select_all_posts_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    $post_views = $row['post_views'];
                    $post_category_id = $row['post_category_id'];



                    ?>





                    <div class="hz_thumb_post">
										<div class="embed-responsive embed-responsive-16by9">
											<center> <img src="images/news_images/<?php echo $post_image; ?>" alt="" class="img-responsive"></center>
										</div>
									</div>	

									<div class="hz_top_post">

										<div class="hz_title_and_meta">
											<div class="hz_title"><h3><?php echo $post_title; ?></h3></div>
											<div class="hz_meta_post">

<?php 

$query = "SELECT * FROM author WHERE author_id = '$post_author'";
$select_author_info = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($select_author_info);

$author_id = $row['author_id'];
$author_name = $row['author_name'];


 ?>


												<span class="hz_post_by"><i class="fa fa-user"></i><?php echo " " .  $author_name; ?></span>
												<span class="hz_date_post"><i class="fa fa-calendar"></i><?php echo $post_date; ?></span>
												<span class="hz_date_post"><i class="fa fa-eye"></i> Views : <?php echo $post_views; ?></span>
											</div>
										</div>
									</div>

									<div class="hz_main_post_content">
										<div class="hz_content">
											<p>
												<?php echo $post_content; ?>
											</p>
										</div>

										<div class="hz_bottom_post">
											<div class="hz_tags">
<?php 

$query = "SELECT * FROM category WHERE category_id = $post_category_id";
$select_category_info = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($select_category_info);

$category_id = $row['category_id'];
$category_name = $row['category_name'];

?>


												<span><a href="category.php?category=<?php echo $category_id?>"><?php echo $category_name; ?></a></span>
											</div>

											<div class="hz_icon_shere">
			                                    <span class="share_toggle pi-btn">
			                                        <i class="fa fa-share-alt"></i>
			                                    </span>
			                                    <div class="hz_share">
													<span><a href="#"><i class="fa fa-facebook"></i></a></span>
													<span><a href="#"><i class="fa fa-twitter"></i></a></span>
													<span><a href="#"><i class="fa fa-google-plus"></i></a></span>
												</div>
											</div>
										</div>
									</div>
								</div>



<?php } ?>

                            <!--Start  Maximum post count -->

 <?php 

if ($the_post_id) {

$query ="UPDATE posts SET post_views = post_views + 1 ";
$query .="WHERE post_id = $the_post_id ";
$update_view_count = mysqli_query($connection, $query);

                }

?>








                    <!-- Releted Product   -->
                    <div class="releted-product">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-12">
                            <h3 class="section-head">সম্পর্কিত পোস্ট</h3>
                          </div>



								<div class="single_related_posts"><!-- Start Related Posts -->


									<ul id="post_related_block" class="post_block">
<?php 

        if (isset($_GET['category'])) {
                $post_category_id =  $_GET['category'];
            }    

            $query = "SELECT * FROM posts WHERE post_category_id = $post_category_id AND post_status = 'published' ORDER BY rand() DESC LIMIT 6";
                $select_all_posts_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = mb_substr($row['post_title'],0,39, "utf-8");
                    $post_image = $row['post_image'];
                    ?>





                          				<li class="item">
											<div class="img_box">
												<a href="post.php?p_id=<?php echo $post_id; ?>">
												<img src="images/news_images/<?php echo $post_image; ?>" >
												</a>
											</div>
											<h5><a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h5>
										</li>



<?php } ?>

									

									

										
									
									</ul>
								</div><!-- End Related Posts -->
									
									

									

									<!-- End respond Conmments -->
							</article><!-- End article -->



									
						</div>	
					</div><!--End Posts Areaa -->













<div class="sidebar col-md-4"><!--Start Sidebar -->
						<div class="row">



							<div class="inner_sidebar"><!--Start Inner Sidebar -->									
						
<?php include "includes/popular_tab.php" ?>
								<div class="widget hamzh_flickr"><!-- Start widget search -->
									<?php 

    $query = "SELECT * FROM adv where adv_id = 4	"; //query for showing post.
    $select_adv = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_adv)) {
    $adv_id = $row['adv_id'];
    $adv_image_title = $row['adv_image_title'];
    $adv_link = $row['adv_link'];

    echo "<a href='$adv_link' target='_blank'><img style='box-shadow: 2px 4px 3px 2px rgba(99, 99, 99, 0.28); width: 100%; height: auto;' src='advimages/$adv_image_title'></a>";

}
?>
								</div><!-- End widget search -->
<?php include "includes/latest_tab.php" ?>	




							</div><!--End Inner Sidebar -->
						</div>
					</div><!--End Sidebar -->
				</div><!-- End posts sidebar -->
			</div><!-- End main content -->

<?php include "includes/footer.php" ?>