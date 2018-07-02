							<!-- block_posts block_5 -->
							<div style=" padding-left: 8px; padding-right: 6px;" class="block_posts block_5">

<!-- 								<div class="featured_title">
									<h4>Life Style</h4>
									<a href="#" class="view_button">View All</a>
								</div> -->

								<div class="block_inner">




<style type="text/css">


.youtube-carousel{
  border: none;
}

.video-container { 
   position: relative; /* keeps the aspect ratio */ 
   padding-bottom: 56.25%; /* fine tunes the video positioning */ 
   padding-top: 60px; overflow: hidden;
   margin-bottom: -1px;
   margin-right: -1px;   
}

.video-container iframe,
.video-container object,
.video-container embed {
  position: absolute;  
  top: 0; 
  left: 0; 
  width: 100%; 
  height: 100%;
}
  
.carousel-control .glyphicon-chevron-left{
  top:35%;
  font-size: 20px;
  left:5%;
  margin: 0;
}

.carousel-control .glyphicon-chevron-right{
  top:35%;
  font-size: 20px;
  left:33%;
  margin: 0;
}

.carousel-control.left, .carousel-control.right {
  background-image: none;
  color: #ffffff;
  top: 50%;
  transform: translate(0,-50%);
  -webkit-transform: translate(0,-50%);
  -ms-transform: translate(0,-50%);
  opacity: 1;
  height:120px;
}

.controls{
   display: none;
}

.carousel-control:hover {
  text-decoration: none;
  filter: alpha(opacity=60);
  outline: 0;
  opacity: 0.6;
}

.left-button {
  height:70px;
  width:35px;
  border-radius: 0 90px 90px 0;
  top: 50%;
  -webkit-transform: translate(0,-50%);
  -ms-transform: translate(0,-50%);
  transform: translate(0,-50%);
  -moz-border-radius: 0 90px 90px 0;
  -webkit-border-radius: 0 90px 90px 0;
  background-color: #e25454;
  display: inline-block;
  position: relative;
  float:left;
  /*subpixel bug*/
  margin-left: -1px; 
}

.right-button {
  height:70px;
  width:35px;
  border-radius: 90px 0 0 90px;
  top: 50%;
  -webkit-transform: translate(0,-50%);
  -ms-transform: translate(0,-50%);
  transform: translate(0,-50%);
  -moz-border-radius: 90px 0 0 90px;
  -webkit-border-radius: 90px 0 0 90px;
  background-color: #e25454;
  display: inline-block;
  position: relative;
  float:right;
  /*subpixel bug*/
  margin-right: -1px;
}


.carousel-caption {
 display: none;
 background: none repeat scroll 0 0 #122333e0;
  bottom: 0;
  font-size: 12px;
  text-align: center;
  opacity: 1;
  padding:0px 33px 9px !important;
  width: 700px;
  border: 1px solid #fff;
  border-radius: 55px 4px 3px;
  text-transform: uppercase;
  z-index:11;
  pointer-events:none;

}

@media screen and (min-width: 768px) {
.right-button {
  height:120px;
  width:60px;
  border-radius: 90px 0 0 90px;
  -moz-border-radius: 90px 0 0 90px;
  -webkit-border-radius: 90px 0 0 90px;
  display: inline-block;
  position: relative;
  float:right;
}

.left-button {
  height:120px;
  width:60px;
  border-radius: 0 90px 90px 0;
  -moz-border-radius: 0 90px 90px 0;
  -webkit-border-radius: 0 90px 90px 0;
  display: inline-block;
  position: relative;
  float:left;
}

.carousel-control .glyphicon-chevron-left{
  top:35%;
  font-size: 35px;
  left:5%;
}

.carousel-control .glyphicon-chevron-right{
  top:35%;
  font-size: 35px;
  left:35%;
}

.carousel-caption {
  font-size: 18px;
  padding:15px 20px 15px;
  }
}
@media screen and (min-width: 992px) {
 .carousel-caption {
    font-size: 18px;
    padding:15px 20px 15px;
  }
}




</style>


<script type="text/javascript">
	//Start Youtube API
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var youtubeReady = false;

//Variable for the dynamically created youtube players
var players= new Array();
var isPlaying = false;
function onYouTubeIframeAPIReady(){
  //The id of the iframe and is the same as the videoId	
  jQuery(".youtube-video").each(function(i, obj)  {
     players[obj.id] = new YT.Player(obj.id, {         
			  videoId: obj.id,
			    playerVars: {
			    controls: 2,
		      rel:0,
		      autohide:1,
		      showinfo: 0 ,
		      modestbranding: 1,
		      wmode: "transparent",
		      html5: 1
       	},    
        events: {
          'onStateChange': onPlayerStateChange
        }
       });
     });
     youtubeReady = true;
  }


function onPlayerStateChange(event) {
  var target_control =  jQuery(event.target.getIframe()).parent().parent().parent().find(".controls");
  
  var target_caption = jQuery(event.target.getIframe()).parent().find(".carousel-caption");
  switch(event.data){
    case -1:
      jQuery(target_control).fadeIn(500);
      jQuery(target_control).children().unbind('click');
      break
     case 0:
      jQuery(target_control).fadeIn(500);
      jQuery(target_control).children().unbind('click');
      break;
     case 1:
      jQuery(target_control).children().click(function () {return false;});
      jQuery(target_caption).fadeOut(500);
      jQuery(target_control).fadeOut(500);
       break;
      case 2:
        jQuery(target_control).fadeIn(500);
        jQuery(target_control).children().unbind('click'); 
        break;
        case 3:
           jQuery(target_control).children().click(function () {return false;});
           jQuery(target_caption).fadeOut(500);
           jQuery(target_control).fadeOut(500);
           break;
          case 5:
            jQuery(target_control).children().click(function () {return false;});
            jQuery(target_caption).fadeOut(500);
            jQuery(target_control).fadeOut(500);
            break;
          default:
            break;
    }
};

jQuery(window).bind('load', function(){
  jQuery(".carousel-caption").fadeIn(500);
  jQuery(".controls").fadeIn(500);
 });

jQuery('.carousel').bind('slid.bs.carousel', function (event) {
   jQuery(".controls").fadeIn(500);
});
</script>




    <div class="col-sm-12">
      <div id="random_number1" class="carousel slide youtube-carousel"  data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
<?php 

    $query = "SELECT * FROM slider_video order by slider_video_id desc limit 1"; //query for showing post.
    $select_video = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_video)) {
    $slider_video_id = $row['slider_video_id'];
    $slider_video_title = $row['slider_video_title'];
    $slider_video_youtube_id = $row['slider_video_youtube_id'];

    ?>

<div class="video-container item active">
            <div class="youtube-video" id='<?php echo $slider_video_youtube_id;?>'></div>
            <div class="carousel-caption"><?php echo $slider_video_title;?></div>
          </div>
<?php } ?>
          
<?php 

    $query = "SELECT * FROM slider_video order by slider_video_id desc limit 4 offset 1"; //query for showing post.
    $select_video = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_video)) {
    $slider_video_id = $row['slider_video_id'];
    $slider_video_title = $row['slider_video_title'];
    $slider_video_youtube_id = $row['slider_video_youtube_id'];

    ?>

          <div class="video-container item">
            <div class="youtube-video" id='<?php echo $slider_video_youtube_id;?>'></div>
            <div class="carousel-caption"><?php echo $slider_video_title;?></div>
          </div>
<?php } ?>





        </div>

        <div class="controls">
          <a class="left carousel-control" href="#random_number1" data-slide="prev">
            <div class="left-button">
              <div class="glyphicon glyphicon-chevron-left"></div>
            </div>
          </a>
          <a class="right carousel-control" href="#random_number1" data-slide="next">        
            <div class="right-button">
              <div class="glyphicon glyphicon-chevron-right"></div>
            </div>
          </a>
        </div>
      </div>
    </div>


									


									
								</div>
								<!-- // block_inner -->
							</div>
							<!-- // block_posts block_5 -->