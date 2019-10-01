<?php


$email = $_REQUEST['email'];

$a = array("debschrisca@gmail.com","example@email.com","ricachristine.debuayan@pn.org");

$hint = 0;

for($i=0; $i<count($a); $i++){
	if($email==$a[$i]){
		$hint = 5;
		break;
	}
}

if(strlen($email)==0){
	echo "Enter a unique email address.";
}

else if($hint==5){
	echo "Email is already used.";
}

else {
	echo "";
}

?>