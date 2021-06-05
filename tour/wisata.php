
<!DOCTYPE html>
<html lang="en-US">

<?php
 error_reporting(E_ALL ^ E_DEPRECATED);
	include "../koneksi.php";
	$id = $_GET['id_wisata'];

$query = mysql_query("select * from wisata where id_wisata='$id'") or die(mysql_error());

$row = mysql_fetch_array($query);
	?>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Destination| TourAceh</title>		
	
	<!--[if lt IE 9]>
	<script type="text/javascript" src="https://demo.themex.co/midway/wp-content/themes/midway/js/html5.js"></script>
	<![endif]-->
	
	<link rel="alternate" type="application/rss+xml" title="Midway - Responsive Travel Theme &raquo; Feed" href="https://demo.themex.co/midway/feed" />
<link rel="alternate" type="application/rss+xml" title="Midway - Responsive Travel Theme &raquo; Comments Feed" href="https://demo.themex.co/midway/comments/feed" />
<link rel='stylesheet' id='colorbox-css'  href='https://demo.themex.co/midway/wp-content/themes/midway/js/colorbox/colorbox.css?ver=4.0.22' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-datepicker-css'  href='https://demo.themex.co/midway/wp-content/themes/midway/framework/assets/css/datepicker.css?ver=4.0.22' type='text/css' media='all' />
<link rel='stylesheet' id='general-css'  href='https://demo.themex.co/midway/wp-content/themes/midway/style.css?ver=4.0.22' type='text/css' media='all' />
<script type='text/javascript' src='https://demo.themex.co/midway/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-content/themes/midway/js/jquery.hoverIntent.min.js?ver=4.0.22'></script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-content/themes/midway/js/jquery.ui.touchPunch.js?ver=4.0.22'></script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-content/themes/midway/js/colorbox/jquery.colorbox.min.js?ver=4.0.22'></script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-content/themes/midway/js/jquery.placeholder.min.js?ver=4.0.22'></script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-content/themes/midway/js/jquery.themexSlider.js?ver=4.0.22'></script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-content/themes/midway/js/jquery.textPattern.js?ver=4.0.22'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var labels = {"dateFormat":"dd\/mm\/yy","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesMin":["Su","Mo","Tu","We","Th","Fr","Sa"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"firstDay":"1","prevText":"Prev","nextText":"Next"};
/* ]]> */
</script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-content/themes/midway/js/general.js?ver=4.0.22'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.themex.co/midway/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://demo.themex.co/midway/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='Parthenon Temple' href='https://demo.themex.co/midway/tour/parthenon-temple' />
<meta name="generator" content="WordPress 4.0.22" />
<link rel='canonical' href='https://demo.themex.co/midway/tour/samui-holidays' />
<link rel='shortlink' href='https://demo.themex.co/midway/?p=82' />
<link rel="shortcut icon" href="https://demo.themex.co/midway/wp-content/themes/midway/framework/assets/images/favicon.ico" /><style type="text/css">body, .site-container{}body, input, select, textarea{font-family:Open Sans, Arial, Helvetica, sans-serif;}h1,h2,h3,h4,h5,h6, .button, .header-menu a, .woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce #respond input#submit,.woocommerce #content input.button,.woocommerce-page a.button,.woocommerce-page button.button,.woocommerce-page input.button,.woocommerce-page #respond input#submit,.woocommerce-page #content input.button{font-family:Signika, Arial, Helvetica, sans-serif;}a, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .header-menu ul ul a:hover, .header-menu > div > ul > li.current-menu-item > a,.header-menu > div > ul > li.current-menu-parent > a,.header-menu > div > ul > li.hover > a,.header-menu > div > ul > li:hover > a{color:#FF9000;}input[type="submit"], input[type="button"], .button, .colored-icon, .widget_recent_comments li:before, .ui-slider .ui-slider-range, .tour-itinerary .tour-day-number h5, .testimonials-slider .controls a.current, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce #content input.button.alt:hover, .woocommerce-page a.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce-page #content input.button.alt:hover{background-color:#FF9000;}.header .logo a, .header .header-text h5, .header .social-links span, .header-menu a, .header-menu a span, .site-footer .row, .site-footer a, .header-widgets .widget, .header-widgets .widget a, .header-widgets .section-title h3{color:#FFFFFF;}.header-menu ul ul li, .header-menu > div > ul > li.current-menu-item > a, .header-menu > div > ul > li.current-menu-parent > a, .header-menu > div > ul > li.hover > a, .header-menu > div > ul > li:hover > a{background-color:#FFFFFF;}::-moz-selection{background-color:#FF9000;}::selection{background-color:#FF9000;}</style><script type="text/javascript">
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
<body class="single single-tour postid-82">
	<div class="container site-container">
		<header class="container site-header">
			<div class="substrate top-substrate">
				<img src="https://demo.themex.co/midway/wp-content/themes/midway/images/site_bg.jpg" class="fullwidth" alt="" />			</div>
			<!-- background -->
			<div class="row supheader">
				<div class="logo">
					<a href="https://demo.themex.co/midway" rel="home">
						<h4><i><font face = "elephant"><font color ="white">Aceh Tour Guide</font></font></i></h4>
					</a>
				</div>
				<!-- logo -->
				<div class="social-links">
					<a class="facebook" href="#" target="_blank" title="Facebook"></a><a class="twitter" href="http://twitter.com/themextemplates" target="_blank" title="Twitter"></a><a class="vimeo" href="#" target="_blank" title="Vimeo"></a>				</div>
				<!-- social links -->
						<!-- social links -->
								<nav class="header-menu">
					<div class="menu"><ul id="menu-main-menu" class="menu"><li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-97"><a href="../index.php">Home</a>

</li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="../galeri.php">Gallery</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="../blog.php">Blogs</a></li>

</ul></div>				</nav>				
				
				<!--/ select menu-->	
				<!--/ select menu-->						
			</div>
			<!-- supheader -->
						<div class="block-background header-background"></div>
		</header>
		<!-- header -->
		<section class="container site-content">
			<div class="row"><div class="full-tour clearfix">	
	<div class="sixcol column">		
		<div class="content-slider-container tour-slider-container">
						<div class="content-slider tour-slider">
								<ul>
											<?php 
		$result = mysql_query("SELECT  `gambar` FROM  `wisata` WHERE id_wisata='$id' ");
		while ($row = mysql_fetch_array($result)) {
		?>
								<li><input type="hidden" id="id_wisata" name="id_wisata" value= "<?php echo $row[0] ?>" />
								<img src="../Admin/Uploads/<?php echo $row[0] ?>" alt="" /></li>
										
		<?php } ?>
													</ul>
				<div class="arrow arrow-left content-slider-arrow"></div>
				<div class="arrow arrow-right content-slider-arrow"></div>
								<input type="hidden" class="slider-speed" value="400" />
				<input type="hidden" class="slider-pause" value="0" />
			</div>
			<div class="block-background layer-1"></div>
			<div class="block-background layer-2"></div>
					</div>		
	</div>
	<div class="sixcol column last">
		<div class="section-title">
					
			<?php 
			$result = mysql_query("SELECT  `nama_wisata` FROM  `wisata` WHERE id_wisata='$id' ");
			while ($row = mysql_fetch_array($result)) {
			?>		
						<h1><?php echo $row[0] ?></h1>
			<?php } ?>
				</div>
		<ul class="tour-meta">
			<ul class="tour-meta">
			<?php 
			$result = mysql_query("SELECT  destinasi FROM wisata WHERE id_wisata=$id ");
			while ($row = mysql_fetch_array($result)) {
			?>
						<li><div class="colored-icon icon-2"></div><strong>Destination: &nbsp <?php echo $row[0] ?> </a></li
			><?php } ?>	
			<?php 
			$result = mysql_query("SELECT  durasi FROM wisata WHERE id_wisata=$id ");
			while ($row = mysql_fetch_array($result)) {
			?>
						<li><div class="colored-icon icon-1"><span></span></div><strong>Duration:</strong> &nbsp <?php echo $row[0] ?></li>
			<?php } ?>								
		</ul>
				</ul>
					<?php 
			$result = mysql_query("SELECT  keterangan FROM wisata WHERE id_wisata=$id ");
			while ($row = mysql_fetch_array($result)) {
			?>
			<p><?php echo $row[0] ?></p>
			<?php } ?>	
			<a href="#comment-form" data-id="82" data-title="Comment ?" class="button small colorbox inline"><span>Comment ?</span></a>

				</footer>
	</div>
</div><div class="hidden">
	<!-- booking form -->
	<div class="hidden">
	<div class="booking-form popup-form" id="comment-form">
		<div class="section-title popup-title"><h4></h4></div>
		<form action="https://demo.themex.co/midway/wp-admin/admin-ajax.php" method="POST" class="formatted-form ajax-form">			
			<p></p><div class="message"></div><div class="sixcol column "><div class="field-container">
			<input type="text" id="full-name" name="full-name" value="" placeholder="Full Name"  /></div></div><div class="sixcol column last"><div class="clear"></div><div class="field-container">
			<input type="text" id="email-address" name="email-address" value="" placeholder="Email Address"  /></div></div><div class="sixcol column "><div class="field-container">
			<input type="text" id="arrival-date" name="arrival-date" value="" class="date-field" placeholder="Date"  /></div></div><div class="sixcol column "><div class="field-container">
			<textarea id="question" name="question" placeholder="Your Comment" ></textarea>
			</div></div><div class="sixcol column last"><div class="clear"></div><div class="field-container">
			</div></div>			
			<input type="hidden" name="id" value="" class="popup-id" />
			<input type="hidden" name="slug" value="booking" />
			<input type="hidden" class="action" value="themex_form_submit" />
			<a class="submit-button button" href="#">Submit</a>
		</form>
	</div>

	<!-- question form -->

		<!-- content -->
		<footer class="container site-footer">		
			<div class="row">
				<div class="copyright">
					Midway Theme &copy; 2018				</div>
				<div class="menu"><ul id="menu-footer-menu" class="menu"><li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"><a href="https://demo.themex.co/midway/">Home</a></li>
<li id="menu-item-307" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-307"><a href="https://demo.themex.co/midway/services">Services</a></li>
<li id="menu-item-217" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-217"><a href="https://demo.themex.co/midway/alltours">Tours</a></li>
<li id="menu-item-218" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-218"><a href="https://demo.themex.co/midway/blog">Blog</a></li>
<li id="menu-item-216" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216"><a href="https://demo.themex.co/midway/gallery">Gallery</a></li>
<li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99"><a href="https://demo.themex.co/midway/contact">Contact</a></li>
</ul></div>			</div>
		</footer>
		<!-- footer -->
		<div class="substrate bottom-substrate">
			<img src="https://demo.themex.co/midway/wp-content/themes/midway/images/site_bg.jpg" class="fullwidth" alt="" />		</div>
	</div>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-includes/js/comment-reply.min.js?ver=4.0.22'></script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-includes/js/jquery/ui/jquery.ui.core.min.js?ver=1.10.4'></script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-includes/js/jquery/ui/jquery.ui.widget.min.js?ver=1.10.4'></script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-includes/js/jquery/ui/jquery.ui.mouse.min.js?ver=1.10.4'></script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-includes/js/jquery/ui/jquery.ui.slider.min.js?ver=1.10.4'></script>
<script type='text/javascript' src='https://demo.themex.co/midway/wp-includes/js/jquery/ui/jquery.ui.datepicker.min.js?ver=1.10.4'></script>
</body>
</html>