<?php
include("../../Includes/Header.php");
?>
<body>

<div class="container" id="supplierMain">

    <div class="navbar navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="../../Images/logo.png" alt="companyLogo"></a>
            <div class="nav-collapse collapse navbar-responsive-collapse">
                <ul class = "nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Stock Keeper<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-cog"> Settings</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-briefcase"> Update Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><span class="glyphicon glyphicon-off"> Sign-Out</a></li><!--methenta home eka link karahan-->
                        </ul>

                    </li>
                </ul>
            </div><!-- end nav-collapse-->
        </div><!--end container-->
    </div><!--end navbar-->

    <hr>
    <hr>
    <hr>
    <hr>

    <h4 align="center"><strong>Supplier Details Table</strong></h4>
    <hr>
    <table  class="table table-bordered">
        <tr>
            <th width="10%" align="center">Supllier ID</th>
            <th width="25%" align="center">Supplier</th>
            <th width="30%" align="center">Email</th>
            <th width="10%" align="center">Telephone</th>
            <th width="25%" align="center">Address</th>
        </tr>

    </table>


</div><!--end main container-->

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

