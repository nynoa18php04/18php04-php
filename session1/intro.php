<!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$userName ="php04";
echo $userName;
function myFunction(){
	echo"<br>";
	$a =5;
	return $a;
}
echo myFunction();
function mySum($a,$b){
	return $a+$b;
}
echo "<br>";
echo mySum();
echo"<br>";
echo mySum();
echo "<br>";
$total = mySum(6,9);
if($total %2==0){
	echo"Tong la so c chan";
}elseif ($total %3==0){
	echo"Tong la so le va chia het cho 3";
}else{
	echo"Tongla so le va khong chia het cho 3";
}
echo "<br>";
$n =7;
switch ($n){
	case '1':
	case '3':
	case '5':
	case '7':
	case '8':
	case '10':
	case '12':
	echo "Thang $n co 31 ngay";
	break;
	case '4':
	case '6':
	case '9':
	case '11':
	echo"Thang $n co 30 ngay";
	break;
	case '2':
	echo "Thang $n nam nhuan co 29 ngay";
	default;
}
?>
</body>
</html>