<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bizallianz Admin Login</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">

<script type="text/javascript" src="login_script.js"></script>

</head>

<body>
<!--
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"  title="Dominahlife">Dominahlife</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!--<li class="active"><a href="http://www.codingcage.com/2015/11/ajax-registration-script-using-jquery-php.html">Go to Article</a></li>
            <li><a href="http://www.codingcage.com/p/about.html" target="_blank">About</a></li>
            <li><a href="http://www.codingcage.com/p/contact-me.html" target="_blank">Contact</a></li>-->
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Tutorials <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.codingcage.com/search/label/jQuery" target="_blank">jQuery</a></li>
                <li><a href="http://www.codingcage.com/search/label/Ajax" target="_blank">Ajax</a></li>
                <li><a href="#">MySQLI</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">PHP</li>
                <li><a href="http://www.codingcage.com/search/label/PHP OOP" target="_blank">PHP OOP</a></li>
                <li><a href="http://www.codingcage.com/search/label/PDO" target="_blank">PHP PDO</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse 
      </div>
</nav>
    -->
<div class="signin-form">

	<div class="container">
     
       
       <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Admin Login</h2><hr />
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
           
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" id="email" />
        <span id="check-e"></span>
        </div>
       
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>
        
           
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login To Account
			</button> 
        </div>  
      
      </form>

    </div>
   
</div>
   <br> 
     <footer id="footer">
            <div class="container">
                <div class="col-sm-4 col-sm-offset-4">
                    <!-- /.social links -->
                    
                    <div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright 2017 - Bizallianz</div>
                    <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
                </div>	
            </div>	
        </footer>
<br>
    
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>