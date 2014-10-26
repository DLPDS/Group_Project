<html>
<head>

<!--script type="text/javascript">
    (function () {
        function contentLoaded () { 
                document.getElementById("div").addEventListener('keyup', function (e) {
                    if (e.keyCode === 13) {
						alert('good');
                       }
                }, false);
        }
        document.getElementById("div").addEventListener('DOMContentLoaded', contentLoaded, false); 
    }());
    </script>

</script-->




</head>
<body>
<div>
<input type="text" placeholder="name" id="name">
</div>
<input type="text" placeholder="lastname" id="Last_Names">
<input type="submit" value="submit" id="button">
<div id="Last_Name"></div>







<!-- All Javascript at the bottom of the page for faster page loading -->

<!-- First try for the online version of jQuery-->
<script src="http://code.jquery.com/jquery.js"></script>

<!-- If no online access, fallback to our hardcoded version of jQuery -->
<script>window.jQuery || document.write('<script src="../JS/jquery-1.8.2.min.js"><\/script>')</script>

<!-- Bootstrap JS -->
<script src="../JS/bootstrap.min.js"></script>

<!-- Custom JS -->
<script src="../JS/script.js"></script>

<script src="globaltest.js"></script>
</body>
</html>