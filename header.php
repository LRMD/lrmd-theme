<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Language" content="lt" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta http-equiv="cache-control" content="no-cache">
	<meta name="robots" content="index, follow" />
	<meta name="Distribution" content="Global" />
	<meta name="Revisit-After" content="10 Days" />
	<meta name="keywords" content=" lrmd, lietuvos radijas, radijo mėgėjų draugija, radistai" />
	<meta name="description" content="<?php echo get_bloginfo( $show, 'display' ); ?> - LRMD" />

    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

	<title><?php echo get_bloginfo( $show, 'display' ); ?> - LRMD</title>

	<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />
	<!--[if lt IE 7]>
		<link href="ie_style.css" rel="stylesheet" type="text/css" />
	   <script type="text/javascript" src="/img/ie_png.js"></script>
	   <script type="text/javascript">
	       ie_png.fix('h2, .main-bg, .png, .logo img, .box .left-top-corner, .box .right-top-corner, .box .left-bot-corner, .box .right-bot-corner, .box .border-top, .box .border-bot, .box .left-shad, .box .right-shad, .slider-wrap .label, .anythingSlider .arrow, .nav li a, .navi li a');
	   </script>
	<![endif]-->
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-9264286-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	
	<style type="text/css">
		form.simple input {
			margin: 5px 0 11px -5px;
			width: 525px;
			padding: 6px;
			border: 1px solid #DCAD00;
			color: #4C2514;
			background: #F5F0E7;
		}
		form.simple .sub input {
			margin: 5px 0 11px -5px;
			width: 475px;
			padding: 6px;
			border: 1px solid #DCAD00;
			color: #4C2514;
			background: #F5F0E7;
		}
		form.simple p {
			margin: 0 0 0 5px;
			line-height: normal;
		}

		form.simple p.sub {
			margin: 0 0 0 55px;
			line-height: normal;
		}

		.simple .submit {
			width: 150px;
			border: 1px solid #DCAD00;
			color: #4C2514;
			background: #F5F0E7;
			margin: 3px 0 11px 0px;
			padding: 2px;
			font-weight: normal;
		}
	</style>
	
	
	<script language="JavaScript" type='text/javascript'>
		<!--
		function pastas(adresas) { domenas = 'lrmd'; cc = 'lt'; document.write('<a href="mail' + 'to' + ':' + adresas + '@' + domenas + '.' + cc + '">'+ adresas + '@' + domenas + '.' + cc + '</a>'); }
		-->
	</script>
	<?php wp_head(); ?>
</head>

<body>
   <div class="main-bg">
         <div id="main">
            <div id="header">
               <div class="logo"><a href="<?php echo get_home_url(); ?>"><img alt="" src="/img/logo.png" /></a></div>
               <div class="lang"><?php 
function language_selector_flags(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){
            if(!$l['active']) { echo '<a href="'.$l['url'].'">';
            echo '<img src="'.$l['country_flag_url'].'" height="15" alt="'.$l['language_code'].'" width="22" />';
             echo '</a>'; }
        }
    }
}

language_selector_flags()

?>

		</div>
               <div class="social-services"><?php echo get_bloginfo( $show, 'display' ); ?></div>
            </div>
            
            <div id="content">