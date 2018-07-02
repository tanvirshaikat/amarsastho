<?php include "includes/header.php" ?>

<?php include "includes/menu.php" ?>




			<div class="main_content container"><!-- main_content -->


				<div class="posts_sidebar clearfix"><!--Start Posts Areaa -->
					<div class="posts_areaa col-md-8"><!-- posts_areaa -->
						<div class="row">

							<!-- block_posts block_6 -->
							<div class="block_posts block_6">

								<!-- block_inner -->
								<div class="block_inner">



<?php 



            if (isset($_POST['submit'])) {
                 $search = $_POST['search'];
                  
                 $query = "SELECT * FROM posts WHERE post_title LIKE '%$search%'";
                 $search_query = mysqli_query($connection, $query);

                 if (!$query) {
                     die("QUERY FAILED" . mysqli_error($connection));
                 }

                 $count = mysqli_num_rows($search_query);

                 if ($count==0) {
                     echo "<h4>আপনার দেয়া শব্দটির সাথে এখানে কোন খবর এর মিল পাওয়া যায়নি।</h4>";
                 }else if ($search=="" || empty($search)) {
                    echo "<h4>অনুগ্রহপূর্বক কিছু লিখে অনুসন্ধান করুন!</h4>";
                    } else {
                     
                        echo "<h4>সার্চের প্রাপ্ত ফলাফলগুলো নিচে দেখুনঃ <hr></h4>";

                while ($row = mysqli_fetch_assoc($search_query)) {
                    $post_id = $row['post_id'];
                    $post_views = $row['post_views'];
                    $post_title = mb_substr($row['post_title'],0,46, "utf-8");
                    $post_author = mb_substr($row['post_author'],0,26, "utf-8");
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = mb_substr($row['post_content'],0,185, "utf-8");
                    $post_status = $row['post_status'];

                    if ($post_status == 'published'){ 
                    
                    ?>

                <!-- First Blog Post -->
                <article class="block_hz_post">
										<div class="standard_post">
											<div class="list_thum">
												<div class="hz_thumb_post">
													<div class="cat_list_post">
														<span class="hz_cat_post">
															<a><i class="fa fa-eye">Views</i><?php echo ' '. $post_views; ?></a>
														</span>
													</div>
													<img style="height: 189px !important;" src="images/news_images/<?php echo $post_image; ?>" class="img-responsive">
												</div>	

											</div>	
											<div class="list_content">
												<div class="block_hz_top_post">
													<div class="block_hz_title_and_meta">
														<h4 class="hz_title"><a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h4>
														<div class="hz_meta_post">
															<span class="hz_date_post"><i class="fa fa-calendar"></i><a href="#"><?php echo $post_date; ?></a></span>

														</div>
													</div>
												</div>

												<div class="block_hz_main_post_content">
													<div class="block_hz_title_fix">
													<div class="hz_content">
														<p><?php echo $post_content; ?>...</p>
													</div>
													</div>

													<div class="hz_bottom_post">

														<div class="hz_read_more">
															<a href="post.php?p_id=<?php echo $post_id; ?>">বিস্তারিত</a>
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
										</div>
									</article>
                    
                    <?php   }}   

                 }
                 
            }

            ?>





								</div>
								<!-- // block_inner -->
							</div>
							<!-- // block_posts block_6 -->



















						</div>
					</div><!--End Posts Areaa -->
					
					<div class="sidebar col-md-4"><!--Start Sidebar -->
						<div class="row">
							<div class="inner_sidebar"><!--Start Inner Sidebar -->


<?php include "includes/latest_tab.php" ?>
<?php include "includes/popular_tab.php" ?>	

							</div><!--End Inner Sidebar -->
						</div>
					</div><!--End Sidebar -->
				</div><!-- Posts And Sidebar -->
			</div><!-- main_content -->

<?php include "includes/footer.php" ?>
