<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:index.php");
  }
$hak_akses=$_SESSION['hak_akses'];
if($hak_akses=='3'){
	header("location: user.php");
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Protection Maintenance</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="halaman_depan.php"><img src="img/message/11.jpg" alt="" />
                    </a>
                    <h3>ProMain</h3>
                    <p>Batam</p>
                    <strong>MGB</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="halaman_depan.php"  role="button" aria-expanded="false" ><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            
                        </li>
<?php
if($hak_akses=='1'){
?>						
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-database"></i> <span class="mini-dn">Database</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="database/500.php?tegangan=150" class="dropdown-item">150 KV</a>
                                <a href="database/500.php?tegangan=20" class="dropdown-item">20 KV</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-link"></i> <span class="mini-dn">Connect To Relay</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="#" class="dropdown-item">1</a>
                                <a href="#" class="dropdown-item">2</a>
                                <a href="#" class="dropdown-item">3</a>
                                <a href="#" class="dropdown-item">4</a>
                                <a href="#" class="dropdown-item">5</a>
                                <a href="#" class="dropdown-item">6</a>
                                <a href="#" class="dropdown-item">7</a>
                                <a href="#" class="dropdown-item">8</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Edit</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="lokasi.php" class="dropdown-item">Lokasi</a>
                                <a href="bay.php" class="dropdown-item">Bay</a>
                                <a href="jenis_relay.php" class="dropdown-item">Jenis Relay</a>
                                <a href="data_teknis.php" class="dropdown-item">Data Teknis</a>
                            </div>
                        </li>
<?php
}
else{
	echo"";
}
?>                        
                        <li class="nav-item">
                            <a href="#"  role="button" aria-expanded="false" ><i class="fa big-icon fa-info"></i> <span class="mini-dn">About</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="proses_logout.php"  role="button" aria-expanded="false" ><i class="fa big-icon fa-key"></i> <span class="mini-dn">Log Out</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            
                        </li>
                        
                        
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                                                 
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
<div class="inbox-mailbox-area mg-b-40">
</div>
<?php //==================================================================================================MULAI DARI SINI =======================================================
?>

<div class="inbox-mailbox-area mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="inbox-email-menu-list compose-b-mg-30 shadow-reset">
                                        
                                     <h1>HOME</h1> 
<?php
if($hak_akses=='1'){
	

?>
    <table width="100%"  border="0"> 
  <tr>
    <td><center><a href="database/tegangan.php" ><img src='dist/img/icon_menu/core/database.png'><p>Database</p></a></center><p>&nbsp;</p></td>
    <td><center><a href="connect.php"><img src='dist/img/icon_menu/core/usb.png'><p>Connect</p></a></center><p>&nbsp;</p></td>
    <td><center><a  href="about.php"><img src='dist/img/icon_menu/core/info.png'><p>About</p></a></center><p>&nbsp;</p></td> 
    <td><center><a  href="edit.php"><img src='dist/img/icon_menu/core/edit.png'><p>Edit</p></a></center><p>&nbsp;</p></td> 
	
  </tr>
  <!-- <tr>
    <td><center><a href="lokasi.php" ><img src="dist/img/icon_menu/core/lokasi.jpg"><p>Lokasi</p></a></center><p>&nbsp;</p></td>
    <td><center><a href="bay.php"><img src='dist/img/icon_menu/core/bay.jpg'><p>Bay</p></a></center><p>&nbsp;</p></td>
    <td><center><a  href="jenis_relay.php"><img src='dist/img/icon_menu/core/jenis.png'><p>Jenis Relay</p></a></center><p>&nbsp;</p></td>
    <td><center><a  href="data_teknis.php"><img src='dist/img/icon_menu/core/data_teknis.png'><p>Data Teknis</p></a></center><p>&nbsp;</p></td>  
  </tr> -->
  
	</table>
<?php
}
else{
?>
	<table width="100%"  border="0"> 
  <tr>
    <td><center><a href="database/tegangan.php" ><img src='dist/img/icon_menu/core/database2.png'>><p>Database</p></a></center><p>&nbsp;</p></td>
    <td><center><a  href="about.php"><img src='dist/img/icon_menu/core/about2.png'><p>About</p></a></center><p>&nbsp;</p></td>   
    <td><center><a href="proses_logout.php"><img src='dist/img/icon_menu/core/logout2.png'><p>Log out</p></a></center><p>&nbsp;</p></td> 
  </tr>
	</table>
<?php
	echo"";
}
?>									 
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>












<?php //==================================================================================================SAMPAI SINI =======================================================
?>
        </div>
    </div>
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                      <!--  <p>Copyright &#169; Alpha Elektronik 2019</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/Chart.min.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="js/map/raphael.min.js"></script>
    <script src="js/map/jquery.mapael.js"></script>
    <script src="js/map/france_departments.js"></script>
    <script src="js/map/world_countries.js"></script>
    <script src="js/map/usa_states.js"></script>
    <script src="js/map/map-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>