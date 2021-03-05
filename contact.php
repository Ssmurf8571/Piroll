<?php 
session_start(); 
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>Piroll</title>
	<meta name="description" content="">

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="libs/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="libs/animate/animate.css">
	
	<link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/auth.css">
	<link rel="stylesheet" href="css/media.css">

	<script src="libs/modernizr/modernizr.js"></script>

</head>

<body>
	<header>
    <div class="container">
      <div class="header_nav">
        <div class="header_logo">
          <a href="index.php">
            <svg width="31" height="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="98 38 31 25"><image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAZCAYAAADJ9/UkAAADkklEQVRIS72WW4gcVRCGvzrTBuk+vTveMqiggriyrBc0YlA2aN6M4C0gGNEHkycvgWh8ND6oj0aFRH0yPigqCFEUjG8qBiViFC9BjAgmoLLxNrtdpxGd6SNn6VmG3t7tmYCpp2G6qv5Tf9V/Tom19mvgck69fSPW2mPABacem+OSpult3vu3gZ4xZtYY833TQXq93kvAZiADUmB/FEXbmuKKori0KIqDQCQit0sIsNbuB+4APlLVjYBfKVEcx5uMMe8B/4rInd77N4HTiqK4Oc/zA6scILD8AXAD8Jaqbl4Ej+P4PGPMd8CEiGzLsmxfXZJOp5PkeX7Ee38h8JSq7rLWPgk8JiLH4jiemZubc3WxaZpu9d4HxhaKopjO8/yXRfCy+vuBF4C/vPfTzrm5apI0TXd77x8BjqrqlcDfwOnW2q+AKRF5JsuyndW4JEk6IhKKOwN4QFVfDD5L4ICx1oZ+XAe8oapbhpPEcbzOGHMIaAEbVfXDoYPfCARK+0VRrM/z/PBwrLX2deAu4FNVnQWKKnjo/QzwZU0PI2ttAL7ae/+yc25rTXX7ROQ+4AtVXR8GuGzp0owAV6nqkUHscOUD+pf1MEmSnSLyNHDCGDO9sLDwZxV8YmLizKIoArVrvfePOud2183IcNwy8GoPW63Wnl6vF04be+/vds4FCmstSZItIvIakEdRNNPv97fXzMhSbB14oH+ph0Cg+3oReT/Lsk1NWk7T9ID3/ibgEyDQv2xGVqR98CFJkkEPw1+LlXS73Z+awNvt9kUDpoLvSjOybOCGE5c9/BVY473/zDkXqhjJkiQ5JCLXAv8YY86tm5FVwUvt7wEeWnQU2ZBlWZDiqpam6az3/uPSaa+qbl8poLbnw87W2t+As4HfVfWcJvBx/BvBx6nEWjsWU43godIkSd4RkVvCzdRqtabm5+d/rDIwOTl5cb/fPxpuSu/9u865W5tYGgm81P4fQevAD6o6VU1srQ3AlwRlqOpZ5b2/Kv6o4KH6e0TklVI+DzvnnhuS5Q4Rebb8dq9z7tWmqhunvaa6z4F1QUJRFHW63W633W63e71eeAHXAIdV9ZpRgE8GfC3wc9hEgIOqusFaG2QVXqrwkJyvqif+F/BS+7uAJ0qAQP2O8vfjqhoepZFt5J5XtF9dOo+rathuxrKTBb8MCCt3iA/73hWq+u1YyJVNZqxYa+1e4EHgeVVdvILHtf8A03iQmnuJRLgAAAAASUVORK5CYII=" width="31" height="25" x="98" y="38"/></svg>
          </a>
        </div>
        <div class="header_nav-menu"> 
          <div class="nav-list-menu">
            <ul>
              <li class="nav-item"><a class="nav-link" href="index.php">home</a></li>
              <li class="nav-item"><a class="nav-link" href="about.php">about</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.php">contact</a></li>
              <li class="nav-item">
                <button id="login_btn">Login</button>
  
                <div id="id01" class="modal">
                  
                  <form class="modal-content animate" action="/Piroll/php/login.php" method="post">
                    <div class="imgcontainer">
                      <span class="close" id="close" title="Close Modal">&times;</span>
                    </div>
                
                    <div class="container_auth">
                      <label for="uname"><b>Username</b></label>
                      <input type="text" name="login" placeholder="Enter Username" name="uname" required>
                
                      <label for="psw"><b>Password</b></label>
                      <input type="password" name="password" placeholder="Enter Password" name="psw" required>
                        
                      <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                      </label>
                    </div>
                
                    <div class="container_auth" style="background-color:#f1f1f1">
                      <button type="button" id="close" class="cancelbtn" >Cancel</button>
                      <button type="submit">Login</button>
                      <span class="psw register_btn"><a href="#">register?</a></span>
                      <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="contacts__section">
      <div class="container">
        <div class="contacts_info__wrapper">
          <div class="contact__info">
            <h2>Contact Info:</h2>
            <h4>To give give beginning divide, cattle. Give moving 
              won't, there the abundantly she'd she'd brought air 
              upon. Light hath subdue. Life days creature upon 
              first heaven gathering dry.</h4>
            <h4><span>Address:</span>  10111 Santa Monica Boulevard, LA <br>
              <span>Phone:</span>  +44 987 065 908 <br>
              <span>Email:</span>  info@Example.com <br>
              <span>Fax:</span>  +44 987 065 909</h4>
          </div>
          <form class="user__get_in_touch" action="#" method="POST">
            <div class="contact__form">
              <input type="text" placeholder="Your Name">
              <input type="email" placeholder="Your Email">
              <input type="text" placeholder="Your Title">
              <textarea name="" id="" cols="auto" rows="auto" placeholder="Your Comment"></textarea>
            </div>
            <button type="submit">send message</button>
          </form>
        </div>
      </div>
  </section>

  <section class="map_center__section">
    <div class="container">
      <div class="map__wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.172762280429!2d-118.3399945843945!3d34.09071442314821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bebb074ab833%3A0x3003ecc0a07f08fe!2zU2FudGEgTW9uaWNhIEJsdmQsIENhbGlmb3JuaWEsINCh0KjQkA!5e0!3m2!1sru!2snl!4v1614067627382!5m2!1sru!2snl" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="footer_content_place">
        <div class="content content1">
          <h3>Piroll Design, Inc.</h3>
          <h5>© 2017 Piroll. All rights reserved.
            Designed by robirurk.</h5>
        </div>
        <div class="content content2">
          <h5>hello@pirolltheme.com
            +44 987 065 908 </h5>
        </div>
        <div class="content content3">
          <ul>
            <li><a href="#">Projects</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Carreer</a></li>
          </ul>
          <ul>
            <li><a href="#">News</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Legals</a></li>
          </ul>
        </div>
        <div class="content content4">
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Dribbble</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <div class="register_form">

    <div id="id02" class="modal">
      <span class="close" title="Close Modal">&times;</span>
      <form class="modal-content animate" action="/Piroll/php/reg.php" method="post">
        <div class="imgcontainer">
          <span class="close" id="close" title="Close Modal">&times;</span>
        </div>
        <div class="container_auth">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="login"><b>Username</b></label>
          <input name="login" type="text" placeholder="Enter Username" required>

          <label for="email"><b>Email</b></label>
          <input name="email" type="email" placeholder="Enter Email" required>

          <label for="psw"><b>Password</b></label>
          <input name="password" type="password" placeholder="Enter Password" required>

          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input name="psw-repeat" type="password" placeholder="Repeat Password" required>
          
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>

          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="button" class="cancelbtn" id="close">Cancel</button>
            <button type="submit" name="submit" class="signupbtn submit">Sign Up</button>
          </div>
        </div>
      </form>
    </div>
  </div>

	<div class="hidden"></div>

	<div class="loader">
		<div class="loader_inner"></div>
	</div>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

    <div>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="libs/waypoints/waypoints.min.js"></script>
      <script src="libs/animate/animate-css.js"></script>
      <script src="libs/plugins-scroll/plugins-scroll.js"></script>
      
      <script src="js/common.js"></script>
    </div>
    
</body>
</html>