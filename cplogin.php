<?php

if ( (!$user) || (!$pass) ) {
	header("Location:domain-hosting-login.html");
	exit;
}

if ( ($server == "nil") || ($port == "nil") ) {
	header("Location:domain-hosting-login.html");
	exit;
}


?>


<html>
<?php

#your domain or ip
if ($server == "thenet") {
	$domain = "thenetbusiness.net";
	} 
else if ($server == "untad") {
	$domain = "untadshell.com";
	}
else if ($server == "keepfast") {
	$domain = "keepfast.com";
	}
else if ($server == "gobiznow") {
	$domain = "gobiznow.com";
	}


if(!$_POST['login']) {
exit;
}

$user = $_POST['user'];
$pass = $_POST['pass'];
$port = $_POST['port'];

$port == "2083" || $port == "2096" ? $pre = "https://" : $pre = "http://";
?>
<body onLoad="setTimeout('document.forms[0].submit();',10)">
<form action="<?php echo "".$pre."".$domain.":".$port."/login/"; ?>" method="post">
<input type="hidden" name="user" value="<?php echo $user; ?>">
<input type="hidden" name="pass" value="<?php echo $pass; ?>">
</form>
</body>
</html>