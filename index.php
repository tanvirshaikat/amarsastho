<?php include "includes/header.php" ?>

<?php include "includes/menu.php" ?>

<?php include "includes/slider.php" ?>










			<div class="main_content container"><!-- main_content -->


				<div class="featured_slider"> <!--Start featured_slider -->
					<div class="featured_title"><!-- featured_title -->
						<h4>সর্বাধিক পঠিত</h4>
						
					</div><!-- // featured_title -->

					<div class="featured_posts_slider"><!-- featured_posts_slider -->
						<div id="featured_post"><!-- featured_post -->
<?php 

        if (isset($_GET['category'])) {
                $post_category_id =  $_GET['category'];
            }    

            $query = "SELECT * FROM posts ORDER BY post_views DESC LIMIT 8";
                $select_all_posts_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_views = $row['post_views'];
                    $post_title = mb_substr($row['post_title'],0,150, "utf-8");
                    $post_author = mb_substr($row['post_author'],0,26, "utf-8");
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = mb_substr($row['post_content'],0,210, "utf-8");
                    $post_status = $row['post_status'];

                    if ($post_status == 'published'){ 

                    ?>

                                <div class="item"><!-- item -->
							  	<div class="img_post">
							  		<a href="#"><img src="images/news_images/<?php echo $post_image; ?>" alt="Owl Image"></a>
							  	</div>
							  	<div class="featured_title_post">
				                	<div class="caption_inner">
				                  		<a href="post.php?p_id=<?php echo $post_id; ?>"><h5 style="font-size: 18px; height: 18px; padding-left: 2px; overflow: hidden;" class="title_post"><?php echo $post_title; ?></h5></a>
				                  		<div style="font-size: 11px !important" class="post_date"><em><a href="#"><?php echo $post_date; ?></a></em></div>
				                  		<span class="latest-cat"><a>Views<?php echo ' '. $post_views; ?></a></span>
				                	</div>
				            	</div>
							</div><!-- // item -->

<?php   } }  ?>
							

							

						</div><!-- // featured_post -->
					</div><!-- // featured_posts_slider -->
				</div><!--End featured_slider -->

				<div class="posts_sidebar clearfix"><!--Start Posts Areaa -->
					<div class="posts_areaa col-md-8"><!-- posts_areaa -->
						<div class="row">


<?php include "includes/home_section1.php" ?>


<?php include "includes/home_section2.php" ?>


<?php include "includes/home_section3.php" ?>
<?php include "includes/home_section4.php" ?>


						</div>
					</div><!--End Posts Areaa -->
					
					<div class="sidebar col-md-4"><!--Start Sidebar -->
						<div class="row">
							<div class="inner_sidebar"><!--Start Inner Sidebar -->

								<div class="widget  widget_about_me"><!-- Start widget About Me -->
									<div class="about_me">
										<h4 class="widget_title pull-left">লেখক</h4>
										<div class="my_pic">
											<img src="img/waheed.jpg" alt="Ashmawi Sami">
										</div>
										<div class="my_name">
											<h4>আ.স.ম. ওয়াহিদুজ্জামান</h4>
										</div>
										<div class="my_words">
											<p>এম.বি.এ (ঢাকা), পিজিডিআইবিএম(লন্ডন), অতিরিক্ত কর কমিশনার এবং প্রাক্তন পরিচালক বিসিএস (কর) এ্যাকাডেমি</p>
										</div>
										<div class="social_icon">
											<span><a href="#"><i class="fa fa-facebook"></i></a></span>
											<span><a href="#"><i class="fa fa-twitter"></i></a></span>
											<span><a href="#"><i class="fa fa-linkedin"></i></a></span>
										</div>
									</div>
								</div><!-- End widget About Me -->

								


								<div class="widget hamzh_flickr"><!-- Start widget search -->
									<?php 

    $query = "SELECT * FROM adv where adv_id = 2	"; //query for showing post.
    $select_adv = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_adv)) {
    $adv_id = $row['adv_id'];
    $adv_image_title = $row['adv_image_title'];
    $adv_link = $row['adv_link'];

    echo "<a href='$adv_link' target='_blank'><img style='box-shadow: 2px 4px 3px 2px rgba(99, 99, 99, 0.28); width: 100%; height: auto;' src='advimages/$adv_image_title'></a>";

}
?>
								</div><!-- End widget search -->

								<div class="widget widget_social_counter"> <!-- widget_social_counter -->
									<h4 class="widget_title">Follow Us</h4>
									<div>
								        <div id="fb-root"></div>
								        <script>(function(d, s, id) {
								          var js, fjs = d.getElementsByTagName(s)[0];
								          if (d.getElementById(id)) return;
								          js = d.createElement(s); js.id = id;
								          js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10';
								          fjs.parentNode.insertBefore(js, fjs);
								        }(document, 'script', 'facebook-jssdk'));
								        </script>

								        <div class="fb-page" data-href="https://www.facebook.com/happyhomenhealthcare/" data-tabs="none" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/happyhomenhealthcare/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/happyhomenhealthcare/">Happy Home and Healthcare</a></blockquote></div>
								    </div>

									<div class="clearfix"></div>
								</div><!-- End widget_social_counter -->
								
									
								<div class="widget hamzh_flickr"><!-- Start widget search -->


<?php 

    $query = "SELECT * FROM adv where adv_id = 3"; //query for showing post.
    $select_adv = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_adv)) {
    $adv_id = $row['adv_id'];
    $adv_image_title = $row['adv_image_title'];
    $adv_link = $row['adv_link'];

    echo "<a href='$adv_link' target='_blank'><img style='box-shadow: 2px 4px 3px 2px rgba(99, 99, 99, 0.28); width: 100%; height: auto;' src='advimages/$adv_image_title'></a>";

}
?>

								</div><!-- End widget search -->
























									
					

							</div><!--End Inner Sidebar -->
						</div>
					</div><!--End Sidebar -->
				</div><!-- Posts And Sidebar -->
			</div><!-- main_content -->

<?php include "includes/footer.php" ?>
