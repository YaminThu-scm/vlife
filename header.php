<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vlife-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <link rel="canonical" href="●●●">
  <title><?php wp_title(' | ', true, 'right'); ?>株式会社VALUABLE LIFE コーポレートサイト
</title>
  <?php /* OGP settings ---------------------------------- */ ?>
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://valuable-life.co.jp/">
  <meta property="og:site_name" content="ValuableLife">
  <meta property="og:title" content="株式会社VALUABLE LIFE コーポレートサイト">
  <meta property="og:description" content="一度きりの人生、価値ある人生に。VALUABLE LIFEは「相手の立場になって深く考える」をモットーにサービスを提供します。「少子高齢化社会に対して適した人材の紹介をすることで人々の生活の質を向上し、社会に貢献し続ける」事で存在価値を見出します。">
  <meta property="og:image" content="<?php print get_template_directory_uri(); ?>/assets/img/ogp.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <!-- favicon, touch-icon -->
  <link rel="shortcut icon" href="<?php print get_template_directory_uri(); ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php print get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php print get_template_directory_uri(); ?>/assets/img/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php print get_template_directory_uri(); ?>/assets/img/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php print get_template_directory_uri(); ?>/assets/img/apple-touch-icon-152x152.png">
  <!-- css -->
  <link rel="stylesheet" href="<?php print get_template_directory_uri(); ?>/assets/css/share.css">
  <!-- js -->
  <script src="<?php print get_template_directory_uri(); ?>/assets/js/library/jquery.js"></script>
  <!-- Web Font -->
  <script>
    (function(d) {
      var config = {
        kitId: 'ouh6knv',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- ===============  header ============== -->
  <header class="header">
    <div class="header-theme-pc jsHeadPos">
      <div class="h-left">
        <div class="logo">
          <a href="<?php bloginfo('url'); ?>/">
            <img
              src="<?php print get_template_directory_uri(); ?>/assets/img/shared/h_logo.png"
              alt="みんな違ってみんないい"
              width="302"
              height="50"
              loading="lazy">
          </a>
        </div>
      </div>
      <div class="h-right">
        <div class="h-btn-blk">
          <a href="<?php bloginfo('url'); ?>/recruiter_contact/" class="recruit-btn btn-line"><span class="hover-line">採用ご担当者様お問い合わせ</span>
          <span class="h-btn-arrow"></span>
          </a>
          <a href="<?php bloginfo('url'); ?>/worker_contact/" class="inquiry-btn btn-line"><span class="hover-line">求職者様お問い合わせ</span><span class="h-btn-arrow"></span></a>
        </div>
        <nav>
          <ul class="gnavIn clearfix">
            <li class="menu-link">
              <a href="<?php bloginfo('url'); ?>/aboutus/">私たちについて</a>
            </li>
            <li class="menu-link">
              <a href="<?php bloginfo('url'); ?>/#service">事業内容</a>
            </li>
            <li class="menu-link">
              <a href="<?php bloginfo('url'); ?>/topmessage/">トップメッセージ</a>
            </li>
            <li class="menu-link">
              <a href="<?php bloginfo('url'); ?>/company/">会社概要</a>
            </li>
            <li class="menu-link">
              <a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a>
            </li>
            <li class="menu-link">
              <a href="<?php echo site_url(); ?>/news/">お知らせ</a> 
            </li>
          </ul>
          <!-- ./ gnavIn -->
        </nav>
      </div>
    </div>
    <div class="header-theme-sp jsHeadNav">
      <div class="header-tile">
        <div class="site-logo">
          <a href="<?php bloginfo('url'); ?>/">
            <img
              src="<?php print get_template_directory_uri(); ?>/assets/img/shared/h_logo.png"
              alt="みんな違ってみんないい"
              width="161"
              height="26"
              loading="lazy">
          </a>
        </div>
        <div class="menu-trigger jsSlideMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </header>
  <div class="header-slide jsSlideMenuOpen s-sp">
    <div class="header-slide-inner">
      <div class="header-slide-in">
        <div class="site-logo site-logo-menu">
          <a href="<?php bloginfo('url'); ?>/">
            <img
              src="<?php print get_template_directory_uri(); ?>/assets/img/shared/h_logo.png"
              alt="みんな違ってみんないい"
              width="161"
              height="26"
              loading="lazy">
          </a>
        </div>
        <div class="menu-trigger jsSlideMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
          
      <ul class="menu-nav">
        <li><a href="<?php bloginfo('url'); ?>/aboutus/" class="menu-link">私たちについて</a></li>
        <li><a href="<?php bloginfo('url'); ?>/#service" class="menu-link">事業内容</a></li>
        <li><a href="<?php bloginfo('url'); ?>/topmessage/" class="menu-link">トップメッセージ</a></li>
        <li><a href="<?php bloginfo('url'); ?>/company/" class="menu-link">会社概要</a></li>
        <li><a href="<?php bloginfo('url'); ?>/recruit/" class="menu-link">採用情報</a></li>
        <li><a href="<?php bloginfo('url'); ?>/news/" class="menu-link">お知らせ</a></li>
      </ul>

      <a href="<?php bloginfo('url'); ?>/recruiter_contact/" class="btn btn-theme02 recruit-btn-sp">採用ご担当者様お問い合わせ<span class="btn-theme02-arrow"></span></a>
      <a href="<?php bloginfo('url'); ?>/worker_contact/" class="btn btn-theme02 inquiry-btn-sp">求職者様お問い合わせ<span class="btn-theme02-arrow"></span></a>
    </div>

  </div>
  <!-- /.Slide menu -->
  <!-- ./header -->