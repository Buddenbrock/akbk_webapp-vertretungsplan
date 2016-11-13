<?php
  if(isset($_COOKIE["color-id"])){
    $color = $_COOKIE["color-id"];
  }
  else {
    $color = "#9a9997";
  }
?>
<!doctype html>
<html>
  <head>
    <meta name="Robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=1024, user-scalable=no" />
    <title>AKBK Stundenplan APP</title>
    <meta name="application-name" content="AKBK Stundenplan APP">
    <meta name="apple-mobile-web-app-title" content="AKBK Stundenplan APP">

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="manifest" href="assets/includes/manifest.json">

    <meta name="msapplication-starturl" content="index.php">

    <link rel="icon" type="img/x-icon" href="assets/images/favicons/favicon.ico" />
    <link rel="shortcut icon" href="assets/images/favicons/favicon.png" />
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicons/apple-touch-icon-precomposed.png" />
    <link rel="apple-touch-icon" href="assets/images/favicons/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" href="assets/images/favicons/apple-touch-icon-57x57.png" sizes="57x57" />
    <link rel="apple-touch-icon" href="assets/images/favicons/apple-touch-icon-72x72.png" sizes="72x72" />
    <link rel="apple-touch-icon" href="assets/images/favicons/apple-touch-icon-76x76.png" sizes="76x76" />
    <link rel="apple-touch-icon" href="assets/images/favicons/apple-touch-icon-114x114.png" sizes="114x114" />
    <link rel="apple-touch-icon" href="assets/images/favicons/apple-touch-icon-144x144.png" sizes="144x144" />
    <link rel="apple-touch-icon" href="assets/images/favicons/apple-touch-icon-152x152.png" sizes="152x152" />

    <meta name="apple-mobile-web-app-status-bar-style" content="#f5f5f5">

    <style>
      a,
      header a {
        color: <?=($color)?>;
      }
      button {
        background-color: <?=($color)?>;
      }
      hr {
        border-color: <?=($color)?> !important;
      }
      svg path {
        fill: <?=($color)?>;
      }

      input[type="radio"]:checked + label {
        background-color: <?=($color)?>; 
      }
    </style>

  </head>
  <body>

    <!--<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-86189503-3', 'auto');
      ga('send', 'pageview');

    </script>-->

    <header>
      <div class="hog_band"></div>
      <div class="koe_band"></div>
      <div class="ahr_band"></div>
      <div class="gol_band"></div>
      <div class="nmg_band"></div>
      <div class="dmt_band"></div>
      <div class="ftr_band"></div>
      <div class="fog_band"></div>
      <div class="dbf_band"></div>
      <div class="bgb_band"></div>

      <img class="logo" src="assets/images/schullogo.svg" title="AKBK Logo">

      <?php if($timetable) { ?>
      <a href="index.php?<?=( $link_pre )?>" class="button-pre <?=( $hidden_pre )?>" >
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve">
          <path d="M7.5,25c0-9.665,7.836-17.5,17.5-17.5S42.5,15.335,42.5,25c0,9.666-7.836,17.5-17.5,17.5 S7.5,34.666,7.5,25L7.5,25z"/>
          <polygon points="20.017,32.307 23.756,32.307 19.354,26.845 35.938,26.845 35.938,23.155 19.256,23.155 23.756,17.693 20.017,17.693 14.063,24.921 "/>
        </svg>
        <span>
          KW <?=( $kw_pre )?>
        </span>
      </a>

      <a href="index.php?<?=( $link_next )?>" class="button-next <?=( $hidden_next )?>" >
        <span>
          KW <?=( $kw_next )?>
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve">
          <path d="M42.5,25c0,9.665-7.836,17.5-17.5,17.5S7.5,34.665,7.5,25c0-9.666,7.836-17.5,17.5-17.5 S42.5,15.334,42.5,25L42.5,25z"/>
          <polygon points="29.983,17.693 26.244,17.693 30.646,23.155 14.063,23.155 14.063,26.845 30.744,26.845 26.244,32.307 29.983,32.307 35.938,25.079 "/>
        </svg>
      </a>
      <?php } ?>
    </header>
