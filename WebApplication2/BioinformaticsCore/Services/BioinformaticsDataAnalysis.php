<!DOCTYPE html>
<!-- ######################################################################
     # Office of Biostatistics & Quantitative Health Science Website      #
     # University of Hawaii, John A. Burns School of Medicine             #
     #                                                                    #
     # @author Jason Delos Reyes                                          #
     # @date November 2016                                                #
     # Data Analysis - Bioinformatics Core                                #
     ###################################################################### -->
<html>

<head>
    <title>Data Analysis | Bioinformatics Core | BQHS</title>
    <link rel="icon" href="../../images/Logo_Final.png" />
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="description" content="Who are we?" />
    <meta name="keywords" content="Bioinformatics Data Analysis, BQHS, About, Biostatistics, Quantitative Health Sciences, Hawaii, University of Hawaii, John A. Burns School of Medicine" />
    <meta name="author" content="Jason Delos Reyes" />
    <link rel="stylesheet" type="text/css" href="../../StyleSheet1.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../../JavaScript.js"></script> 
</head>


<body id="bi-services">

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
                    <li><a href="./index.html">Services</a></li>
                    <li class="currentLink"><a href="./BioinformaticsDataAnalysis.php">Bioinformatics Data Analysis</a></li>
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
    <div class="container mainBody fakeMenuReplace"  id="activebisDA">

        <!-- #Main Content ===> This alternates between all BQHS pages. -->
        <div class="mainContent container-fluid">

            <!-- &&&&&&&&&&&&&&&&&&&&&&&&& [FAKE BREADCRUMB NAV] &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
            <div class="hierarchy breadcrumbNav realBreadcrumbNav">
                <ol class="breadcrumb">
                    <li><a href="./index.html">Services</a></li>
                    <li class="currentLink"><a href="./BioinformaticsDataAnalysis.php">Bioinformatics Data Analysis</a></li>
                </ol>
            </div> <!-- &&&&&&&&&&&&&&&&&& (END FAKE BREADCRUMB NAV) &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

    <!-- Main Content for pages after home page (including this one) -->
    <div class="mainInfo">



          <!-- Small Menu to the left --> 
        <div class="leftBank">
          
            <?php include 'bis-smallmenu.html'; ?>


            <!--<img class="flowerPic" src="../../images/Flower6-fade.png" />-->

        </div> <!-- (End leftBank) -->


        <!-- Majority of the content will go the right side -->
        <div class="rightBank">

            <!-- Title of Page -->
            <div class="titleOfPage"><p>Bioinformatics Data Analysis</p></div>
            
            <!-- Content of Page -->
            <div class="contentOfPage"> 

                <!-- <img class="contentImage-wide" src="../../images/Rui-blur.png" alt="Research" />-->

				<div class="container">

						<ul class="contentWords">
							<li>Next Generation Sequence Analysis
								<ul>
									<li>Assembly and gene annotation</li>
									<li>DNA-Seq</li>
									<li>RNA-Seq including fusion gene and LncRNA</li>
									<li>Small RNA-Seq</li>
									<li>Chip-Seq</li>
									<li>Target-Seq</li>
									<li>Meth-Seq</li>
									<li>Metagenomics</li>
								</ul>
							</li>
							<li>Microarray data analysis
								<ul>
									<li>Gene expression</li>
									<li>Exon array for alternative splicing</li>
									<li>SNP array, GWIS</li>
									<li>miRNA array</li>
									<li>DNA methylation array</li>
									<li>CNV</li>
								</ul>
							</li>
							<li>Proteomics data and Protein array
								<ul>
									<li>Protein mass-spec data for protein expression and interaction</li>
									<li>Phosphor-screen</li>
									<li>Glycol-screen</li>
									<li>PTM (post translation modicication) Profilling</li>
								</ul>
							</li>
							<li>Metobolomics data analysis
								<ul>
									</li>Lipidomics</li>
									<li>Sugar profiling</li>
									<li>Entire metabolomics data analysis</li>
								</ul>
							</li>
							<li>Multivariate biomarker identification and classification
								<ul>
									<li>Feature selection algorithms</li>
									<li>Classification algorithms</li>
								</ul>
							</li>
							<li> Gene pattern, function analysis, systems biology
								<ul>
									<li>Gene and sample correlation and clustering analysis</li>
									<li>Gene enrichment analysis</li>
									<li>Gene ontology and pathway analysis</li>
									<li>Gene network analysis</li>
									<li>Integrative "omics" data analysis</li>
								</ul>
							</li>
							<li>Image data analysis</li>

						</ul>

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