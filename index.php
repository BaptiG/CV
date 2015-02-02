 <?php
  require("decide-lang.php");
  //require ("localization.php");


  ?>

<?php 
  // Connexion BDD
  mysql_connect('localhost:3306','root','root');
    mysql_select_db('contact');     
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Baptiste Gelin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Fonts from Font Awsome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
         <!-- Magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Color styles -->
        <!-- <link rel="stylesheet" href="css/colors/blue.css">-->
       <!-- <link rel="stylesheet" href="css/colors/yellow.css">-->
       <link rel="stylesheet" href="css/colors/red.css">
       <!--  <link rel="stylesheet" href="css/colors/purple.css">-->
       <!--  <link rel="stylesheet" href="css/colors/orange.css">-->
       <!--  <link rel="stylesheet" href="css/colors/green.css">-->
        
         <!-- Feature detection -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/plugins/html5shiv.js"></script>
          <script src="js/plugins/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

  <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" id="main-menu">
            <li><a href="#page-welcome"><?php echo TXT_HOME_MENUBAR; ?></a></li>
            <li><a href="#page-profile"><?php echo TXT_PROFILE_MENUBAR; ?></a></li>
            <li><a href="#page-skills"><?php echo TXT_SKILLS_MENUBAR; ?></a></li>
            <li><a href="#page-education"><?php echo TXT_EDUCATION_MENUBAR; ?></a></li>
            <li><a href="#page-experience"><?php echo TXT_EXPERIENCE_MENUBAR; ?></a></li>
            <li><a href="#page-portfolio"><?php echo TXT_PORTFOLIO_MENUBAR; ?></a></li>
            <li><a href="#page-contact"><?php echo TXT_CONTACT_MENUBAR; ?></a></li>
          </ul>
           <div class="flag">
          <a href = "index.php?lang=fr"><img src="flag-icon-css-master/flags/1x1/fr.svg" alt="fr" height= 15 width = 30  /> </a>
          <a href = "index.php?lang=en"><img src="flag-icon-css-master/flags/1x1/gb.svg" alt="en" height= 15 width = 30  /> </a>
          </div>  
        </div><!--/.nav-collapse -->
        
      </div>
    </div>
    <!-- welcome begins -->
    <section id="page-welcome" class="page-welcome">
      <div>
          <ul class="slider-controls">
              <li><a id="vegas-next" class="next" href="#"></a></li>
              <li><a id="vegas-prev" class="prev" href="#"></a></li>
          </ul>
        </div>
        <div class="container">
            <div class="row">
                <header class="centered">
                    <h1>Baptiste Gelin</h1>
                    <p><?php echo TXT_HOME_STATUE; ?></p>
                </header>
                <div class="social-icons">
                        <a href="http://fr.linkedin.com/pub/baptiste-gelin/85/135/a9/" class="btn btn-round btn-clear btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                </div>
                <a href="#page-contact" class="btn btn-default hire-me">Contact</a>
            </div>
        </div>
    </section><!-- welcome ends -->
    <!-- profile begins -->
    <section id="page-profile" class="page-profile">
      <div class="container">
                <header class="section-header">
                    <h2 class="section-title"><?php echo TXT_PROFILE_TITLE; ?></h2>
                    <div class="spacer"></div>
                    <p class="section-subtitle"><?php echo TXT_PROFILE_SUBTITLE; ?> </p>
                </header>
            <div class="row">
              <div class="col-md-3">
                 <div class="profile"><img src="img/profile.JPG" alt="profile"/></div> 
              </div>
               <div class="col-md-9">
                <p><?php echo TXT_PROFILE_PARAGRAPH_1; ?></p>
                <p><?php echo TXT_PROFILE_PARAGRAPH_2; ?></p>
                <p><?php echo TXT_PROFILE_PARAGRAPH_3; ?></p>
                 <p><?php echo TXT_PROFILE_PARAGRAPH_4; ?></p>
              </div>
            </div>
      </div> 
    </section><!-- profile ends -->
    <!-- skills begins -->
     <section id="page-skills" class="page-skills">
       <div class="container">
           
                 <header class="section-header">
                    <h2 class="section-title"><span><?php echo TXT_SKILLS_TITLE; ?></span></h2>
                      <div class="spacer"></div>
                    <p class="section-subtitle"><?php echo TXT_SKILLS_SUBTITLE; ?></p>
                </header>
            <div class="row">
               <div class="skills_dev">
              <div class="col-md-2">
               <span class="chart" data-percent="85" >
                <span class="dev"></span>
                      <span class="percent"></span>
                      <h3><?php echo TXT_SKILLS_JAVA; ?></h3>
               </span>
            </div>
              <div class="col-md-2">
               <span class="chart" data-percent="80">
                      <span class="percent"></span>
                      <h3><?php echo TXT_SKILLS_J2EE; ?></h3>
               </span>
            </div>
            <div class="col-md-2">
               <span class="chart" data-percent="75">
                      <span class="percent"></span>
                      <h3><?php echo TXT_SKILLS_ANDROID; ?></h3>
               </span>
              </div>
              <div class="col-md-2 ">
               <span class="chart" data-percent="85">
                      <span class="percent"></span>
                      <h3><?php echo TXT_SKILLS_CSHARP; ?></h3>
               </span>
            </div>
               <div class="col-md-2 ">
               <span class="chart" data-percent="70">
                      <span class="percent"></span>
                      <h3><?php echo TXT_SKILLS_C; ?></h3>
               </span>
            </div>
            </div>
            </div>
              <div class="row">
                 <div class="skills_web">
               <div class="col-md-2">
               <span class="chart" data-percent="75">
                <span class="web"></span>
                      <span class="percent"></span>
                       <h3><?php echo TXT_SKILLS_HTML_CSS; ?></h3>
               </span>
            </div>
               <div class="col-md-2">
               <span class="chart" data-percent="75" id="web">
                      <span class="percent"></span>
                      <h3><?php echo TXT_SKILLS_PHP; ?></h3>
               </span>
            </div>
                           <div class="col-md-2">
               <span class="chart" data-percent="70 " id="web">
                      <span class="percent"></span>
                      <h3><?php echo TXT_SKILLS_SQL; ?></h3>
               </span>
            </div>
            </div>
            </div>
              <div class="row">
              <div class="skills_elec">
               <div class="col-md-2">
               <span class="chart" data-percent="75">
                      <span class="percent"></span>
                       <h3><?php echo TXT_SKILLS_ANALOG_ELECTRONIC; ?></h3>
               </span>
            </div>
            <div class="col-md-2">
               <span class="chart" data-percent="75">
                      <span class="percent"></span>
                       <h3><?php echo TXT_SKILLS_DIGITAL_ELECTRONIC; ?></h3>
               </span>
            </div>
            <div class="col-md-2">
               <span class="chart" data-percent="60">
                      <span class="percent"></span>
                       <h3><?php echo TXT_SKILLS_VHDL_ELECTRONIC; ?></h3>
               </span>
            </div>
            </div>
            </div>
              <div class="row">
            <div class="skills_language">
            <div class="col-md-2">
               <span class="chart" data-percent="75">
                      <span class="percent"></span>
                       <h3><?php echo TXT_SKILLS_ENGLISH; ?></h3>
               </span>
            </div>
            <div class="col-md-2">
               <span class="chart" data-percent="50">
                      <span class="percent"></span>
                       <h3><?php echo TXT_SKILLS_SPANISH; ?></h3>
               </span>
            </div>
            </div>
            </div>
              <div class="row">
                <div class="skills_sw">
            <div class="col-md-2">
               <span class="chart" data-percent="95">
                      <span class="percent"></span>
                      <h3><?php echo TXT_SKILLS_OFFICE; ?></h3>
               </span>
            </div>
          </div>
          </div>
        </div>
    </section><!-- skills ends -->
    <!-- education begins -->
     <section id="page-education" class="page-education">
       <div class="container">
                <header class="section-header">
                    <h2 class="section-title"><span><?php echo TXT_EDUCATION_TITLE; ?></span></h2>
                     <div class="spacer"></div>
                    <p class="section-subtitle"><?php echo TXT_EDUCATION_SUBTITLE; ?> </p>
                </header>
                <div class="row">
                 <div class="col-md-6">
                  <article class="education">
                    <header>
                      <h3><?php echo TXT_EDUCATION_SCHOOL_1_TITLE; ?></h3>
                      <p><?php echo TXT_EDUCATION_SCHOOL_1_SUBTITLE; ?><strong><?php echo TXT_EDUCATION_SCHOOL_GRADUATED; ?></strong> <?php echo TXT_EDUCATION_SCHOOL_1_YEAR; ?></p>
                    </header>
                      <p><?php echo TXT_EDUCATION_SCHOOL_1_PARAGRAPH; ?></p>
                  </article>
                </div>
                <div class="col-md-6">
                <article class="education">
                  <header>

                    <h3><?php echo TXT_EDUCATION_SCHOOL_2_TITLE; ?> </h3>
                    <p><?php echo TXT_EDUCATION_SCHOOL_2_SUBTITLE; ?><strong><?php echo TXT_EDUCATION_SCHOOL_GRADUATED; ?></strong> <?php echo TXT_EDUCATION_SCHOOL_2_YEAR; ?></p>
                  </header>
                    <p><?php echo TXT_EDUCATION_SCHOOL_2_PARAGRAPH; ?></p>

                     <a href= "http://www.esiee.fr" ><img src="img/icone_esiee.png"  alt="" >  </a>
                </article>
                </div>
            </div>
       </div>
    </section><!-- education ends -->
    <!-- experience begins -->
     <section id="page-experience" class="page-experience">
       <div class="container">
                <header class="section-header">
                    <h2 class="section-title"><span><?php echo TXT_EXPERIENCE_TITLE; ?></span></h2>
                     <div class="spacer"></div>
                    <p class="section-subtitle"><?php echo TXT_EXPERIENCE_SUBTITLE; ?></p>
                </header>
                <div class="row">
                 <div class="col-md-4">
                  <article class="experience">
                    <header>
                      <a href= "http://www.sodern.com/sites/en/ref/home.html" ><img src="img/sodern_gnc.gif"  alt="">  </a>
                      <h3><?php echo TXT_EXPERIENCE_1_TITLE; ?></h3>
                      <p><?php echo TXT_EXPERIENCE_1_SUBTITLE; ?></p>
                    </header>
                      <p><?php echo TXT_EXPERIENCE_1_CONTENT; ?></p>
                  </article>
                </div>
                  <div class="col-md-4">
                  <article class="experience">
                    <header>
                      <a href= "http://atos.net/en-us/home.html" ><img src="img/Atos_svg.png"  alt=""  >  </a>
                      <h3><?php echo TXT_EXPERIENCE_2_TITLE; ?></h3>
                       <p><?php echo TXT_EXPERIENCE_2_SUBTITLE; ?></p>
                    </header>
                      <p><?php echo TXT_EXPERIENCE_2_CONTENT; ?></p>
                  </article>
                </div>
                <div class="col-md-4">
                <article class="experience">
                  <header>
                    <a href= "http://www.sstl.co.uk" ><img src="img/sstl.png"  alt="" >  </a>
                    <h3><?php echo TXT_EXPERIENCE_3_TITLE; ?></h3>
                     <p><?php echo TXT_EXPERIENCE_3_SUBTITLE; ?></p>
                  </header>
                    <p><?php echo TXT_EXPERIENCE_3_CONTENT; ?></p>
                </article>
                </div>
            </div>
        </div>
    </section><!-- experience ends -->
    <!-- portfolio begins -->
     <section id="page-portfolio" class="page-portfolio">
          <div class="container">
            <div class="row">
                <header class="section-header">
                    <h2 class="section-title"><span>Portfolio</span></h2>
                      <div class="spacer"></div>
                    <p class="section-subtitle"><?php echo TXT_PORTFOLIO_SUBTITLE; ?></p>
                </header>
           
                <div id="grid-controls-wrapper">
                <ul class="nav nav-pills center-pills grid-controls">
                  <li class="active filter"><a href="javascript:void(0)" data-filter="*"><?php echo TXT_PORTFOLIO_ALL; ?></a></li>
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".electronic"><?php echo TXT_PORTFOLIO_ELECTRONIC; ?></a></li>   
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".software"><?php echo TXT_PORTFOLIO_DEVELOPMENT; ?></a></li>            
                  <li class="filter"><a href="javascript:void(0)"  data-filter=".website"><?php echo TXT_PORTFOLIO_WEBSITE; ?></a></li>
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".management"><?php echo TXT_PORTFOLIO_MANAGEMENT; ?></a></li>
                </ul>
              </div>
            
                <div>
                  <ul id="grid" class="grid-wrapper">
                      <li class="mix electronic" >
                        <a href="img/portfolio/large/01.png"><div class="overlay"><i class="fa fa-flash"> <?php echo TXT_PORTFOLIO_PROJECT_ELEC_DETECTOR; ?></i></div><img src="img/portfolio/small/01.png"  alt="" ></a> </li>
                      <li class="mix electronic">
                        <a href="img/portfolio/large/pong.png"><div class="overlay"><i class="fa fa-gamepad"> <?php echo TXT_PORTFOLIO_PROJECT_ELEC_VHDL; ?></i></div><img src="img/portfolio/small/pong.png" alt="" ></a></li>
                      <li class="mix software">
                        <a href="img/portfolio/large/banque.png"><div class="overlay"><i class="fa fa-credit-card"> <?php echo TXT_PORTFOLIO_PROJECT_SOFTWARE_INTERBANKSYSTEM; ?></i></div><img src="img/portfolio/small/banque.png" alt="" ></a></li>
                      <li class="mix software">
                        <a href="img/portfolio/large/EVN_large.png"><div class="overlay"><i class="fa fa-mobile"> <?php echo TXT_PORTFOLIO_PROJECT_SOFTWARE_PAIN; ?></i></div><img src="img/portfolio/small/EVN_small.png" alt="" ></a></li>
                      <li class="mix website">
                        <a href="img/portfolio/large/wiki.png"><div class="overlay"><i class="fa fa-laptop"> <?php echo TXT_PORTFOLIO_PROJECT_WEBSITE_WIKI; ?></i></div><img src="img/portfolio/small/wiki.png" alt="" ></a></li>
                      <li class="mix management">
                        <a href="img/portfolio/large/Contro.png"><div class="overlay"><i class="fa fa-question"> <?php echo TXT_PORTFOLIO_PROJECT_MANAGEMENT_CONTROVERSY; ?></i></div><img src="img/portfolio/small/Contro.png" alt="" ></a></li>
                  </ul>
                </div>
            </div>
        </div>
    </section><!-- portfolio ends -->
    <!-- contact begins -->
     <section id="page-contact" class="page-contact">
          <div class="container">
              <header class="section-header">
                  <h2 class="section-title"><span>Contact</span></h2>
                    <div class="spacer"></div>
                       <p class="section-subtitle"><?php echo TXT_CONTACT_SUBTITLE; ?></p>
              </header>
        <div class="row">
          <div class="col-sm-5 contact-info">
            <h3><?php echo TXT_CONTACT_CONTACTINFO; ?></h3>
            <p><i class="fa fa-map-marker"></i> 10 Rue Montaigne, Bonneuil sur Marne 94380, FRANCE  </p>
            <p><i class="fa fa-phone"></i> +33613531930 | +33XXXXXXXXX</p>
            <p><i class="fa fa-envelope-o"></i> gelinbesiee@gmail.com</p>
          </div>
          
          <div class="col-sm-7">
          <h3><?php echo TXT_CONTACT_CONTACTME; ?></h3>
    <form  class="form-horizontal" id="contact-form" method = "post">
        <div class="control-group">
            <label class="control-label" for="name"><?php echo TXT_CONTACT_FORMNAME; ?></label>
            <div class="controls">
                <input type="text" name="name" id="name"  class="form-control input-lg ">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email"><?php echo TXT_CONTACT_FORMADRESS; ?></label>
            <div class="controls">
                <input type="text" name="email" id="email"  class="form-control input-lg">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="message"><?php echo TXT_CONTACT_FORMMESSAGE; ?></label>
            <div class="controls">
                <textarea name="message" id="message" rows="8" class="form-control input-lg"></textarea>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-default btn-lg btn-block"><?php echo TXT_CONTACT_FORMSUBMIT; ?></button>
         

  </div>
  <?php 
      // insertion des données
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
    {
      if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
    
   $sql = "INSERT INTO contact(id, name, mail, message) VALUES('','$_POST[name]','$_POST[email]','$_POST[message]')";
      mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error()); 
      unset($_POST);

   }
   else{echo 'Veuillez remplir tous les champs !';}

    } 
    ?>
    </form><!-- End contact-form -->
          </div>
        </div><!-- End row -->

        </div>
    </section> <!-- contact ends -->


        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollTo.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
        <script src="js/jquery.vegas.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
