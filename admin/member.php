<?php

//Session Login
session_start();

if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
}

//Include Files
include '../config.php';

date_default_timezone_set('Asia/Singapore');

?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Hey Daddy | Admin Panel</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">

        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!-- Back URL -->
        <script type="text/javascript">

            function MM_goToURL() { //v3.0
              var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
              for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
            }

        </script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><img class="logo" src="../img/logo1.png" width ="40%" />  | Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> 
                                    <i class="icon-user"></i> <?= $_SESSION['user_name']; ?> <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="functions/logout_function.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="index.php"> Dashboard </a>
                        </li>
                        <li class="active">
                            <a href="member.php"><i class="icon-chevron-right"></i> Member </a>
                        </li>
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                	<!-- success alert 
                    <div class="row-fluid">
                    	
                        <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Success</h4>
                        	The operation completed successfully
                        </div>
                    </div>
                    -->

                    <!-- Content -->

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">MANAGE MEMBERS</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                                                     
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Full Name</th>
                                                <th>Email Address</th>
                                                <th>Double-Income Family</th>
                                                <th>First Time Dad</th>
                                                <th>Children Age Group</th>
                                                <th>Interest</th>
                                                <th>Registration Date</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php
                                                $no=1;
                                                $sql = "SELECT * FROM member ORDER BY member_registration_date DESC";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc()) {
                                            ?>

                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td width="10%"><?php echo $row["member_name"]?></td>
                                                <td width="30%"><?php echo $row["member_email"]?></td>
                                                <td class="center"><?php echo $row["member_double_income"]?></td>
                                                <td class="center"><?php echo $row["member_first_time_parent"]?></td>
                                                <td class="center"><?php echo $row["member_child_age"]?></td>
                                                <td class="center">
                                                    <span class="label label-<?php echo $row["member_interest"]?>">
                                                        <?php echo $row["member_interest"]; ?>
                                                    </span>
                                                </td>
                                                <td><?php echo $row["member_registration_date"]?></td>
                                            </tr>

                                            <?php } } ?>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                    <!-- END .Content -->

                </div>
            </div>
            <hr>
            <footer>
                <p style="float:right;">&copy; Hey Daddy | Admin Panel 2017</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
            $(function() {
                
            });
        </script>

        <!-- Form Related API -->

        <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

        <script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="assets/form-validation.js"></script>

        <script>
          jQuery(document).ready(function() {   
            FormValidation.init();
          });
              $(function() {
                  $(".datepicker").datepicker();
                  $(".uniform_on").uniform();
                  $(".chzn-select").chosen();
                  $('.textarea').wysihtml5();

                  $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                      var $total = navigation.find('li').length;
                      var $current = index+1;
                      var $percent = ($current/$total) * 100;
                      $('#rootwizard').find('.bar').css({width:$percent+'%'});
                      // If it's the last tab then hide the last button and show the finish instead
                      if($current >= $total) {
                          $('#rootwizard').find('.pager .next').hide();
                          $('#rootwizard').find('.pager .finish').show();
                          $('#rootwizard').find('.pager .finish').removeClass('disabled');
                      } else {
                          $('#rootwizard').find('.pager .next').show();
                          $('#rootwizard').find('.pager .finish').hide();
                      }
                  }});
                  $('#rootwizard .finish').click(function() {
                      alert('Finished!, Starting over!');
                      $('#rootwizard').find("a[href*='tab1']").trigger('click');
                  });
              });
        </script>

        <!-- END .Form Related API -->
    </body>

</html>