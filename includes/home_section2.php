<div class="block_posts block_1"><!-- block_posts block_1 -->
								<div class="featured_title"><!-- featured_title -->
									<h4>লাইফস্টাইল</h4>
									<a href="category.php?category=1" class="view_button">আরও</a>
								</div><!-- // featured_title -->

								<div class="block_inner row"><!-- block_inner -->
<?php 

        if (isset($_GET['category'])) {
                $post_category_id =  $_GET['category'];
            }    
          for ($i=0; $i <4 ; $i++) {    
              $i=$i+1;
          
            $query = "SELECT * FROM posts WHERE post_category_id = 1 ORDER BY post_id DESC LIMIT 1";
                $select_all_posts_query = mysqli_query($connection, $query);
}
                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = mb_substr($row['post_title'],0,150, "utf-8");
                    $post_author = mb_substr($row['post_author'],0,26, "utf-8");
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = mb_substr($row['post_content'],0,250, "utf-8");
                    $post_status = $row['post_status'];

                    if ($post_status == 'published'){ 

                    ?>
                    <div class="big_post col-lg-6 col-md-6 col-sm-6 col-xs-6"><!-- big_post -->
						<div class="block_img_post"><!-- block_img_post -->
							<img src="images/news_images/<?php echo $post_image; ?>" alt="Use A Passage Of Lorem Ipsum">
						</div><!-- // block_img_post -->

						<div class="inner_big_post"><!-- inner_big_post -->
							<div class="title_post"><!-- title_post -->
								<a href="post.php?p_id=<?php echo $post_id; ?>"><h4><?php echo $post_title; ?></h4></a>
							</div><!-- // title_post -->
							<div style="height: 77px; overflow: hidden;">
							<div class="big_post_content"><!-- big_post_content -->
								<p><?php echo $post_content; ?>...</p>
							</div><!-- // big_post_content -->
						</div>
							<div class="post_date"><!-- post_date -->
								<em><a href="#"><?php echo $post_date; ?></a></em>
							</div><!-- // post_date -->
						</div><!-- // inner_big_post -->
					</div><!-- // big_post -->





            <?php   }}   ?>


									<div class="small_list_post col-lg-6 col-md-6 col-sm-6 col-xs-6"><!-- small_list_post -->
										<ul>
<?php 

        if (isset($_GET['category'])) {
                $post_category_id =  $_GET['category'];
            }    
          for ($i=0; $i <4 ; $i++) {    
              $i=$i+1;
          
            $query = "SELECT * FROM posts WHERE post_category_id = 1 ORDER BY post_id DESC LIMIT 5 OFFSET 1";
                $select_all_posts_query = mysqli_query($connection, $query);
}
                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = mb_substr($row['post_title'],0,150, "utf-8");
                    $post_author = mb_substr($row['post_author'],0,26, "utf-8");
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = mb_substr($row['post_content'],0,120, "utf-8");
                    $post_status = $row['post_status'];

                    if ($post_status == 'published'){ 

                    ?>
                    
					<li class="small_post clearfix"><!-- small_post -->
						<div class="img_small_post"><!-- img_small_post -->
							<img src="images/news_images/<?php echo $post_image; ?>" alt="Consectetur adipisicing elit">
						</div><!-- // img_small_post -->
						<div class="small_post_content"><!-- small_post_content -->
							<div class="title_small_post"><!-- title_small_post -->
								<a href="post.php?p_id=<?php echo $post_id; ?>"><h5> <?php echo $post_title; ?></h5></a>
							</div><!-- // title_small_post -->
							<div class="post_date"><em><a href="#"><?php echo $post_date ; ?></a></em></div>
						</div><!-- // small_post_content -->
					</li><!-- // small_post -->



            <?php   }}   ?>
										</ul>
									</div><!-- // small_list_post -->
								</div><!-- // block_inner -->
							</div><!-- // block_posts block_1 -->