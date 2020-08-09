<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#000080">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#000080" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/back/siswa/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/back/siswa/css/style.css">
	<!-- ****** faviconit.com favicons ****** -->
    <link rel="shortcut icon" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-16.png">
    <link rel="apple-touch-icon" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-144.png">
    <meta name="msapplication-config" content="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/browserconfig.xml">
    <!-- ****** faviconit.com favicons ****** -->
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  
  <div id="hamburgerBtn">&#9776</div>
  <nav id="sideMenu">
    <div class="nav-brand">
      <p><a href="https://www.smpmuh-cimanggu.sch.id/">SMP Mugu</a></p>
      <img src="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-96.png"/>
    </div>
    <ul class="nav-items">
      <li><a href="<?php echo base_url();?>index.php/siswa/">Beranda</a></li>
      <li><a href="<?php echo base_url();?>index.php/siswa/learn">Pembelajaran</a></li>
	  <li><a href="<?php echo base_url();?>index.php/auth/logout_siswa">Keluar</a></li>
    </ul>
    <div class="footer"><p><?php echo $this->session->userdata('nama'); ?> | <?php echo $this->session->userdata('kelas'); ?></p></div>
	<hr>
  </nav>

	<p><?php echo $title; ?></p>

<hr>
<br>


