<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SSRU</title>

  <link rel="apple-touch-icon" href="assets/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/assets/images/favicon.ico">

  <!-- Stylesheets -->
  <?php if(isset($style)){ 
    foreach ($style as $key => $value) { ?>
    <link rel="stylesheet" href="<?php echo $value;?>">
  <?php } } ?>
  <link rel="stylesheet" href="assets/boostrap_jquery/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="assets/global/css/bootstrap-extend.min.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/site.min.css"> -->

  <link rel="stylesheet" href="assets/css/main.css">

  <!-- Skin tools (demo site only) -->
  <!-- <link rel="stylesheet" href="assets/global/css/skintools.min.css"> -->
  <!-- <script src="assets/js/Plugin/skintools.min.js"></script> -->

  <!-- Plugins -->
  <link rel="stylesheet" href="assets/global/vendor/animsition/animsition.min.css">
  <link rel="stylesheet" href="assets/global/vendor/asscrollable/asScrollable.min.css">
  <link rel="stylesheet" href="assets/global/vendor/switchery/switchery.min.css">
  <link rel="stylesheet" href="assets/global/vendor/intro-js/introjs.min.css">
  <link rel="stylesheet" href="assets/global/vendor/slidepanel/slidePanel.min.css">
  <link rel="stylesheet" href="assets/global/vendor/jquery-mmenu/jquery-mmenu.min.css">
  <link rel="stylesheet" href="assets/global/vendor/flag-icon-css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/global/vendor/waves/waves.min.css">
  <link rel="stylesheet" href="assets/examples/css/dashboard/v1.min.css">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="assets/global/vendor/blueimp-file-upload/jquery.fileupload.min.css">
  <link rel="stylesheet" href="assets/global/vendor/dropify/dropify.min.css">

  <link rel="stylesheet" href="assets/global/vendor/jquery-wizard/jquery-wizard.min.css">
  <link rel="stylesheet" href="assets/global/vendor/formvalidation/formValidation.min.css">
  <link rel="stylesheet" href="assets/global/vendor/select2/select2.min.css">
  <link rel="stylesheet" href="assets/global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.css">
  <link rel="stylesheet" href="assets/global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.css">
  <link rel="stylesheet" href="assets/global/vendor/bootstrap-select/bootstrap-select.min.css">
  <link rel="stylesheet" href="assets/global/vendor/switchery/switchery.min.css">
  <link rel="stylesheet" href="assets/global/vendor/asrange/asRange.min.css">
  <link rel="stylesheet" href="assets/global/vendor/ionrangeslider/ionrangeslider.min.css">
  <link rel="stylesheet" href="assets/global/vendor/asspinner/asSpinner.min.css">
  <link rel="stylesheet" href="assets/global/vendor/clockpicker/clockpicker.min.css">
  <link rel="stylesheet" href="assets/global/vendor/ascolorpicker/asColorPicker.min.css">
  <link rel="stylesheet" href="assets/global/vendor/bootstrap-touchspin/bootstrap-touchspin.min.css">
  <link rel="stylesheet" href="assets/global/vendor/jquery-labelauty/jquery-labelauty.min.css">
  <link rel="stylesheet" href="assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="assets/global/vendor/bootstrap-maxlength/bootstrap-maxlength.min.css">
  <link rel="stylesheet" href="assets/global/vendor/timepicker/jquery-timepicker.min.css">
  <link rel="stylesheet" href="assets/global/vendor/jquery-strength/jquery-strength.min.css">
  <link rel="stylesheet" href="assets/global/vendor/multi-select/multi-select.min.css">
  <link rel="stylesheet" href="assets/global/vendor/typeahead-js/typeahead.min.css">


  <!-- Fonts -->
  <link rel="stylesheet" href="assets/global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="assets/global/fonts/font-awesome/font-awesome.min.css">
  <link rel="stylesheet" href="assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700">

  <link rel="stylesheet" href="assets/css/jquery.toast.min.css">
  
  <!--[if lt IE 9]>
    <script src="assets/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="assets/global/vendor/media-match/media.match.min.js"></script>
    <script src="assets/global/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="assets/global/vendor/breakpoints/breakpoints.min.js"></script>
  <script>
    Breakpoints();
  </script>
  <!-- Core  -->
  <script src="assets/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
  <script src="assets/global/vendor/jquery/jquery.min.js"></script>
  <script src="assets/global/vendor/popper-js/umd/popper.min.js"></script>
  <script src="assets/global/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="assets/global/vendor/animsition/animsition.min.js"></script>
  <script src="assets/global/vendor/mousewheel/jquery.mousewheel.min.js"></script>
  <script src="assets/global/vendor/asscrollbar/jquery-asScrollbar.min.js"></script>
  <script src="assets/global/vendor/asscrollable/jquery-asScrollable.min.js"></script>
  <script src="assets/global/vendor/waves/waves.min.js"></script>
  <script src="assets/js/jquery.toast.min.js"></script>

  <script src="assets/boostrap_jquery/js/jquery.js"></script>
  <script src="assets/boostrap_jquery/js/popper.js"></script>
  <script src="assets/boostrap_jquery/js/bootstrap.min.js"></script>
  <script src="assets/fontawesome/js/all.js"></script>
</head>
<body class="<?php echo (isset($class_body)?$class_body:''); ?>">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-dark mb-4">
  <a class="navbar-brand" href="<?php echo route('index/home'); ?>"><img src="assets/images/logo.png" alt="" width="50" class="mr-3"> ระบบบริหารจัดการกิจกรรมนักศึกษามหาวิทยาลัยราชภัฏสวนสุนันทา</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i> รหัสนักศึกษา 61122230103 นาย ก. ระดับชั้นปี 1
        </a>
        <div class="dropdown-menu rounded-0" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo route('member/edit'); ?>">แก้ไขข้อมูลส่วนตัว</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo route('home'); ?>">ออกจากระบบ</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row my-3">
    <div class="col-md-4">
      <a href="<?php echo route('activity/home'); ?>" class="menu-card" id="activity">
        <img src="https://via.placeholder.com/1920" alt="" class="w-100">
        <p>ตรวจสอบกิจกรรมที่ได้เข้าร่วม</p>
      </a>
    </div>
    <div class="col-md-4">
      <a href="<?php echo route('check/home'); ?>" class="menu-card" id="check">
        <img src="https://via.placeholder.com/1920" alt="" class="w-100">
        <p>ตรวจสอบคะแนนพฤติกรรม</p>
      </a>
    </div>
    <div class="col-md-4">
      <a href="<?php echo route('booking/home'); ?>" class="menu-card" id="booking">
        <img src="https://via.placeholder.com/1920" alt="" class="w-100">
        <p>เข้าจองกิจกรรม</p>
      </a>
    </div>
<!--     <div class="col-md-3">
      <a href="<?php echo route('download/home'); ?>" class="menu-card">
        <img src="https://via.placeholder.com/1920" alt="" class="w-100">
        <p>ดาวน์โหลดเอกสาร</p>
      </a>
    </div> -->
  </div>
</div>
