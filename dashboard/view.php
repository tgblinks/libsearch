<?php 
$dbconnect = mysqli_connect('localhost', 'root', '', 'libsearch');

$b_id = htmlentities($_GET['b_id']);
$query = "SELECT * FROM Books WHERE b_id = '".$b_id."'";
$execute = mysqli_query($dbconnect, $query);
$view = mysqli_fetch_assoc($execute);
$full_row_view = mysqli_num_rows($execute);





 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Library Search | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!--<link href="style.css" rel="stylesheet">-->
  </head>
  

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-book"></i> <span>Library Search Engine</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2>Guest</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Available on our search panel</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Books <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Archive <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Materials <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a><i class="fa fa-table"></i> Journals <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="#" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Guest
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">Help</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            </div>
            <div class="clearfix"></div>
             <div class="page-title">
              <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-md-2">
                            <img src="../user_images/<?php echo $view['pic1']; ?>"
                            alt="<?php echo $view['title'] ?> Image"   class="img-rounded img-responsive" />
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <blockquote>
                                <p><?php echo $view['title']; ?></p>
                                <br> <small><strong>Author: </strong> <cite title="Source Title"><?php echo $view['author']; ?><i class="glyphicon glyphicon-user"></i></cite></small>
                            </blockquote>
                            <p> <i class="glyphicon glyphicon-arrow-right"><strong> DEPARTMENT: </strong> </i> <?php echo $view['dept']; ?>
                                <br/>
                                <br>                                
                                <i class="glyphicon glyphicon-arrow-right"> </i><strong> CLASS NUMBER: </strong><?php echo $view['classno']; ?>
                                <br>
                                <br /> <i class="glyphicon glyphicon-arrow-right"></i> <strong>EDITION: </strong> <?php echo $view['Edition']; ?>
                                <br>
                                <br /> <i class="glyphicon glyphicon-arrow-right"></i> <strong>AVAILABLE COPIES: </strong> <?php echo $view['copies']; ?>
                                <br>
                                <br>
                                <br /> <i class="glyphicon glyphicon-arrow-right"></i> <strong>ROOM LOCATION: </strong> <?php echo $view['room']; ?>
                                <br>
                                <br>
                                <br /> <i class="glyphicon glyphicon-arrow-right"></i> <strong>SHELF NUMBER: </strong> <?php echo $view['shelf']; ?>
                                <br>
                                <br>
                                <br /> <i class="glyphicon glyphicon-arrow-right"></i> <strong>ROW NUMBER: </strong> <?php echo $view['row']; ?>
                        </div>
                        <!--<div class="col-sm-2 col-md-2">
                            <img src="http://thetransformedmale.files.wordpress.com/2011/06/bruce-wayne-armani.jpg"
                            alt="" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-sm-2 col-md-4">
                            <blockquote>
                                <p>Bruce Wayne</p> <small><cite title="Source Title">Gotham, United Kingdom  <i class="glyphicon glyphicon-map-marker"></i></cite></small>
                            </blockquote>
                            <p> <i class="glyphicon glyphicon-envelope"></i> masterwayne@batman.com
                                <br
                                /> <i class="glyphicon glyphicon-globe"></i> www.bootsnipp.com
                                <br /> <i class="glyphicon glyphicon-gift"></i> January 30, 1974</p>
                        </div>
                    </div>-->
                </div>            
              </span>
              </div>
              </div>     
              </div>    
            </div>
          </div>
        </div>
      </div>
      \
        <!-- /page content -->

        <!-- footer content -->
<?php include "footer.php" ?>
        <!-- /footer content -->
      </div>
    </div>


    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {
        $("#searchbox").on('keyup',function () {
            var key = $(this).val();

            $.ajax({
                url:'fetch.php',
                type:'GET',
                data:'keyword='+key,
                beforeSend:function () {
                    $("#results").slideUp('fast');
                },
                success:function (data) {
                    $("#results").html(data);
                    $("#results").slideDown('fast');
                }
            });
        });
    });
    </script>
	
  </body>
</html>
