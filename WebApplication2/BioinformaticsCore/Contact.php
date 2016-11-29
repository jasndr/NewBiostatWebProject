<!DOCTYPE html>
<!-- ######################################################################
     # Office of Biostatistics & Quantitative Health Science Website      #
     # University of Hawaii, John A. Burns School of Medicine             #
     #                                                                    #
     # @author Jason Delos Reyes                                          #
     # @date November 2016                                                #
     # BQHS Page 6 - Contact Us                                           #
     ###################################################################### -->
<html>

<head>
    <title>Contact Us | Bioinformatics Core | BQHS</title>
    <link rel="icon" href="../images/Logo_Final.png" />
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="description" content="Questions or Service Requests?  Contact us today!" />
    <meta name="keywords" content="BQHS, Jobs, Contact Us, Biostatistics, Quantitative Health Sciences, Hawaii, University of Hawaii, John A. Burns School of Medicine" />
    <meta name="author" content="Jason Delos Reyes" />
    <link rel="stylesheet" type="text/css" href="../StyleSheet1.css" />
    <link rel="stylesheet" type="text/css" href="../NiceSimpleContactForm/style.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../JavaScript.js"></script>
</head>


<body id="about">

    <!-- Page Header to create fixed header  -->
    <div class="pageHeader">

    <!-- #Top Menu (Link to other entities not directly related to BQHS main topics) -->
    <div class="container-fluid topNavBar pull-right">
        <!-- #First navigation bar -->
        <p>
            <a class="topMostLinks" href="../Home/sitemap.html">Sitemap</a> |
            <a class="topMostLinks" href="../Home/contact.html">Contact</a> |
            <a class="topMostLinks" href="../Home/jobs.html">Careers</a> |
            <a class="topMostLinks" href="http://hawaii.edu" target="_blank">University of Hawaii</a> | 
            <a class="topMostLinks" href="http://jabsom.hawaii.edu" target="_blank">John A. Burns School of Medicine</a>
        </p>
        <!-- ((TIPUE SEARCH FUNCTION)) -->
        <div class="searchForm">                                                                                
            <form action="../Home/search.html">                                        
            <input class="search form-control-static" type="text" name="q" id="tipue_search_input" autocomplete="off" placeholder="Search BQHS..." required/>      
            <button type="submit" class="btn searchButton"">
                <span class="glyphicon glyphicon-search"></span>
            </button>
            </form>
        </div>
    </div>


    <!-- #BQHS Banner -->
    <div class="container-fluid bannerFluid">
         <img class="BQHSbanner" src="../images/OBQHS_Banner.jpg" alt="BQHS Banner"/>
    </div>  

     <div><?php include './menu2.html';?></div>

    <!-- Breadcrumb/Navigational Hierarchy -->
            <div class="hierarchy breadcrumbNav realBreadcrumbNav">
                <ol class="breadcrumb">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../Home/about.html">About Us</a></li>
                    <li class="currentLink"><a href="../Home/contact.html">Contact Us</a></li>
                </ol>
            </div> <!-- (End Breadcrumb) -->

    </div> <!-- (End of Page Header) -->

  <!-- &&&&&&&&&&& [IMITATION HEADER - Do not touch code ***below*** this line until end of imitation header!] &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->

    <!-- #Top Menu (Link to other entities not directly related to BQHS main topics) -->
    <div class="container-fluid topNavBar pull-right">
        <!-- #First navigation bar -->
        <p>
            <a class="topMostLinks" href="../Home/contact.html">Contact</a> |
            <a class="topMostLinks" href="../Home/jobs.html">Careers</a> |
            <a class="topMostLinks" href="http://hawaii.edu" target="_blank">University of Hawaii</a> | 
            <a class="topMostLinks" href="http://jabsom.hawaii.edu" target="_blank">John A. Burns School of Medicine</a>
        </p> 
        <div class="searchForm">                                                                                    <!-- MAYBE ADD WORKING PHP/JAVASCRIPT CODE HERE? -->
            <form action="../search.html">  <!-- CHANGE TO BIOSTAT URL WHEN ONLINE -->                                           <!-- Is it even necessary (JABSOM Site not necessary) -->
            <input class="search form-control-static" type="text" name="q" id="tipue_search_input_fake" autocomplete="off" placeholder="Search BQHS..." />      <!--(For Cancer Center site, yes!) -->
            <button type="submit" class="btn searchButton"">
                <span class="glyphicon glyphicon-search"></span>
            </button>
            </form>
        </div>
    </div>


    <!-- #BQHS Banner -->
    <div class="container bannerFluid">
         <img class="BQHSbanner" src="../images/OBQHS_Banner.jpg" alt="BQHS Banner"/>
    </div>  

    <!-- (FAKE, DO NOT TOUCH) -->
   <div id="fakeMenuReplace2"><?php include './menu2.html';?></div>

   
 <!-- &&&&& [END IMITATION HEADER - Do not touch code ^^^above^^^ this line until start of imitation header!] &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->

    <!-- DIV to create Body Borders -->
    <div class="container mainBody" id="activeCU">

        <!-- #Main Content ===> This alternates between all BQHS pages. -->
        <div class="mainContent container-fluid">

        <!-- &&&&&&[FAKE BREADCRUMB NAV]&&&&&&&&&&&&&&&&&&&&&&&& -->
        <div class="hierarchy breadcrumbNav">
            <ol class="breadcrumb">
                <li><a href="../index.html">Home</a></li>
                <li><a href="../Home/about.html">About Us</a></li>
                <li><a href="../Home/expertise.html">Our Expertise</a></li>
                <li class="currentLink"><a href="../Home/bioinfoanalysis.html">Bioinformatical Data Analysis</a></li>
            </ol>
        </div> <!-- &&&&&&&&&&&&&&(END FAKE BREADCRUMB NAV)&&&&&&&&&&&&&&& -->   
                    
    <!-- Main Content for pages after home page (including this one) -->
    <div class="mainInfo">


          <!-- Donation Page to the left --> 
        <div class="leftBank">
        
            <?php include './home-smallmenu.html';?>

            <!-- #FlowerPic (Header) -->
            <div class="belowVisionBox hierarchy">
                
            </div>

        </div> <!-- (End leftBank) -->


        <!-- Majority of the content will go the right side -->
        <div class="rightBank">

            <!-- Title of Page -->
            <div class="titleOfPage"><p>Contact Us</p></div>
            
            <!-- Content of Page -->
            <div class="contentOfPage"> 

                <div class="googleMap" id="googleMap">                 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.378870323994!2d-157.86492673388318!3d21.29604072713242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13fe1cb00533e6cb%3A0x6117bf83c8430ea5!2sJohn+A.+Burns+School+of+Medicine!5e0!3m2!1sen!2sus!4v1465257471931"
                        width="400" height="267" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

               
                <p class="contentWords text-center">
                    Youping Deng, Ph.D.<br />
                    <strong><em>Bioinformatics Core</em></strong><br />
                    <strong>Office of Biostatistics & Quantitative Health Sciences (BQHS)</strong><br />
                    University of Hawaii John A. Burns School of Medicine<br />
                    651 Ilalo Street<br />
                    Honolulu, HI 96813<br />
                    Phone: <a class="redLink" href="tel:+18086921664">(808) 692-1664</a><br />
                    Email: <a class="redLink" href="#contactForm">dengy@hawaii.edu</a><br />
                    <a class="redLink" href="../documents/Driving_Info.pdf" target="_blank">Driving Directions </a>|
                    <a class="redLink" href="../documents/Parking_Info_09212016_PDF.pdf" target="_blank">Parking Directions</a>
                </p>


                <div class="hidingBox" id="request">  <!-- Online BQHS Collaboration Request Form -->
                    <div class="hbTitle" id="rfTitle"> <!-- RF Title -->
                        <p>Online BQHS Collaboration Request Form</p>
                    </div>
                    <div class="hbContent contentWords" id="rfContent"> <!-- RF Content -->

                        <p>To help us better coordinate our support and meet your specific needs, we would appreciate it if you can fill out a request form
                             using the link below. Please make sure that you click on "Submit" after reviewing the summary information you provided.
                        </p>

                        <div class="memberTitleAlt">
                            <a class="btn btn-success bigInfo redContentButton memberTitle" href="./ClientRequestForm.php" 
                             target="_blank" role="button">Online BQHS Collaboration Request Form</a>
                        </div>
                        
                        <p><br />If your request is related to a project supported by one of the following programs: RMATRIX, INBRE, RCMI G12, Mountain West CTR-IN,
                             or an organization with a partnership agreement with JABSOM BQHS, please let us know in your request.
                        </p>
                        </div>
                </div>


                <div class="hidingBox" id="contactForm"> <!-- BQHS Contact Form -->
                    <div class="hbTitle" id="cfTitle"> <!-- CF Title -->
                        <p>Questions?</p>
                    </div>
                <div class="hbContent contentWords text-center" id="cfContent"><!-- CF Content -->
                    
                    <p class="contentWords">If you have any questions, please send a message below, which will redirect to <a class="redLink" href="#contactForm">dengy@hawaii.edu</a>.  We will get back to you soon.</p>

                    <div id="contact-area">
			
			            <form method="post" action="../NiceSimpleContactForm/contactengine2.php">
				            <label for="Name">Name:</label>
				            <input type="text" name="Name" id="Name" required />

				            <label for="Email">Email:</label>
				            <input type="text" name="Email" id="Email" required />
				
				            <label for="Message">Message:</label><br />
				            <textarea name="Message" rows="20" cols="20" id="Message" required></textarea>

				            <input type="submit" name="submit" value="Submit" class="submit-button" />
			            </form>
			
			        <div style="clear: both;"></div>
		
		            </div>

                </div>       
                    
                </div>  
                  
                               

              </div> <!-- (End contentOfPage) -->


        </div> <!-- (End rightBank) -->

    </div> <!-- (End mainInfo) -->

    <!--Return to top button-->
        <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

</div> <!-- (End Main Content) -->

    <!-- #Footer -->
    <div class="container-fluid bottomFooter">

        <!-- Inner Footer Area-->
        <div class="container innerFooter">

        <!-- #Left Footer -->
        <div class="container-fluid pull-left" id="leftFooter">
            <img class="jabsomImage" src="../images/jabsom_logo_white_oval_transparent.png" alt="JABSOM" />
            <img class="manoaImage" src="../images/manoaseal_transparent.png" alt="Manoa" />
        </div>
        

        <!-- #Right Footer -->
        <div class="container-fluid" id="rightFooter">

           <p class="officeLocation pull-left">
               <br />651 Ilalo Street, Biosciences Building, Suite 211,
                     Honolulu, HI 96813
           </p>
            <p class="contactInfo pull-left">
                <br />Phone: 808.692.1840  //  Fax: 808.692.1966  //  Email: biostat@hawaii.edu    
            </p>
            
            
        </div>

    </div><!-- (End of Inner Footer Area) -->

        <p class="copyright"><br /><br />&copy; 2016 Office of Biostatistics & Quantitative Health Sciences, University of Hawaii John A. Burns School of Medicine</p>

    </div> <!-- (End of Footer area) -->

</div> <!-- (End Div to create Body Borders)  -->

</body>
</html>
