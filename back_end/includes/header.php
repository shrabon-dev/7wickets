<?php
session_start();
if(!isset($_SESSION['login_statuse'])){
   header('location: ../../signin.php');
}
$page_search = explode("/", $_SERVER['PHP_SELF']);
$current_page =  end($page_search);

include "font_awesome.php";
include "db_connect.php";



?>

        
<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>7wicket agent list</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="../../assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="../../assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="../../assets/vendors/jquery-tags-input/">
	<link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="../../assets/css/demo2/style.css">
	<link rel="stylesheet" href="../../assets/css/custom_style.css">
  <!-- End layout styles -->

  <!-- <link rel="shortcut icon" href="../../assets/images/favicon.png" /> -->
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand" style="color: yellow;">
          <span style="color: #FFC812;">7</span>Wicket
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <!-- <li class="nav-item">
            <a href="../backend_page/admin.php" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="../backend_page/agent_add.php" class="nav-link">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">Agent Add</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../index.php" target="blank" class="nav-link">
              <i class="link-icon" data-feather="home"></i>
              <span class="link-title">View Site</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="../backend_page/agent_list.php" class="nav-link">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">Agent List</span>
            </a>
          </li>
      
          <li class="nav-item">
            <a href="../backend_page/notice_edit.php" class="nav-link">
              <i class="link-icon" data-feather="info"></i>
              <span class="link-title">Notice Edit</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../backend_page/rules_add.php" class="nav-link">
              <i class="link-icon" data-feather="plus"></i>
              <span class="link-title">Rules Add</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../backend_page/rules_list.php" class="nav-link">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">Rules List</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../backend_page/logo_change.php" class="nav-link">
              <i class="link-icon" data-feather="edit"></i>
              <span class="link-title">Logo Change</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../backend_php_function/log_out.php" class="nav-link">
              <i class="link-icon" data-feather="log-out"></i>
              <span class="link-title"> Log out</span>
            </a>
          </li>


        </ul>
      </div>
    </nav>
    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item" href="../../demo1/dashboard.html">
            <img src="../../assets/images/screenshots/light.jpg" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item active" href="../../demo2/dashboard.html">
            <img src="../../assets/images/screenshots/dark.jpg" alt="light theme">
          </a>
        </div>
      </div>
    </nav>
		<!-- partial -->
    <div class="page-wrapper">
					
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar">
              <a href="#" class="sidebar-toggler">
                  <i data-feather="menu"></i>
              </a>
              <div class="navbar-content">
             

              </div>
          </nav>
          <!-- partial -->