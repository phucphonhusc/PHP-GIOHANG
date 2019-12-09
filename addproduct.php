<?php session_start();
    include_once("model/user.php");
    include_once("model/giay.php");
    include_once("model/function.php");
   if (!isset($_SESSION["user"])) {
    header("location: login.php");
    }
    $user = unserialize($_SESSION["user"]) ; 
    if (isset($_REQUEST["addGiay"])) {
      $tengiay = $_REQUEST["tengiay"];
      $path= "images/";
      $fileName= "";
      if(isset($_FILES["anh"])){
        if($_FILES["anh"]["type"] == "image/jpg"||$_FILES["anh"]["type"]== "image/png" ||$_FILES["anh"]["type"]== "image/jpeg"){
          
            if($_FILES["anh"]["error"]==0){
              //TIẾN HÀNH ĐƯA FILE VÀO SERVER
              $filename = $_FILES["anh"]["tmp_name"];
              move_uploaded_file($filename, $path.$_FILES["anh"]["name"]);
              $fileName .= "images/".$_FILES["anh"]["name"];
            }else{
              echo "LỖI FILE!";
            }
          
          
        }
        else{
          echo "file không đúng định dạng";
        }
      }
      
    //   if (isset($_FILES['image']) && !empty($_FILES['image']['name'][0])) {
    //     $uploadedFiles = $_FILES['image'];
    //     $result = uploadFiles($uploadedFiles);
    //     if (!empty($result['errors'])) {
    //         $error = $result['errors'];
    //     } else {
    //         $image = $result['path'];
    //     }
    // }
      $anh = $fileName;
      $gia = $_REQUEST["gia"];
      $nam = $_REQUEST["nam"];
      $mota = $_REQUEST["mota"];
      Giay::addGiayDB($tengiay,$anh,$gia,$nam,$mota);
      
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Trang quản lý sản phẩm</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="icon" href="images/foneeshoe.png">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- <script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script> -->

    <script  src="ckfinder/ckfinder.js"></script>
    <script  src="ckeditor/ckeditor.js"></script>
  
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" action="" method="GET">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" name="timkiem" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="logout.php" class="nav-link" ><i class="fas fa-sign-out-alt"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="trangadmin.php" class="brand-link">
      <img src="images/foneeshoe.png" alt="Foneeshoe Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Quản lý FoneeShoe</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                ADMIN 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="trangadmin.php" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                  <p> Quản lý</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addproduct.php" class="nav-link">
                <i class="fas fa-plus-circle"></i>
                  <p> Thêm sản phẩm</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          <h1 class="m-0" style="color: #03c2fc; text-align:center">Thêm sản phẩm <i class="fas fa-clipboard-list"></i></h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
                <form action="" method="post" enctype="multipart/form-data">
                  
                      
                      <fieldset>
                      
                        <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Title">Tên sản phẩm</label>
                            <div class="col-md-10">
                              <input id="id" name="tengiay" type="text" placeholder="Tên sản phẩm" class="form-control input-md">
                            </div>
                          </div>
                          <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Title">Ảnh sản phẩm</label>
                            <div class="col-md-10">
                              <input id="Title" name="anh" type="file" placeholder="Ảnh Sản phẩm"  value="">
                            </div>
                          </div>
                          <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Title">Giá sản phẩm</label>
                            <div class="col-md-10">
                              <input id="Title" name="gia" type="text" placeholder="Giá Sản phẩm" class="form-control input-md">
                            </div>
                          </div>
                          <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Title">Năm sản xuất</label>
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <select class="selectpicker form-control" name="nam">
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Title">Mô tả</label>
                            <div class="col-md-10">
                              <textarea class="ckeditor" name="mota" id="" cols="30" rows="10"></textarea>
                              <br>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                              <button type="submit" class="btn btn-primary" name="addGiay">Lưu</button>
                            </div>
                          </div>
                          
                          <!-- Text input-->
                      </fieldset>
                    
                    
                      
                    
                  
                </form>
              </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>

</body>
</html>
