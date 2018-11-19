<!DOCTYPE html>
<!-- ######################################################################
     # Office of Biostatistics & Quantitative Health Science Website      #
     # University of Hawaii, John A. Burns School of Medicine             #
     #                                                                    #
     # @author Jason Delos Reyes                                          #
     # @date November 2016                                                #
     # Research Grant Support - Bioinformatics Core                       #
     ###################################################################### -->
<html>

<head>
    <title>Research Grant Support | Bioinformatics Core | BQHS</title>
    <link rel="icon" href="../../images/Logo_Final.png" />
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="description" content="Who are we?" />
    <meta name="keywords" content="Research Grant Support, Bioinformatics Core, BQHS, About, Biostatistics, Quantitative Health Sciences, Hawaii, University of Hawaii, John A. Burns School of Medicine" />
    <meta name="author" content="Jason Delos Reyes" />
    <link rel="stylesheet" type="text/css" href="../../StyleSheet1.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../../JavaScript.js"></script> 
</head>


<body id="bi-research">

    <!-- Page Header to create fixed header -->
    <div class="pageHeader">

	<!-- Bioinformatics Ad Button-->
        <div class="bioinformatics-ad">
            <a href="../../">
                <p class="label success return-label">
                    <span class="align">Bioinformatics Core</span>
                </p>
            </a>
        </div>

    <!-- #Top Menu (Link to other entities not directly related to BQHS main topics) -->
    <div class="container-fluid topNavBar pull-right">
        <!-- #First navigation bar -->
        <p>
            <a class="topMostLinks" href="../Sitemap.php">Sitemap</a>|
            <a class="topMostLinks" href="../Contact.php">Contact</a>|
            <a class="topMostLinks" href="../Jobs.php">Careers</a>|
            <a class="topMostLinks" href="http://hawaii.edu" target="_blank">University of Hawaii</a>|
            <a class="topMostLinks" href="http://jabsom.hawaii.edu" target="_blank">John A. Burns School of Medicine</a>
        </p>
        <!-- ((TIPUE SEARCH FUNCTION)) -->
        <div class="searchForm">                                                                                
            <form action="../../Home/search.html">                                        
            <input class="search form-control-static" type="text" name="q" id="tipue_search_input" autocomplete="off" placeholder="Search BQHS..." required/>      
            <button type="submit" class="btn searchButton"">
                <span class="glyphicon glyphicon-search"></span>
            </button>
            </form>
        </div>
    </div>


    <!-- #BQHS Banner -->
    <div class="container-fluid bannerFluid">
         <img class="BQHSbanner" src="../../images/OBQHS_Banner.jpg" alt="BQHS Banner"/>
    </div> 

        <!-- include menu file -->
        <div><?php include '../menu2a.html';?></div>

    <!-- Breadcrumb/Navigational Hierarchy -->
            <div class="hierarchy breadcrumbNav realBreadcrumbNav">
                <ol class="breadcrumb">
                    <li><a href="./index.html">Research</a></li>
                    <li class="currentLink"><a href="./ResearchGrant.php">Grant Support</a></li>
                </ol>
            </div><!-- (End Breadcrumb) -->

    </div> <!-- (End of Page Header) -->

     <!-- &&&&&&&&&&& [IMITATION HEADER - Do not touch code ***below*** this line until end of imitation header!] &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->

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
        <div class="searchForm">                                                                                    <!-- MAYBE ADD WORKING PHP/JAVASCRIPT CODE HERE? -->
            <form action="./search.html">  <!-- CHANGE TO BIOSTAT URL WHEN ONLINE -->                                           <!-- Is it even necessary (JABSOM Site not necessary) -->
            <input class="search form-control-static" type="text" name="q" id="tipue_search_input_fake" autocomplete="off" placeholder="Search BQHS..." />      <!--(For Cancer Center site, yes!) -->
            <button type="submit" class="btn searchButton"">
                <span class="glyphicon glyphicon-search"></span>
            </button>
            </form>
        </div>
    </div>


    <!-- #BQHS Banner -->
    <div class="container-fluid bannerFluid">
         <img class="BQHSbanner" src="../../images/OBQHS_Banner.jpg" alt="BQHS Banner"/>
    </div>  

       <!-- (FAKE, DO NOT TOUCH) -->
     <!--<div class="fakeMenuReplace"></div>-->
    <div id="fakeMenuReplace"><?php include '../menu2a.html';?></div>

   
    <!-- &&&&& [END IMITATION HEADER - Do not touch code ^^^above^^^ this line until start of imitation header!] &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->

    <!-- DIV to create Body Borders -->
    <div class="container mainBody fakeMenuReplace" id="activebirhRG">

        <!-- #Main Content ===> This alternates between all BQHS pages. -->
        <div class="mainContent container-fluid">

            <!-- &&&&&&&&&&&&&&&&&&&&&&&&& [FAKE BREADCRUMB NAV] &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
            <div class="hierarchy breadcrumbNav realBreadcrumbNav">
                <ol class="breadcrumb">
                    <li><a href="./index.html">Research</a></li>
                    <li class="currentLink"><a href="./ResearchGrant.php">Grant Support</a></li>
                </ol>
            </div> <!-- &&&&&&&&&&&&&&&&&& (END FAKE BREADCRUMB NAV) &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

    <!-- Main Content for pages after home page (including this one) -->
    <div class="mainInfo">



          <!-- Small Menu to the left --> 
        <div class="leftBank">
          
            <?php include 'birh-smallmenu.html'; ?>


            <!--<img class="flowerPic" src="../../images/Flower6-fade.png" />-->

        </div> <!-- (End leftBank) -->


        <!-- Majority of the content will go the right side -->
        <div class="rightBank">

            <!-- Title of Page -->
            <div class="titleOfPage"><p>Research Grant Support</p></div>
            
            <!-- Content of Page -->
            <div class="contentOfPage"> 

                <!-- <img class="contentImage-wide" src="../../images/Rui-blur.png" alt="Research" />-->

                <h3 class="contentHeader"><a class="redLink" href="http://inbre.jabsom.hawaii.edu/" target="_blank">INBRE-III   </a>
                    <img class="contentImage-tiny" src="../../images/inbre-iii.png" />
                </h3>

                <p class="contentWords">Institutional Development Award (IDeA) Network for Biomedical Research Excellence (INBRE) grant (PI: R. Nichols, P20GM103466)
                     funded by National Institute of General Medical Sciences (NIGMS) is a statewide program with our undergraduate institutions and community colleges.
                     INBRE mission is to get students involved in biomedical research from the beginning of their college experience.
                </p>

                <p class="contentWords">The BQHS serves as the INBRE Bioinformatics/Biostatistics Core and provides relevant bioinformatics, computational,
                     and biostatistical support for all junior investigators, their staff, and INBRE affiliated investigators and students.  The core offers
                     comprehensive bioinformatical and biostatistical service and support, research, and training and education.
                </p>

                <h3 class="contentHeader">
                    <a class="redLink" href="http://pceidr.jabsom.hawaii.edu" target="_blank">Pacific Center for Emerging Infectious Disease Research   </a>
                    <img class="contentImage-tiny" src="../../images/pceidr.png" />
                </h3>

                <p class="contentWords">
                    Pacific Center for Emerging Infectious Disease Research (PCEIDR) grant (PI: R. Yanagihara, 5P30GM114737)
                    is funded by National Institute of General Medical Sciences.
                    The principal objective of the Phase III COBRE for emerging infectious diseases is to enhance the conditions that accelerate the pace of scientific discovery, 
                    heighten research productivity and increase competitiveness for extramural funding.
                </p>


                <h3 class="contentHeader">
                    <a class="redLink" href="http://rmatrix.jabsom.hawaii.edu/" target="_blank">RMATRIX-II   </a>
                    <img class="contentImage-tiny" src="../../images/rmatrix.png" />
                </h3>

                <p class="contentWords">
                    The Research Centers in Minority Institutions (RCMI) Multidisciplinary And Translational Research Infrastructure
                     eXpansion (RMATRIX) grant (MPI: J. Hedges, N. Mokuau, U54MD007584) is funded by National Institute on Minority Health and Health Disparities (NIMHD). RMATRIX fosters
                     clinical and translational health disparities research by providing an integrated research infrastructure.
                </p>

                <p class="contentWords">
                    BQHS serves as the Biostatistics & Health Sciences Data Analytics (BHDA) Core and provides integrated research and database
                     design, biostatistical and bioinformatical data analytic collaborations and support to clinical and translational health disparities researchers.
                     The BHDA Core also offers quantitative health sciences training and education through individual research methodology mentoring, seminars and
                     workshops, and for-credit courses.
                </p>
                
                        

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
            <img class="jabsomImage" src="../../images/jabsom_logo_white_oval_transparent.png" alt="JABSOM" />
            <img class="manoaImage" src="../../images/manoaseal_transparent.png" alt="Manoa" />
        </div>
        

        <!-- #Right Footer -->
        <div class="container-fluid" id="rightFooter">

           <p class="officeLocation pull-left">
               <br />651 Ilalo Street, Medical Education Building, Suite 411,
                     Honolulu, HI 96813
           </p>
            <p class="contactInfo pull-left">
                <br />Phone: 808.692.1840  //  Fax: 808.692.1966  //  Email: qhs@hawaii.edu    
            </p>
            
            
        </div>

    </div><!-- (End of Inner Footer Area) -->

       <p class="copyright"><br /><br />&copy; <script type="text/javascript"> document.write(new Date().getFullYear());</script> Office of Biostatistics & Quantitative Health Sciences, University of Hawaii John A. Burns School of Medicine</p>

    </div> <!-- (End of Footer area) -->

</div> <!-- (End Div to create Body Borders)  -->

</body>
</html>