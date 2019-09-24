<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">INFOTECH</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John </strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
		
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Arti Singh<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Manage Traniee</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Manage Fee</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Manage Enquey</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Manage Admin</a>
                    </li>
                  
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Master <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
			
			
			
            <!-- /.navbar-collapse -->
        </nav>

    

         
 
                <!-- Page Heading -->
                <div class="row" >
				
                    <div class="col-lg-12">
 
                        <ol class="breadcrumb">
                            <li>
		<!-- Form  --> 
		
		
		
		
<div id="page-wrapper" >
						<div class="alert alert-success">

            <div class="container-fluid">
 
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
						
						
             
						
						
                            Add New Traniee
                        </h1>
               
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="post">

                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" placeholder="Enter your Name" name="name">
                            </div>

                            <div class="form-group">
                                <label>Father Name</label>
                                <input class="form-control" placeholder="Enter Father Name" name="father_name">
                            </div>

                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input class="form-control" placeholder="Enter Mobile Number" name="mobile_number">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" placeholder="Enter text" name="email">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" name="address"></textarea>
                            </div>



							<div class="form-group">
                                <label>Select Course</label>
                                <select multiple="" class="form-control" name="sel_course[]">
                                     <option value="PHP">PHP</option>
                                    <option value="CSS">CSS</option>
                                    <option value="HTML">HTML</option>
                                    <option value="Java ">Java</option>
                                </select>
                            </div>


							

                            <div class="form-group">
                                <label>Gender</label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="optionsRadiosInline1" value="Female" checked="">Female
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="optionsRadiosInline2" value="Male">Male
                                </label>
                            </div>


                 

                    </div>
                    <div class="col-lg-6">
					
					        <div class="form-group">
                                <label>DOB</label>
                                <input type="date" class="form-control" placeholder="Enter text" name="dob">
                            </div>
							
							
							<div class="form-group">
                                <label>DOJ</label>
                                <input type="date" class="form-control" placeholder="Enter text" name="doj">
                            </div>
							
							<div class="form-group">
                                <label>Select Duration</label>
                                <select class="form-control" name="sel_duration">
                                    <option value="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
							
							
					<div class="form-group">
                                <label>Image</label>
                                <input type="file" name="photo">
                            </div>
							
							Total Fee
							<div class="form-group input-group">
                                <span class="input-group-addon">Rs.</span>
                                <input type="text" class="form-control" name="fee">
                                <span class="input-group-addon">.00</span>
                            </div>
							
						 <p>
                     <input type="submit" class="btn btn-sm btn-success" name="submit"></button>
                      <input type="reset" class="btn btn-sm btn-danger" nname="reset"></button>
                 </p>	
          </form>


 
 				  <?php
 
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$father_name=$_POST["father_name"];
$mobile_number=$_POST["mobile_number"];
$email=$_POST["email"];
$address=$_POST["address"];
//$sel_course=$_POST["sel_course"];
$sel_course=implode(",",$_POST["sel_course"]);
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$doj=$_POST["doj"];
$sel_duration=$_POST["sel_duration"];
$photo=$_POST["photo"];
$fee=$_POST["fee"];

//for traniee_id
$mobile=substr($mobile_number,6);
$fname=substr($name,0,2);
$uid=$fname.$mobile;







$dbc=  @mysql_connect("localhost","root","") ;
$sel=@mysql_select_db('bootstrap',$dbc); 
$q="INSERT INTO add_traniee (name,father_name,mobile_number,email,address,sel_course,gender,dob,doj,sel_duration,photo,fee,trainee_id) VALUES ('$name','$father_name','$mobile_number','$email','$address','$sel_course','$gender','$dob','$doj','$sel_duration','$photo','$fee','$uid')";
$row=mysql_query($q);
		if($row>0)
			{
			echo "Update";
			}
		   else
		   {
 			echo "Error";
		   }

}
?>
 	 
              
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>					
							
						 
							
							
							
							
							
							
							
							
							
							
								   
								   
                            </li>
                           
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid --> 
	

	

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
