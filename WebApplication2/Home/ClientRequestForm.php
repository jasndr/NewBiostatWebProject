<?php 
session_start();

$your_email ='biostat@hawaii.edu';// <<=== update to your email address


$errors = '';
$user_message = '';
//----------------------
//----------------------
$txtFirstName = '';
$txtLastName = '';
$txtDegree = '';
$txtEmail = '';
$txtPhone = '';
$txtDept = '';
$ddlPIStatus = '';

$tblStudyArea = '';
$tblServiceType = '';

$txtDueDate = '';
$txtPreferBiostat = '';
$txtCaptchaCode = '';



if(isset($_POST['submit']))
{
	
	
	$txtFirstName = $_POST['txtFirstName'];
	$txtLastName = $_POST['txtLastName'];
	$txtDegree = $_POST['txtDegree'];
	$txtEmail = $_POST['txtEmail'];
	$txtPhone = $_POST['txtPhone'];
	$txtDept = $_POST['txtDept'];
	$ddlPIStatus = $_POST['ddlPIStatus'];
	$txtProjectTitle = $_POST['txtProjectTitle'];
	$txtProjectSummary = $_POST['txtProjectSummary'];
	$tblStudyArea = $_POST['txtStudyArea'];
	$tblServiceType = $_POST['txtServiceType'];
	$txtDueDate = $_POST['txtDueDate'];
	$txtPreferBiostat = $_POST['txtPreferBiostat'];
	
	//$txtCaptchaCode = $_POST['txtCaptchaCode'];

	
	
	///------------Do Validations-------------
/**	if(empty($name)||empty($visitor_email))
	{
		$errors .= "\n Name and Email are required fields. ";	
	}
	if(IsInjected($txtEmail)
	{
		$errors .= "\n Bad email value!";
	}*/
	
	if(empty($_SESSION['6_letters_code']) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		//send the email
		$to = $your_email;
		$subject="BQHS Request";
		$from = $txtEmail;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		
		$tblStudyArea = join(", ", $_POST['tableOne']);
		$tblServiceType = join(", ", $_POST['tableTwo']);
		
		
		$body = "Aloha BQHS Admin,\n\n\n".
		"You have received a request from $txtFirstName $txtLastName.\n".
		"Please view their submitted information below:\n\n\n".
		"First Name: $txtFirstName\n\n".
		"Last Name: $txtLastName\n\n".
		"Degree: $txtDegree\n\n".
		"Email: $txtEmail\n\n".
		"Phone: $txtPhone\n\n".
		"Department: $txtDept\n\n".
		"Investigator Status: $ddlPIStatus\n\n".
		"Project Title: $txtProjectTitle\n\n".
		"Summary of project and QHS need: $txtProjectSummary\n\n".
		"Study Area(s): $tblStudyArea\n\n".
		"Type(s) of support needed: $tblServiceType\n\n".
		"Important deadlines: $txtDueDate\n\n".
		"BQHS faculty/staff preference (if any): $txtPreferBiostat\n\n\n".
		"To reply to the sender, please click 'reply' below.\n\n".
		"Mahalo,\n".
		"BQHS\n";

		
		
		$headers = "From: $your_email \r\n";
		$headers = "Reply-To: $txtEmail \r\n";
		
		mail($to, $subject, $body, $headers);
		
		header('Location: ../NiceSimpleContactForm/contactthanks.html');
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>

<!-- ---------------------------------------------------------------(End PHP, Start HTML) --------------------------------------------->

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>BQHS Request Form</title>
    <link rel="icon" href="../images/Logo_Final.png" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <style>
       
        #mainarea{
            margin: auto;
            text-align: center;
        }

        .BQHSbanner{
            position: page;
                left: 0;
                right: 0;
                top: 0;
                width: 100%;
        }

        hr {
            border: none;
            height: 2px;
            /* Set the hr color */
            color: #333; /* old IE */
            background-color: #333;
        }
      
    </style>

</head>

<body>

<?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
<div id='contact_form_errorloc' class='err'></div>
<form method="POST" name="contact_form" 
	action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="form-horizontal"> 

    <!--<form method="post" action="./ClientRequestForm.php" id="requestForm" class="form-horizontal">-->

        <!-- Container for the entire class-->
        <div id="mainarea" class="container">


            <!-- #BQHS Banner -->
            <div class="container-fluid bannerFluid">
                <img class="BQHSbanner" src="../images/OBQHS_Banner.jpg" alt="BQHS Banner" />
            </div>

            <h2><strong>BQHS COLLABORATION &amp; SUPPORT REQUEST FORM</strong></h2>
            <hr />
            <h4>
                <strong>
                    Mahalo for contacting the Office of Biostatistics &amp; Quantitative Health Sciences (BQHS)! To request our quantitative health sciences
                    support, please complete and submit the form below.
                </strong>
            </h4>
            <br />

            <form>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="text-center"><b>Investigator Information</b></h4>
                    </div>
                </div>

                <div class="row form-group-md">
                    <label class="col-sm-2 control-label" for="txtFirstName">First name</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" name="txtFirstName" id="txtFirstName" placeholder="First name" value='<?php echo htmlentities($txtFirstName) ?>' />
                    </div>
                    <label class="col-sm-2 control-label" for="txtLastName">Last name</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" name="txtLastName" placeholder="Last name" value='<?php echo htmlentities($txtLastName) ?>'/>
                    </div>
                    <label class="col-sm-2 control-label" for="txtDegree">Degree</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" name="txtDegree" placeholder="Degree" value='<?php echo htmlentities($txtDegree) ?>'/>
                    </div>
                </div>
                <br />
                <div class="row form-group-md">
                    <label class="col-sm-2 control-label" for="txtEmail">Email</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" name="txtEmail" placeholder="Email" value='<?php echo htmlentities($txtEmail) ?>' />
                    </div>
                    <label class="col-sm-2 control-label" for="txtPhone">
                        Phone number
                        <p class="help-block">(only enter numbers)</p>
                    </label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" name="txtPhone" placeholder="Phone"  value='<?php echo htmlentities($txtPhone) ?>'/>
                    </div>
                </div>
                <br />
                <div class="row form-group-md">
                    <label class="col-sm-2 control-label" for="txtEmail">Organization/Department</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="txtDept" placeholder="Organization/Department" value='<?php echo htmlentities($txtDept) ?>'/>
                    </div>
                    <label class="col-sm-2 control-label">Investigator status</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="ddlPIStatus" value='<?php echo htmlentities($ddlPIStatus) ?>'>
                            <option value="UH Faculty">UH Faculty</option>
                            <option value="UH Fellow/Resident">UH Fellow/Resident</option>
                            <option value="UH Student">UH Student</option>
                            <option value="Other Research Staff">Other Research Staff</option>
                            <option value="Community Researcher">Community Researcher</option>
                            <option value="Other">Other</option>
                            <option value="Unknown">Unknown</option>
                        </select>
                    </div>
                </div>

                <br />
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="text-center"><b>Project Information</b></h4>
                    </div>
                </div>
                <div class="row form-group-md">
                    <label class="col-sm-2 control-label" for="txtProjectTitle">Project title</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="txtProjectTitle" placeholder="Project title"  value='<?php echo htmlentities($txtProjectTitle) ?>'/>
                    </div>
                </div>
                <br />
                <div class="row">
                    <label class="col-sm-2 control-label" for="txtProjectSummary">
                        Summary of project and QHS need
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control noresize" rows="5" name="txtProjectSummary"  value='<?php echo htmlentities($txtProjectSummary) ?>'></textarea>
                        <p class="help-block">Please provide a short summary of your project: description of data, outcomes, and a short statement of your service needs. It will be helpful for BQHS to evaluate your need ahead of our initial meeting. (250 word limit)</p>

                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label">
                        Study Area(s)<p class="help-block">(check all that apply)</p>
                    </label>
                    <div class="col-sm-10">
                        <table id="tblStudyArea" class="table">
                            <tr>
                                <td>
                                    <label>
                                        <input name="tableOne[]" type="checkbox" value="Aging & Chronic Disease Prevention/Management" />
                                        Aging & Chronic Disease Prevention/Management
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input name="tableOne[]" type="checkbox" value="Nutrition & Metabolic Health" />
                                        Nutrition & Metabolic Health
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input name="tableOne[]" type="checkbox" value="Cardiovascular Health" />
                                        Cardiovascular Health
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input name="tableOne[]" type="checkbox" value="Growth, Development, & Reproductive Health" />
                                        Growth, Development, & Reproductive Health
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input name="tableOne[]" type="checkbox" value="Cancer Prevention & Health Recovery" />
                                        Cancer Prevention & Health Recovery
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input name="tableOne[]" type="checkbox" value="Respiratory Health" />
                                        Respiratory Health
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <label>
                                        <input name="tableOne[]" type="checkbox" value="Other" />
                                        Other
                                    </label>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <label class="control-label">
                            Type(s) of support needed
                            <p class="help-block">(check all that apply)</p>
                        </label>
                    </div>
                    <div class="col-sm-10">
                        <table id="tblServiceType" class="table">
                            <tr>
                                <td>
                                    <label>
                                        <input name="tableTwo[]" type="checkbox" value="Study Design" />
                                        Study Design
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input name="tableTwo[]" type="checkbox" value="Grant Proposal Development" />
                                        Grant Proposal Development
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input name="tableTwo[]" type="checkbox" value="Education" />
                                        Education
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input name="tableTwo[]" type="checkbox" value="Database Design & Management" />
                                        Database Design & Management
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input name="tableTwo[]" type="checkbox" value="Bioinformatics Analysis" />
                                        Bioinformatics Analysis
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input name="tableTwo[]" type="checkbox" value="Other" />
                                        Other
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input name="tableTwo[]" type="checkbox" value="Biostatistical Data Analysis" />
                                        Biostatistical Data Analysis
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input name="tableTwo[]" type="checkbox" value="Dissemination" />
                                        Dissemination
                                    </label>
                                </td>
                                <td></td>
                            </tr>
                        </table>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <label class="control-label">Important deadlines</label>
                    </div>
                    <div class="col-sm-2">
                        <div class='input-group date' id='dtpDueDate'>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input name="txtDueDate" type="text" id="txtDueDate" class="form-control"  value='<?php echo htmlentities($txtDueDate) ?>' />
                        </div>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-sm-3">
                        <label class="control-label">BQHS faculty/staff preference (if any)</label>
                    </div>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="txtPreferBiostat"  value='<?php echo htmlentities($txtPreferBiostat) ?>' />

                    </div>
                </div>
                <br />
                <!--<div class="row">
                    <div class="col-sm-2">
                        <label class="control-label">Enter Code Below</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" name="txtCaptchaCode" id="txtCaptchaCode"  value='<?php echo htmlentities($txtCaptchaCode) ?>'/>

                    </div>
                </div>
                <br />-->

               <!--<div id="UP1">

                    <div class="row form-group-md" ">
                        <div class="col-sm-2">
                            <label class="control-label">Captcha code</label>
                        </div>
                        <div class="col-sm-2">
                            <img src="./html-contact-form-captcha/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg'>
                            <img id="imgCaptcha" class="img-responsive" src="GenerateCaptcha?636123875456386485" />
                        </div>
                        <!--<div class="col-sm-1">
                            <button onclick="__doPostBack('btnRefresh','')" id="btnRefresh" class="btn btn-info">
                                <span class="glyphicon glyphicon-refresh"></span> Refresh
                            </button>
                        </div>
                    </div>

                </div>-->

                <br />
                <div class="row form-group-md">
                    <!--<div class="col-sm-12">
                        <input type="submit" name="btnSubmit" value="Submit" id="btnSubmit" name="btnSubmit" class="btn center-block" />
                    </div>-->
					<div class="col-sm-2">
                            <label class="control-label">Captcha code</label>
                    </div>
					<div class="col-sm-2">
						<img src="./html-contact-form-captcha/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
						<label for='message'>Enter the code above here :</label><br>
					</div>
					<div class="col-sm-2">
						<input class="form-control" id="6_letters_code" name="6_letters_code" type="text"><br>
						<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
						</p>
					</div>
				</div>
					<div class="row text-center>
					
					<div class="col-sm-2">
					<input type="submit" value="Submit" name='submit' class="btn center-block">
					</div>
                
				<script language='JavaScript' type='text/javascript'>
					function refreshCaptcha()
					{
					var img = document.images['captchaimg'];
					img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
					}
				</script>
				
				

            

        </div><!--End mainarea-->

        </form>

    <script type="text/javascript">
        $(document).ready(function (){
            $(function () {
                $('#dtpDueDate').datepicker({
                    todayHighlight: true,
                    format: "mm/dd/yyyy",
                    autoclose: true,
                    orientation: "top"
                });
            });

            //$('#divMahalo').hide();


        });


        $('form').validate({
           
            rules: {
                txtFirstName: {
                    required: true
                },
                txtLastName: {
                    required: true
                },
                txtDegree: {
                    required: true
                },
                txtEmail: {
                    required: true,
                    email: true
                },
                txtPhone: {
                    required: true,
                    digits: true
                },
                txtDept: {
                    required: true
                },
                txtProjectTitle: {
                    required: true
                }
                
            }/**,
            
            invalidHandler: function (event, validator) {
                //alert('number of invalid fields: ' + validator.numberOfInvalids());
            },
            highlight: function (element, errorClass) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element, errorClass) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            onkeyup: false,
            onblur: true,
            onfocusout: function (element) {
                if (element.id != "txtCaptchaCode")
                    $(element).valid();
            }*/
        });

        


    </script>



</body>
</html>
