<!DOCTYPE html>
<!-- ######################################################################
     # Office of Biostatistics & Quantitative Health Science Website      #
     # University of Hawaii, John A. Burns School of Medicine             #
     #                                                                    #
     # @author Jason Delos Reyes                                          #
     # @date November 2016                                                #
     # BQHS - About Us                                                    #
     ###################################################################### -->
<html>

<head>
    <title>About Us | Bioinformatics Core | BQHS</title>
    <link rel="icon" href="../images/Logo_Final.png" />
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="description" content="Who are we?" />
    <meta name="keywords" content="BQHS, About, Biostatistics, Quantitative Health Sciences, Hawaii, University of Hawaii, John A. Burns School of Medicine" />
    <meta name="author" content="Jason Delos Reyes" />
    <link rel="stylesheet" type="text/css" href="../StyleSheet1.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../JavaScript.js"></script> 
</head>


<body id="bi-home">

    <!-- Page Header to create fixed header -->
    <div class="pageHeader">

	 <!-- Bioinformatics Ad Button-->
        <div class="bioinformatics-ad">
            <a href="../">
                <p class="label success return-label">
                    <span class="align">Bioinformatics Core</span>
                </p>
            </a>
        </div>

    <!-- #Top Menu (Link to other entities not directly related to BQHS main topics) -->
    <div class="container-fluid topNavBar pull-right">
        <!-- #First navigation bar -->
        <p>
            <a class="topMostLinks" href="./Sitemap.php">Sitemap</a> |
            <a class="topMostLinks" href="./Contact.php">Contact</a> |
            <a class="topMostLinks" href="./Jobs.php">Careers</a> |
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

        <!-- include menu file -->
        <div><?php include 'menu2.html';?></div>

    <!-- Breadcrumb/Navigational Hierarchy -->
            <div class="hierarchy breadcrumbNav realBreadcrumbNav">
                <ol class="breadcrumb">
                    <li><a href="./index.html">Home</a></li>
                    <li class="currentLink"><a href="./Jobs.php">Jobs</a></li>
                </ol>
            </div> <!-- (End Breadcrumb) -->

    </div> <!-- (End of Page Header) -->

     <!-- &&&&&&&&&&& [IMITATION HEADER - Do not touch code ***below*** this line until end of imitation header!] &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->

    <!-- #Top Menu (Link to other entities not directly related to BQHS main topics) -->
    <div class="container-fluid topNavBar pull-right">
        <!-- #First navigation bar -->
        <p>
            <a class="topMostLinks" href="./Sitemap.php">Sitemap</a>|
            <a class="topMostLinks" href="./Contact.php">Contact</a>|
            <a class="topMostLinks" href="./Jobs.php">Careers</a>|
            <a class="topMostLinks" href="http://hawaii.edu" target="_blank">University of Hawaii</a>|
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
         <img class="BQHSbanner" src="../images/OBQHS_Banner.jpg" alt="BQHS Banner"/>
    </div>  

       <!-- (FAKE, DO NOT TOUCH) -->
    <div id="fakeMenuReplace"><?php include './menu2.html';?></div>

   
    <!-- &&&&& [END IMITATION HEADER - Do not touch code ^^^above^^^ this line until start of imitation header!] &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->

    <!-- DIV to create Body Borders -->
    <div class="container mainBody fakeMenuReplace" id="activebiCA">

        <!-- #Main Content ===> This alternates between all BQHS pages. -->
        <div class="mainContent container-fluid">

            <!-- &&&&&&&&&&&&&&&&&&&&&&&&& [FAKE BREADCRUMB NAV] &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
            <div class="hierarchy breadcrumbNav">
                <ol class="breadcrumb">
                    <li><a href="./index.html">Home</a></li>
                    <li class="currentLink"><a href="./AboutUs.php">About Us</a></li>
                </ol>
            </div> <!-- &&&&&&&&&&&&&&&&&& (END FAKE BREADCRUMB NAV) &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

    <!-- Main Content for pages after home page (including this one) -->
    <div class="mainInfo">



          <!-- Small Menu to the left --> 
        <div class="leftBank">
          
            <?php include './home-smallmenu.html'; ?>


            <!--<img class="flowerPic" src="../images/Flower6-fade.png" />-->

        </div> <!-- (End leftBank) -->


        <!-- Majority of the content will go the right side -->
        <div class="rightBank">

            <!-- Title of Page -->
            <div class="titleOfPage"><p>Job Opportunities</p></div>
            
            <!-- Content of Page -->
            <div class="contentOfPage"> 

                <p class="contentWords">
                    QHS is always looking for qualified and self-motivated Ph.D. and Master-level quantitative health sciences specialists to join our growing team.
                    <em>Please see below for our current job openings and full job description information.</em>
                </p>

                <p class="contentWords">
                    If you are interested in exploring career opportunities at UH JABSOM QHS, please submit a cover letter describing your interest
                         and qualifications, your resume/CV, and a copy of school transcripts via email to
                    <a class="redLink" href="./Contact.php#contactForm">
                        <strong>qhsjobs@hawaii.edu</strong>
                    </a>. Mahalo for your interest.
                </p>


                <div class="hidingBox" id="bioinfoPostDoc">
                    <!-- Biostatistician Positions -->
                    <div class="hbTitle" id="bpdTitle">
                        <!-- BPD Title -->
                        <p>
                            <a class="redLink" href="https://hrweb.rcuh.com/psc/hrprd_exapp/EMPLOYEE/HRMS/c/HRS_HRAM.HRS_CE.GBL?Page=HRS_CE_JOB_DTL&Action=A&JobOpeningId=17088&SiteId=2&PostingSeq=1&"
                                target="_blank">
                                <strong>Post-Doctoral Researcher</strong>
                            </a>
                        </p>
                    </div>
                    <div class="hbContent contentWords" id="bpdContent">
                        <!-- BPD Content -->

                        <ul>
                            <li>
                                <em>Duties &amp; Responsibilities:</em>  Focuses on translational medicine study and identifying biomarkers for early detection of cancer and prediction of
                                 clinical outcomes of cancer treated with different strategies. Further investigates the function and mechanism of newly recognized targets based on human
                                 patient samples using in vitro and in vivo models.  Performs most updated one or more of "omic" technologies including transcriptomics, epigenomics and
                                 next generation sequencing. Participates in bioinformatics data analysis.  Interacts with medical doctors and research scientists at University of Hawai‘i
                                 to facility personalized medicine development through interpreting these huge amount of data.  Writes manuscripts, and supervises graduate students. 
                            </li>
                            <li>
                                <em>Minimum Qualifications:</em>  Ph.D. in Molecular Biology, Biochemistry or related fields 
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="hidingBox" id="bioinfoSpecialist">
                    <!-- Bioinformatician Positions -->
                    <div class="hbTitle" id="biasTitle">
                        <!-- BIAS Title -->
                        <p>
                            <a class="redLink" href="http://www.pers.hawaii.edu/wuh/Jobs/NAdvert/24503"
                                target="_blank">
                                <strong>Bioinformatics Assistant Specialist</strong>
                            </a>
                        </p>
                    </div>
                    <div class="hbContent contentWords" id="biasContent">
                        <!-- BIAS Content -->

                        <ul>
                            <li>
                                <em>Duties &amp; Responsibilities:</em>  Works in close collaboration with other members of JABSOM bioinformatics team, providing comprehensive bioinformatic
                                 support and collaborations to faculty and staff in the school and university, including the development of grant proposals and scientific manuscripts
                                 and participates in educational activities.
                            </li>
                            <li>
                                <em>Minimum Qualifications:</em>  Master's degree in Bioinformatics or related field and three years of experience in bioinformatics
                                 (or related field) as Junior Specialist or equivalent
                            </li>
                        </ul>

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
                <br />Phone: 808.692.1840  //  Fax: 808.692.1966  //  Email: qhs@hawaii.edu    
            </p>
            
            
        </div>

    </div><!-- (End of Inner Footer Area) -->

        <p class="copyright"><br /><br />&copy; 2017 Office of Biostatistics & Quantitative Health Sciences, University of Hawaii John A. Burns School of Medicine</p>

    </div> <!-- (End of Footer area) -->

</div> <!-- (End Div to create Body Borders)  -->

</body>
</html>