<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
// session_start();
// include "securityroutine.php";

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Black Hippy</title>
<script language="javascript"></script>

<link rel="stylesheet" href="css/styles.css" />

</head>

<body>

	<div class="container">
    	<div class="title">
        	<h1>Black Hippy</h1>
    	</div>

		<div class="menu">
            <ul class="nav">
                <li class="dropdown-li">
                	<a href="<?php echo URL::to('blackhippy') ?>" class="first">Home</a>
                    
              	</li>
                <li class="dropdown-li"><a href="<?php echo URL::to('blackhippy/about') ?>">About</a>
                	<ul class="dropdown">
                        	<li>
	                            <a href="<?php echo URL::to('blackhippy/results') . '?search-term=kendricklamar' ?>" >
                                    Kendrick Lamar      
                                </a>
	                        </li>
                        	<li>
	                            <a href="">
	                            	ScHoolboy Q
	                         	</a>
	                        </li>
	                        <li>
	                            <a href="">
	                            	Ab-Soul
	                         	</a>
	                        </li>
	                        <li>
	                            <a href="" class='dropdown-last'>
	                            	Jay Rock
	                         	</a>
	                        </li>
	                </ul>  
               </li>
                
                <li class="dropdown-li">
                    <a id="flickrphoto" href="<?php echo URL::to('blackhippy/flickrYeah') ?>" >Photos</a>
                </li>
                <li class="dropdown-li">
                	<a href="#" class ="last"> TDE </a>
                </li>
            </ul>
        
        </div><!-- menu div -->
                <div class="spacing">
        </div>

        <div class="picture">
        	<div id="container">
                <div id="example">
                    
                    <div id="slides">
                        <div class="slides_container">
                            <img src="<?php echo URL::to_asset('img/blackhippy1.jpg') ?>" width="570" height="270" alt="Slide 1"></a>
                            
                            <img src="<?php echo URL::to_asset('img/blackhippy2.jpg') ?>" width="570" height="270" alt="Slide 2"></a>
                          
                            <img src="<?php echo URL::to_asset('img/blackhippy3.jpeg') ?>" width="570" height="270" alt="Slide 3"></a>
                            
                            <img src="<?php echo URL::to_asset('img/blackhippy4.jpg') ?>" width="570" height="270" alt="Slide 4"></a>
                            
                            <img src="<?php echo URL::to_asset('img/blackhippy6.jpg') ?>" width="570" height="270" alt="Slide 6"></a>
                            
                            <img src="<?php echo URL::to_asset('img/blackhippy7.png') ?>" width="570" height="270" alt="Slide 7"></a>
                        </div>
                        <a href="#" class="prev"><img src="<?php echo URL::to_asset('img/arrow-prev.png') ?>" width="24" height="43" alt="Arrow Prev"></a>
                        <a href="#" class="next"><img src="<?php echo URL::to_asset('img/arrow-next.png') ?>" width="24" height="43" alt="Arrow Next"></a>

                    </div>
                    <img src="<?php echo URL::to_asset('img/example-frame.png') ?>" width="739" height="341" alt="Example Frame" id="frame">
                </div>
                
            </div>
		
        </div><!-- picture div -->
        
        <div class="description">
        	<a href="<?php echo URL::to('blackhippy/results') . '?search-term=kendricklamar' ?>">Kendrick Lamar</a> | 
            <a href="#">ScHoolboy Q</a> |
            <a href="#">Ab-Soul</a> | 
            <a href="#">Jay Rock</a>
      </div>
        <!-- <div class="logo"><a href="index.php" class="prev"><img src="img/logo.jpg" width="125" height="100" alt="logo" /></a></div> -->
        
        
        
    </div><!-- container div -->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true
			});
		});
	</script>
</html>
