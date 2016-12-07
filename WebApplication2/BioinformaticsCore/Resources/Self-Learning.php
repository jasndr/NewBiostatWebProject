<!DOCTYPE html>
<!-- ######################################################################
     # Office of Biostatistics & Quantitative Health Science Website      #
     # University of Hawaii, John A. Burns School of Medicine             #
     #                                                                    #
     # @author Jason Delos Reyes                                          #
     # @date November 2016                                                #
     # Self-Learning - Bioinformatics Core                                #
     ###################################################################### -->
<html>

<head>
    <title>Self-Learning | Bioinformatics Core | BQHS</title>
    <link rel="icon" href="../../images/Logo_Final.png" />
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="description" content="Who are we?" />
    <meta name="keywords" content="Self Learning, Bioinformatics Core, BQHS, About, Biostatistics, Quantitative Health Sciences, Hawaii, University of Hawaii, John A. Burns School of Medicine" />
    <meta name="author" content="Jason Delos Reyes" />
    <link rel="stylesheet" type="text/css" href="../../StyleSheet1.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../../JavaScript.js"></script> 
</head>


<body id="bi-resources">

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
            <a class="topMostLinks" href="../../Home/sitemap.html">Sitemap</a> |
            <a class="topMostLinks" href="../../Home/contact.html">Contact</a> |
            <a class="topMostLinks" href="../../Home/jobs.html">Careers</a> |
            <a class="topMostLinks" href="http://hawaii.edu" target="_blank">University of Hawaii</a> | 
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
                    <li><a href="./index.html">Resources</a></li>
                    <li class="currentLink"><a href="./Self-Learning.php">Self-Learning</a></li>
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
    <div class="container mainBody fakeMenuReplace" id="activebirsSL">

        <!-- #Main Content ===> This alternates between all BQHS pages. -->
        <div class="mainContent container-fluid">

            <!-- &&&&&&&&&&&&&&&&&&&&&&&&& [FAKE BREADCRUMB NAV] &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
            <div class="hierarchy breadcrumbNav realBreadcrumbNav">
                <ol class="breadcrumb">
                    <li><a href="./index.html">Research</a></li>
                    <li class="currentLink"><a href="./Self-Learning.php">Self-Learning</a></li>
                </ol>
            </div> <!-- &&&&&&&&&&&&&&&&&& (END FAKE BREADCRUMB NAV) &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

    <!-- Main Content for pages after home page (including this one) -->
    <div class="mainInfo">



          <!-- Small Menu to the left --> 
        <div class="leftBank">
          
            <?php include 'birs-smallmenu.html'; ?>


            <!--<img class="flowerPic" src="../../images/Flower6-fade.png" />-->

        </div> <!-- (End leftBank) -->


        <!-- Majority of the content will go the right side -->
        <div class="rightBank">

            <!-- Title of Page -->
            <div class="titleOfPage"><p>Self-Learning</p></div>
            
            <!-- Content of Page -->
            <div class="contentOfPage"> 

                <!-- <img class="contentImage-wide" src="../../images/Rui-blur.png" alt="Research" />-->


				<div class="contentWords">

						<a class="redLink" href="http://www.ncbi.nlm.nih.gov/genbank/" 
                            target="_blank">NCBI GenBank</a>
                        <p><em>Database of nucleotide and protein sequence data</em></p>

                        <a class="redLink" href="http://www.ebi.ac.uk/" 
                            target="_blank">EMBL-EBI</a>
                        <p><em>Database of nucleotide and protein sequence data</em></p>

                        <a class="redLink" href="http://www.ddbj.nig.ac.jp/" 
                            target="_blank">DDBJ</a>
                        <p><em>Database of nucleotide and protein sequence data</em></p>

						<a class="redLink" href="http://pfam.xfam.org/" 
                            target="_blank">Pfam</a>
                        <p><em>Database of protein families</em></p>

						<a class="redLink" href="http://smart.embl-heidelberg.de/" 
                            target="_blank">Smart</a>
                        <p><em>Tool for protein domains identification and analysis</em></p>

						<a class="redLink" href="http://www.ncbi.nlm.nih.gov/Structure/cdd/cdd.shtml" 
                            target="_blank">NCBI CDD</a>
                        <p><em>Conserved Domain Database is a protein annotation resource</em></p>

						<a class="redLink" href="http://cancergenome.nih.gov/" 
                            target="_blank">TCGA</a>
                        <p><em>The cancer genome atlas data portal</em></p>

						<a class="redLink" href="http://www.ncbi.nlm.nih.gov/geo/" 
                            target="_blank">NCBI GEO</a>
                        <p><em>Repository of functional genomics (both array- and sequence-based) data</em></p>

						<a class="redLink" href="http://genome.ucsc.edu/ENCODE/" 
                            target="_blank">ENCODE</a>
                        <p><em>Repository of Encyclopedia of DNA Elements (ENCODE) data</em></p>

						<a class="redLink" href="http://www.ebi.ac.uk/arrayexpress/" 
                            target="_blank">ArrayExpress</a>
                        <p><em>Database of high-throughput functional genomics data</em></p>

						<a class="redLink" href="http://www.informatics.jax.org/" 
                            target="_blank">MGI: Mouse Genome Informatics</a>
                        <p><em>Database and bioinformatics resource on the genetics, genomics, and biology of mouse</em></p>

						<a class="redLink" href="http://www.rcsb.org/pdb/home/home.do" 
                            target="_blank">RCSB Protein Databank</a>
                        <p><em>Repository of 3D structures of large biological molecules, including proteins and nucleic acids</em></p>

						<a class="redLink" href="http://bioinfo.wilmer.jhu.edu/tiger/" 
                            target="_blank">TIGER</a>
                        <p><em>Database of tissue-specific gene expression and regulation data</em></p>

						<a class="redLink" href="http://cgap.nci.nih.gov/Genes" 
                            target="_blank">Cancer Genome Anatomy Project</a>
                        <p><em>Database of normal, pre-cancerous and cancerous genomes</em></p>

						<a class="redLink" href="http://www.ebi.ac.uk/QuickGO/" 
                            target="_blank">QuickGo</a>
                        <p><em>Tool for gene ontology searching</em></p>

						<a class="redLink" href="http://www.expasy.org/" 
                            target="_blank">ExPASy</a>
                        <p><em>Resource portal includes databases and tools in different areas of life sciences including proteomics, genomics,
                            structural bioinformatics, systems biology, phylogeny, population genetics, transcriptomics, drug design, and others.</em></p>
                        <br />

						<h4>Additional Bioinformatics Resources</h4>

						<a class="redLink" href="http://www.hsls.pitt.edu/obrc/" 
                            target="_blank">Online Bioinformatics Resources Collection</a>
							<br /><br />
						<a class="redLink" href="https://en.wikipedia.org/wiki/List_of_RNA-Seq_bioinformatics_tools" 
                            target="_blank">List of RNA-Seq bioinformatics tools</a>
							<br /><br />
						<a class="redLink" href="https://en.wikipedia.org/wiki/List_of_sequence_alignment_software" 
                            target="_blank">List of sequence alignment software</a>
							<br /><br />
						<a class="redLink" href="https://en.wikipedia.org/wiki/List_of_software_for_molecular_mechanics_modeling" 
                            target="_blank">List of software for molecular mechanics modeling</a>
							<br /><br />   
						<a class="redLink" href="http://www.ccmb.med.umich.edu/bioinf-core/tools"
							target="_blank">University of Michigan Medical School - Bioinformatics Core</a>
							<br /><br />
						<a class="redLink" href="http://tools.immuneepitope.org/ellipro/" 
                            target="_blank">ElliPro: Antibody Epitope Prediction</a>

				
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