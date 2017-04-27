<!DOCTYPE html>
<html>
<head>
	<title>try</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_24.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/uCarousel.js"></script>
	<script src="js/tms-0.4.1.js"></script>
    <script>
		$(document).ready(function(){
		  $('.gallery')._TMS({
			  show:0,
			  pauseOnHover:true,
			  prevBu:false,
			  nextBu:false,
			  playBu:false,
			  duration:700,
			  preset:'fade',
			  pagination:$('.img-pags').uCarousel({show:3,shift:0, rows:1}),
			  pagNums:false,
			  slideshow:7000,
			  numStatus:true,
			  banners:false,
			  waitBannerAnimation:false,
			  progressBar:false
		   })		
		 })
	  </script>
  </head>

<body>
<section id="content"><div class="ic">Fuchsia Gardens, The Event Location</div>
<div class="container_24">
        	<div class="grid_24">
<h4 class="top-1"><strong>Gallery</strong></h4>
            </div>     
            <div class="grid_19">
                <div id="slide">		
                    <div class="gallery">
                        <ul class="items">
                        	<li><img src="images/garden1-big.jpg" alt=""></li>
							<li><img src="images/garden2-big.jpg" alt=""></li>
                            <li><img src="images/garden3-big.jpg" alt=""></li>
                            <li><img src="images/garden4-big.jpg" alt=""></li>
                            <li><img src="images/garden5-big.jpg" alt=""></li>
                        	
                        </ul>
                    </div>
                 </div> 
            </div>
            <div class="grid_5">
                <div class="pag">
                     <div class="img-pags">
                        <ul>
                        	<li><a href="#"><img src="images/garden1.jpg" alt=""><span></span></a></li>
							<li><a href="#"><img src="images/garden2.jpg" alt=""><span></span></a></li>
                            <li><a href="#"><img src="images/garden3.jpg" alt=""><span></span></a></li>
                            <li><a href="#"><img src="images/garden4.jpg" alt=""><span></span></a></li>
                            <li><a href="#"><img src="images/garden5.jpg" alt=""><span></span></a></li>
                          
                       </ul>
                    </div>
                    <a href="#" class="gallery-button gallery-button-1" data-type="prevPage">&nbsp;</a>
					<a href="#" class="gallery-button gallery-button-2" data-type="nextPage">&nbsp;</a>
                </div>  
            </div>
            <div class="clear"></div>
        </div>
    </section> 
</body>
</html>