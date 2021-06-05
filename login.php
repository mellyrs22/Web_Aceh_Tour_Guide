
<?php
 error_reporting(E_ALL ^ E_DEPRECATED);
	include "koneksi.php";
	?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from themextemplates.com/demo/midway/gallery by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 06:02:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Admin| TourAceh</title>	
	
	<!--[if lt IE 9]>
	<script type="text/javascript" src="http://themextemplates.com/demo/midway/wp-content/themes/midway/js/html5.js"></script>
	<![endif]-->
	
	<link rel="alternate" type="application/rss+xml" title="Midway - Responsive Travel Theme &raquo; Feed" href="feed" />
<link rel="alternate" type="application/rss+xml" title="Midway - Responsive Travel Theme &raquo; Comments Feed" href="comments/feed" />
<link rel="alternate" type="application/rss+xml" title="Midway - Responsive Travel Theme &raquo; Gallery Comments Feed" href="gallery/feed.html" />
<link rel='stylesheet' id='colorbox-css'  href='wp-content/themes/midway/js/colorbox/colorbox3621.css?ver=3.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='general-css'  href='wp-content/themes/midway/style3621.css?ver=3.7.8' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery3e5a.js?ver=1.10.2'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='wp-includes/js/comment-reply.min3621.js?ver=3.7.8'></script>
<script type='text/javascript' src='wp-content/themes/midway/js/jquery.hoverIntent.min3621.js?ver=3.7.8'></script>
<script type='text/javascript' src='wp-content/themes/midway/js/jquery.ui.touchPunch3621.js?ver=3.7.8'></script>
<script type='text/javascript' src='wp-content/themes/midway/js/colorbox/jquery.colorbox.min3621.js?ver=3.7.8'></script>
<script type='text/javascript' src='wp-content/themes/midway/js/jquery.placeholder.min3621.js?ver=3.7.8'></script>
<script type='text/javascript' src='wp-content/themes/midway/js/jquery.themexSlider3621.js?ver=3.7.8'></script>
<script type='text/javascript' src='wp-content/themes/midway/js/jquery.textPattern3621.js?ver=3.7.8'></script>

<script type='text/javascript' src='wp-content/themes/midway/js/general3621.js?ver=3.7.8'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='Tours' href='alltours' />
<link rel='next' title='Blog' href='blog.html' />
<meta name="generator" content="WordPress 3.7.8" />
<link rel='canonical' href='gallery.html' />
<link rel='shortlink' href='index0a10.html?p=115' />
<link rel="shortcut icon" href="wp-content/themes/midway/framework/assets/images/favicon.ico" /><style type="text/css">body, .site-container{}body, input, select, textarea{font-family:Open Sans, Arial, Helvetica, sans-serif;}h1,h2,h3,h4,h5,h6, .button, .header-menu a, .woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce #respond input#submit,.woocommerce #content input.button,.woocommerce-page a.button,.woocommerce-page button.button,.woocommerce-page input.button,.woocommerce-page #respond input#submit,.woocommerce-page #content input.button{font-family:Signika, Arial, Helvetica, sans-serif;}a, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .header-menu ul ul a:hover, .header-menu > div > ul > li.current-menu-item > a,.header-menu > div > ul > li.current-menu-parent > a,.header-menu > div > ul > li.hover > a,.header-menu > div > ul > li:hover > a{color:#FF9000;}input[type="submit"], input[type="button"], .button, .colored-icon, .widget_recent_comments li:before, .ui-slider .ui-slider-range, .tour-itinerary .tour-day-number h5, .testimonials-slider .controls a.current, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce #content input.button.alt:hover, .woocommerce-page a.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce-page #content input.button.alt:hover{background-color:#FF9000;}.header .logo a, .header .header-text h5, .header .social-links span, .header-menu a, .header-menu a span, .site-footer .row, .site-footer a, .header-widgets .widget, .header-widgets .widget a, .header-widgets .section-title h3{color:#FFFFFF;}.header-menu ul ul li, .header-menu > div > ul > li.current-menu-item > a, .header-menu > div > ul > li.current-menu-parent > a, .header-menu > div > ul > li.hover > a, .header-menu > div > ul > li:hover > a{background-color:#FFFFFF;}::-moz-selection{background-color:#FF9000;}::selection{background-color:#FF9000;}</style><script type="text/javascript">
			WebFontConfig = {google: { families: [ "Signika:400,600","Open Sans:400,400italic,600" ] } };
			(function() {
				var wf = document.createElement("script");
				wf.src = ("https:" == document.location.protocol ? "https" : "http") + "://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js";
				wf.type = "text/javascript";
				wf.async = "true";
				var s = document.getElementsByTagName("script")[0];
				s.parentNode.insertBefore(wf, s);
			})();
			</script>	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head>
<body class="page page-id-115 page-template page-template-template-galleries-php">
	<div class="container site-container">
		<header class="container site-header">
			<div class="substrate top-substrate">
				<img src="wp-content/themes/midway/images/site_bg.jpg" class="fullwidth" alt="" />			</div>
			<!-- background -->
			<div class="row supheader">
				<div class="logo">
					<a href="index.php" rel="home">
						<h4><i><font face = "elephant"><font color ="white">Aceh Tour Guide</font></font></i></h4>
					</a>
				</div>
				<!-- logo -->
				<div class="social-links">
					<a class="facebook" href="#" target="_blank" title="Facebook"></a><a class="twitter" href="http://twitter.com/themextemplates" target="_blank" title="Twitter"></a><a class="vimeo" href="login.php" target="_blank" title="login"></a>				</div>
				<!-- social links -->
								<nav class="header-menu">
					<div class="menu"><ul id="menu-main-menu" class="menu"><li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-97"><a href="index.php">Home</a>

</li>
<li id="menu-item-306" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-306"><a href="services.php">Events</a></li>

</li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="galeri.php">Gallery</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="blog.php">Blog</a></li>
</ul></div>				</nav>				
				
				<!--/ select menu-->						
			</div>
			<!-- supheader -->
						<div class="block-background header-background"></div>
		</header>
		<!-- header -->
		<section class="container site-content">
			<div class="row"><div class="eightcol column"><BR>
			<strong> <marquee direction="Right">
<font color="GREEN" face="Kristen ITC" size="4" > >> &nbsp &nbsp Login For Admin! &nbsp &nbsp<<</font>
</marquee></strong><br><br><br>
<form method="POST" action="action_login.php" accept-charset="UTF-8">
	<table align="center" border="0">
		<tr class="style11">	
	  <td valign="top"><span class="style11">
			  <label>Username&nbsp;</label>
			</span></td>
			<td><input class="span3" placeholder="Username" type="text" name="username" required></td>
		</tr>
		<tr class="style11">	
	  <td valign="top"><span class="style11">
			  <label>Password&nbsp;</label>
			</span></td>
			<td><input class="span3" placeholder="Password" type="password" name="password" required></td>
		</tr>
		<tr>
			<td colspan="3" align="right"><button type="reset" class="btn-warning btn style12">Reset</button>
			<colspan="3" align="right"><button type="submit" class="btn-info btn style12">Login</button></td>
		</tr>
	</table>
    <p>&nbsp;</p>
  </form>
       <br><br><br><br><br></div></div>
		</section>
		<!-- content -->
		<footer class="container site-footer">		
			<div class="row">
				<div class="copyright">
					TourAtjeh &copy; 2015				</div>
				<d</div>
		</footer>
		<!-- footer -->
		<div class="substrate bottom-substrate">
			<img src="wp-content/themes/midway/images/site_bg.jpg" class="fullwidth" alt="" />		</div>
	</div>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.core.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.widget.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.mouse.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.slider.mindb08.js?ver=1.10.3'></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlREzkyjWDuWsrDjbRekbk2Z97ps5E2GtFu97QYckWQGmgntjYatlFMWJ6DLw2RkcAt5sb5LChhTnuT5T5Xtjy1YbZzD7vKcya43qnRBMNjphtdyxBjD1GaZUZjsYVQmTBVa7x73hTuiwjdcDqMHnkBZAKvMa5jbOXZQ4bfcQ34yY4q0AMIzox1QYLE5%2b%2f9Ybw69cse4N4E7ioHPXMnUF8%2bRBYHQz9T58rYuK6cq2K43NTbs2RbuI99HOPo8c8G5Ep7SC9cOqQKLl6QTW8U%2fLP1U8NJ9Tr6aXJUKOyprO15qtEbcZtLVKF0hTzP98YWcKn%2bmp8C%2fPbP1szPOisPNY7UPNUfL%2fp33VxWby7Qjf1a%2be8NRuZtOVC%2fCc7%2bSy4HNV%2b7uLLjaiPht83xBZi%2f1cWr85Xu2noSCn4C5t0IO2Lum7C0eSFB8EJCx%2f8EBg5oU%2bP4zGyb%2bGuwWlb5qWqgxsJUkXQ%2bTiM%2fQdUZT7FSfl%2bCLlM%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from themextemplates.com/demo/midway/gallery by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 06:02:59 GMT -->
</html>