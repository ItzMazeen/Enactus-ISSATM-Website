<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Enactus ISSATM | Contact Us</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
  
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                       <ul class="sociel_link">
                         <li> <a href="https://www.facebook.com/EnactusISSATM"target="_blank"><i class='fa fa-facebook-f'title='Follow Us On Facebook' ></i></a></li>
                         <li> <a href="https://twitter.com/enactusissatm"target="_blank"><i class="fa fa-twitter"title='Follow Us On Twitter'></i></a></li>
                         <li> <a href="https://instagram.com/enactus.issatm"target="_blank"><i class="fa fa-instagram"title='Follow Us On Instagram'></i></a></li>
                         <li> <a href="https://LinkedIn.com/enactusissatm"target="_blank"><i class="fa fa-linkedin"title='Follow Us On LinkedIn'></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p>Enactus <a href="http://www.issatm.rnu.tn/fr/index.php" target='_blank'title='Visit ISSATM Website'><b>Institut Supérieur de Sciences Appliquées et de Technologie de Mateur</a></b></h6>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="images/logo.jpg" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
				  <br><br>
				  <nav> 
                     <div class="limit-box">
                        <div class="main-menu">
                        
                           <ul class="menu-area-main">
                           
                              <li> <a href="index.html">Home</a> </li>
                              <li> <a href="about.html">About Us</a> </li>
                              <li> <a href="Members.html">Members</a> </li>
                               <li> <a href="projects.html
                               ">Projects</a> </li>
							   <li> <a href="news.html">News</a> </li>
                              <li class="active"> <a href="contact.php">Contact</a> </li>
							     
                              
                              
                               
                           </ul>
                        </div>
                     </div>
					 </nav>
                  </div>
               </div>
               
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
       <div class="brand_color">
     <div class="Service">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                  <BR><BR><BR>
                     <h2><strong class="black">Contact Us</strong></h2>
                     <span>You can contact us anytime</span>
                  </div>
               </div>
            </div>
         </div>

    </div>
</div>
    </div>

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <h4 class="sent-notification"></h4>
                    <form class="contact" action="" method="post">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="name" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="email" name="email" required>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Phone" type="number" name="phone"required>
                            </div>
							<div class=" col-md-12">
                                <input class="form-control" placeholder="Subject" type="text" name="subject"required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" name="message" required></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send" type="submit" name="submit" value="Send">Send</button>
                            </div>
						  <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
	
							
                        </div>
						
						<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	 <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
	<br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
     <!--  footer --> 
      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <ul class="sociel">
                         <li> <a href="https://www.facebook.com/EnactusISSATM"target="_blank"><i class="fa fa-facebook-f"title="Follow Us On Facebook"></i></a></li>
                         <li> <a href="https://twitter.com/enactusissatm"target="_blank"><i class="fa fa-twitter"title="Follow Us On twitter"></i></a></li>
                         <li> <a href="https://instagram.com/enactus.issatm"target="_blank"><i class="fa fa-instagram"title="Follow Us On Instagram"></i></a></li>
                         <li> <a href="https://LinkedIn.com/enactusissatm"target="_blank"><i class="fa fa-linkedin"title="Follow Us On LinkedIn"></i></a></li>
                     </ul>
                  </div>
            </div>
            
            <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>conatct us</h3>
                     <span>Mohamed bejaoui  street
<br>
                       7030 Mateur, Tunisia
                       <br>
                        +216 20 571 592
                         <br>
                         enactusissatm@gmail.com
</span>
                  </div>
               </div>
                           <div class="col-xl-6 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
               
            <video width="550" height="300" playsinline autoplay muted loop>
  <source src="images/Enactus2.mp4" type="video/mp4">
</video>

</div>
               </div>
              
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>   ADDITIONAL LINKS</h3>
                     <ul class="lik">
                     <li> <a href="index.html">   Home</a></li>
                      <li> <a href="about.html">   About us</a></li>
                         <li> <a href="Members.html">  Members</a></li>
                         <li> <a href="projects.html">  Projects</a></li>
                         <li> <a href="Privacy.html">  Privacy policy</a></li>
                          <li> <a href="contact.php">  Contact us</a></li>
                     </ul>
                  </div>
               </div>
              
                
                  
                
               
                 
               
            </div>
         </div>
             <div class="copyright">
               <p>Copyright © 2021 All Rights Reserved By <a href="https://www.facebook.com/EnactusISSATM" target='_blank'><b> Enactus ISSATM </b></a> | Developed By <b><a href="https://www.facebook.com/MazeenAljane/"target='_blank'> Mazeen Aljane </b></a></p>
            </div>
         
      </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
       <div class="scroll-up-button">
        <a> <span class="fa fa-arrow-up"></span> </a>
    </div>
   </body>
</html>