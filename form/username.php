<?php

//for username
$a[]="Anna";
$a[]="Brittany";
$a[]="Cinderella";
$a[]="Claire";
$a[]="Diana";
$a[]="Eva";
$a[]="Fiona";
$a[]="Gunda";
$a[]="Hege";
$a[]="Inga";
$a[]="Johanna";
$a[]="Kitty";
$a[]="Linda";
$a[]="Nina";
$a[]="Ophelia";
$a[]="Petunia";
$a[]="Amanda";
$a[]="Raquel";
$a[]="Cindy";
$a[]="Doris";
$a[]="Eve";
$a[]="Evita";
$a[]="Sunniva";
$a[]="Tove";
$a[]="Unni";
$a[]="Violet";
$a[]="Liza";
$a[]="Elizabeth";
$a[]="Ellen";
$a[]="Wenche";
$a[]="Vicky";

$username = $_REQUEST['username'];

$check = false;

for($j=0; $j<count($a); $j++){
  if(strtolower($username)==strtolower($a[$j])){
    $check = true;
    break;
  }
}

if(strlen($username)==0){
  echo "Enter atleast 8 characters";
}

else if($check==true){
  echo "Username already used!";
} else {
	echo "";
}
?>
