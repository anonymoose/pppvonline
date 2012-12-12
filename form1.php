<?php

include('Mail.php');

if (array_key_exists('thankyou', $_POST)) {

    $from =     "info@healthyustore.net";
    $to =       "office@pppvonline.com";
    $subject =  "PPPVONLINE Intake Form\n\n";
    $host =     "ssl://smtp.gmail.com";
    $port =     "465";
    $username = "info@healthyustore.net";
    $password = "g00df00d";

    $body = "PPPVONLINE.COM FORM SUBMISSION:\n\n";
    foreach ($_POST as $key => $val) {
        $body .= "$key : $val\n";
    }

    $headers = array ('From' => $from,
                      'To' => $to,
                      'Subject' => $subject);

    $smtp = Mail::factory('smtp', array ('host' => $host,
                                         'port' => $port,
                                         'auth' => true,
                                         'username' => $username,
                                         'password' => $password));

    $mail = $smtp->send($to, $headers, $body);

    header('Location: '.$_POST['thankyou']);
    exit();
    if (PEAR::isError($mail)) die($mail->getMessage());
 }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>PPP</title>

<link rel="stylesheet" href="style1.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="JavaScript" type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>

</head>

<body bgcolor="#CEE29A" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<br>
<table width="800" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>
    <td bgcolor="#000000"><table width="798"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="400" bgcolor="6699CC"><a href="http://www.pppvonline.com"><img src="images2/pichead.jpg" width="398" height="228" border="0"></a></td>
        <td><div align="center"><img src="images2/greenhead.jpg" width="400" height="228"></div></td>
      </tr>
      <tr>
        <td background="images/black-top-gold.gif" bgcolor="#6699CC"><img src="images/spacer.gif" width="1" height="21"></td>
        <td background="images/black-top-gold.gif" bgcolor="#6699CC">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top" background="images/black-top.gif"><table cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top"><table width="100%"  border="0" cellpadding="10">
              <tr>
                <td valign="top"><span class="one">
</span>
                  <p align="center"><span class="one"><font size="4"><strong>New Patient Intake Information</strong></font><br>
                        <!--font color="#FF0000" size="2">We are having some technical trouble with our form. If you have problems please email us at:<br>
                        info @ pppvonline.com</font--></span></p>
                  <span class="one"></span>
                  <P><span class="one"><font size=2>Please fill out the following information and press the SUBMIT button.</font>
                                        <font size="2">We are always happy to provide physician referrals upon request emailed to <a href="mailto:info@pppvonline.com">info@pppvonline.com</a>  <BR><BR>
                                          <u>Please use the TAB key to navigate from field to field, and only press ENTER when   the form is complete.</u></font></span>
                  <span class="one"></span><span class="one">
                  <FORM METHOD="POST" ACTION="form1.php">
                    <INPUT TYPE="hidden" NAME="thankyou"  VALUE="http://pppvonline.com/thanks.htm">
                    <input type="hidden" name="subject" value="NEW INTAKE">
                    <!--input type="hidden" name="from" value="WEBSITE@pppvonline.com"-->
                    <input type="hidden" name="to" value="laurie@pppvonline.com,dean@pppvonline.com">
                    <table width="100%" border=0 cellpadding=0 cellspacing=10>
                      <tr>
                        <td valign="top"><font size="2">Prefered Physician:</font></td>
        <td valign="top"><font size="2">
          <select name="select" id="office" >
            <option selected>Dr. Julie Buckley, MD</option>
            </select>
          </font></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Prefered Visit Location:</font></td>
        <td valign="top"><font size="2">
          <select name="select" id="office" >
            <option selected>Ponte Vedra (Jacksonville), FL</option>
            <option>Cumming (Atlanta), GA (limited availability)</option>
            </select>
          </font></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Patient Name:</font></td>
        <td valign="top"><input name="from" id="patient_name" type="text" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Mother's Name:</font></td>
        <td valign="top"><input name="momname" id="momname" type="text" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Father's Name:</font></td>
        <td valign="top"><input name="dadname" id="dadname" type="text" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Patient Date of Birth:</font></td>
        <td valign="top"><input name="dob" id="dob" type="text" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Gender:</font></td>
        <td valign="top"><input name="gender" id="gender" type="text" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Street Address:</font></td>
        <td valign="top"><input name="address" id="address" type="text" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">City:</font></td>
        <td valign="top"><input name="city" id="city" type="text" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">State:</font></td>
        <td valign="top"><input name="state" id="state" type="text" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Country (If other than USA):</font></td>
        <td valign="top"><input name="country" id="country" type="text" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Zip/Postal Code:</font></td>
        <td valign="top"><input name="zip" id="zip" type="text" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Home Phone (Area code first):</font></td>
        <td valign="top"><input name="HomePhone" type="text" id="HomePhone" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Mother's Cell Phone (Area code first):</font></td>
        <td valign="top"><input name="MomCellPhone" type="text" id="MomCellPhone" size="35" value="use dashes e.g. 123-456-7890" onClick="this.value=''">      </td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Father's Cell Phone (Area code first):</font></td>
        <td valign="top"><input name="DadCellPhone" type="text" id="DadCellPhone" size="35" value="use dashes e.g. 123-456-7890" onClick="this.value=''">      </td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Mother's Work Phone (Area code first):</font></td>
        <td valign="top"><input name="MomWorkPhone" type="text" id="MomWorkPhone" size="35" value="use dashes e.g. 123-456-7890" onClick="this.value=''">      </td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Father's Work Phone (Area code first):</font></td>
        <td valign="top"><input name="DadWorkPhone" type="text" id="DadWorkPhone" size="35" value="use dashes e.g. 123-456-7890" onClick="this.value=''">      </td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Preferred Fax:</font></td>
        <td valign="top"><input name="Fax" type="text" id="Fax" size="35" value="use dashes e.g. 123-456-7890" onClick="this.value=''">      </td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Preferred Email:</font></td>
        <td valign="top"><input name="Email" type="text" id="Email" size="35">      </td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Patient's Primary Care Physician:</font></td>
        <td valign="top"><input name="pcp" type="text" id="pcp" size="35">      </td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Primary Care Physician's Address/Phone/Fax:</font></td>
        <td valign="top"><input name="pcpcontact" type="text" id="pcpcontact" size="35">      </td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Preferred Local Pharmacy Name/Phone/Fax:</font></td>
        <td valign="top"><input name="pharm" type="text" id="pharm" size="35">      </td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Do you have a preferred local compounding pharmacy? If so provide Name/Phone/Fax:</font></td>
        <td valign="top"><input name="pharm2" type="text" id="pharm2" size="35">      </td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">&nbsp;</font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Any known alergies to medications?  If yes, please list and describe adverse reaction.</font></td>
        <td valign="top"><textarea name="MedAlergies" id="MedAlergies" cols="26" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2"><strong>Privacy Constraints:</strong></font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td colspan="2" valign="top"><font size="2">
                          <select name="Privacy" id="Privacy" >
                            <option>No Contstraints-OK to leave messages, send mail and e-mail</option>
                            <option>Restrictions-person to person communication with patient/guardian
                              only</option>
                            <option>Other</option>
                            </select>
                          </font></td>
      </tr>
                      <tr>
                        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Emergency Contact Name:</font></td>
        <td valign="top"><input name="EmergContact" type="text" id="EmergContact" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Relationship to Patient:</font></td>
        <td valign="top"><input name="Relationship" type="text" id="Relationship" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Address:</font></td>
        <td valign="top"><input name="EmergAddress" type="text" id="EmergAddress" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Phone:</font></td>
        <td valign="top"><input name="EmergPhone" type="text" id="EmergPhone" size="35" value="use dashes e.g. 123-456-7890" onClick="this.value=''"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">&nbsp;</font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td colspan="2" valign="top"><font size="2"><strong>Insurance Information (while we do
                          not participate in any insurance "networks" and fees are due in full
                          at the time of your visit, our electronic medical record is able to
                          create a universal claim form for you to file if you wish): </strong> </font></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Policy Holder's Name:</font></td>
        <td valign="top"><input name="PolicyName" type="text" id="PolicyName" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Policy Holder's Date of Birth:</font></td>
        <td valign="top"><input name="PolicyDob" type="text" id="PolicyDob" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Policy Holder's Relationship to Patient:</font></td>
        <td valign="top"><input name="PolicyRelationship" type="text" id="PolicyRelationship" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Insurance Company's Name:</font></td>
        <td valign="top"><input name="InsureName" type="text" id="InsureName" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Claims Address (on back of card):</font></td>
        <td valign="top"><input name="ClaimsAddress" type="text" id="ClaimsAddress" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">ID Number:</font></td>
        <td valign="top"><input name="IdNumber" type="text" id="IdNumber" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Group Number:</font></td>
        <td valign="top"><input name="GroupNumber" type="text" id="GroupNumber" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Employer Name as Listed on Policy:</font></td>
        <td valign="top"><input name="EmployerName" type="text" id="EmployerName" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">&nbsp;</font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td colspan="2" valign="top"><font size="2"><strong>In the sections that follow, we are trying to familiarize ourselves with your child. Please be as descriptive as possible.</strong></font></td>
        </tr>
                      <tr>
                        <td valign="top"><font size="2"><strong>Pregnancy and Delivery <br>
                          </strong></font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2"> Anything unusual about the pregnancy? (Illnesses, medications,
                          antibiotics, difficulty):</font></td>
        <td valign="top"><textarea name="Unusual" id="Unusual" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Mother's Blood Type:</font></td>
        <td valign="top"><input name="MomBloodType" type="text" id="MomBloodType" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Child's Blood Type, if known:</font></td>
        <td valign="top"><input name="ChildBloodType" type="text" id="ChildBloodType" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Miscarriages?</font></td>
        <td valign="top"><input name="Miscarriages" type="text" id="Miscarriages" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Labor and Delivery Duration:</font></td>
        <td valign="top"><input name="LaborDuration" type="text" id="LaborDuration" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Delivery Method:</font></td>
        <td valign="top"><select name="DeliveryMethod" type="text" id="DeliveryMethod">
          <option>Vaginal</option>
          <option>Induced</option>
          <option>C-Section</option>
          </select></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Group B Strep:</font></td>
        <td valign="top"><input name="GroupBStrep" type="text" id="GroupBStrep" value="Yes or No" size="35" onClick="this.value=''"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Antibiotics at Delivery? </font></td>
        <td valign="top"><input name="Antibiotics" type="text" id="Antibiotics" value="Yes or No" size="35" onClick="this.value=''"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Anthing unusual about the delivery?</font></td>
        <td valign="top"><textarea name="UnusualDelivery" id="UnusualDelivery" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">APGAR Score if remembered:</font></td>
        <td valign="top"><input name="APGAR" type="text" id="APGAR" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Anything unusual about the baby's hospital stay or initial
                          newbord period?</font></td>
        <td valign="top"><textarea name="UnusualNewborn" id="UnusualNewborn" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">&nbsp;</font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2"><strong>Infancy</strong></font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Breast feeding (describe the length and character of feeding
                          effort):</font></td>
        <td valign="top"><textarea name="BreastFeeding" id="BreastFeeding" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><p><font size="2">Colic or milk intolerance (describe symptoms if present):</font></p></td>
        <td valign="top"><textarea name="ColicMilk" id="ColicMilk" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><p><font size="2">Formula used: </font></p></td>
        <td valign="top"><input name="Formula" type="text" id="Formula" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><p><font size="2">When was food introduced?</font></p></td>
        <td valign="top"><input name="Food" type="text" id="Food" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">&nbsp;</font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2"><strong>Medical History </strong></font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Frequency of and age at first ear infections:</font></td>
        <td valign="top"><input name="EarInfections" type="text" id="EarInfections" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Asthma or allergies? If yes please describe:</font></td>
        <td valign="top"><textarea name="AsthmaAllergies" id="AsthmaAllergies" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Accidents or trauma? If yes please describe:</font></td>
        <td valign="top"><textarea name="Accidents" id="Accidents" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Hospitalizations/Surgeries? If yes list dates as well
                          as illness/procedures:</font></td>
        <td valign="top"><textarea name="HospitalSurgery" id="HospitalSurgery" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Diagnostic tests that have been performed on your child:</font></td>
        <td valign="top"><textarea name="Tests" id="Tests" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Specialist your child has seen and their impressions:</font></td>
        <td valign="top"><textarea name="Specialist" id="Specialist" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Right or left handed?</font></td>
        <td valign="top"><input name="RightLeft" type="text" id="RightLeft" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">&nbsp;</font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2"><strong>Development</strong></font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Age at which you suspected something was unusual? Please describe what you felt was different:</font></td>
        <td valign="top"><textarea name="SuspectAge" id="SuspectAge" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Age at which your child rolled over:</font></td>
        <td valign="top"><input name="RolloverAge" type="text" id="RolloverAge" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Age at which your child sat up:</font></td>
        <td valign="top"><input name="SatupAge" type="text" id="SatupAge" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Age at which your child walked:</font></td>
        <td valign="top"><input name="WalkedAge" type="text" id="WalkedAge" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Words your child said at the time of their first birthday:</font></td>
        <td valign="top"><input name="BirthdayWords" type="text" id="BirthdayWords" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Did your child ever lose spoken words? If so please describe
                          the speach regression:</font></td>
        <td valign="top"><textarea name="LoseWords" id="LoseWords" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Did your child lose social and/or motor skills? If so
                          please describe:</font></td>
        <td valign="top"><textarea name="SocialMotorSkills" id="SocialMotorSkills" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Did you associate any regression with a vaccine? If so
                          please describe:</font></td>
        <td valign="top"><textarea name="Vaccine" id="Vaccine" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">&nbsp;</font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2"><strong>Current Status</strong> </font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Major food cravings:</font></td>
        <td valign="top"><input name="FoodCravings" type="text" id="FoodCravings" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">List all foods your child consumes:</font></td>
        <td valign="top"><input name="Foods" type="text" id="Foods" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child eat or mouth non food items? If so please
                          describe:</font></td>
        <td valign="top"><textarea name="NonFoods" id="NonFoods" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Potty trained? If yes, at what age? </font></td>
        <td valign="top"><input name="PottyTrained" type="text" id="PottyTrained" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Describe your childs stools-color, smell, consistency
                          (liquid, mashed potatoes, rocks, etc.) shape, (balls, snakes, etc.) frequency,
                          blood, mucus or whole food present, sink/float:</font></td>
        <td valign="top"><textarea name="Stools" id="Stools" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child have bloating/pass excessive gas/unusual
                          belching/stomach ache/unusual behaviors associated with bowel movements? </font></td>
        <td valign="top"><textarea name="Gas" id="Gas" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child cover their ears or show auditory defensive
                          behavior? </font></td>
        <td valign="top"><textarea name="CoverEars" id="CoverEars" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">How does your child handle crowded places? </font></td>
        <td valign="top"><textarea name="CrowdedPlaces" id="CrowdedPlaces" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child like certain kinds of touch and/or dislike
                          others? Describe: </font></td>
        <td valign="top"><textarea name="Touch" id="Touch" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child have sensitivity to food textures or difficulty
                          swallowing?</font></td>
        <td valign="top"><input name="Swallowing" type="text" id="Swallowing" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Is cutting hair, nail cutting or brushing teeth difficult?</font></td>
        <td valign="top"><input name="HairNailsTeeth" type="text" id="HairNailsTeeth" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child have sensitivity to texture of certain
                          clothing or tags?</font></td>
        <td valign="top"><input name="ClothingTags" type="text" id="ClothingTags" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child have any OCD (obsessive/compulsive) type
                          behaviors (lining things up, rigid rituals, &quot;stuck&quot; on an object)?</font></td>
        <td valign="top"><input name="OCD" type="text" id="OCD" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child have difficulty with transition from one activity or setting to another? Please describe:</font></td>
        <td valign="top"><textarea name="Trans" id="Trans" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child have any stimming/repetitive behaviors
                          (toe walking, hand flapping, spinning themselves or objects, etc.)? </font></td>
        <td valign="top"><input name="RepetitiveBehavior" type="text" id="RepetitiveBehavior" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">How does your child interact with children who are the
                          same age as they are?</font></td>
        <td valign="top"><textarea name="Peer" id="Peer" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">How does your child interact with children who are older
                          or younger than they are?</font></td>
        <td valign="top"><textarea name="YoungerChildren" id="YoungerChildren" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">How does your child interact with adults?</font></td>
        <td valign="top"><textarea name="Adult" id="Adult" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child head bang/nail bite/self-mutilate/bite their arms or hands/skin pick? If so, describe:</font></td>
        <td valign="top"><textarea name="HeadBang" id="HeadBang" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Is your child moody/irritable/ difficulty focusing/ impulsive/
                          overactive/ anxious/fearful/ aggressive? Please describe:</font></td>
        <td valign="top"><textarea name="Moody" id="Moody" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child have processing problems (auditory, visual,
                          motor, etc.)? </font></td>
        <td valign="top"><textarea name="Probs" id="Probs" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child have fine motor difficulties, difficulty
                          with buttons/zippers, clumsiness, and/or gross motor skill troubles, etc.?</font></td>
        <td valign="top"><textarea name="MotorSkills" id="MotorSkills" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child have language and/or signs? Describe:</font></td>
        <td valign="top"><textarea name="LanguageSigns" id="LanguageSigns" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Describe sleep from birth to present- briefly. Currently
                          how long to fall asleep, do they stay asleep, awakening time, naps:</font></td>
        <td valign="top"><textarea name="Sleep" id="Sleep" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">With what daily activities do you have to help your child?
                          (Dressing, bathing, brushing teeth, eating):</font></td>
        <td valign="top"><textarea name="Help" id="Help" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">What therapies is your child involved with currently?</font></td>
        <td valign="top"><textarea name="Therapy" id="Therapy" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">What therapies have you tried in the past? </font></td>
        <td valign="top"><textarea name="PastTherapies" id="PastTherapies" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">What type of school/educational program is your child
                          enrolled in currently? </font></td>
        <td valign="top"><input name="School" type="text" id="School" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">What medications and nutritional supplements is your child
                          taking currently? (list name, dose, and frequency):</font></td>
        <td valign="top"><textarea name="Meds" id="Meds" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">What medications and nutritional supplements have helped
                          the most?</font></td>
        <td valign="top"><input name="PositiveMeds" type="text" id="PositiveMeds" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">What medications and supplements have a negative effect?</font></td>
        <td valign="top"><input name="NegativeMeds" type="text" id="NegativeMeds" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">What aspects of your child&rsquo;s current status concern
                          you most?</font></td>
        <td valign="top"><textarea name="BiggestConcern" id="BiggestConcern" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">What are your goals for your child&rsquo;s medical care?
                          List them in order of importance:</font></td>
        <td valign="top"><textarea name="Goals" id="Goals" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Is there anything else we should know about your child
                          or your family?</font></td>
        <td valign="top"><textarea name="AnythingElse" id="AnythingElse" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">&nbsp;</font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2"><strong>Review of Systems- if present, please indicate
                          if not described above</strong></font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Breath holding, seizures, headache:</font></td>
        <td valign="top"><input name="BreathHold" type="text" id="BreathHold" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Fatigue/flushing/ dark circles under eyes/weakness/stiffness: </font></td>
        <td valign="top"><input name="Fatigue" type="text" id="Fatigue" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Cold hands/feet, cold/heat intolerance/ tingling of hands
                          or feet/ cracking or peeling of hands or feet:</font></td>
        <td valign="top"><input name="ColdHands" type="text" id="ColdHands" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Recurrent/chronic fever, recurrent illness/infection:</font></td>
        <td valign="top"><input name="ChronicFever" type="text" id="ChronicFever" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Blinking/ tics/ ringing in ears:</font></td>
        <td valign="top"><input name="Tics" type="text" id="Tics" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Bad breath/ nose bleeds/swollen gums/ dry lips or mouth:</font></td>
        <td valign="top"><input name="BreathNoseLips" type="text" id="BreathNoseLips" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Acute sense of smell/ hearing:</font></td>
        <td valign="top"><input name="AcuteSmell" type="text" id="AcuteSmell" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Night blindness in child/family:</font></td>
        <td valign="top"><input name="NightBlind" type="text" id="NightBlind" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Geographic tongue: </font></td>
        <td valign="top"><input name="GeoTongue" type="text" id="GeoTongue" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Dermatographism (you can &ldquo;write&rdquo; on their
                          skin with your fingernail and leave a transient red mark): </font></td>
        <td valign="top"><input name="Derma" type="text" id="Derma" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Hoarseness/ sore throats: </font></td>
        <td valign="top"><input name="sore" type="text" id="sore" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Grinding teeth:</font></td>
        <td valign="top"><input name="GrindingTeeth" type="text" id="GrindingTeeth" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Anal itching or itchy skin or itchy scalp:</font></td>
        <td valign="top"><input name="AnalItch" type="text" id="AnalItch" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Eczema/ psoriasis/hives/acne/seborrhea (cradle cap)/ sensitivity
                          to bug bites/ other rashes:</font></td>
        <td valign="top"><input name="Eczema" type="text" id="Eczema" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Easy bruising/ dry skin/ pale skin/ oily skin:</font></td>
        <td valign="top"><input name="Skin" type="text" id="Skin" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Thickening of nails, ridging or splitting of nails, brittle
                          or soft nails:</font></td>
        <td valign="top"><input name="Nails" type="text" id="Nails" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Strategies to put pressure on abdomen, reflux, colic:</font></td>
        <td valign="top"><input name="Strat" type="text" id="Strat" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your child lean on people or objects, do they lay down to play?:</font></td>
        <td valign="top"><input name="lean" type="text" id="lean" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">&nbsp;</font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2"><strong>Family History</strong></font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td colspan="2" valign="top"><font size="2"><strong>In this section, we are looking for
                          genetic tendencies. If your child is adopted, please complete to the
                          best of your knowledge, information about the biologic parents. Please
                          consider, for each person, the following: asthma, allergies, diabetes,
                          blood pressure problems, strokes or heart attacks when young (40&rsquo;s
                          and 50&rsquo;s), blood clotting troubles (deep venous thromboses, pulmonary
                          emboli, abnormal menstrual cycles), kidney disease, seizures, migraines,
                          and other neurologic disorders, mental disorders (diagnosed, and &ldquo;Uncle
                          Louie was a little nutty&rdquo;, especially schizophrenia, bipolar
                          disease, depression, anxiety), substance use/abuse, hormone problems
                          (most commonly thyroid troubles), autoimmune diseases (Lupus, rheumatoid
                          arthritis, chronic fatigue, multiple sclerosis, etc.), night vision
                          disturbance, gut troubles (Celiac, Crohn&rsquo;s, constipation, irritable
                          bowel, etc), learning disabilities, ADHD, etc:</strong></font></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Mother&rsquo;s date of birth and medical history: </font></td>
        <td valign="top"><textarea name="MomHistory" id="MomHistory" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Father&rsquo;s date of birth and medical history:</font></td>
        <td valign="top"><textarea name="DadHistory" id="DadHistory" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Siblings- names and dates of birth and medical history:</font></td>
        <td valign="top"><textarea name="SibHistory" id="SibHistory" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Maternal grandmother year of birth and medical history: </font></td>
        <td valign="top"><textarea name="MatGrandmaHistory" id="MatGrandmaHistory" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Maternal grandfather year of birth and medical history:</font></td>
        <td valign="top"><textarea name="MatGrandpaHistory" id="MatGrandpaHistory" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Paternal grandmother year of birth and medical history:</font></td>
        <td valign="top"><textarea name="PatGrandmaHistory" id="PatGrandmaHistory" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Paternal grandfather year of birth and medical history:</font></td>
        <td valign="top"><textarea name="PatGrandpaHistory" id="PatGrandpaHistory" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Any maternal siblings and significant medical history:</font></td>
        <td valign="top"><textarea name="MatSibHistory" id="MatSibHistory" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Any paternal siblings and significant medical history: </font></td>
        <td valign="top"><textarea name="PatSibHistory" id="PatSibHistory" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Any of your child&rsquo;s cousins with significant medical
                          history:</font></td>
        <td valign="top"><textarea name="CousinHistory" id="CousinHistory" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">&nbsp;</font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2"><strong>Social History</strong></font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Mother&rsquo;s education:</font></td>
        <td valign="top"><input name="MomEd" type="text" id="MomEd" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Mother&rsquo;s occupation: </font></td>
        <td valign="top"><input name="MomOcc" type="text" id="MomOcc" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Father&rsquo;s education:</font></td>
        <td valign="top"><input name="DadEd" type="text" id="DadEd" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Father&rsquo;s occupation: </font></td>
        <td valign="top"><input name="DadOcc" type="text" id="DadOcc" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Who lives in the house? </font></td>
        <td valign="top"><input name="Residents" type="text" id="Residents" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Who would your child call their family? </font></td>
        <td valign="top"><input name="ChildFamily" type="text" id="ChildFamily" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Who are your child&rsquo;s caregivers?</font></td>
        <td valign="top"><input name="CareGivers" type="text" id="CareGivers" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Do you have family nearby?</font></td>
        <td valign="top"><input name="FamilyNearby" type="text" id="FamilyNearby" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">What is your support system for treatment and care of
                          your child? </font></td>
        <td valign="top"><textarea name="SupportSystem" id="SupportSystem" cols="40" rows="10"></textarea></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Do you have pets? If so, what kind, and how does your child do with them? </font></td>
        <td valign="top"><input name="Pets" type="text" id="Pets" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does anyone smoke at home?</font></td>
        <td valign="top"><input name="Smokers" type="text" id="Smokers" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">&nbsp;</font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2"><strong>Environmental History</strong></font></td>
        <td valign="top">&nbsp;</td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Location of home (city/suburban/wooded/farm/etc):</font></td>
        <td valign="top"><input name="HomeLocal" type="text" id="HomeLocal" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Water source for home (well/city/filtration system and
                          type if present):</font></td>
        <td valign="top"><input name="WaterSource" type="text" id="WaterSource" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Heating/Cooling system type (electric/gas/oil/other):</font></td>
        <td valign="top"><input name="HeatingCooling" type="text" id="HeatingCooling" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Do you live near power lines/woods/industrial area/water?</font></td>
        <td valign="top"><input name="Powerlines" type="text" id="Powerlines" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">If you live near water, please describe (swamp, river,
                          ocean, retention pond, etc.): </font></td>
        <td valign="top"><input name="WaterType" type="text" id="WaterType" size="35"></td>
      </tr>
                      <tr>
                        <td valign="top"><font size="2">Does your home, and especially your child&rsquo;s room,
                          have a lot of dust/mold/feathers/stuffed animals? Please describe: </font></td>
        <td valign="top"><input name="Dust" type="text" id="Dust" size="35"></td>
      </tr>
                      </table>
    <BR>
                    <BR>
                    <INPUT TYPE="submit" VALUE="Submit"><INPUT TYPE="reset" VALUE="Clear">
                  </FORM>
                  </span></td>
              </tr>
            </table>              <span class="one"><img src="images/spacer.gif" width="598" height="1"></span></td>
            <td valign="top" background="images/black-top-purple.jpg" bgcolor="#E4F4BB"><table cellpadding="10">
              <tr>
                <td><font face=arial size=1>
                  <SCRIPT language=JavaScript src="quotes.js"></script>
                </font></td>
              </tr>
            </table>            <p class=one><img src="images/spacer.gif" width="150" height="1"></p>
              </td>
          </tr></table>
         </td>
        </tr>
      <tr >
        <td colspan="2" background="images/black-top-gold.jpg"><div align="center">
          <p class=one><font size="2">5270
                  Palm Valley Road &bull; Ponte Vedra Beach, FL 32082 &bull; 904-543-1288 &bull;<a href="mailto:info@pppvonline.com"> info@pppvonline.com</a> </font></p>
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>


<br>
</body>
</html>
