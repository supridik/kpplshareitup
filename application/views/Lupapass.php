<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Share-it-up! : Lupa Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href=<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"?> rel="stylesheet">      
    <link href=<?php echo base_url()."assets/bootstrap/css/bootstrap-responsive.min.css"?> rel="stylesheet">    
    <link href=<?php echo base_url()."assets/themes/css/bootstrappage.css"?> rel="stylesheet"/>
    
    
    <!-- global styles -->
    <link href=<?php echo base_url()."assets/themes/css/flexslider.css"?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/themes/css/main.css" ?> rel="stylesheet">

    <!-- scripts -->
    <script src=<?php echo base_url()."assets/themes/js/jquery-1.7.2.min.js"?>></script>
    <script src=<?php echo base_url()."assets/bootstrap/js/bootstrap.min.js"?>></script>        
    <script src=<?php echo base_url()."assets/themes/js/superfish.js"?>></script> 
    <script src=<?php echo base_url()."assets/themes/js/jquery.scrolltotop.js"?>></script>
    <!--[if lt IE 9]>     
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>
    <body>

    <form action="<?php echo base_url()."Login/aksi_login"; ?>" method="POST" class="form login">
    <div id="top-bar" class="container">
      <div class="row">
        <div class="span4">
          <form method="POST" class="search_form">
            <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
          </form>
        </div>
        <div class="span8">
          <div class="account pull-right">
            <ul class="user-menu">
              <li><a href=<?php echo base_url().""?>>Login</a></li>       
              <li><a href=<?php echo base_url()."register"?>>Register</a></li>  
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div id="wrapper" class="container">
      <section class="navbar main-menu">
        <div class="navbar-inner main-menu">        
          <a href=<?php echo base_url().""?> class="logo pull-left"><img src="assets/img/logo2.png" class="site_logo" alt="" style="margin-left:-10px;"></a>
          <nav id="menu" class="pull-right">
            <ul>
              <li><a href="./products.html">Woman</a>         
                <ul>
                  <li><a href="./products.html">Lacinia nibh</a></li>                 
                  <li><a href="./products.html">Eget molestie</a></li>
                  <li><a href="./products.html">Varius purus</a></li>                 
                </ul>
              </li>                             
              <li><a href="./products.html">Man</a></li>      
              <li><a href="./products.html">Sport</a>
                <ul>                  
                  <li><a href="./products.html">Gifts and Tech</a></li>
                  <li><a href="./products.html">Ties and Hats</a></li>
                  <li><a href="./products.html">Cold Weather</a></li>
                </ul>
              </li>             
              <li><a href="./products.html">Hangbag</a></li>
              <li><a href="./products.html">Best Seller</a></li>
              <li><a href="./products.html">Top Seller</a></li>
            </ul>
          </nav>
        </div>
      </section>      
      <section class="header_text sub">
      <img class="pageBanner" src="themes/images/pageBanner.png" alt="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp New products" >
        <h4><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLupa Password</span></h4>
      </section>      
      <section class="main-content">  
        <form action="<?php echo base_url()."Login/aksi_login"; ?>" method="POST" class="form login">
        <div class="row">
          <div class="span5">         
            <h4 class="title" style="margin-left:350px;"><span class="text"><strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLupa Password</strong> Form</span></h4>
            <form action="#" method="post">
              <input type="hidden" name="next" value="/">
              <fieldset>
                <div class="control-group">
                  <label  for="name"class="control-label"style="margin-left:400px;">Nama Lengkap</label>
                  <div class="controls">
                    <input name="name" style="width: 405px; margin-left:400px;" type="text" placeholder="Enter your name" id="name" class="input-xlarge" required>
                  </div>
                </div>
                <div class="control-group">
                  <label for="username" class="control-label" style="margin-left:400px;">Username</label>
                  <div class="controls">
                    <input name="username" style="width: 405px; margin-left:400px;" type="text" placeholder="Enter your username" id="username" class="input-xlarge" required>
                  </div> <br>
                </div>
                <div class="control-group">
                  <input tabindex="3" style="margin-left:550px;" class="btn btn-inverse large" type="reset" value="Reset Password">
                  
                </div>
              </fieldset>
            </form>       
          </div>    
        </div>
      </section> 



      <section id="footer-bar">
        <div class="row">
          <div class="span3">
            <h4>Navigation</h4>
            <ul class="nav">
              <li><a href="./index.html">Homepage</a></li>  
              <li><a href="./about.html">About Us</a></li>
              <li><a href="./contact.html">Contac Us</a></li>
              <li><a href="./cart.html">Your Cart</a></li>
              <li><a href="./register.html">Login</a></li>              
            </ul>         
          </div>
          <div class="span4">
            <h4>My Account</h4>
            <ul class="nav">
              <li><a href="#">My Account</a></li>
              <li><a href="#">Order History</a></li>
              <li><a href="#">Wish List</a></li>
              <li><a href="#">Newsletter</a></li>
            </ul>
          </div>
          <div class="span5">
            <p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
            <br/>
            <span class="social_icons">
              <a class="facebook" href="#">Facebook</a>
              <a class="twitter" href="#">Twitter</a>
              <a class="skype" href="#">Skype</a>
              <a class="vimeo" href="#">Vimeo</a>
            </span>
          </div>          
        </div>  
      </section>
      <section id="copyright">
        <span>Copyright ©Share-It-Up 2017</span>
      </section>
    </div>
    <script src="themes/js/common.js"></script>
    <script>
      $(document).ready(function() {
        $('#checkout').click(function (e) {
          document.location.href = "checkout.html";
        })
      });
    </script>   
    </body>
</html>