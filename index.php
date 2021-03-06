<?php
if(!defined('__PRAGYAN_CMS'))
{ 
    header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
    echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
    echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
    exit(1);
}
?>
<!DOCTYPE html>
<html lang="en"><!--manifest="<?php echo $TEMPLATEBROWSERPATH; ?>/manifest.appcache"> -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $cmstitle=$TITLE;echo $cmstitle; ?></title>
    
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/myStyle.css" />
   <!-- <link rel="icon" type="image/png" href="image/logo.png"> -->
        <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
            $('.dep').hide();
        </script>
		<script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/fix_nav.js"></script>
        <script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/disp_freq.js"></script>
        <script language="javascript" type="text/javascript">
        //defined here for use in javascript
        var templateBrowserPath = "<?php echo $TEMPLATEBROWSERPATH ?>";
        var urlRequestRoot = "<?php echo $urlRequestRoot?>";
    </script>
    <script type=text/javascript src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type=text/javascript>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

  </head>
  
  <body role="document" onload="<?php echo $STARTSCRIPTS; ?>">
    <header class="myheader" >
        <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/image/header.png" style="position:relative;top:29px;" />
    </header>
  
    <!-- device test, don't remove. javascript needed! -->
    <!-- <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg" style="height:0px;background-color:#cc0033;"></span> -->
    <hr style="height:2px;background-color:#cc0033;"></hr>
    <!-- device test end -->
    
    <div id="k-head" class="container-fluid" style="margin:0px;"><!-- container + head wrapper -->
    	<div class="row"><!-- row -->
            <nav class="k-functional-navig"><!-- functional navig -->
                <ul class="list-inline pull-right">
                    <li><a href="#">Departments</a></li>
                    <li><div id=google_translate_element></div></li>
                    <li><a href="#">Placements</a></li>
                   <li><a id="dash" href="#" title="" class="dash"><i class="fa fa-toggle-off"></i> Dashboard </a></li>
				   <script>
			       $('#dash').click(function(){$(this).find('i').toggleClass('fa-toggle-off fa-toggle-on');
				   $('.dashboard').toggle('fast');
				   });
				   </script>
                    <li><a href="webmail.nitt.edu/horde/login.php">Webmail</a></li>
                    <li><a href="#">Sitemap</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
            
                
                

            </nav><!-- functional navig end -->
        
        	<div class="col-lg-12">
            <div class="container-fluid text-center dashboard"  hidden >
                            <div class="actionbarcontainer">
        
            <div class="actionbar">
            <?php echo $ACTIONBARMODULE; ?>
            <?php echo $ACTIONBARPAGE; ?>
            </div>
        </div>
                        </div>
                        <script type="text/javascript">
                    $('.dashboard').hide();
                    function toggleDash(){

                    
                    }
                    </script>
        		<div id="k-site-logo" class="pull-left"><!-- site logo -->
    <!--            
                    <h1 class="k-logo">
                        <a href="index.html" title="Home Page">
                            <img src="image/logo.png" style="width:130px;height:130px;visibility:hidden;">    
                        </a>
                    </h1>
        -->            
                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"><i class="fa fa-bars" style="color: #000000"></i></span></a><!-- alternative menu button -->
            
            	</div><!-- site logo end -->

            	<nav id="k-menu affix" class="k-main-navig"><!-- main navig -->
        
                    <ul id="drop-down-left" class="k-dropdown-menu">
                        <li>
                            <a href="#" title="">Homepage</a>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> About</a>
							<ul class="sub-menu">
                                <li><a href="#"> Mission & Vision </a></li>
                                <li><a href="#"> Alumni </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Student Links</a>
							<ul class="sub-menu">
                                <li><a href="#">Forms & Downloads </a></li>
                                <li><a href="#">Scholarships </a></li>
                                <li><a href="#">Semester Results</a></li>
                                <li><a href="#">Time Table</a></li>
								<li><a href="#">Clubs</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Portals</a></li>
                                <li><a href="#">Important Contacts</a></li>
                            </ul>
                        </li>
                        <li>
                           <a href="#" title=""><i class="fa fa-caret-down"></i> Admissions</a>
						   <ul class="sub-menu">
                                <li><a href="#">B.Tech. </a></li>
                                <li><a href="#">M.Tech. </a></li>
                                <li><a href="#">Ph.D.</a></li>
                                <li><a href="#">MCA</a></li>
                            </ul>
                        </li>
                        <li>
                            <a id="d" href="#" title="" class="department"><i class="fa fa-toggle-off"></i> Department</a>
							<script>$('#d').click(function(){$(this).find('i').toggleClass('fa-toggle-off fa-toggle-on');});</script>
                            <ul class="sub-menu visible-xs">
                                <li><a href="/home/academics/departments/cse/">Computer Science &amp; Engineering</a></li>
                                <li><a href="/home/academics/departments/eee/">Electrical & Electronics Engineering</a></li>
                                <li><a href="/home/academics/departments/ece/">Electronics & Communication Engineering</a></li>
                                <li><a href="/home/academics/departments/ice">Instrumentation & Control Engineering</a></li>
                                <li><a href="/home/academics/departments/mech">Mechanical Engineering</a></li>
                                <li><a href="/home/academics/departments/civil">Civil Engineering</a></li>
                                <li><a href="/home/academics/departments/chem">Chemical Engineering</a></li>
                                <li><a href="/home/academics/departments/prod">Production Engineering</a></li>
                                <li><a href="/home/academics/departments/meta">Metalurgical & Material's Engineering</a></li>
                                <li>
                                    <a href="#">Others</a>
                                    <ul class="sub-menu">
                                        <li><a href="/home/academics/departments/maths">Mathematics</a></li>
                                        <li>
                                            <a href="/home/academics/departments/chemistry">Chemistry</a>
                                            
                                        </li>
                                        <li><a href="/home/academics/departments/physics">Physics</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Initiatives</a>
                            <ul class="sub-menu">
                                <li><a href="#">CEDI </a></li>
                                <li><a href="#">Startup Weekend</a></li>
                                <li><a href="#">Internet Of Things</a></li>
                                <li><a href="#">Innovation Center</a></li>
                                <li><a href="#">Green Campus</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Industry</a>
							<ul class="sub-menu">
                                <li><a href="#">Placements at NITT </a></li>
                                <li><a href="#">Scholarships </a></li>
                                <li><a href="#">Consultancy & Research</a></li>
                                <li><a href="#">MoU &lsquo;s signed</a></li>
								<li><a href="#">Tender Invitations</a></li>
                                <li><a href="#">Vendor Registrations</a></li>
                            </ul>
                        </li>
                    </ul>
        
            	</nav><!-- main navig end -->
            
            </div>
            
        </div><!-- row end -->
    <section class="visible-lg">
                <div class="container dep" style="display:none;">
                    <div class="col-md-2">
                        <a href="/home/academics/departments/architecture">Architecture</a><br>
                        <a href="/home/academics/departments/cecase">CECASE</a><br>
                        <a href="/home/academics/departments/chem">Chemical Engineering</a><br>
                        <a href="/home/academics/departments/chemistry">Chemistry</a><br>
                </div>  
                <div class="col-md-3">
                    <a href="/home/academics/departments/civil">Civil Engineering</a><br>
                        <a href="/home/academics/departments/ca">Computer Applications</a><br>
                        <a href="/home/academics/departments/cse">Computer Science & Engineering</a><br>
                        <a href="/home/academics/departments/dee">DEE</a><br>
                </div>
                <div class="col-md-4">
                    <a href="/home/academics/departments/eee">Electrical & Electronics Engineering</a><br>
                        <a href="/home/academics/departments/ece">Electronics & Communications Engineering</a><br>
                        <a href="/home/academics/departments/humanities">Humanities</a><br>
                        <a href="/home/academics/departments/ice">Instrumentation & Control Engineering</a><br>
                        <a href="/home/academics/departments/management">Management Studies</a><br>
                </div>
                <div class="col-md-3">
                    
                        <a href="/home/academics/departments/maths">Mathematics</a><br>
                        <a href="/home/academics/departments/mech">Mechanical Engineering</a><br>
                        <a href="/home/academics/departments/meta">Metalurgical & Materials Engineering</a><br>
                        <a href="/home/academics/departments/prod">Production Engineering</a><br>
                        <a href="/home/academics/departments/physics">Physics</a><br>
                        
                </div>
            </section>
    </div><!-- container + head wrapper end -->
<!--     <span class="visible-lg" style="height:40px;background-color:#cc0033;width:100%;"></span>
 --><div id="k-body"><!-- content wrapper -->
    
    	
   <!-- <div class="breadcrumb">
            <div id="breadcrumb">
            <?php /*echo $BREADCRUMB;*/ ?>
            </div>
        </div>
         /* breadcrumb ends */
        <div class="clearer"></div>
        
        <div class="clearer">
        </div> -->
        <div class="contentcontainer">
            <!--<div id="cms-leftcontent">
                <div class="menucontainer">
                    <?php /*echo $MENUBAR;*/ ?>
                    <?php /*if(isset($WIDGETS[4])) echo $WIDGETS[4];*/ ?>
                </div>
                
            </div> -->
            <div id="cms-content">
                <?php echo $INFOSTRING; ?>
                <?php echo $WARNINGSTRING;?>
                <?php echo $ERRORSTRING; ?>
                <?php if(isset($WIDGETS[2])) echo $WIDGETS[2]; ?>
                <?php echo $CONTENT; ?>
                <?php if(isset($WIDGETS[3])) echo $WIDGETS[3]; ?>
            </div>
            <div class="bottomcontentbar"></div>
        </div>
        <div class="clearer"></div>
        
    </div><!-- content wrapper end -->
    
    <footer class="footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row duck">
                <div class="footer-col col-md-3 col-sm-4 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Academics</h3>
                        <ul style="list-style:none;">
                            <li><a href="#"><i class="fa fa-caret-right"></i> Academics Programmes</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Departments</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Faculty</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Rules & Regulations</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Scholarships</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
               
                 <div class="footer-col col-md-3 col-sm-4 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Admissions</h3>
                        <ul style="list-style:none;">
                            <li><a href="#"><i class="fa fa-caret-right"></i> B.Tech/B.Arc</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> M.Tech/M.Sc</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> MCA/MBA</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> MS(research)</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Ph.D</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
               
                <div class="footer-col col-md-3 col-sm-4 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Students Life</h3>
                        <ul style="list-style:none;">
                            <li><a href="#"><i class="fa fa-caret-right"></i> Events</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Clubs & Associations</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Hostel & Messes</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Office Of Dean(students)</a></li>
                            
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->

                <div class="footer-col col-md-3 col-sm-4 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Other Links</h3>
                        <ul style="list-style:none;">
                            <li><a href="#"><i class="fa fa-caret-right"></i> Tenders & Notices</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Job Opportunities</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> RTI</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Recal-Alumini</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> SiteMap</a></li>
                            
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->

    <div id="k-subfooter"><!-- subfooter -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
            	<div class="col-lg-12">
                
                	<p class="copy-text text-inverse">
                 <small class="copyright col-md-12 col-sm-12 col-xs-12 text-center">Copyright @ 2015 National Institute of Technology | Made with &#10084; by Delta Force</small>
                    </p>
                
                </div>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- subfooter end -->
    

    <!-- jQuery -->

    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/bootstrap.min.js"></script>
    
        <!-- Drop-down -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/dropdown-menu.js"></script>
    
    
    <!-- Fancybox -->
	<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.fancybox.pack.js"></script>
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.fancybox-media.js"></script><!-- Fancybox media -->
    
    <!-- Responsive videos -->
    
    
    <!-- Audio player -->
	
    
    <!-- Pie charts -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/jquery.easy-pie-chart.js"></script>
    
    <!-- Google Maps -->
    <script type="text/javascript">
        $('.dep').hide();
            $('.department').click(function(){
                $('.dep').toggle("slow");
            });
        
    </script>
    
    <!-- Theme -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/theme.js"></script>
    
  </body>
</html>
