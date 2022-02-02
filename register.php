<?php  

include '../../config/database.php';
include '../../config/info.php';
//For mailing
require '../../vendor/autoload.php';
require '../../config/mail_credentials.php';

if(isset($_POST["selectlocation"]))
{ 
	$output = '';
	if($_POST["selectlocation"] == "applicant_basicinfo_province"){
		$query = "SELECT * FROM refcitymun 
				  WHERE provCode = '".$_POST["query"]."'
				  ORDER BY citymunDesc ASC";
		$result = mysqli_query($db, $query);
		$output .= '<option value="">Select Municipality/City</option>';
		while($row = mysqli_fetch_array($result)){
			$output .= '<option value="'.$row["citymunCode"].'">'.strtolower($row["citymunDesc"]).'</option>';
		}
	}

 if($_POST["selectlocation"] == "applicant_basicinfo_municapality")
 {
  $query = "SELECT * FROM refbrgy WHERE citymunCode = '".$_POST["query"]."' ORDER BY brgyDesc ASC";
  $result = mysqli_query($db, $query);
  $output .= '<option value="">Select Barangay</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["brgyCode"].'">'.$row["brgyDesc"].'</option>';
  }
 }
 echo $output;
}

if (isset($_POST['verify_email'])) {
    $mail =$_POST['query'];
    $query = "SELECT * FROM hr_applicants WHERE hr_applicant_email = '$mail'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    }
    if(mysqli_num_rows($result) > 0) {
        $output='0';
    } else {
        $output='1';
    }
    echo $output;
}

if (isset($_POST['applicant_registration_button'])) {

	//Generate Random Number
	$io_thether=substr(date('Y'),-2); 
	$io_overcharge='fullcharge'; 
	$io_spirit=round(microtime(true) * 1000);
	$io_relocate=hash('adler32', $io_spirit.$io_overcharge); 
	$io=$io_thether.$io_relocate;

	$hr_applicant_number=$io;
	$hr_applicant_firstname=$_POST["applicant_basicinfo_firstname"];
	$hr_applicant_middlename=$_POST["applicant_basicinfo_middlename"];
	$hr_applicant_lastname=$_POST["applicant_basicinfo_lastname"];
	$hr_applicant_email=$_POST["applicant_basicinfo_email"];
    $hr_applicant_verified='N';
    $hr_applicant_activationcode=hash('gost', $hr_applicant_number);
	$hr_applicant_password=$_POST["applicant_basicinfo_password"];
	$hr_applicant_password_reset='N';
	$hr_applicant_dtcommit=$currentdate2;

	//Password Crypting | I'm using BLOWFISH noob
	
    CRYPT_BLOWFISH or die('No blowfish here.');

    $password=$hr_applicant_password;
    $blowfish_pre='$2a$05$';
    $blowfish_end='$';

    $allowed_chars='ABSCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
    $char_len=63;

    $salt_len=21;
    $salt='';

    for ($i=0; $i<$salt_len ; $i++) { 
        $salt.=$allowed_chars[mt_rand(0,$char_len)];
    }

    $bcrypt_salt=$blowfish_pre.$salt.$blowfish_end;
    $hash_password=crypt($password,$bcrypt_salt);

	$query="INSERT INTO hr_applicants(
			hr_applicant_number,
			hr_applicant_firstname,
			hr_applicant_middlename,
			hr_applicant_lastname,
			hr_applicant_email,
            hr_applicant_verified,
            hr_applicant_activationcode,
            hr_applicant_salt,
			hr_applicant_password,
			hr_applicant_password_reset,
			hr_applicant_dtcommit
			) 
			VALUES (
			'$hr_applicant_number',
			'$hr_applicant_firstname',
			'$hr_applicant_middlename',
			'$hr_applicant_lastname',
			'$hr_applicant_email',
            '$hr_applicant_verified',
            '$hr_applicant_activationcode',
            '$salt',
			'$hash_password',
			'$hr_applicant_password_reset',
			'$hr_applicant_dtcommit'
			)"; //hr_applicants	
	if (!$result = mysqli_query($db,$query)) {
        //exit(mysqli_error());
        $response=999;
    } else {
    	$applicantid = mysqli_insert_id($db);

    	//hr_applicant_basicinfo
    	$hrappbinfo_profilepic='';//No Picture muna
    	$hrappbinfo_religion=$_POST["applicant_basicinfo_religion"];
    	$hrappbinfo_birthdate=$_POST["applicant_basicinfo_birthday"];
    	$hrappbinfo_birthplace=$_POST["applicant_basicinfo_birthplace"];
    	$hrappbinfo_weight=$_POST["applicant_basicinfo_weight"];
    	$hrappbinfo_height=$_POST["applicant_basicinfo_height"];
    	$hrappbinfo_bloodtype=$_POST["applicant_basicinfo_bloodtype"];
    	$hrappbinfo_gender=$_POST["applicant_basicinfo_gender"];
    	$hrappbinfo_civilstatus=$_POST["applicant_basicinfo_civilstatus"];
    	$hrappbinfo_country=$_POST["applicant_basicinfo_country"];
    	$hrappbinfo_currentprovince=$_POST["applicant_basicinfo_province"];
    	$hrappbinfo_currentmunicipality=$_POST["applicant_basicinfo_municapality"];
    	$hrappbinfo_currentbarangay=$_POST["applicant_basicinfo_barangay"];
    	$hrappbinfo_telephonenumber=$_POST["applicant_basicinfo_landlinenumber"];
    	$hrappbinfo_mobilenumber=$_POST["applicant_basicinfo_mobilenumber"];
    	$hrappbinfo_expectedsalary=$_POST["applicant_basicinfo_expectedsalary"];

    	$query1="INSERT INTO hr_applicant_basicinfo(
    			 hrappbinfo_applicantid,
    			 hrappbinfo_profilepic,
    			 hrappbinfo_religion,
    			 hrappbinfo_birthdate,
    			 hrappbinfo_birthplace,
    			 hrappbinfo_weight,
    			 hrappbinfo_height,
    			 hrappbinfo_bloodtype,
    			 hrappbinfo_gender,
    			 hrappbinfo_civilstatus,
    			 hrappbinfo_country,
    			 hrappbinfo_currentprovince,
    			 hrappbinfo_currentmunicipality,
    			 hrappbinfo_currentbarangay,
    			 hrappbinfo_telephonenumber,
    			 hrappbinfo_mobilenumber,
    			 hrappbinfo_expectedsalary
    			 ) VALUES (
    			 '$applicantid',
    			 '$hrappbinfo_profilepic',
    			 '$hrappbinfo_religion',
    			 '$hrappbinfo_birthdate',
    			 '$hrappbinfo_birthplace',
    			 '$hrappbinfo_weight',
    			 '$hrappbinfo_height',
    			 '$hrappbinfo_bloodtype',
    			 '$hrappbinfo_gender',
    			 '$hrappbinfo_civilstatus',
    			 '$hrappbinfo_country',
    			 '$hrappbinfo_currentprovince',
    			 '$hrappbinfo_currentmunicipality',
    			 '$hrappbinfo_currentbarangay',
    			 '$hrappbinfo_telephonenumber',
    			 '$hrappbinfo_mobilenumber',
    			 '$hrappbinfo_expectedsalary'
    			 )"; 
    	if (!$result1 = mysqli_query($db,$query1)) {
	        //exit(mysqli_error());
	        $response=999;
	    } else {
	    	$response='';
		}
    	
	    //hr_applicant_spousefamilyinfo
	    //status is not equal to single or separated
	    $spouse_firstname=$_POST["spouse_firstname"];
	    $spouse_middlename=$_POST["spouse_middlename"];
	    $spouse_lastname=$_POST["spouse_lastname"];
	    $spouse_dtcreated=$currentdate2;

    	$query2="INSERT INTO hr_applicant_spousefamilyinfo(
    			 applicantid,
    			 spouse_firstname,
    			 spouse_middlename,
    			 spouse_lastname,
    			 dtcreated
    			 ) VALUES (
    			 '$applicantid',
    			 '$spouse_firstname',
    			 '$spouse_middlename',
    			 '$spouse_lastname',
    			 '$spouse_dtcreated'
    			 )"; 
    	if (!$result2 = mysqli_query($db,$query2)) {
	        //exit(mysqli_error());
	        $response=999;
	    } else {
	    	$response='';
		}

	    //hr_applicant_childfamilyinfo
	    //disable insert if single
	    $child_name=$_POST["applicant_family_childname"];
	    $child_status=$_POST["applicant_family_status"];
	    $child_dtcreated=$currentdate2;

	    foreach ($child_name as $key => $value_child_name) {  
	    	$query3="INSERT INTO hr_applicant_childfamilyinfo(
	    			 applicantid,
	    			 childsname,
	    			 status,
	    			 dtcreated
	    			 ) VALUES (
	    			 '$applicantid',
	    			 '$value_child_name',
	    			 '$child_status[$key]',
	    			 '$child_dtcreated'
	    			 )"; 
	    	if (!$result3 = mysqli_query($db,$query3)) {
		        //exit(mysqli_error());
		        $response=999;
		    } else {
		    	$response='';
		    }
		}

	    //hr_applicant_govids
    	$govid_sssnumber=$_POST["applicant_government_sss"];
	    $govid_tinnumber=$_POST["applicant_government_tin"];
	    $govid_philhealthnumber=$_POST["applicant_government_philhealth"];
	    $govid_pagibignumber=$_POST["applicant_government_pagibig"];
	    $govid_dtcreated=$currentdate2;

    	$query4="INSERT INTO hr_applicant_govids(
    			 applicantid,
    			 sssnumber,
    			 tinnumber,
    			 philhealthnumber,
    			 pagibignumber,
    			 dtcreated
    			 ) VALUES (
    			 '$applicantid',
    			 '$govid_sssnumber',
    			 '$govid_tinnumber',
    			 '$govid_philhealthnumber',
    			 '$govid_pagibignumber',
    			 '$govid_dtcreated'
    			 )"; 
    	if (!$result4 = mysqli_query($db,$query4)) {
	        //exit(mysqli_error());
	        $response=999;
	    } else {
	    	$response='';
		}

	    //hr_applicant_education
	    $educ_degree=$_POST["applicant_education_degree"];
    	$educ_school=$_POST["applicant_education_school"];
    	$educ_course=$_POST["applicant_education_course"];
    	$educ_lastattended=$_POST["applicant_education_dateoccured"];
    	$educ_dtcreated=$currentdate2;

    	foreach ($educ_degree as $key => $value_educ_degree) {  
    		$query5="INSERT INTO hr_applicant_education(
    				 applicantid,
    				 degree,
    				 nameofschool,
    				 course,
    				 lastattended_date,
    				 dtcreated
    				 ) VALUES (
    				 '$applicantid',
    				 '$value_educ_degree',
    				 '$educ_school[$key]',
    				 '$educ_course[$key]',
    				 '$educ_lastattended[$key]',
    				 '$educ_dtcreated'
    				 )"; 
	    	if (!$result5 = mysqli_query($db,$query5)) {
		        //exit(mysqli_error());
		        $response=999;
		    } else {
		    	$response='';
		    }
    	}

	    //hr_applicant_workexperience
    	$exp_jobtitle=$_POST["applicant_exp_title"];
    	$exp_company=$_POST["applicant_exp_company"];
    	$exp_employmenttype=$_POST["applicant_exp_emptype"];
    	$exp_startdatedate=$_POST["applicant_exp_startdate"];
    	$exp_enddate_date=$_POST["applicant_exp_enddate"];
    	$exp_currentwork='N';
    	$exp_jobdesription=$_POST["applicant_exp_jobdesc"];
    	$exp_monthlysalary=$_POST["applicant_exp_salary"];
    	$exp_dtcreated=$currentdate2;

    	foreach ($exp_jobtitle as $key => $value_exp_jobtitle) { 
    		$query6="INSERT INTO hr_applicant_workexperience(
    				 applicantid,
    				 jobtitle,
    				 company,
    				 employmenttype,
    				 startdate_date,
    				 enddate_date,
    				 currentwork,
    				 job_desription,
    				 monthlysalary,
    				 dtcreated
    				 ) VALUES (
    				 '$applicantid',
    				 '$value_exp_jobtitle',
    				 '$exp_company[$key]',
    				 '$exp_employmenttype[$key]',
    				 '$exp_startdatedate[$key]',
    				 '$exp_enddate_date[$key]',
    				 '$exp_currentwork',
    				 '$exp_jobdesription[$key]',
    				 '$exp_monthlysalary[$key]',
    				 '$exp_dtcreated'
    				 )"; 
	    	if (!$result6 = mysqli_query($db,$query6)) {
		        //exit(mysqli_error());
		        $response=999;
		    } else {
		    	$response='';
		    }
    	}

	    //hr_applicant_skills
    	$skill_skillname=$_POST["applicant_skill_name"];
    	$skill_level=$_POST["applicant_skill_level"];
    	$skill_dtcreated=$currentdate2;

    	foreach ($skill_skillname as $key => $value_skill_skillname) { 
    		$query7="INSERT INTO hr_applicant_skills(
    				 applicantid,
    				 skillname,
    				 level,
    				 dtcreated
    				 ) VALUES (
    				 '$applicantid',
    				 '$value_skill_skillname',
    				 '$skill_level[$key]',
    				 '$skill_dtcreated'
    				 )"; 
	    	if (!$result7 = mysqli_query($db,$query7)) {
		        //exit(mysqli_error());
		        $response=999;
		    } else {
		    	$response='';
		    }
    	}

	    //hr_applicant_cert
    	$cert_trainings=$_POST["applicant_training_name"];
    	$cert_dtoccured=$_POST["applicant_training_occured"];
    	$cert_dtcreated=$currentdate2;

    	foreach ($cert_trainings as $key => $value_cert_trainings) { 
    		$query8="INSERT INTO hr_applicant_cert(
    				 applicantid,
    				 trainings,
    				 dtoccured,
    				 dtcreated
    				 ) VALUES (
    				 '$applicantid',
    				 '$value_cert_trainings',
    				 '$cert_dtoccured[$key]',
    				 '$cert_dtcreated'
    				 )"; 
	    	if (!$result8 = mysqli_query($db,$query8)) {
		        //exit(mysqli_error());
		        $response=999;
		    } else {
		    	$response='';
		    }
    	}

	    //hr_applicant_references
    	$ref_name=$_POST["applicant_reference_name"];
    	$ref_company=$_POST["applicant_reference_company"];
    	$ref_position=$_POST["applicant_reference_position"];
    	$ref_contactnumber=$_POST["applicant_reference_contact"];
    	$ref_email=$_POST["applicant_reference_Email"];
    	$ref_dtcreated=$currentdate2;

    	foreach ($ref_name as $key => $value_ref_name) {
    		$query9="INSERT INTO hr_applicant_references(
    				 applicantid,
    				 name,
    				 company,
    				 position,
    				 contactnumber,
    				 email,
    				 dtcreated
    				 ) VALUES (
    				 '$applicantid',
    				 '$value_ref_name',
    				 '$ref_company[$key]',
    				 '$ref_position[$key]',
    				 '$ref_contactnumber[$key]',
    				 '$ref_email[$key]',
    				 '$ref_dtcreated'
    				 )"; 
	    	if (!$result9 = mysqli_query($db,$query9)) {
		        //exit(mysqli_error());
		        $response=999;
		    } else {
		    	$response='';
		    }
    	}

        //Last Process | Mailing

        $mail = new PHPMailer;

        $mail->SMTPDebug = 0;
        $mail->isSMTP();                                   
        $mail->Host = GSERVER;
        $mail->SMTPAuth = true;  
        $mail->Username = GUSER;
        $mail->Password = GPASSWORD;
        $mail->SMTPSecure = GREQUIRED; 
        $mail->Port = GPORT;

        $verification_code=$hr_applicant_activationcode;
        $baseurl='http://koufuprinting.com:9999/project_meraki/';
        $completelink=$baseurl.'verify.php?secretcode='.hash('snefru256', $io).'&verification_code='.$verification_code;
        $subject="Your ".$joat_b." account: Email address verification";
        $body="
                <p>Hello,</p>
                <p>In order to help maintain the security of your account, please verify your email address.</p>
                <p><a href=".$completelink.">Click here to verify your email address.</p>
                <p>Thanks for helping us maintain the security of your account. The ". $joat_b." Team</p>
              ";

        $mail->setFrom(GUSER, $joat_a.' Support');
        $mail->addAddress($hr_applicant_email, $hr_applicant_firstname.' '.$hr_applicant_lastname);
        $mail->addReplyTo(GUSER, 'Verification Reply');

        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = $body;

        if(!$mail->send()) {
            $response= 999;
        } else {
            $response='';
        }
   	}

   	echo json_encode($response);	

}
?>