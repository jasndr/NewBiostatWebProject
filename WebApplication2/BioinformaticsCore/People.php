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
    <title>People | Bioinformatics Core | BQHS</title>
    <link rel="icon" href="../images/Logo_Final.png" />
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="description" content="Who are we?" />
    <meta name="keywords" content="People, Bioinformatics Core, BQHS, About, Biostatistics, Quantitative Health Sciences, Hawaii, University of Hawaii, John A. Burns School of Medicine" />
    <meta name="author" content="Jason Delos Reyes" />
    <link rel="stylesheet" type="text/css" href="../StyleSheet1.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../JavaScript.js"></script> 
</head>


<body id="bi-people">

    <!-- Page Header to create fixed header -->
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

        <!-- include menu file -->
        <div><?php include 'menu2.html';?></div>

    <!-- Breadcrumb/Navigational Hierarchy -->
            <div class="hierarchy breadcrumbNav realBreadcrumbNav">
                <ol class="breadcrumb">
                    <li><a href="./index.html">Home</a></li>
                    <li class="currentLink"><a href="./People.php">People</a></li>
                </ol>
            </div> <!-- (End Breadcrumb) -->

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
         <img class="BQHSbanner" src="../images/OBQHS_Banner.jpg" alt="BQHS Banner"/>
    </div>  

       <!-- (FAKE, DO NOT TOUCH) -->
    <div id="fakeMenuReplace"><?php include './menu2.html';?></div>

   
    <!-- &&&&& [END IMITATION HEADER - Do not touch code ^^^above^^^ this line until start of imitation header!] &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->

    <!-- DIV to create Body Borders -->
    <div class="container mainBody fakeMenuReplace" id="activebipPP">

        <!-- #Main Content ===> This alternates between all BQHS pages. -->
        <div class="mainContent container-fluid">

            <!-- &&&&&&&&&&&&&&&&&&&&&&&&& [FAKE BREADCRUMB NAV] &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
            <div class="hierarchy breadcrumbNav">
                <ol class="breadcrumb">
                    <li><a href="./index.html">Home</a></li>
                    <li class="currentLink"><a href="./People.php">People</a></li>
                </ol>
            </div> <!-- &&&&&&&&&&&&&&&&&& (END FAKE BREADCRUMB NAV) &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

    <!-- Main Content for pages after home page (including this one) -->
    <div class="mainInfo">



          <!-- Small Menu to the left --> 
        <div class="leftBank">
          
            <?php include './people-smallmenu.html'; ?>


            <!--<img class="flowerPic" src="../images/Flower6-fade.png" />-->

        </div> <!-- (End leftBank) -->


        <!-- Majority of the content will go the right side -->
        <div class="rightBank">

            <!-- Title of Page -->
            <div class="titleOfPage"><p>People</p></div>
            
            <!-- Content of Page -->
            <div class="contentOfPage"> 

                <!--<img class="contentImage-wide" src="../images/Rui-blur.png" alt="Research" />-->



                <div class="hidingBox" id="faculty"> 
                    <div class="hbTitle" id="fTitle"> <!-- F Title -->
                        <p>Bioinformatics Core Faculty & Staff</p>
                    </div>
                    <div class="hbContent contentWords" id="fContent"> <!-- F Content -->

					<div class="text-center">
						 <table class="memberTable contentWords text-center">     
						<tr>
							<td class="memberItems">
								<strong>Name</strong>
							</td>
							<td class="memberItems">
								<strong>Title</strong>
							</td>
							<td class="memberItems">
								<strong>Office</strong>
							</td>
							<td class="memberItems">
								<strong>Email</strong>
							</td>
							<td class="memberItems">
								<strong>Phone</strong>
							</td>
						</tr>

						<!-- Youping Deng, Ph.D. -->
						<tr class="memberAltColor">
							<td class="memberItems">
								 <a class="redLink" href="../Home/Faculty/deng-youping.html" target="_blank"><strong>Youping Deng</strong></a>,<br /> Ph.D.
							</td>
							<td class="memberItems">
								<em>Professor & Director,<br />Bioinformatics Core</em>
							</td>
							<td class="memberItems memberItemsOffice">
								BSB 325 B
							</td>
							<td class="memberItems redLink">
								dengy@hawaii.edu
							</td>
							<td class="memberItems memberItemsPhone">
								(808) 692-1664
							</td>
						</tr>

						<!-- Mahdi Belcaid-->
						<tr class="memberAltColor2">
							<td class="memberItems">
								 <a class="redLink" href="http://pceidr.jabsom.hawaii.edu/guest/Guest.vm;jsessionid=497F9481B5A37758D7A6D04BDCEA72A7?method=homePage&id=50" target="_blank">
									<strong>Mahdi Belcaid</strong></a>,<br /> Ph.D.
							</td>
							<td class="memberItems">
								<em>Assistant Researcher</em>
							</td>
							<td class="memberItems memberItemsOffice">
								POST 310A
							</td>
							<td class="memberItems redLink">
								mahdi@hawaii.edu
							</td>
							<td class="memberItems memberItemsPhone">
								(808) 956-5175
							</td>
						</tr>

						<!-- Vedbar Khadka -->
						<tr class="memberAltColor">
							<td class="memberItems">
								<strong>Vedbar Khadka</strong>,<br /> Ph.D.
							</td>
							<td class="memberItems">
								<em>Bioinformatician</em>
							</td>
							<td class="memberItems memberItemsOffice">
								BSB 211 A-3
							</td>
							<td class="memberItems redLink">
								vedbar@hawaii.edu
							</td>
							<td class="memberItems memberItemsPhone">
								(808) 692-1862
							</td>
						</tr>

						<!-- Rui Fang -->
						<tr class="memberAltColor2">
							<td class="memberItems">
								 <strong>Rui Fang</strong>,<br /> M.S.
							</td>
							<td class="memberItems memberItemsTitle">
								<em>Biostatistical Analyst</em>
							</td>
							<td class="memberItems memberItemsOffice">
								BSB 211 H-6
							</td>
							<td class="memberItems redLink">
								fangr@hawaii.edu
							</td>
							<td class="memberItems memberItemsPhone">
								(808) 692-1815
							</td>
						</tr>

              

                    
					</table>
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