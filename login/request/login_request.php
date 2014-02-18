<?php

include ('config.php'); 



// Getting username and password from login form
$mail = $_POST['mail']; 
$password = md5($_POST['password']);

// To protect MySQL injection
$mail = stripslashes($mail);
$password = stripslashes($password);
$mail = mysql_real_escape_string($mail);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM users WHERE mail='$mail' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){

	session_start();
	$_SESSION['mail']= $mail; // storing username in session
	$username_log = $_SESSION['mail'];
	
	WHILE($rows = mysql_fetch_array($result)):
        
            $dribble = $rows['dribble'];
            $alistapart = $rows['alistapart'];
            $layervault = $rows['layervault'];
            $behance = $rows['behance'];
            $hackernews = $rows['hackernews'];
            $favorites = $rows['favorites'];
            $read = $rows['read'];
        
        
    endwhile;
	
	$user = array(
        "mail" => $username_log,
        "dribble" => $dribble,
        "alistapart" => $alistapart,
        "layervault" => $layervault,
        "behance" => $behance,
        "hackernews" => $hackernews,
        "favorites" => $favorites,
        "read" => $read,
        "fail" => "",
        "status_login" => "success",
	);
	echo json_encode($user);
	
}

else {
	
	
	$user = array(
        "status_login" => 'fail',
	);
	echo json_encode($user);

	

}

?>