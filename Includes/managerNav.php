<div class="navbar navbar-fixed-top">
        <div class="container">
            <button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class = "navbar-brand" href="#"><img src = "../../Images/logo.png" alt="My Logo"></a>
            <div class = "nav-collapse collapse navbar-responsive-collapse">
                <ul class = "nav navbar-nav">
                    <li class= "active"><a href = "#">Home</a></li>
                    <li><a href = "../PHP/Search.php">Books</a></li>
                    <li><a href = "#">Sales</a></li>
                    <li><a href = "#">Payables</a></li>
                    <li><a href = "#">Receivables</a></li>
                    <li><a href = "../PHP/viewSupplier.php">Suppliers</a></li>
                    <li class="dropdown">
                        <a href = "#" class="dropdown-toggle" data-toggle="dropdown">Employees<strong class="caret"></strong></a>
                        <ul class = "dropdown-menu">
                            <li><a href ="#addProfile" data-toggle="modal">Add Employee</a></li>
                            <li><a href = "../PHP/viewStaff.php">View Details</a></li>
                        </ul><!--end of dropdown menu-->
                    </li>
                    <li class="dropdown">
                        <a href = "#" class="dropdown-toggle" data-toggle="dropdown">Reports<strong class="caret"></strong></a>
                        <ul class = "dropdown-menu">
                            <li><a href = "#">Daily Reports</a></li>
                            <li><a href = "#">Monthly Reports</a></li>
                        </ul><!--end of dropdown menu-->
                    </li>

                </ul>
                <ul class = "nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Manager <strong class="caret"></strong></span></a>
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