<!--my careacile and bootstrap-->
<link type="text/css" rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="view/custom-style.css">
        <?php //links for all my other pages//
        require_once (__DIR__. "/view/header.php");
        require_once (__DIR__."/controller/create-db.php");
        require_once (__DIR__."/view/footer.php");
        require_once (__DIR__."/view/navigation.php");
        ?>
<div class="container">
    <!--//code to start the jumbo tron//-->
    <div class="jumbotron">
        
        <h1>"DAVID BLOG"</h1>
<ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="index.php">Home</a></li>
    <li role="presentation"><a href="login.php">Login</a></li>
    <li role="presentation"><a href="register.php">Register</a></li>
</ul>
          
    </div>
</div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>