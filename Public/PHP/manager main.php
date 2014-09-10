<?php
include("../../Includes/Header.php");
?>
<body>

<div class="container" id="main">
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
					<li><a href = "manager.php">Manage Profiles</a></li>
                    <li class="dropdown">
                        <a href = "#" class="dropdown-toggle" data-toggle="dropdown">Reports<strong class="caret"></strong></a>
                        <ul class = "dropdown-menu">
                            <li><a href = "#">View Report</a></li>
                            <li><a href = "#">Send Report</a></li>
                        </ul><!--end of dropdown menu-->
                    </li>
                </ul>
                <ul class = "nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user">Manager<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-cog"> Settings</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-briefcase"> Update Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="../../index.html"><span class="glyphicon glyphicon-off"> Sign-Out</a></li><!--methenta home eka link karahan-->
                        </ul>

                    </li>
                </ul>
            </div><!--end nav-collapse-->
        </div><!--end container-->

    </div><!--end navbar-->

</div> <!--end container-->

<div class = "carousel slide" id="Company">

    <ol class="carousel-indicators">
        <li class ="active" data-slide-to="0" data-target="#Company"></li>
        <li class ="active" data-slide-to="1" data-target="#Company"></li>
        <li class ="active" data-slide-to="2" data-target="#Company"></li>


    </ol>
    <div class = "carousel-inner">
        <div class = "item active" id = "slide1"></div>
        <div class = "item" id = "slide2"></div>
        <div class = "item" id = "slide3"></div>

    </div><!--end carousel inner-->

    <a class="left carousel-control" data-slide="prev" href="#Company"><span class="icon-prev"></span></a>
    <a class="right carousel-control" data-slide="next" href="#Company"><span class="icon-next"></span></a>
</div><!--end carousel slide-->



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

<footer>
    <div class="container">
        <div class = "row">
            <div class="col-sm-2">
                <h4>SANHINDA PUBLICATIONS</h4>
            </div>
        </div>
    </div>
</footer>
</html>