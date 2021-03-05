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

  <section class="section1_black_block">
    <div class="container">
      <div class="center-text__section">
        <h1>Amelia Woods</h1>
        <h3>I am a Graphic & Web Designer based in New York, specializing 
            in User Interface Design and Development.</h3>
      </div>
    </div>
  </section>

  <section class="numbers_section">
    <div class="container">
      <div class="numbers__list">
        <div class="numbrs__list num1">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
          <g>
            <g>
              <path d="M488.727,279.273c-6.982,0-11.636,4.655-11.636,11.636v151.273c0,6.982-4.655,11.636-11.636,11.636H46.545
                c-6.982,0-11.636-4.655-11.636-11.636V290.909c0-6.982-4.655-11.636-11.636-11.636s-11.636,4.655-11.636,11.636v151.273
                c0,19.782,15.127,34.909,34.909,34.909h418.909c19.782,0,34.909-15.127,34.909-34.909V290.909
                C500.364,283.927,495.709,279.273,488.727,279.273z"/>
            </g>
          </g>
          <g>
            <g>
              <path d="M477.091,116.364H34.909C15.127,116.364,0,131.491,0,151.273v74.473C0,242.036,11.636,256,26.764,259.491l182.691,40.727
                v37.236c0,6.982,4.655,11.636,11.636,11.636h69.818c6.982,0,11.636-4.655,11.636-11.636v-37.236l182.691-40.727
                C500.364,256,512,242.036,512,225.745v-74.473C512,131.491,496.873,116.364,477.091,116.364z M279.273,325.818h-46.545v-46.545
                h46.545V325.818z M488.727,225.745c0,5.818-3.491,10.473-9.309,11.636l-176.873,39.564v-9.309c0-6.982-4.655-11.636-11.636-11.636
                h-69.818c-6.982,0-11.636,4.655-11.636,11.636v9.309L32.582,237.382c-5.818-1.164-9.309-5.818-9.309-11.636v-74.473
                c0-6.982,4.655-11.636,11.636-11.636h442.182c6.982,0,11.636,4.655,11.636,11.636V225.745z"/>
            </g>
          </g>
          <g>
            <g>
              <path d="M314.182,34.909H197.818c-19.782,0-34.909,15.127-34.909,34.909v11.636c0,6.982,4.655,11.636,11.636,11.636
                s11.636-4.655,11.636-11.636V69.818c0-6.982,4.655-11.636,11.636-11.636h116.364c6.982,0,11.636,4.655,11.636,11.636v11.636
                c0,6.982,4.655,11.636,11.636,11.636c6.982,0,11.636-4.655,11.636-11.636V69.818C349.091,50.036,333.964,34.909,314.182,34.909z"
                />
            </g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          </svg>

          <div class="text_for__numbers__list for__num__1">
            <h3>548</h3>
            <p>projects completed</p>
          </div>
        </div>
        <div class="numbrs__list num2">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
          <g>
            <g>
              <path d="M347.216,301.211l-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83c-10.966,0-19.83,8.864-19.83,19.83v118.978
                c0,6.246,2.935,12.136,7.932,15.864l79.318,59.489c3.569,2.677,7.734,3.966,11.878,3.966c6.048,0,11.997-2.717,15.884-7.952
                C357.766,320.208,355.981,307.775,347.216,301.211z"/>
            </g>
          </g>
          <g>
            <g>
              <path d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.833,256-256S397.167,0,256,0z M256,472.341
                c-119.275,0-216.341-97.066-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.066,216.341,216.341
                S375.275,472.341,256,472.341z"/>
            </g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          </svg>

          <div class="text_for__numbers__list for__num__1">
            <h3>1465</h3>
            <p>WORKING HOURS</p>
          </div>
        </div>
        <div class="numbrs__list num3">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
          <g>
            <g>
              <path d="M512,197.819l-185.933-12.228L256,9.571l-70.067,176.021L0,197.82l142.658,120.93L95.856,502.429L256,401.214
                l160.144,101.215l-46.8-183.671L512,197.819z M256,365.724l-112.464,71.08l32.827-128.831L75.829,222.888l130.971-8.603
                L256,90.687l49.2,123.599l131.124,8.602l-100.689,85.077l32.829,128.839L256,365.724z"/>
            </g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          </svg>

          <div class="text_for__numbers__list for__num__1">
            <h3>612</h3>
            <p>POSITIVE FEEDBACKS</p>
          </div>
        </div>
        <div class="numbrs__list num4">
          <svg viewBox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0"/></svg>

          <div class="text_for__numbers__list for__num__1">
            <h3>735</h3>
            <p>HAPPY CLIENTS</p>
          </div></div>
      </div>
    </div>
  </section>

  <section class="about_us__section">
    <div class="container">
      <div class="about_us__section__wrapper">
        <div class="img_block"></div>
        <div class="content_block">
          <h2>About me</h2>
          <h4>Given let waters air sea had you'll, may seed abundantly fish. 
            Were, you'll earth forth winged above brought. Own darkness 
            they're him can't fourth sea place have.<br><br>
            
            So the above May stars cattle fruitful face shall. Tree it, winged. 
            Every signs male firmament us. Morning him.</h4>
            <img src="./img/about/about_us__section/signature.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="needs_project__section">
    <div class="container">
      <div class="needs_project__section__wrapper">
        <h2>Need a Project?</h2>
        <h4>Let us know what you're looking for in an agency. We'll take a look and see 
          if this could be the start of something beautiful.</h4>
        <a href="#"><button>let’s talk</button></a>
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