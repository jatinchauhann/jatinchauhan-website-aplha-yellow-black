<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Home</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=1.0.7" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.47" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1490622333" rel="stylesheet" type="text/css" />
	<link href="css/1.css?ts=1490622333" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance0" class="wb_element"><ul class="hmenu"></ul><div class="clearfix"></div></div><div id="wb_element_instance1" class="wb_element wb_element_picture"><img alt="gallery/clock" src="gallery_gen//2e0735645625471706fdb7957cda376a_80x80.png"></div><div id="wb_element_instance2" class="wb_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle">Our website is coming soon</h5></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance3" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2">Contact:</h2>
</div><div id="wb_element_instance4" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><span style="font-size: 26px;">Sorry for the delay!</span></p>
</div><div id="wb_element_instance5" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong>Address:</strong></p>

<p class="wb-stl-normal"><span style="background-color: transparent;">Jatin Chauhan</span></p>

<p class="wb-stl-normal">Chandigarh University</p>

<p class="wb-stl-normal">Mohali</p>

<p class="wb-stl-normal">+919878258053</p>

<p class="wb-stl-normal">jatinchauhan.wordpress@gmail.com</p>
</div><div id="wb_element_instance6" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(1);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance6");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance6").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 80px;">
	
<div id="wb_element_instance7" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(98);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>
