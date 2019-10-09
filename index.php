<?php 
session_start();
	if(isset($_SESSION["language"])){
		require_once($_SESSION["language"]);
	}else{
		$_SESSION["language"] = "lang/eng.php";
		require_once($_SESSION["language"]);
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mudh</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <style>
@font-face{
    font-family: "Quickstand-Regular";
    src:url("fonts/english/Quicksand-Regular.ttf");
}
@font-face{
    font-family: "Quickstand-Bold";
    src:url("fonts/english/Quicksand-Bold.ttf");
}
 @font-face{
    font-family: "Quickstand-Light";
    src:url("fonts/english/Quicksand-Light.ttf");
}
@font-face{
    font-family: "Quickstand-Medium";
    src:url("fonts/english/Quickstand-Medium.ttf");
}
@font-face{
    font-family: "Roboto-Black";
    src:url("fonts/english/Roboto/Roboto-Black.ttf");
}
@font-face{
    font-family: "Roboto-Light";
    src:url("fonts/english/Roboto/Roboto-Light.ttf");
}
@font-face{
    font-family: "Bahij Nazanin-Bold";
    src:url("fonts/DariPashto/Bahij Nazanin-Bold.ttf");
}
@font-face{
    font-family: "Bahij Nazanin-Regular";
    src:url("fonts/DariPashto/Bahij Nazanin-Regular.ttf");
}
@font-face{
    font-family: "Noori-Bold";
    src:url("fonts/DariPashto/Noori-Bold.ttf");
}
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;

  }
  h2 {
      font-size: 24px;
      color: #303030;
      font-weight: 600;
      
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: black;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .thumbnail video {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: blue;
  }
  .carousel-indicators li {
      border-color: blue;
     
  }
  .carousel-indicators li.active {
      background-color: blue;
  }
 
  .panel {
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer {
      background-color: white !important;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #2e6da4 !important;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 0px;
      border-radius: 0;
      font-family: Quickstand-Regular;


  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
      font-size: 15px;
  }
  .navbar-brand{
    font-size: 1em;

  }
  .navbar-brand:hover{
    background-color: white !important;
    color:#35354e !important;
    font-size: 20px;
  }
 .navbar-nav li a{
  font-size: 14px;
 	border-right: 1px solid #2a609a;
 }
  .navbar-nav li a:hover{
      color: #35354e !important;
      background-color: #fff !important;
      font-size: 15px;
  }
   .navbar-nav li.active a{
   	background-color: #144671 !important;
   
   }
   .navbar-nav li.active a:hover{
   	background-color: white !important;
   
   }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
  }
  footer p{
    margin-top: 24px;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;	
      animation-duration: 1s;	
      -webkit-animation-duration: 1s;
      visibility: visible;			
  }
  @keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }	
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .ffooter{
    	font-size: 10px;
    }
  }
.navbar-nav {
    float: left !important;
    margin-left: 0 !important;}

.language{
    display: none;
  }
  .dropdown1{
    background-color: #2e6da4;
  }
    #aemal{
    background-color: gray;
    animation-name: b;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    height: 700px;
    background-image: url("img/forum.jpg");
    font-family: Quickstand-Regular;
    
  }

  @keyframes bg{
    0%{background-image: url("img/41.jpg");}
    #10%{background-image: url("img/23.jpg");}
    #20%{background-image: url("img/forum.jpg");}
    #30%{background-image: url("img/41.jpg");}
    #40%{background-image: url("img/forum.jpg");}
    50%{background-image: url("img/23.jpg");}
    #60%{background-image: url("img/forum.jpg");}
    #70%{background-image: url("img/41.jpg");}
    #80%{background-image: url("img/23.jpg");}
    #90%{background-image: url("img/forum.jpg");}
    100%{background-image: url("img/forum.jpg");}
    
  }
  #nAe{
    display: none;

  }
  #jobsExtra{
    display: none;
  }
  #exExtra{
    display: none;
  }
  #cAaExtra{
    display: none;
  }
  #ex1Extra{
    display: none;
  }
  #contactExtra{
    display: none;
  }
  .buttonLinks{
    background-color: #337ab7;
    color: white;
    border:0.5px solid #2e6da4;
  }
  .buttonLinks a{
    color: white;
    font-weight: bold;
  }
  @media screen and (max-width: 800px){
    .buttonLinks a{
    color: white;
    font-weight: normal;
    font-size: 12px;
  }
  .navbar-nav li a{

 	border-right: none;
 }
  p.goal{
  	font-size: 1.6em !important;
  }
  #lang{
    display: none;
  }
  .language{
    display: inline;
  }
  .item h4{
    font-size: 15px;
  }
  .abc{
  	font-size: 14px;
  }
  h2{
  	font-size: 18px;
  }
  h4{
  	font-size: 15px;
  }
 .socialForPhones{
  display: visible !important;
 }
 .socialForComputers{
  display: none;
 }
}
  @media screen and (min-width: 1000px){
    .panel-body{
      margin-left: 30px;
   }
    
  }
  @media screen and (max-width: 1088px){
  	.abc{
  		font-size: 14px;
  	}
  }
.fa{
  font-size: 23px;
  color: #2e6da4;
}
  .ctrlButton{
    background-color: #337ab7;
    color: white;
    border:0.5px solid #2e6da4;
  }
  p.goal{
  	font-size:2em;
  }
  .owner{
  	float: left;
  }
  .fonts{
    font-family: Quickstand-Bold;
  }

.fonts1{
    font-family: Quickstand-Light;
  }

 .fonts2{
    font-family: Quickstand-Bold;
  } 
  .fonts3{
    font-family: Quickstand-Medium;
  }
  .Exfonts{
    font-family: "Bahij Nazanin-Regular";
  }
  #secondPart{
    background-color: white;
    box-shadow: 1px 1px 10px 1px gray;
  }
  .shadow{
    box-shadow: 2px 2px 2px 2px gray;
  }
 .shadow:hover{
    box-shadow: 3px 3px 3px 3px gray;
  }

  </style>
<?php 
if($_SESSION["language"] != "lang/eng.php"){ ?>
<style>

.navbar li a{
	 color: #fff !important;
	 font-size: 18px;
}
.navbar{
	direction: rtl;
  font-family: "Bahij Nazanin-Bold";
}
.navbar ul li a{
	margin-left: 8px;
  font-size: 12px;
}
#aemal{
	direction: rtl;
}
.boxes{
	direction: rtl !important;
	text-align: center;
}
.abc{
	margin-left: 0px;
}
#buttons{
    margin-right: 20px;
  }
@media screen and (max-width: 800px){
  #buttons{
    margin-right: 5px;
  }
}
.b{ float: right; }
.c{
	float: left;
}	
.owner{
	float: right;
}
.Darifonts1{
  font-family: "Bahij Nazanin-Regular";
}
.Darifonts2{
  font-family: "Bahij Nazanin-Bold";
}
 </style>

<?php } ?>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top " style="border-radius: 5px;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="language">
      <a class="navbar-brand" href="checkLang.php?lang=eng">English</a>
      <a class="navbar-brand Exfonts" href="checkLang.php?lang=pashto">پشتنو</a>
      <a class="navbar-brand Exfonts" href="checkLang.php?lang=dari">دری</a>
      </div>
    </div>
     <?php if($_SESSION["language"] == "lang/eng.php"){ ?>
    <div class="collapse navbar-collapse navigation" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/index.php"){echo "active";} ?>"><a href="index.php"><span class="fa fa-home" style="color: white;font-size: 15px;"></span> <?php echo $home; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/about.php"){echo "active";} ?>"><a href=""><?php echo $about_us; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/intro.php"){echo "active";} ?>"><a href=""><?php echo $introduction; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/depul.php"){echo "active";} ?>"><a href=""><?php echo $depulations; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/project.php"){echo "active";} ?>"><a href=""><?php echo $project; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/program.php"){echo "active";} ?>"><a href=""><?php echo $program; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/masterplan.php"){echo "active";} ?>"><a href=""><?php echo $masterplan;?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/reports.php"){echo "active";} ?>"><a href=""><?php echo $reports;?></a></li>
        <li><a href="#contact"><?php echo $contact; ?></a></li>
        <li class="dropdown" id="lang"><a href="about.php" data-toggle="dropdown" class="dropdown-toggle"><?php echo $language; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown1">
              <li><a href="checkLang.php?lang=eng"><?php echo $english; ?></a></li>
              <li><a href="checkLang.php?lang=pashto" class="Exfonts"><?php echo $pashto; ?></a></li>
              <li><a href="checkLang.php?lang=dari" class="Exfonts"><?php echo $dari; ?></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <?php } ?>
    <?php if($_SESSION["language"] != "lang/eng.php"){ ?>
    <div class="collapse navbar-collapse text-center pull-right" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown" id="lang"><a href="about.php" data-toggle="dropdown" class="dropdown-toggle"> <?php echo $language; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown1">
              <li><a href="checkLang.php?lang=eng"><?php echo $english; ?></a></li>
              <li><a href="checkLang.php?lang=pashto"><?php echo $pashto; ?></a></li>
              <li><a href="checkLang.php?lang=dari"><?php echo $dari; ?></a></li>
          </ul>
        </li>
        <li><a href="#contact"><?php echo $contact; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/reports.php"){echo "active";} ?>"><a href=""><?php echo $reports;?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/masterplan.php"){echo "active";} ?>"><a href=""><?php echo $masterplan;?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/program.php"){echo "active";} ?>"><a href=""><?php echo $program; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/enterprise.php"){echo "active";} ?>"><a href=""><?php echo $enterprises; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/project.php"){echo "active";} ?>"><a href=""><?php echo $project; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/depul.php"){echo "active";} ?>"><a href=""><?php echo $depulations; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/intro.php"){echo "active";} ?>"><a href=""><?php echo $introduction; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/about.php"){echo "active";} ?>"><a href=""><?php echo $about_us; ?></a></li>
        <li class="<?php if($_SERVER["PHP_SELF"] == "/web/mudh/index.php"){echo "active";} ?>"><a href="index.php"><span class="fa fa-home" style="color: white;font-size: 15px;"></span> <?php echo $home; ?></a></li>
      </ul>
    </div>
    <?php } ?>
  </div>
</nav>

<div class="jumbotron" id="aemal">
<?php if($_SESSION["language"] == "lang/eng.php"){ ?>
  <img src="img/logo3.png" class="img img-responsive"> <br><br><br>
<?php  } ?> 
<?php if($_SESSION["language"] != "lang/eng.php"){ ?>
  <img src="img/logo1.png" class="img img-responsive"> <br><br><br>
<?php  } ?> 
  <span class="text-center a Darifonts1">
  <b><p class="goal"><?php echo $mudu_provides; ?>
  <b> <p class="goal"><?php echo $goal; ?><span style="color:#2e6da4; "><?php echo $goal1; ?></span></p> </b>
  <hr></p> </b>
  <form class="form-inline Darifonts1">
    <input  type="text" class="form-control" size="50" placeholder="<?php echo $search; ?>">
    <button  type="button" class="btn btn-primary"><?php echo $searchB; ?></button>
  </form>
  </span>
</div>

<!-- Container (Monitoring and Evaluation) -->
<div  class="container boxes fonts Darifonts2" id="secondPart">
    <div class="col-lg-9 col-lg-offest-2 col-sm-9 col-sm-offset-2 " >
      <h4 class="text-center"><?php echo $planing; ?></h4>
      <br>
      <div class="row col-lg-12 col-lg-offest-1  col-sm-12 col-sm-offset-1 col-xs-12 b Darifonts2" style="margin-bottom:15px;" id="buttons">
        <button class="btn-primary btn-lg abc shadow"><?php echo $binding; ?></button>
        <button class="btn-primary btn-lg abc shadow"><?php echo $contract; ?></button>
        <button class="btn-primary btn-lg abc shadow"><?php echo $award; ?></button>
      </div>
    </div>
</div>
<hr>
<!-- Mission Vision Goal Container -->
<div class="container bg-grey boxes" style="background-image: url('img/22.jpg')">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <h4 class="text-center slideanim fonts2 Darifonts2" style="color: white;"><strong><?php echo $mission; ?></strong><br>
    	 <p class="fonts1 Darifonts1"><?php echo $missionCont; ?></p>
       </h4><br>
      <h4 class="text-center slideanim fonts2 Darifonts2" style="color: white;"><strong><?php echo $vision; ?></strong>
       <p class="fonts1 Darifonts1"><?php echo $visionCont; ?></p></h4><br>
      <h4 class="text-center slideanim fonts2 Darifonts2" style="color: white;"><strong><?php echo $goal2; ?></strong> <p class="fonts1 Darifonts1"><?php echo $goal2Cont; ?></p></h4>
    </div>
  </div>
</div><hr>

<!-- Quick Links Part-->
<div class="container">
  <h4 class="text-center slideanim fonts2 Darifonts2" style="font-weight: bold;"><?php echo $quickLinks; ?></h4>
  <div class="row slideanim fonts Darifonts1">
    <button id="nAeButton" class="col-sm-4 col-xs-4  buttonLinks"><span class="fa fa-feed" style="color: white;"></span><br><a href="#"><?php echo $newsAndevents;?></a><br><p id="nAe"><?php echo $newsAndeventsCont;?></p></button>
    <button id="jobsButton" class="col-sm-4 col-xs-4  buttonLinks"><span class="fa fa-handshake-o" style="color: white;"></span><br><a href="#"><?php echo $jobs; ?></a><br><p id="jobsExtra"><?php echo $jobsCont; ?></p></button>
    <button id="exButton" class="col-sm-4 col-xs-4  buttonLinks"><span class="fa fa-users" style="color: white;"></span><br><a href="#"><?php echo $binding1; ?></a><br><p id="exExtra"><?php echo $binding1Cont; ?></p></button>
  </div>
  <div class="row slideanim fonts Darifonts1">
    <button id="cAaButton" class="col-sm-4 col-xs-4  buttonLinks"><span class="fa fa-pie-chart" style="color: white;"></span><br><a href="#"><?php echo $contractAwardd; ?></a><br><p id="cAaExtra"><?php echo $contractAwarddCont; ?></p></button>
    <button id="ex1Button" class="col-sm-4 col-xs-4  buttonLinks"><span class="fa fa-trophy" style="color: white;"></span><br><a href="#"><?php echo $contractAward; ?></a><br><p id="ex1Extra"><?php echo $contractAwardCont; ?></p></button>
    <button id="contactButton" class="col-sm-4 col-xs-4  buttonLinks"><span class="fa fa-globe" style="color: white;"></span><br><a href="#"><?php echo $contactus; ?></a><p id="contactExtra"><?php echo $contactusCont; ?></p></button>
  </div>
</div><br><hr>

<!-- latest Photos and Vidoes container -->
<div class="container-fluid text-center bg-grey boxes">
  <h2 class="slideanim fonts2 " style="font-family: Noori-Bold;"><?php echo $latestVp; ?></h2><br>
  <div class="row text-center slideanim">
    <div class="col-sm-6">
      <h4 style="font-weight: bold;" class="fonts2 Darifonts2"><?php echo $lphotos; ?></h4>
      <div class="thumbnail">
        <div id="myCarousel" class="carousel slide text-center">
            <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active ">
                <img src="img/23.jpg" class="img img-responsive" alt="Paris" width="400" height="300" style="max-height: 300px;">
                <p class="fonts Darifonts2"><strong><?php echo $newsheading1; ?></strong></p>
                <p class="fonts3 Darifonts1"><?php echo $news1; ?></p>
            </div>
            <div class="item">
                <img src="img/23.jpg" class="img img-responsive" alt="Paris" width="400" height="300" style="max-height: 300px;">
                <p class="fonts Darifonts2"><strong><?php echo $newsheading1; ?></strong></p>
                <p class="fonts3 Darifonts1"><?php echo $news1; ?></p>
            </div>
            <div class="item">
                <img src="img/23.jpg" class="img img-responsive" alt="Paris" width="400" height="300" style="max-height: 300px;">
                <p class="fonts Darifonts2"><strong><?php echo $newsheading1; ?></strong></p>
                <p class="fonts3 Darifonts1"><?php echo $news1; ?></p>
            </div>
          </div> <!--End for wrapper slides -->
          <!-- Indicators -->
          <button data-target="#myCarousel" data-slide-to="0" class="active ctrlButton Darifonts1 shadow"><?php echo $btn1; ?></button>
          <button data-target="#myCarousel" data-slide-to="1" class="ctrlButton Darifonts1 shadow"><?php echo $btn2; ?></button>
          <button data-target="#myCarousel" data-slide-to="2" class="ctrlButton Darifonts1 shadow"><?php echo $btn3; ?></button>
        </div><!--End of myCarousel -->
      </div><!--End of tumbnail-->
    </div>

    <div class="col-sm-6">
      <h4 style="font-weight: bold;" class="fonts2 Darifonts2"><?php echo $lvideos; ?></h4>
      <div class="thumbnail">
        <div id="myCarousel1" class="carousel slide text-center">
           <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
                <video controls="" width="600" height="300" style="max-height: 300px;"  class="img img-responsive"><source src="" type="video/mp4"></video>
                <p class="fonts Darifonts2"><strong><?php echo $newsheading1; ?></strong></p>
                <p class="fonts3 Darifonts1"><?php echo $news1; ?></p>
            </div>
            <div class="item">
                <video controls="" width="600" height="300" style="max-height: 300px;"  class="img img-responsive"><source src="" type="video/mp4"></video>
                <p class="fonts Darifonts2"><strong><?php echo $newsheading1; ?></strong></p>
                <p class="fonts3 Darifonts1"><?php echo $news1; ?></p>
            </div>
            <div class="item">
                <video controls="" width="600" height="300" style="max-height: 300px;"  class="img img-responsive"><source src="" type="video/mp4"></video>
                <p class="fonts Darifonts2"><strong><?php echo $newsheading1; ?></strong></p>
                <p class="fonts3 Darifonts1"><?php echo $news1; ?></p>
            </div>
          </div> <!--End for wrapper slides -->
          <!-- Indicators -->
    	
          <button data-target="#myCarousel1" data-slide-to="0" class="active ctrlButton Darifonts1 shadow"><?php echo $btn1; ?></button>
          <button data-target="#myCarousel1" data-slide-to="1" class="ctrlButton Darifonts1 shadow"><?php echo $btn2; ?></button>
          <button data-target="#myCarousel1" data-slide-to="2" class="ctrlButton Darifonts1 shadow"><?php echo $btn3; ?></button>
         
        </div><!--End of my cousrel -->
      </div><!-- Tumbnail End -->
    </div>
  </div>
</div><!-- End of latest photo and Videos part -->

<!-- Container (Our Programms Section) -->
<div id="services" class="container-fluid text-center boxes fonts2 Darifonts2" style="background-color: white;">
  <h2><?php echo $programs; ?></h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="fa fa-check-square-o"></span>
      <h4><a href="#"><?php echo $urbanplaning; ?></a></h4>
      <p class="fonts3 Darifonts1"><?php echo $urbanplaningCont; ?></p>
    </div>
    <div class="col-sm-4" style="">
      <img src="img/25.jpg" class="img img-responsive">
    </div>
    <div class="col-sm-4">
      <span class="fa fa-building"></span>
      <h4><a href="#"><?php echo $infrastructuralplaning; ?></a></h4>
      <p class="fonts3 Darifonts1"><?php echo $infrastructuralplaningCont; ?></p>
    </div>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="fa fa-home"></span>
      <h4><a href="#"><?php echo $housingplaning; ?></a></h4>
      <p class="fonts3 Darifonts1"><?php echo $housingplaningCont; ?></p>
    </div>
    <?php if($_SESSION["language"] != "lang/eng.php"){?>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
      <span class="fa fa-cubes"></span>
      <h4><a href="#"><?php echo $urban; ?></a></h4>
      <p class="Darifonts1"><?php echo $urbanCont; ?></p>
    </div>
    <?php } ?>
  </div>
</div>

<!-- Container ( Messages Section) -->
<br>
  <div  class="container-fluid text-center" style="background-color: #32c0f0;">
  <div id="myCarousel2" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
      <li data-target="#myCarousel2" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner boxes" role="listbox">
      <div class="item active">
          <img src="img/87.jpg" class="img img-responsive img-circle col-sm-2 col-xs-12 b">
          <h4 class="col-sm-10 col-xs-12 c fonts3 Darifonts2" style="color: white;">
              &rdquo; <?php echo $message1; ?> &ldquo;  
              <br>
              <p class="owner fonts2 Darifonts2" style="color: black; margin-bottom: 10px;"><?php echo $owner; ?></p>
          </h4>
      </div>
      <div class="item" >
          <img src="img/87.jpg" class="img img-responsive img-circle col-sm-2 col-xs-12 b">
          <h4 class="col-sm-10 col-xs-12 c fonts3 Darifonts2" style="color: white;">
              &rdquo; <?php echo $message2; ?> &ldquo;<br><br>
              <p class="owner fonts2 Darifonts2" style="color: black; margin-bottom: 10px;"><?php echo $owner; ?></p>
          </h4>
      </div>
      <div class="item">
          <img src="img/87.jpg" class="img img-responsive img-circle col-sm-2 col-xs-12 b">
          <h4 class="col-sm-10 col-xs-12 c fonts3 Darifonts2" style="color: white;">
             &rdquo; <?php echo $message3; ?> &ldquo;  <br><br>
             <p class="owner fonts2 Darifonts2" style="color: black; margin-bottom: 10px;"><?php echo $owner; ?></p>        
          </h4>
      </div>
      <div class="item">
          <img src="img/87.jpg" class="img img-responsive img-circle col-sm-2 col-xs- b">
          <h4 class="col-sm-10 col-xs-12 c fonts3 Darifonts2" style="color: white;">
             &rdquo; <?php echo $message4; ?> &ldquo;<br><br>
             <p class="owner fonts2 Darifonts2" style="color: black; margin-bottom: 10px;"><?php echo $owner; ?></p>   
          </h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
      <span class="fa fa-chevron-left" style="color: blue;" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
      <span class="fa fa-chevron-right" style="color: blue;" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (News Section) -->
<div id="pricing" class="container-fluid boxes">
  <div class="text-center">
    <h2 class="fonts2 Darifonts2"><?php echo $newsAndevents; ?></h2>
  </div>
  <div class="row slideanim fonts3 Darifonts1">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
       <a href="#"> <div class="panel-body">
            <img src="img/121t.jpg" class="img img-responsive col-xs-12">
            <p class="fonts1"><?php echo $time1; ?></p>
        </div>
        <div class="panel-footer">
            <p><?php echo $news2; ?></p>
        </div></a>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
	    <div class="panel panel-default text-center">
	       <a href="#">
		       <div class="panel-body">
		        	<img src="img/120t.jpg" class="img img-responsive col-xs-12">
		         	<p class="fonts1"><?php echo $time2; ?></p>
		        </div>
		        <div class="panel-footer">
		        	 <p><?php echo $news3; ?></p>
		        </div>
	        </a>
	      </div>          
    </div>       
    <div class="col-sm-4 col-xs-12">
    <div class="panel panel-default text-center">
        <a href="#"><div class="panel-body">
            <img src="img/119t.jpg" class="img img-responsive col-xs-12">
            <p class="fonts1"><?php echo $time3; ?></p>
        </div>
       <div class="panel-footer">
           <p><?php echo $news4; ?></p>
       </div></a>
    </div>     
    </div>    
  </div>

   <div class="row slideanim fonts3 Darifonts1">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
       <a href="#"> <div class="panel-body">
            <img src="img/122t.jpg" class="img img-responsive col-xs-12">
            <p class="fonts1"><?php echo $time4; ?></p>
        </div>
        <div class="panel-footer">
            <p><?php echo $news5; ?></p>
        </div></a>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
    <div class="panel panel-default text-center">
       <a href="#"><div class="panel-body">
            <img src="img/118t.jpg" class="img img-responsive col-xs-12">
            <p class="fonts1"><?php echo $time5; ?></p>
        </div>
        <div class="panel-footer">
            <p><?php echo $news6; ?></p>
        </div></a>
      </div>          
    </div>       
    <div class="col-sm-4 col-xs-12">
    <div class="panel panel-default text-center">
        <a href="#"><div class="panel-body">
            <img src="img/83t.jpg" class="img img-responsive col-xs-12">
            <p class="fonts1"><?php echo $time6; ?></p>
        </div>
       <div class="panel-footer">
           <p><?php echo $news7; ?></p>
       </div></a>
    </div>     
    </div>    
  </div>


</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey boxes fonts1 Darifonts1">
  <h2 class="text-center fonts2 Darifonts2 slideanim"><?php echo $contactUs;?></h2>
  <div class="row">
    <div class="col-sm-5 b fonts2 Darifonts2 slideanim">
      <p><?php echo $contactUsCont1; ?></p>
      <a href="www.twitter.com"><span class="fa fa-twitter" style="font-size: 20px;"></span></a> &nbsp;
      <a href="www.facebook.com"><span class="fa fa-facebook" style="font-size: 20px;"></span></a>&nbsp;&nbsp;
      <a href="www.instagram.com"> <span class="fa fa-instagram" style="font-size: 20px;"></span></a>
    </div>
    <div class="col-sm-7 slideanim c">
      <div class="row">
        <div class="col-sm-4 col-xs-12 form-group b">
          <input class="form-control" id="name" name="name" placeholder="<?php echo $name; ?>" type="text" required>
        </div>
         <div class="col-sm-4 col-xs-12 form-group">
          <input class="form-control" id="phone" name="number" placeholder="<?php echo $phone; ?>" type="text" required>
        </div>
        <div class="col-sm-4 col-xs-12 form-group">
          <input class="form-control" id="email" name="email" placeholder="<?php echo $email; ?>" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="<?php echo $msg; ?>" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 col-xs-12 form-group fonts3 Darifonts2">
          <button class="btn btn-primary pull-right" type="submit"><?php echo $sendMsg; ?></button>
        </div>
      </div>	
    </div>
  </div>
</div>


<footer class="container-fluid text-center fonts2 Darifonts2" style="background-color:#2e6da4;">
<?php if($_SESSION["language"] == "lang/eng.php"){?>
   <a href="#myPage" title="To Top"><div class="col-lg-3 col-xs-10 col-md-4 col-sm-6 b"><img src="img/logo3.png" class="img img-responsive"></div></a>
<?php } ?>
   <?php if($_SESSION["language"] != "lang/eng.php"){?>
    <a href="#myPage" title="To Top"><div class="col-lg-3 col-xs-10 col-md-4 col-sm-6 b"><img src="img/logo1.png" class="img img-responsive"></div></a>
   <?php } ?>
      <div class="col-lg-4 col-lg-push-2 col-xs-12 c"><p style="color: white;" class="ffooter"><small>&copy; <?php echo $copyRight; ?> <br><?php echo $companyName; ?></small></p>
      </div> 
</footer>



<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
  

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
  // for sliding the Quick links
  $("#nAeButton").hover(function(){
    $("#nAe").slideToggle();
  });
  $("#jobsButton").hover(function(){
    $("#jobsExtra").slideToggle();
  });
  $("#exButton").hover(function(){
    $("#exExtra").slideToggle();
  });
  $("#cAaButton").hover(function(){
    $("#cAaExtra").slideToggle();
  });
  $("#ex1Button").hover(function(){
    $("#ex1Extra").slideToggle();
  });
  $("#contactButton").hover(function(){
    $("#contactExtra").slideToggle();
  });
})
</script>

</body>
</html>

