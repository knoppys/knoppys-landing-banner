<?php
/*
Plugin Name:       Knoppys Landing Banner
Plugin URI:        https://github.com/knoppys/
Description:       A simple plugin for addding a cool landing section for the home page
Version:           1
Author:            Knoppys Digital Limited
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/knoppys/
GitHub Branch:     master
*/

add_shortcode( 'landingbanner' , 'landingbanner' );
function landingbanner(){ ?>

	<style type="text/css">
.landingbanner {
position: fixed;
background: #000;
width: 100%;
left: 0;
right: 0;
top: 0;
bottom: 0;
display: block;
height: 100%;
z-index: 1000;
}
.landing-content {
display: block;
vertical-align: middle;
width: 100%;
text-align: center;
padding: 10% 0;
}
.landing-content h1 {
font-size: 55px;
letter-spacing: 3px;
}

.landing-content h2 {
font-size: 45px;
letter-spacing: 3px;
}
.landing-content * {
background: -webkit-linear-gradient(#fefaca, #c5942f);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
font-weight: normal;
}
.knp-touch {
width: 72px;
padding: 30px 0;
cursor: pointer;
}
@media all and (max-width:768px){
.landing-content {
display: block;
vertical-align: middle;
width: 100%;
text-align: center;
padding: 30% 0;
}
.landing-content img {
width: 300px;
}
.knp-touch {
max-width: 66px;
}
.landingbanner {
padding: 20px;
}
.header-widgets .widget {
width: 49%;
display: inline-block;
}
.whitetext h1 {
    font-size: 4rem;
}
}
@media all and (max-width:600px){


.landing-content {
display: block;
vertical-align: middle;
width: 100%;
text-align: center;
padding: 30% 0;
}
.landing-content h1 {
font-size: 2em;
}

.landing-content h2 {
font-size: 1.5em;
}

img.knp-touch {
width: 37px;
}

.landing-content img {
max-width: 200px;
}
}
	</style>
	<div class="landingbanner" style="background: url(<?php echo get_site_url(); ?>/wp-content/uploads/2017/09/lionbkg.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
		<div class="landing-content">
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/09/logo-650.png">
			<h1>blackthorn safaris</h1>
			<h2>conservation through hunting</h2>
			<img class="knp-touch" src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/09/touch.png">
		</div>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('.knp-touch').on('click', function(){
				jQuery('.landingbanner').slideUp();
				jQuery("html, body").animate({ scrollTop: 0 }, "slow");
  				return false;
			})
		})
	</script>

<?php } ?>