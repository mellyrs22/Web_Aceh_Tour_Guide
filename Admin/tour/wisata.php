<!DOCTYPE html>
<?php
 error_reporting(E_ALL ^ E_DEPRECATED);
	include "../koneksi.php";
	$id = $_GET['id_wisata'];

$query = mysql_query("select * from wisata where id_wisata='$id'") or die(mysql_error());

$row = mysql_fetch_array($query);
	?>
<html lang="en-US">

<!-- Mirrored from themextemplates.com/demo/midway/tour/samui-holidays by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 06:02:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Destination| TourAceh</title>	
	
	<!--[if lt IE 9]>
	<script type="text/javascript" src="http://themextemplates.com/demo/midway/wp-content/themes/midway/js/html5.js"></script>
	<![endif]-->
	
	<link rel="alternate" type="application/rss+xml" title="Midway - Responsive Travel Theme &raquo; Feed" href="../feed" />
<link rel="alternate" type="application/rss+xml" title="Midway - Responsive Travel Theme &raquo; Comments Feed" href="../comments/feed" />
<link rel='stylesheet' id='colorbox-css'  href='../wp-content/themes/midway/js/colorbox/colorbox3621.css?ver=3.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-datepicker-css'  href='../wp-content/themes/midway/framework/assets/css/datepicker3621.css?ver=3.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='general-css'  href='../wp-content/themes/midway/style3621.css?ver=3.7.8' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery3e5a.js?ver=1.10.2'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='../wp-includes/js/comment-reply.min3621.js?ver=3.7.8'></script>
<script type='text/javascript' src='../wp-content/themes/midway/js/jquery.hoverIntent.min3621.js?ver=3.7.8'></script>
<script type='text/javascript' src='../wp-content/themes/midway/js/jquery.ui.touchPunch3621.js?ver=3.7.8'></script>
<script type='text/javascript' src='../wp-content/themes/midway/js/colorbox/jquery.colorbox.min3621.js?ver=3.7.8'></script>
<script type='text/javascript' src='../wp-content/themes/midway/js/jquery.placeholder.min3621.js?ver=3.7.8'></script>
<script type='text/javascript' src='../wp-content/themes/midway/js/jquery.themexSlider3621.js?ver=3.7.8'></script>
<script type='text/javascript' src='../wp-content/themes/midway/js/jquery.textPattern3621.js?ver=3.7.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var labels = {"dateFormat":"dd\/mm\/yy","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesMin":["Su","Mo","Tu","We","Th","Fr","Sa"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"firstDay":"1","prevText":"Prev","nextText":"Next"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/themes/midway/js/general3621.js?ver=3.7.8'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='Parthenon Temple' href='parthenon-temple.html' />
<meta name="generator" content="WordPress 3.7.8" />
<link rel='canonical' href='samui-holidays.html' />
<link rel='shortlink' href='../index287b.html?p=82' />
<link rel="shortcut icon" href="../wp-content/themes/midway/framework/assets/images/favicon.ico" /><style type="text/css">body, .site-container{}body, input, select, textarea{font-family:Open Sans, Arial, Helvetica, sans-serif;}h1,h2,h3,h4,h5,h6, .button, .header-menu a, .woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce #respond input#submit,.woocommerce #content input.button,.woocommerce-page a.button,.woocommerce-page button.button,.woocommerce-page input.button,.woocommerce-page #respond input#submit,.woocommerce-page #content input.button{font-family:Signika, Arial, Helvetica, sans-serif;}a, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .header-menu ul ul a:hover, .header-menu > div > ul > li.current-menu-item > a,.header-menu > div > ul > li.current-menu-parent > a,.header-menu > div > ul > li.hover > a,.header-menu > div > ul > li:hover > a{color:#FF9000;}input[type="submit"], input[type="button"], .button, .colored-icon, .widget_recent_comments li:before, .ui-slider .ui-slider-range, .tour-itinerary .tour-day-number h5, .testimonials-slider .controls a.current, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce #content input.button.alt:hover, .woocommerce-page a.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce-page #content input.button.alt:hover{background-color:#FF9000;}.header .logo a, .header .header-text h5, .header .social-links span, .header-menu a, .header-menu a span, .site-footer .row, .site-footer a, .header-widgets .widget, .header-widgets .widget a, .header-widgets .section-title h3{color:#FFFFFF;}.header-menu ul ul li, .header-menu > div > ul > li.current-menu-item > a, .header-menu > div > ul > li.current-menu-parent > a, .header-menu > div > ul > li.hover > a, .header-menu > div > ul > li:hover > a{background-color:#FFFFFF;}::-moz-selection{background-color:#FF9000;}::selection{background-color:#FF9000;}</style><script type="text/javascript">
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
				<img src="../wp-content/themes/midway/images/site_bg.jpg" class="fullwidth" alt="" />			</div>
			<!-- background -->
			<div class="row supheader">
				<div class="logo">
					<a href="../index.php" rel="home">
						<h4><i><font face = "elephant"><font color ="white">Aceh Tour Guide</font></font></i></h4>
					</a>
				</div>
				<!-- logo -->
				<div class="social-links">
					<a class="facebook" href="#" target="_blank" title="Facebook"></a><a class="twitter" href="http://twitter.com/themextemplates" target="_blank" title="Twitter"></a><a class="Login" href="../index.php" title="Logout"></a>				</div>
				<!-- social links -->
								<nav class="header-menu">
					<div class="menu"><ul id="menu-main-menu" class="menu"><li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="../index.php">Home</a>

</li>
<li id="menu-item-306" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-306"><a href="../services.php">Events</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="../gallery.html">Gallery</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="../report2.php?offset=0class="active">Report</a>
<ul class="sub-menu">
	<li id="menu-item-274" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-274"><a href="../report2.php?offset=0class="active"">Reservation</a></li>
	<li id="menu-item-275" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-275"><a href="../report.php?offset=0class="active"">Pick_Up</a></li>
	<li id="menu-item-277" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-277"><a href="../report4.php?offset=0class="active"">Comentator</a></li>
	<li id="menu-item-278" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-278"><a href="../report5.php?offset=0class="active"">Gallery</a></li>
		<li id="menu-item-276" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-277"><a href="../report3.php?offset=0class="active"">Destination</a></li>
</ul></li>
</ul></div>				</nav>				
				<div class="clear"></div>
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
								<img src="../Uploads/<?php echo $row[0] ?>" alt="" /></li>
										
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
				<br>
			<?php 
			$result = mysql_query("SELECT  keterangan FROM wisata WHERE id_wisata=$id ");
			while ($row = mysql_fetch_array($result)) {
			?>
			<p><?php echo $row[0] ?></p>
			<?php } ?>
					<br><br><br>
					<a href="../reserv.php"><input type="submit" name="button" id="button" value="Reserv Now" class="btn-info btn style12"/></a></button>
					<a href="../pick-up2.php"><input type="submit" name="button" id="button" value="Pick-Up Where ?" class="btn-info btn style12"/></a></a></button>
	</div>
</div>
</div>
</div><div class="hidden">
		<!-- booking form -->
		
		</section>
		<!-- content -->
		<footer class="container site-footer">		
			<div class="row">
				<div class="copyright">
					TourAtjeh &copy; 2015				</div>
						</div>
		</footer>
		<!-- footer -->
		<div class="substrate bottom-substrate">
			<img src="../wp-content/themes/midway/images/site_bg.jpg" class="fullwidth" alt="" />		</div>
	</div>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/jquery.ui.core.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/jquery.ui.widget.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/jquery.ui.mouse.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/jquery.ui.slider.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/jquery.ui.datepicker.mindb08.js?ver=1.10.3'></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlREzkyjWDuWsrjzeiIzmezIIWAQDX6oTyPr5V3UrofhkWZmLJYSaB8MUoyydmzNrjbOIEi5uDmbGFhgcNQUkRojBLNLBoXl6wfR9LNXiSHaxcrEU%2fkOEyeg6l3%2bW0PnPjM%2bj0WqBV5afkFKujTKBNaM%2fF4evYXj%2byFbXphSx%2fMWVYqOZNcLcg6r%2b9yOErC3SacfacZkakDwR%2fqJlawTMRB66%2fyrR5JDbuLo8pD8ppct5raMTbDJTbrSb2SP%2b3uU%2ba55geVug7nrfSmGTQa1l5Pp2gNitKV070%2fMa3tuUO5zCVkvvWs0oIhz8iVsTes%2bxLAcTqkwMlTX7gyu25JiLmSpBapk%2fEAC2j4pKErEgWPidS9RmeLQwdUwM1BA%2bi6z96em7cwT%2bIICW%2fZJDuAjceJhSkqS7sNOkT8kMR9GnqW6yXHK%2fJnLaNdI2boSPSy%2bRQKjCUKsMMkSSs8Iv4Vwk%2bBJVB9QqeHyrATH4s99OsWSEDvvQCWDDdRv3R4r0x4RdLI" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from themextemplates.com/demo/midway/tour/samui-holidays by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 06:03:53 GMT -->
</html>