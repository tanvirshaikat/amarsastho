							<!-- block_posts block_5 -->
							<div class="block_posts block_5">
								<!-- featured_title -->
								<div class="featured_title">
									<h4>সুস্থ্যজীবন</h4>
									<a href="category.php?category=2" class="view_button">আরও</a>
								</div>
								<!-- // featured_title -->

								<!-- block_inner -->
								<div class="block_inner">
<?php 

        if (isset($_GET['category'])) {
                $post_category_id =  $_GET['category'];
            }    
          for ($i=0; $i <4 ; $i++) {    
              $i=$i+1;
          
            $query = "SELECT * FROM posts WHERE post_category_id = 2 ORDER BY post_id DESC LIMIT 6";
                $select_all_posts_query = mysqli_query($connection, $query);
}
                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = mb_substr($row['post_title'],0,34, "utf-8");
                    $post_author = mb_substr($row['post_author'],0,26, "utf-8");
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = mb_substr($row['post_content'],0,120, "utf-8");
                    $post_status = $row['post_status'];

                    if ($post_status == 'published'){ 

                    ?>
                    <article class="a-post-box">
						<figure class="latest-img"><img src="images/news_images/<?php echo $post_image; ?>" alt="" class="latest-cover"></figure>
						<div class="latest-overlay"></div>
						<div class="latest-txt">
							<h5 class="latest-title"><a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h5>
						</div>
			    	</article>




            <?php   }}   ?>

									


									
								</div>
								<!-- // block_inner -->
							</div>
							<!-- // block_posts block_5 -->