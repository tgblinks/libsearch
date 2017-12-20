<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['username'])) 
{
die(header('Location: ../login/index.php'));
}

$username = $_SESSION['username'];

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
                <h2><?php echo "$username";  ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
<?php include "menu.php" ?>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../login/Logout.php">
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
                    <img src="images/img.jpg" alt=""><?php echo "$username"; ?>
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
            <div class="page-title">
              <div class="title_left">
                <!--<h3>Users <small>Some examples to get you started</small></h3>-->
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

        <div class="x_content">
              <div class="row">
                    <div class="col-sm-12" >
                        <div class="card">
                          <div id="status"></div>
                            <?php
                            //db connection
                            include('connection.php');

                            $qry= 'SELECT * FROM books ORDER BY title, dept ASC';
                            $result = mysqli_query($con, $qry);
                            echo "<table id='datatable' class='table table-striped table-bordered' >
                            <thead>
                            <tr>
                            <th><strong>Book</strong></th>
                            <th><strong>Author</strong></th>
                            <th><strong>Department</strong></th>
                            <th><strong>College</strong></th>
                            <th><strong>Room</strong></th>
                            </tr>
                            </thead>";

                            while ($row = mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td>" .$row['title'] . "</td>";
                                echo "<td>" .$row['author'] .  "</td>";
                                echo "<td>" .$row['dept'] . "</td>";
                                echo "<td>" .$row['college'] . "</td>";
                                echo "<td>" .$row['room'] . "</td>";
                                echo "<td> <a href= delete.php?b_id=".$row['b_id']." class='btn pull-right hidden-sm-down btn-success' onclick='javascript:confirmationDelete($(this));return false;'>Delete</a>";
                                ?>
                                <td> <a name="edit_book" id="<?php echo $row['b_id']; ?>"  class='btn pull-right hidden-sm-down btn-success'>Update</a>
                                </tr>
                                <?php
                            }

                            echo "</table>";
                            ?>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>



        
<?php include "edit.php" ?>          
<?php include "change_pass.php" ?>
<?php include "add_books.php" ?>     
        

        <!-- /page content -->
       <div>
        <div>
          <div>
        <!-- footer content -->
<?php include "footer.php" ?>
        <!-- /footer content -->
      </div>
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
        function confirmationDelete(anchor)
    {
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
    }
    </script>

    <script type="text/javascript">
        $(document).ready(function(){

          $(document).on('click', '.edit_book', function(){
            var b_id = $(this).attr("b_id");
            $.ajax({
                url: "fatch.php",
                method: "POST",
                date:{b_id:b_id},


            });
          });
            $("#change_password").on("submit", function(event){
                event.preventDefault();
                var old_pass = $("#old_password").val();
                var new_pass = $("#new_password").val();
                var re_pass = $("#confirm_password").val();
                var form = $(this);

                if(old_pass == "" || new_pass == "" || re_pass == "")
                {
                    $("#status").html("<center><span style='color:red'><b>All Fields are required</b></span></center>");
                }
                else
                {
                    $.ajax({
                        type: form.attr('method'), //post it
                        url: form.attr('action'),  ///into this url
                        data: form.serialize(), // get all form feilds values and names
                        success: function(tg) //output the result
                        {
                            $("#status").html("<center>"+tg+"</center>"); //echo the output from the script
                            form.get(0).reset(); //it means, get the form fields and reset it.
                        }
                    });
                }
            });
        });
    </script>
  </body>
</html>
