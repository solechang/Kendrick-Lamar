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

<link rel="stylesheet" href="<?php echo URL::to_asset('css/styles.css') ?>" />

</head>
<body>

	<div class="container">
    	<div class="title">
        	<h1>Kendrick Lamar</h1>
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
	                        <li >
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



        
        <div class="photos">
            <input type="hidden"  value="kendricklamar">
            <input type="button" id="go" value="Click for pictures">

            <div id="resultz"></div>
                       

        </div>
       

    </div>
   
    <!-- <div class="logo"><a href="index.php" class="prev"><img src="img/logo.jpg" width="125" height="100" alt="logo" /></a></div> -->
        
        
        
    </div><!-- container div -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="<?php echo URL::to_asset('js/main.js') ?>"></script>
<script src="<?php echo URL::to_asset('js/handlebars-1.0.rc.1.js') ?>"></script>



</body>

	<script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
	<script src="<?php echo URL::to_asset('js/slides.min.jquery.js') ?>"></script>
	<script>
        
    </script>
</html>
