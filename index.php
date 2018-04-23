<!DOCTYPE html>
<html lang="en">
<head>
  <title>Igor Solaja | Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <script type="text/javascript" src="javascript/smoothscroll.js"></script>
</head>
<body>

<!--NAVIGATION-->
  <a id="home"></a>
  <nav class="navbar navbar-expand-md bg-light navbar-light sticky-top">
    <a class="navbar-brand smoothScroll" href="#home">$<u>HOME</u> = </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <!--NAV-->
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link smoothScroll" href="#about_me">"ABOUT_ME";</a>
          </li>
          <li class="nav-item">
          <a class="nav-link smoothScroll" href="#projects">"PROJECTS";</a>
          </li>
          <li class="nav-item">
          <a class="nav-link smoothScroll" href="#contact">"CONTACT";</a>
          </li>
        </ul>

        <!--SOCIAL NAV-->
        <ul class="navbar-nav fixed-left ml-auto">
          <li class="nav-item"><a target="_blank" class="nav-link" href="https://www.facebook.com/ramoneiggy"><i class="fa fa-facebook" style="font-size:24px"></i></a></li>
          <li class="nav-item"><a target="_blank" class="nav-link" href="https://www.linkedin.com/in/igorsolaja"><i class="fa fa-linkedin" style="font-size:24px"></i></a></li>
          <li class="nav-item"><a target="_blank" class="nav-link" href="https://github.com/ramoneiggy"><i class="fa fa-github" style="font-size:24px"></i></a></li>
          </ul>
      </div>
  </nav> 

<!--HEADER-->
  <header>
  <div class="jumbotron jumbotron-fluid text-right">
  <div class="container">
    <!--HEADER IMAGE-->
    <div class="rotate_image">
      <img class="turtle rounded-circle" src="images/header_small.jpg" alt="pic with turtle">
    </div>
    <!--HEADER TEXT-->
  <h1 id="about_me">Hi, I'm <strong><a target="_blank" href="https://www.youtube.com/watch?v=nM__lPTWThU" class="judas">Igor<a></strong><br>I'm a <u>web developer</u></h1>
  <p>Some stuff that I use are PHP | MYSQL | HTML | CSS | JAVASCRIPT | BOOTSTRAP | WORDPRESS | PHOTOSHOP</p>
  </div>
</div>
</header>
  
<!--PROJECTS-->
  <!--row 1-->
<div class="container-fluid bg-3 text-center">    
  <h3 id="projects">PROJECTS</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <a href="https://www.tetatortusa.com/" type="button" class="btn btn-light">
      <p>Teta Tortuša</p>
      <img src="images\teta.png" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
      </a>
    </div>   
    <div class="col-sm-3">
      <a href="https://www.pornreview.com/" type="button" class="btn btn-light">
      <p>Porn review</p>
      <img src="images\teta.png" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
      </a>
    </div>   
  </div>
</div>

<br>
<br>

<!--CONTACT (not working yet)-->
 <div class="container-fluid bg-grey">
  <h3 id="contact" class="text-center">CONTACT</h3>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>




<!--FOOTER-->
<footer class="container-fluid text-center">
  <p>
  &copy; 
  <?php
  $fromYear = 2014; 
  $thisYear = (int)date('Y'); 
  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> <a href="#">Igor Šolaja</a>.
  </p>
</footer>

</body>
</html>