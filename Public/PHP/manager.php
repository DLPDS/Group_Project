<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/managerClass.php");
include("../../Includes/Header.php");
$SANHINDAManager= new managerClass();
?>
<body>

<div class="container" id="main">
    <div class="navbar navbar-fixed-top">
        <a class = "navbar-brand" href="#"><img src = "../../Images/logo.png" alt="My Logo"></a>
        <div class = "nav-collapse collapse navbar-responsive-collapse">
            <ul class = "nav navbar-nav pull-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Manager<strong class="caret"></strong></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-cog"> Settings</span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-briefcase"> Update Profile</span></a></li>
                        <li class="divider"></li>
                        <li><a href="../../index.html"><span class="glyphicon glyphicon-off"> Sign-Out</span></a></li><!--methenta home eka link karahan-->
                    </ul>

                </li>
            </ul>
        </div><!--end nav-collapse-->
    </div><!--end container-->

</div><!--end navbar-->
<hr>
<hr>
<hr>
<?php echo($SANHINDAManager->session->messageDisplay()); ?>
<div class="row" id="row1">
    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">Supliers</h3>
            </div>
            <img src="../../Images/supplier.jpg" alt="HTML5">
            <div class="col-sm-6">
                <a class="btn btn-default btn-block">View Details</a>
                <a class="btn btn-default btn-block">Add Supplier</a>
            </div>
        </div>
    </div>

    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">Reports</h3>
            </div>
            <img src="../../Images/report.jpg" alt="HTML5">
            <div class="col-sm-6">
                <a class="btn btn-default btn-block">Daily Report</a>
                <a class="btn btn-default btn-block">Monthly Report</a>
            </div>
        </div>
    </div>

    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">Book Stock</h3>
            </div>
            <img src="../../Images/book.jpg" alt="HTML5">
            <div class="col-sm-6">
                <a class="btn btn-default btn-block">Book Details</a>
                <a class="btn btn-default btn-block">Sales</a>
            </div>
        </div>
    </div>

    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">Payables & Receivables</h3>
            </div>
            <img src="../../Images/payables.jpg" alt="HTML5">
            <div class="col-sm-6">
                <a class="btn btn-default btn-block">Payables</a>
                <a class="btn btn-default btn-block">Receivables</a>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row" id="staffDetails">
    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">Chairman</h3>
            </div>
            <img src="../../Images/chairman.jpg" alt="HTML5">
            <div class="col-sm-6">
                <a class="btn btn-default btn-block">View Details</a>
                <a class="btn btn-default btn-block">Delete Profile</a>
            </div>
        </div>
    </div>

    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">Manager</h3>
            </div>
            <img src="../../Images/Manager.jpg" alt="HTML5">
            <div class="col-sm-6">
                <a class="btn btn-default btn-block">View Details</a>
                <a class="btn btn-default btn-block">Delete Profile</a>
            </div>
        </div>
    </div>

    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">Stock Keeper</h3>
            </div>
            <img src="../../Images/Stock%20Keeper.jpg" alt="HTML5">
            <div class="col-sm-6">
                <a class="btn btn-default btn-block">View Details</a>
                <a class="btn btn-default btn-block">Delete Profile</a>
            </div>
        </div>
    </div>

    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">Cashier</h3>
            </div>
            <img src="../../Images/Cashier.jpg" alt="HTML5">
            <div class="col-sm-6">
                <a class="btn btn-default btn-block">View Details</a>
                <a class="btn btn-default btn-block">Delete Profile</a>
            </div>
        </div>
    </div>
</div>

<div class="row" id="row2">
    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">New Employee</h3>
            </div>
            <img src="../../Images/chairman.jpg" alt="HTML5">
            <div class="col-sm-6">
                <a href="#addProfile" role="button" class="btn btn-info" data-toggle="modal" id="addButton">ADD PROFILE</a>
                <div class="modal fade" id="addProfile">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class ="close" data-dismiss="modal">&times;</button>
                                <h5 class="modal-title">Add Profile</h5>
                            </div>

                            <div class="modal-body">
                                <h6>Employee Details Form</h6><!--mekata data base eka link ka balahan-->
                                <form class="form-horizontal" name= "reg" action="../PHP/mFlow.php"  onsubmit="return checkForm()"  method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="first_name">First Name</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="first_name" placeholder="First Name" type="text" required name="firstName">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Last_name">Last Name</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="Last_name" placeholder="Lsat Name" type="text" required name="lastName">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Birth_Day">Birth Day</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="Birth_Day" type="date" placeholder="Birth Day" name="bDay">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Username">UserName</label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="Username" placeholder="UserName" type="text" required name="username">
                                        </div>

                                        <label class="col-lg-2 control-label" for="Password">Password</label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="Password" placeholder="Password" type="password" name="passwordName" required >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Confirm_password">Confirm password</label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="Confirm_password" placeholder="Confirm password" type="password" required name="confirmPassword">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="Position">Position</label>
                                        <div class="col-lg-6">
                                            <select  id='Position'  name="priority" class="form-control" >
                                                <option selected>Choose a position</option>
                                                <option>Cashier</option>
                                                <option>Stock Keeper</option>
                                                <option>Manager</option>
                                                <option>Chairman</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="btn btn-default btn-file">
                                        Upload Photo<input type="file" name="staffPhoto" value="staff">
                                    </div>



                                    <div class="modal-footer" >
                                        <input type="submit" class="btn btn-success" value="Save" name="addEmployee">
                                        <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- All Javascript at the bottom of the page for faster page loading -->

<!-- First try for the online version of jQuery-->
<script src="http://code.jquery.com/jquery.js"></script>

<!-- If no online access, fallback to our hardcoded version of jQuery -->
<script>window.jQuery || document.write('<script src="../JS/jquery-1.8.2.min.js"><\/script>')</script>

<!-- Bootstrap JS -->
<script src="../JS/bootstrap.min.js"></script>

<!-- Custom JS -->
<script src="../JS/script.js"></script>

</body>
</html>

