<body>

  <!-- News Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

	<div class="all_content news_layout animsition container-fluid">
		<div class="row">

			<div class="header"><!-- header -->

				<div class="main_header"><!-- main_header -->
					<div class="container">
						<div class="logo_ads"><!-- logo_ads -->
							<div class="logo"><!-- logo -->
								<!-- <h3>logo</h3> -->
								<a href="index"><img style="box-shadow: -6px 3px 5px -6px rgba(0, 0, 0, 0.21); padding-left: 8px;" src="img/news/news_logo.png" alt="Logo"></a>
							</div><!-- // logo -->
							<div style="float: right;" class="logo_ads"><!-- ads_block -->
																<div class="widget hamzh_flickr"><!-- Start widget search -->
									<?php 

    $query = "SELECT * FROM adv where adv_id = 1	"; //query for showing post.
    $select_adv = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_adv)) {
    $adv_id = $row['adv_id'];
    $adv_image_title = $row['adv_image_title'];
    $adv_link = $row['adv_link'];

    echo "<a href='$adv_link' target='_blank'><img style='    box-shadow: 4px 3px 4px -2px rgba(0, 0, 0, 0.21);width: 500px;height: auto;' src='advimages/$adv_image_title'></a>";

}
?>
								</div><!-- End widget search -->
							</div><!-- // ads_block -->
						</div><!-- // logo_ads -->
					</div>

					<div style="background-color: #11a7a0;" class="all_nav container-fluid"><!-- all_nav -->
						<div class="container">
							<div class="nav_bar"><!-- nav_bar -->
							<nav id="primary_nav_wrap"><!-- Start primary_nav_wrap -->
								<ul>
								  <li class="current-menu-item"><a href="index"><i class="fa fa-home"></i> হোম</a>
								  </li>
								  
								   <?php 

                            $query = "SELECT * FROM category LIMIT 12";
                            $select_categories_sidebar = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                            $category_name = $row['category_name'];
                            $category_id = $row['category_id'];

                            echo "<li><a href='category.php?category=$category_id'>{$category_name}</a></li>";
                            }

                             ?>
							      
								</ul>
							</nav><!-- End primary_nav_wrap -->
							</div><!-- // nav_bar -->

							<div id="top_search_ico"><!-- top_search_ico -->
								<div style="margin-top: 12px;" class="top_search">
									<form method="post" action="search.php">
										<input type="text" name="search" placeholder="Search and hit enter...">
										<button style="background-color: #ffffff00 !important; margin: 0px !important; padding: 0px !important;" name="submit" type="submit"><i class="fa fa-search search-desktop"></i></button>

									</form>
									
								</div>

								<!-- <div id="top_search_toggle">
									<div id="search_toggle_top">
									<form method="post" action="search.php">
										<input type="text" name="search" placeholder="Search and hit enter...">
									</form>



									</div>
									<i class="fa fa-search search-desktop"></i>
								</div> -->
							</div><!-- // top_search_ico -->
							
							<div class="hz_responsive"><!--button for responsive menu-->
								<div id="dl-menu" class="dl-menuwrapper">
									<button class="dl-trigger">Open Menu</button>
									<ul class="dl-menu">
										<li class="current-menu-item"><a href="index"><i class="fa fa-home"></i> হোম</a>
								  </li>
									<?php 

                            $query = "SELECT * FROM category LIMIT 12";
                            $select_categories_sidebar = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                            $category_name = $row['category_name'];
                            $category_id = $row['category_id'];

                            echo "<li><a href='category.php?category=$category_id'>{$category_name}</a></li>";
                            }

                             ?>
								
								  
								</ul>
								</div><!-- /dl-menuwrapper -->
							</div><!--End button for responsive menu-->
						</div>
					</div><!-- // all_nav -->
				</div><!-- // main_header -->
			</div><!-- End header -->

