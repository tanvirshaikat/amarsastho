								<div class="widget widget_recent_post"><!-- Start widget recent post -->
									<h4 class="widget_title">সর্বশেষ</h4>
									<ul class="recent_post">
<?php 

        if (isset($_GET['category'])) {
                $post_category_id =  $_GET['category'];
            }    
            for ($i=0; $i <4 ; $i++) {    
              $i=$i+1;
          
            $query = "SELECT * FROM posts ORDER BY post_id DESC limit 5";
                $select_all_posts_query = mysqli_query($connection, $query);
}
                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = mb_substr($row['post_title'],0,34, "utf-8");
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_status = $row['post_status'];

                    if ($post_status == 'published'){ 

                    ?>
                    

										<li>
											<figure class="widget_post_thumbnail">
												<a href="post.php?p_id=<?php echo $post_id; ?>"><img src="images/news_images/<?php echo $post_image; ?>"></a>
											</figure>
											<div class="widget_post_info">
												<h5><a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h5>
												<div class="post_meta">
													<span class="date_meta"><i class="fa fa-calendar"></i> <?php echo $post_date; ?></span>
												</div>
											</div>
										</li>





            <?php   }}   ?>	

									</ul>


								</div><!-- End widget recent post -->