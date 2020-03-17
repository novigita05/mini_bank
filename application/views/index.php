<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Mini Bank</title>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="<?php echo base_url('assets/img/favicon.ico')?>" sizes="any" />
    <link href="<?php echo base_url('assets/node_modules/@coreui/icons/css/coreui-icons.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/node_modules/flag-icon-css/css/flag-icon.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/node_modules/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/node_modules/simple-line-icons/css/simple-line-icons.css')?>" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/pace-progress/css/pace.min.css')?>" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="<?php echo base_url('assets/img/brand/logo.svg')?>" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="<?php echo base_url('assets/assets/img/brand/sygnet.svg')?>" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>home">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>pegawai">
                <i class="nav-icon icon-speedometer"></i> Pegawai
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>kelas_kategori">
                <i class="nav-icon icon-speedometer"></i> Jurusan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>kelas">
                <i class="nav-icon icon-speedometer"></i> Kelas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>siswa">
                <i class="nav-icon icon-speedometer"></i> Siswa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="nav-icon icon-speedometer"></i> Pembayaran
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">MINI BANK</li>
        </ol>
        
      
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/node_modules/pace-progress/pace.min.js')?>"></script>
    <script src="<?php echo base_url('assets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')?>"></script>
    <script src="<?php echo base_url('assets/node_modules/@coreui/coreui/dist/js/coreui.min.js')?>"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="<?php echo base_url('assets/node_modules/chart.js/dist/Chart.min.js')?>"></script>
    <script src="<?php echo base_url('assets/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
  </body>
</html>
