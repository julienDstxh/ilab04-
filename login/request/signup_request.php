<?php


include ('config.php'); 




	$errer=0;
	$err_pass_match=null;
	$err_pass_letter=null;
	$err_pass_empty=null;
	$err_mail_empty=null;
	$err_mail_wrong=null;
	$err_mail_exist=null;
	$mail = $_POST['mail'];
	
	
	
	$list_default = 'block';
	
	
	$password = $_POST['password'];
	$password = strip_tags($password); 
	$password = md5($password);
	$brut_pass = $_POST['password'];
	$letter_pass = strlen($brut_pass);
	$max_letter = 6;
	
	
	$password_mail = $_POST['password'];
	$checkUserQuery = mysql_query("SELECT * FROM users WHERE mail='$mail'");
	
				
			
			if ($_POST["password"] != $_POST["repassword"]) {
				$err_pass_match="true";
				$errer=1;
			}		
	
			if ($letter_pass <= $max_letter) {
				$err_pass_letter="true";
				$errer=1;
			}
	
			if(!$password){
				$err_pass_empty="true";
				$errer=1;
			}
			if(!$mail){
				$err_mail_empty="true";
				$errer=1;
			}
			if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
				$err_mail_wrong="true";
				$errer=1;
		    }
			if(mysql_num_rows($checkUserQuery) > 0){
				$err_mail_exist="true";
				$errer=1;
			}
			
			
					
			if($errer==0){

					$query = mysql_query("INSERT INTO users VALUES('','$mail','$password','$list_default','$list_default','$list_default','$list_default','$list_default','','')");
					$txt_mail = "<h1> Your are welcome in the private crew of Fillip </h1><br />"." Your Login is ".$mail."";
					$headers_mail = "From: hello@fillip.co" . "\r\n" ."CC: hello@fillip.co";
					mail($txt_mail,"Welcome to the Fillip crew","fgyzefgyezf","$headers_mail");
					
					$user = array(
				        "sign_status" => "signup_done",
				        "err_pass_match" => "",
				        "err_pass_letter" => "",
				        "err_pass_empty" =>  "",
				        "err_mail_empty" => "",
				        "err_mail_exist" => "",
				        "err_mail_wrong" => "",    
					);
					echo json_encode($user);
					
					
			}
			
			if($errer >= 1){
				
					$user = array(
				
						"sign_status" => "signup_fail",
				        "err_pass_match" => $err_pass_match,
				        "err_pass_letter" => $err_pass_letter,
				        "err_pass_empty" =>  $err_pass_empty,
				        "err_mail_empty" => $err_mail_empty,
				        "err_mail_exist" => $err_mail_exist,
				        "err_mail_wrong" => $err_mail_wrong,  
				    );
				    echo json_encode($user);
			}
		
	





?>