<html>
    <head>

        <!-- Website Title & Description for Search Engine purposes -->
        <title></title>
        <meta name="description" content="">

        <!-- Mobile viewport optimized -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Bootstrap CSS -->
        <link href="../CSS/bootstrap.min.css" rel="stylesheet">
        <link href="../CSS/bootstrap-glyphicons.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../CSS/styles.css" rel="stylesheet">

        <!-- Include Modernizr in the head, before any other Javascript -->
        <script src="../JS/modernizr-2.6.2.min.js"></script>

        <script src="../JS/Kushan.js"></script>
        <script src="globaltest.js"></script>

    </head>

    <body>
    <div class="container">
    <hr>
    <form class="form-horizontal" method="post" action="updatebook.php">

        <div class="form-group">
            <label class="col-lg-2 control-label">ISBN</label>
            <div class="col-lg-4">
                <input class="form-control" id="ISBN" placeholder="" type="text" min=0 name="ISBN" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Title</label>
            <div class="col-lg-10">
                <input class="form-control" id="Title" placeholder="" type="text" name="Title" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Author</label>
            <div class="col-lg-10">
                <input class="form-control"  id="Author" placeholder="" type="text" name="Author" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Genre</label>
            <div class="col-lg-10">
                <input class="form-control" id="Genre" placeholder="" type="text" name="Genre" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Publisher</label>
            <div class="col-lg-10">
                <input class="form-control" id="Publisher" placeholder="" type="text" name="Publisher" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Price</label>
            <div class="col-lg-4">
                <input class="form-control" id="Price" placeholder="" type="number" name="Price" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Quantity</label>
            <div class="col-lg-4">
                <input class="form-control" id="Qty" placeholder="" type="number" name="Qty" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Supplier ID</label>
            <div class="col-lg-4">
                <input class="form-control" id="SupID" placeholder="" type="number" name="SupID" required="">
            </div>
        </div>

        <div class="form-group">
        <label class="col-lg-2 control-label"></label>
        <div class="col-lg-10">
            <input type="submit" value="Submit" class="btn btn-default" name="updateManually">
        </div>
        </div>





    </form>
    </div>
    </body>
</html>