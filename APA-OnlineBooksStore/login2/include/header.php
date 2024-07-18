 <?php
 
 session_start();

if(!isset($_SESSION['IndexNo'])) header('location: ../index.php');

 //$usertype = $_SESSION['usertype'];
 //$User_Name = $_SESSION['User_Name']; 
 $IndexNo= $_SESSION['IndexNo']; 
//   if(!(isset($_SESSION['email']))){
// header("location:/index.php");

// }
// else
// {
// $name = $_SESSION['name'];
// $email=$_SESSION['email'];
// include_once 'dbConnection.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/">
    <title>APA Online Bookstore</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
     <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
    

 <!-- editter -->
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/bootstrap-wysiwyg.js"></script> 

<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<style>
.content{
    width: 80%;
    margin: 0 auto;
    margin-top: 50px;
}


#editor {
    max-height: 250px;
    height: 250px;
    background-color: white;
    border-collapse: separate; 
    border: 1px solid rgb(204, 204, 204); 
    padding: 10px; 
    box-sizing: content-box; 
    -webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset; 
    box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
    border-top-right-radius: 3px; border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px; border-top-left-radius: 3px;
    overflow: auto;
    outline: none;
}

#voiceBtn {
  width: 20px;
  color: transparent;
  background-color: transparent;
  transform: scale(2.0, 2.0);
  -webkit-transform: scale(2.0, 2.0);
  -moz-transform: scale(2.0, 2.0);
  border: transparent;
  cursor: pointer;
  box-shadow: none;
  -webkit-box-shadow: none;
}

div[data-role="editor-toolbar"] {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.dropdown-menu a {
  cursor: pointer;
}

</style>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" style="background: #000">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5" >
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             APA Online Bookstore
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== 
<!--alert message end-->







        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->