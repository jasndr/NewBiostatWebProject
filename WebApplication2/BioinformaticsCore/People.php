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
            <a class="topMostLinks" href="./Sitemap.php">Sitemap</a>|
            <a class="topMostLinks" href="./Contact.php">Contact</a>|
            <a class="topMostLinks" href="./Jobs.php">Careers</a>|
            <a class="topMostLinks" href="http://hawaii.edu" target="_blank">University of Hawaii</a>|
            <a class="topMostLinks" href="http://jabsom.hawaii.edu" target="_blank">John A. Burns School of Medicine</a>
        </p>
        <!-- ((TIPUE SEARCH FUNCTION)) -->
        <div class="searchForm">                                                                                
            <form action="../Home/search.html">                                        
            <input class="search form-control-static" type="text" name="q" id="tipue_search_input" autocomplete="off" placeholder="Search BQHS..." required/>      
            <button type="submit" class="btn searchButton">
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
                            <td class="memberItems bioinfoMem"></td>
							<td class="memberItems bioinfoMem">
								<strong>Name</strong>
							</td>
							<td class="memberItems bioinfoMem">
								<strong>Title</strong>
							</td>
							<td class="memberItems bioinfoMem">
								<strong>Office</strong>
							</td>
							<td class="memberItems bioinfoMem">
								<strong>Email</strong>
							</td>
							<td class="memberItems bioinfoMem">
								<strong>Phone</strong>
							</td>
						</tr>

						<!-- Youping Deng, Ph.D. -->
						<tr class="memberAltColor">
                            <td class="memberItems">
                                <img class="memberImg" src="../images/youping.jpg" alt="Youping Deng, Ph.D." /></td>
							<td class="memberItems makeWide5">
								 <a class="redLink" href="./deng-youping.php" target="_blank"><strong>Youping<br /> Deng</strong></a>,<br /> Ph.D.
							</td>
                            <td class="memberItems">
                                <em>
                                    Professor & Director,
                                    <br />Bioinformatics Core
                                </em>
                            </td>
							<td class="memberItems memberItemsOffice">
								BSB<br /> 325 B
							</td>
							<td class="memberItems redLink">
								dengy@hawaii.edu
							</td>
							<td class="memberItems memberItemsPhone">
								(808) 692-1664
							</td>
						</tr>

						<!-- Vedbar Khadka -->
						<tr class="memberAltColor2">
                            <td class="memberItems"><img class="memberImg" src="../images/ved.jpg" alt="Vedbar Khadka, Ph.D." /></td>
							<td class="memberItems">
								<strong>Vedbar<br /> Khadka</strong>,<br /> Ph.D.
							</td>
							<td class="memberItems">
								<em>Bioinformatician</em>
							</td>
							<td class="memberItems memberItemsOffice">
								BSB<br /> 211 A-3
							</td>
							<td class="memberItems redLink">
								vedbar@hawaii.edu
							</td>
							<td class="memberItems memberItemsPhone">
								(808) 692-1862
							</td>
						</tr>

                          
                       <!-- Mark Menor-->
                       <tr class="memberAltColor">
                           <td class="memberItems">
                               <img class="memberImg" src="../images/MarkMenor_headshot2.png" alt="Razvan Sultana, Ph.D." />
                           </td>
                           <td class="memberItems">
                               <strong>Mark<br /> Menor</strong>,
                               <br />Ph.D.
                           </td>
                           <td class="memberItems">
                               <em>
                                   Bioinformatics /
                                   <br />Junior Researcher
                               </em>
                           </td>
                           <td class="memberItems memberItemsOffice">
                               BSB<br /> 211 A-4
                           </td>
                           <td class="memberItems redLink">
                               mmenor@hawaii.edu
                           </td>
                           <td class="memberItems memberItemsPhone">
                               (808) 692-1507
                           </td>
                       </tr>
					   
					   <!-- Rebecca Rodriguez, M.S.-->
                       <tr class="memberAltColor2">
                           <td class="memberItems">
                                <img class="memberImg" src="../images/rebecca.jpg" alt="Rebecca Rodriguez, M.S." /></td>
							<td class="memberItems makeWide5">
								 <strong>Rebecca<br /> Rodriguez</strong>,<br /> M.S.
							</td>
                            <td class="memberItems">
                                <em>
                                    Ph.D. Graduate Student
                                </em>
                            </td>
							<td class="memberItems memberItemsOffice">
								BSB<br /> 211
							</td>
							<td class="memberItems redLink">
								rmr4@hawaii.edu
							</td>
							<td class="memberItems memberItemsPhone">
								(808) 692-1816
							</td>
                       </tr>
					   
					   <!-- Ting Gong, M.S.-->
						<tr class="memberAltColor">
                            <td class="memberItems"><img class="memberImg" src="../images/ting.JPG" alt="Ting Gong, M.S." /></td>
							<td class="memberItems">
								<strong>Ting<br /> Gong</strong>,<br /> M.S.
							</td>
							<td class="memberItems">
								<em>Ph.D. Graduate Student</em>
							</td>
							<td class="memberItems memberItemsOffice">
								BSB<br /> 320
							</td>
							<td class="memberItems redLink">
								tgong@hawaii.edu
							</td>
							<td class="memberItems memberItemsPhone">
								(808) 692-1614
							</td>
						</tr>

						<!-- Bjarne Bartlett -->
						<tr class="memberAltColor2">
                            <td class="memberItems">
                                <img class="memberImg" src="../images/bjarne.jpg" alt="Bjarne Bartlett, B.S." /></td>
							<td class="memberItems">
								 <strong>Bjarne<br /> Bartlett</strong>,<br /> B.S.
							</td>
							<td class="memberItems memberItemsTitle">
								<em>Graduate Student</em>
							</td>
							<td class="memberItems memberItemsOffice">
								BSB<br /> 320
							</td>
							<td class="memberItems redLink">
								bjarne@hawaii.edu
							</td>
							<td class="memberItems memberItemsPhone">
								(808) 692-1614
							</td>
						</tr>

						<!-- Tianying Zhao -->
						<tr class="memberAltColor">
                            <td class="memberItems">
                               <img class="memberImg" src="../images/tianying.JPG" alt="Tianying Zhao, B.S." />
                           </td>
                           <td class="memberItems">
                               <strong>Tianying<br /> Zhao</strong>,
                               <br />B.S.
                           </td>
                           <td class="memberItems">
                               <em>
                                   Graduate Student
                               </em>
                           </td>
                           <td class="memberItems memberItemsOffice">
                               BSB<br /> 320
                           </td>
                           <td class="memberItems redLink">
                               tianying@hawaii.edu
                           </td>
                           <td class="memberItems memberItemsPhone">
                               (808) 692-1614
                           </td>
						</tr>
                          
					   
					   <!-- Masaki Nasu-->
                       <tr class="memberAltColor2">
                           <td class="memberItems">
                               <img class="memberImg" src="../images/nasu_masaki2.jpg" alt="Masaki Nasu, Ph.D." />
                           </td>
                           <td class="memberItems">
                               <strong>Masaki<br /> Nasu</strong>,
                               <br />Ph.D.
                           </td>
                           <td class="memberItems">
                               <em>
                                   Post-Doctoral Researcher
                               </em>
                           </td>
                           <td class="memberItems memberItemsOffice">
                               BSB<br /> 320-02
                           </td>
                           <td class="memberItems redLink">
                               mnasu@hawaii.edu
                           </td>
                           <td class="memberItems memberItemsPhone">
                               (808) 692-1670
                           </td>
                       </tr>

					   <!-- Laura Tipton-->
                       <tr class="memberAltColor">
                           <td class="memberItems">
                               <img class="memberImg" src="../images/lauratipton.jpg" alt="Laura Tipton, Ph.D." />
                           </td>
                           <td class="memberItems">
                               <strong>Laura<br /> Tipton</strong>,
                               <br />Ph.D.
                           </td>
                           <td class="memberItems">
                               <em>
                                   Bioinformatics Junior Researcher
                               </em>
                           </td>
                           <td class="memberItems memberItemsOffice">
                               BSB<br /> 320
                           </td>
                           <td class="memberItems redLink">
                               ltipton@hawaii.edu
                           </td>
                           <td class="memberItems memberItemsPhone">
                               (808) 692-1529
                           </td>
                       </tr>

					   <!-- Chunyi Liu-->
                       <tr class="memberAltColor2">
                           <td class="memberItems">
                               <img class="memberImg" src="../images/avatar.png" alt="Chunyi Liu, Ph.D." />
                           </td>
                           <td class="memberItems">
                               <strong>Chunyi<br /> Liu</strong>,
                               <br /><span style="text-decoration: line-through">Ph.D.</span>
                           </td>
                           <td class="memberItems">
                               <em>
                                   <span style="text-decoration: line-through">Post-Doctoral Researcher</span>
                               </em>
                           </td>
                           <td class="memberItems memberItemsOffice">
                               BSB<br /> 320
                           </td>
                           <td class="memberItems redLink">
                               cliu3322@hawaii.edu
                           </td>
                           <td class="memberItems memberItemsPhone">
                               (808) 692-1614
                           </td>
                       </tr>

					   <!-- Shaoqiu Chen-->
                       <tr class="memberAltColor">
                           <td class="memberItems">
                               <img class="memberImg" src="../images/shaoqiuchen.PNG" alt="Shaoqiu Chen, B.S." />
                           </td>
                           <td class="memberItems">
                               <strong>Shaoqiu<br /> Chen</strong>,
                               <br />B.S.
                           </td>
                           <td class="memberItems">
                               <em>
                                   Ph.D. Graduate Student
                               </em>
                           </td>
                           <td class="memberItems memberItemsOffice">
                               BSB<br /> 320
                           </td>
                           <td class="memberItems redLink">
                               shaoqiu@hawaii.edu
                           </td>
                           <td class="memberItems memberItemsPhone">
                               (302) 217-4202
                           </td>
                       </tr>

					   <!-- Mayumi Jijiwa, PhD-->
                       <tr class="memberAltColor2">
                           <td class="memberItems">
                               <img class="memberImg" src="../images/mayumijijiwa.jpg" alt="Mayumi Jijiwa, M.D., Ph.D." />
                           </td>
                           <td class="memberItems">
                               <strong>Mayumi<br /> Jijiwa</strong>,
                               <br />M.D., Ph.D.
                           </td>
                           <td class="memberItems">
                               <em>
									Post-Doctoral Researcher
                               </em>
                           </td>
                           <td class="memberItems memberItemsOffice">
                               BSB<br /> 222
                           </td>
                           <td class="memberItems redLink">
                               jijiwa@hawaii.edu
                           </td>
                           <td class="memberItems memberItemsPhone">
                               (808) 692-1531
                           </td>
                       </tr>

					   <!-- Yu Chen, M.S.-->
                       <tr class="memberAltColor">
                           <td class="memberItems">
                               <img class="memberImg" src="../images/yuchen.JPG" alt="Yu Chen, M.S." />
                           </td>
                           <td class="memberItems">
                               <strong>Yu<br /> Chen</strong>,
                               <br />M.S.
                           </td>
                           <td class="memberItems">
                               <em>
                                   Ph.D. Graduate Student
                               </em>
                           </td>
                           <td class="memberItems memberItemsOffice">
                               BSB<br /> 222
                           </td>
                           <td class="memberItems redLink">
                               yuchen8@hawaii.edu
                           </td>
                           <td class="memberItems memberItemsPhone">
                               (808) 692-1670
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
               <br />651 Ilalo Street, Medical Education Building, Suite 411,
                     Honolulu, HI 96813
           </p>
            <p class="contactInfo pull-left">
                <br />Phone: 808.692.1840  //  Fax: 808.692.1260  //  Email: qhs@hawaii.edu    
            </p>
            
            
        </div>

    </div><!-- (End of Inner Footer Area) -->

       <p class="copyright"><br /><br />&copy; <script type="text/javascript"> document.write(new Date().getFullYear());</script> Office of Biostatistics & Quantitative Health Sciences, University of Hawaii John A. Burns School of Medicine</p>

    </div> <!-- (End of Footer area) -->

</div> <!-- (End Div to create Body Borders)  -->

</body>
</html>