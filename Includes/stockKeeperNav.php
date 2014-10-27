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
					<li class="dropdown">
                        <a href = "#" class="dropdown-toggle" data-toggle="dropdown">Suppliers<strong class="caret"></strong></a>
                        <ul class = "dropdown-menu">
                            <li><a href ="#addSupplier" data-toggle="modal">Add Supplier</a></li>
                            <li><a href = "../PHP/viewSupplier.php">View Suppliers</a></li>
                        </ul><!--end of dropdown menu-->
                    </li>
					<li class="dropdown">
                        <a href = "#" class="dropdown-toggle" data-toggle="dropdown">Book Stock<strong class="caret"></strong></a>
                        <ul class = "dropdown-menu">
                            <li><a href ="#addBook" data-toggle="modal">Add Book</a></li>
                            <li><a href = "../PHP/Search.php">Book Details</a></li>
                        </ul><!--end of dropdown menu-->
                    </li>
					<li class="dropdown">
                        <a href = "#" class="dropdown-toggle" data-toggle="dropdown">Purchases<strong class="caret"></strong></a>
                        <ul class = "dropdown-menu">
                            <li><a href ="#addPurchase" data-toggle="modal">Add Purchase</a></li>
                            <li><a href = "../PHP/purchaseDetails.php">View Purchases</a></li>
                        </ul><!--end of dropdown menu-->
                    </li>
					<li class="dropdown">
                        <a href = "#" class="dropdown-toggle" data-toggle="dropdown">Sales<strong class="caret"></strong></a>
                        <ul class = "dropdown-menu">
                            <li><a href ="#addSale" data-toggle="modal">Add Sales</a></li>
                            <li><a href = "#">View Sales</a></li>
                        </ul><!--end of dropdown menu-->
                    </li>
                    

                </ul>
                  <ul class = "nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> STOCK KEEPER<strong class="caret"></strong> </span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-cog"> Settings</span></a></li>
                            <li class="divider"></li>
                            <li><a href="../../index.html"><span class="glyphicon glyphicon-off"> Sign-Out</span></a></li>
                        </ul>

                    </li>
                </ul>
            </div><!--end nav-collapse-->
        </div><!--end container-->

 </div><!--end navbar-->