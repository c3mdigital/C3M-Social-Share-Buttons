<?php
/*
Plugin Name: C3M Social Share Buttons
Plugin URI: http://c3mdigital.com/
Description: Adds Facebook and Twitter Share Buttons using template tags
Version: 1.0
Author: Chris Olbekson
Author URI: http://c3mdigital.com
License: UnLicense http://unlicense.org/
*/

// Social Share Buttons by Chris Olbekson 

add_action( 'wp_footer', 'c3m_share_this_scripts' );	
add_filter( 'the_content', 'c3m_social_share' );
add_filter( 'the_excerpt', 'c3m_social_share' );
//This adds the Facebook and Twitter js to your foooter hooking into wp_footer
function c3m_share_this_scripts() {

		echo '<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>';
		echo  '<div id="fb-root"></div>';
		echo	'				<script>';
		echo		"				window.fbAsyncInit = function() {;
						FB.init({appId: '120167518045812', status: true, cookie: true,
								xfbml: true});
								};";
		echo		"				  (function() {
									var e = document.createElement('script'); e.async = true;
									e.src = document.location.protocol +
									  '//connect.facebook.net/en_US/all.js';
									document.getElementById('fb-root').appendChild(e);
								  }());
								</script>";			  		
}

//This renders the buttons after each post in the content and the excerpt			
function c3m_social_share() {
	
				echo '<div class="social-share" style="margin-bottom:50px;width:500px;">
					<ul class="share-buttons">
<li style="float:left;margin-right:25px;"><a href="http://twitter.com/share" class="twitter-share-button" data-url="'; echo the_permalink(); echo '" data-text="'; echo the_title(); echo '" data-count="horizontal" data-via="XXX-Replace-With-Twitter-Username-XXX">Tweet</a></li>
					<li style="float:left;width:300px"><fb:like href="'; echo the_permalink(); echo'" layout="standard" action="like" font="lucida grande"></fb:like></li>';
					
				
				echo '</ul>
					 </div><div class="clear"> </div>'; 
					
					}
					
		
?>
