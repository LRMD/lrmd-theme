<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> dir="<?php echo get_bloginfo('text_direction'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index, follow" />
    <meta name="Distribution" content="Global" />
    <meta name="Revisit-After" content="10 Days" />
    <meta name="keywords" content="lietuva, radijas, mėgėjai, draugija, bangos, sklidimas, radistas, racija, ryšys, lrmd" />
    <meta name="description" content="<?php echo get_bloginfo('name'); ?> - LRMD" />

    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicons/manifest.json" />
    <link rel="mask-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicons/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicons/favicon.ico" />
    <meta name="msapplication-config" content="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicons/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />

    <title><?php wp_title('|', TRUE, 'right'); ?>LRMD</title>

    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />

    <!--[if lt IE 7]>
       <link href="ie_style.css" rel="stylesheet" type="text/css" />
       <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ie_png.js"></script>
       <script type="text/javascript">
           ie_png.fix('h2, .main-bg, .png, .logo img, .box .left-top-corner, .box .right-top-corner, .box .left-bot-corner, .box .right-bot-corner, .box .border-top, .box .border-bot, .box .left-shad, .box .right-shad, .slider-wrap .label, .anythingSlider .arrow, .nav li a, .navi li a');
       </script>
    <![endif]-->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/script.js"></script>
    <script type='text/javascript'>
      function pastas(adresas) {
        domenas = 'lrmd';
        cc = 'lt';
        document.write('<a href="mail' + 'to' + ':' + adresas + '@' + domenas + '.' + cc + '">' + adresas + '@' + domenas + '.' + cc + '</a>');
      }
    </script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="main-bg">
      <div id="main">
        <div id="header">
          <div class="logo">
            <a href="<?php echo get_home_url(); ?>">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.png" alt="" />
            </a>
          </div>
          <div class="lang">
            <?php $languages = icl_get_languages('skip_missing=0&orderby=code'); ?>
            <?php foreach ($languages as $l): ?>
              <?php if (!$l['active']): ?>
                <a href="<?php echo $l['url']; ?>">
                  <img src="<?php echo $l['country_flag_url']; ?>" alt="<?php echo $l['language_code']; ?>" height="15" width="22" />
                </a>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <div class="social-services">
            <?php echo get_bloginfo('name'); ?>
          </div>
          <div class="clear"></div>
        </div>
        <div id="content">