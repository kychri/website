<html>
<head>
  <title> Kyle Christ | Developer, Runner</title>
    <meta content="width=device-width,initial-scale=1.0,user-scalable=yes,minimum-scale=1.0,maximum-scale=3.0" id="viewport" name="viewport">
  <meta http-equiv="Cache-control" content="no-cache">

  <link rel="icon" type="image/jpg" src="kc_logo.JPG">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="layout-grid.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

  <link rel="stylesheet" href="animated-scroll-anchor.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117243334-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117243334-2');
</script>

<!-- Start of Side Navbar -->
<style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}
</style>
<!-- End of side Navbar -->

</head>

<body>

  <!-- Start slide menu -->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a>
    <a href="about.php">Medlock</a>
    <a href="photos.php">About</a>
    <a href="">Contact</a>
  </div>

  <!-- Sticky Navbar for Menu Select -->
  <div id="main">
    <span onclick="openNav()">&#9776; Projects</span>
  </div>

  <script>
  window.onscroll = function() {myFunction()};

  var main = document.getElementById("main");
  var sticky = main.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      main.classList.add("sticky")
    } else {
      main.classList.remove("sticky");
    }
  }
  </script>

  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("main").style.marginLeft = "200px";
    document.body.style.backgroundColor = "gray";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
  }
  </script>
  <!-- End of Sticky SideNavbar -->

<!-- Landing Div of Website -->
<!-- Interactive js particles -->
<div id="particles-js"></div>
<div id="overlay">
  <div class="text">
    <p> Hi! I'm Kyle. </p>
  </div>
</div>
<div class="scroll-button">
  <section id="section07" class="demo">
    <a href="#intro-wrapper"><span></span><span></span><span></span></a>
  </section>
</div>
<script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>

<!-- Start of Drop down anchor -->
<script>
$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});
</script>

<!-- End of drop down anchor -->

  <div id ="intro-wrapper" class="intro-wrapper">
    <div class="container">
      <div class="prof-pic">
        <img src="NYC_profile.jpg" alt="Intro Pic">
      </div>
      <div class="prof-descr">
        <p> I'm a software engineer at the SAS headquarters. I'm passionate about running,
           travel, and bringing knowledge to others through my activities as
           a blogger.
        </p>
      </div>
    </div>
  </div>

<!-- Quick Intro Div -->
<div class="skills-wrapper">
  <div class="container">
    <div class="item-1">
        <div class="skill">
          <div class="skill-logo">
            <img src="automation_dev.PNG" alt="Rocket Symbol">
          </div>
          <h3> Automation & Development </h3>
            <p>
            I'm a fan of having technology do most of the work for me.
            I write code for an automation development team at SAS.
            </p>
        </div>
      </div>
      <div class="item-2">
        <div class="skill">
          <div class="skill-logo">
            <img src="frontend_dev_symbol.JPG" alt="Developer Symbol">
          </div>
          <h3> Front-End Developer </h3>
          <p>
          I like coding my own designs. Bringing my imagination to technology :)
          </p>
        </div>
      </div>
      <div class="item-3">
        <div class="skill">
          <div class="skill-logo">
            <img src="Entrepreneurship.JPG" alt="Developer Symbol">
          </div>
          <h3> Entrepreneur </h3>
          <p>
            Imagine a world where you wake up inspired and come home from work
            fulfilled at the end of the day. I'm paving a path for an idea
            I believe in.
          </p>
        </div>
      </div>
      <div class="item-4">
        <div class="skill">
          <div class="skill-logo">
            <img src="Systems_engineer.JPG" alt="Lightbulb">
          </div>
          <h3> Systems Engineer </h3>
          <p>
          I studied electrical and computer systems engineering in college.
          Having the ability to design and troubleshoot systems
          is an incredibly rewarding skill.
          </p>
        </div>
      </div>
    </div>
  </div>


<!-- Running Image Div -->
  <div class="running_views" style="height:100px; padding:50px; vertical-align:middle;">
    <h1> Running means the world to me </h1>
    <p> Lets build a stronger body and challenge our minds, while talking
      about the greater things in life.
      Here are a some of my favorite pictures that display the emotions of running.
     </p>
  </div>

  <ul id="run">
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="Farah_win.jpg" />
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="Coburn.png" />
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="Osako.jpg" />
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="Shalane_flanagan.jpg" />
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="Kenyan1.jpg" />
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="NewYork_marathon.jpg" />
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="kid_running.jpg" />
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="Bolt_andre.jpg" />
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="Edwin.jpeg" />
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="runner_sil.jpg" />
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img"/>
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="amputee_kid.jpg" />
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="Chicago_marathon.jpg" />
              <span class="rig-overlay"></span>
          </a>
      </li>
      <li>
          <a class="rig-cell">
              <img class="rig-img" src="Wayde_van_niekerk.jpg" />
              <span class="rig-overlay"></span>
          </a>
      </li>
</ul>

<!-- End of Running Section -->

<!-- Values Section -->

<div id = "values" >
  <div class="my_system">
    <h1> This is my system </h1>
    <p> READ EVERYDAY </p>
    <p> DON'T TAKE YOURSELF TOO SERIOUSLY </p>
    <p> BELIEVE IN CHANGE </p>
    <p> INVEST IN IDEAS THAT MATTER </p>
    <p> BE YOUR OWN BIGGEST FAN </p>
</div>

<!-- End of Values Section -->

<!-- Closing Contact Info -->
<div id = "footer" >
  <div id="footer-inner">
     <div class="email-twitter">
       <span class="label"> email </span>
       <a href="mailto:kjhcris3@ncsu.edu">kjchris3@ncsu.edu</a>
       <span class = "spacing"></span>
       <span class = "label"> twitter </span>
       <a href = "http://twitter.com/KyleXChrist" target="_blank"> @KyleXChrist </a>
    </div>
    <ul>
      <li>
        <a href="//www.facebook.com/kyle.christ.5" target="_blank"> Facebook </a>
      </li>
      <li>
        <a href="//www.instagram.com/kylechristxc/" target="_blank"> Instagram </a>
      </li>
      <li>
        <a href="//nc.milesplit.com/athletes/2188231#.W5x7k63MzEY" target="_blank"> Milesplit </a>
      </li>

    <p> © 2018 Kyle Christ </p>

  </div>
</div>

 </body>
 </html>
