<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School management Demo</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="#" class="nav-link">Home</a> -->
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url()?>assets/images/logo.jpeg" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">School Demo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url();?>admin" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url();?>admin/teachers" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Teachers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>admin/classes" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Class
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>admin/subjects" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Subjects
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>admin/students" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Students
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url();?>admin/manage_attendance" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Manage Attendance
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url();?>admin/manage_exams" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Manage exams
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>admin/class_routines" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Class Routines
              </p>
            </a>
          </li>
         
           <li class="nav-item">
            <a href="<?php echo base_url();?>admin/parents" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Parents
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url();?>admin/transportations" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Transportation
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>admin/noticeboard" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Noticeborad
              </p>
            </a>
          </li>
         
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>