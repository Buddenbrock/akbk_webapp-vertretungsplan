<?php
$year = date('Y');
$version = "2.0 Beta";

// Class Configuration
  if($import_timetable_config) {
    include_once('assets/includes/timetable_config.php');
  }

// Timetable Configuration
  if($timetable) {
    //Isset-Configuration
      $now = false;
      $next = false;
      $over_next = false;

      $link_now_data = "";
      $link_next_data = "next";
      $link_over_next_data = "over-next";

      $hidden_pre = "";
      $hidden_next = "";
      $class_hidden = "hidden";

      if(isset($_REQUEST[$link_next_data])){
        $next = true;
      }
      else if(isset($_REQUEST[$link_over_next_data])){
        $over_next = true;
      }
      else {
        $now = true;
      }

    // week-Configuration
      $kw = strftime("%W");

      if($now){
        $kw_now = $kw;
        $kw_next = $kw + 1;

        $link_next = $link_next_data;

        $hidden_pre = $class_hidden;
      }

      if($next){
        $kw_pre = $kw;
        $kw_now = $kw + 1;
        $kw_next = $kw + 2;

        $link_pre = $link_now_data;
        $link_next = $link_over_next_data;
      }

      if($over_next){
        $kw_pre = $kw + 1;
        $kw_now = $kw + 2;

        $link_pre = $link_next_data;

        $hidden_next = $class_hidden;
      }

      // generate 0 infront by numbers between 0 and 10
  	  if($kw_pre < 10){
  		$kw_pre = str_pad($kw_pre, 2 ,'0', STR_PAD_LEFT);
  	  }

  	  if($kw_now < 10){
  		$kw_now = str_pad($kw_now, 2 ,'0', STR_PAD_LEFT);
  	  }

  	  if($kw_next < 10){
  		$kw_next = str_pad($kw_next, 2 ,'0', STR_PAD_LEFT);
  	  }

    // week-date Configuration
      $timestamp_monday = strtotime("{$year}-W{$kw_now}");
      $timestamp_friday = strtotime("{$year}-W{$kw_now}-5");

      $date = date("d.m.Y", $timestamp_monday) . " - " . date("d.m.Y", $timestamp_friday);
  }
?>
