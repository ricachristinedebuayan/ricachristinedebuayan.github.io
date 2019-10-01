<html>
<head>
<title>Registration Form</title>
		<link rel="stylesheet" type="text/css" href="myForm.css">
</head>
<body>

<fieldset style="margin-top:10%;">
	<form style="text-align:center;font-weight:normal" method="post" action="out.php">
		<h1>Thank You for Signing!</h1>
		<h2>Here Are Your Details Submitted:</h2><br><br><br>
<?php

echo "<b>First Name: </b>".$Firstname = $_REQUEST["firstname"];
echo "<br><b>Last Name: </b>".$Lastname =  $_REQUEST["lastname"];
echo "<br><br><b>Username: </b>".$Username =  $_REQUEST["username"];;
echo "<br><b>Email Address: </b>".$email =  $_REQUEST["email"];
echo "<br><b>Password: </b>".$Password =  $_REQUEST["password"];
echo "<br><br><b>Gender: </b>".$Gender =  $_REQUEST["gender"];
echo "<br><br><b>Marital Status: </b>".$MaritalStatus =  $_REQUEST["status"];

if ($MaritalStatus=="married"){
	echo "<br><b>Spouse: </b>". $_REQUEST ["spouse"];
}
else{
	echo "<br><b>Spouse:</b> N/A";					
}

echo "<br><b>Children:</b>";
if ($MaritalStatus=="married"){
	$childs =  $_REQUEST["children"];
	foreach ($childs as $child) {
		echo "<br>".$child;
	}

}
else if($MaritalStatus=="single"){
	echo "N/A";					
}else{
	echo "NONE";
}


 echo "<br><br><b>Favorite/s: </b><br>";
  foreach ($_REQUEST['favorites'] as $favorite) {
    echo $favorite . "<br>";
  }

?>
<button type="submit" class="submitbtn">LOG OUT</button>
</form>

</fieldset>
</body>
</html>