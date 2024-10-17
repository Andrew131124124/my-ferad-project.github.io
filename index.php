Задание 41
№1
<?php
$str = 'abcde';

echo $str[0]; 
echo '<br>';
echo $str[2]; 
echo '<br>';
echo $str[4]; 
?>
№2

<?php
$str = 'abcde';
$rStr = $str[4] . $str[3] . $str[2] . $str[1] . $str[0]; 

echo $rStr; 
?>
№3

<?php
$str = 'abcde';
$num = 2; 

echo $str[$num];
?>
Задание 42

№1
1)

<?php
$str = 'abcde';
echo $str[-1];  
?>

№2
<?php
$str = 'abcde';
echo $str[-2];  
?>

№3
<?php
$str = 'abcde';
echo $str[-3];  
?>

Задание 43

№1
<?php
	$str = '12345';
	echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4]; 
?>

Задание 44

№1
<?php
	$num = 12345;
	$str = (string) $num;
	
	echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4]; 
?>

№2
<?php
	$num = 12345;
	$str = (string) $num;
	
	echo $str[0] * $str[1] * $str[2] * $str[3] * $str[4]; 
?>

№3
<?php
$number = 12345;


$text = strrev((string)$number);

echo $text; 
?>

Задание 45

№1)
3

№2)
6

Задание 46
№1
<?php
$num = (47 + 7 - 18) * 10 / 15;
echo $num;
?>

№2
<?php
$str = 'a';
$str .= 'b';  
$str .= 'c';  

echo $str;    
?>

Задание 47

№1
<?php
	$num = 10;
	$num ++;
	$num ++;
	$num --;
	echo $num;
?>

Задание 48

№1)
4

№2)
3

№3)
2

№4)
2

№5)
4
4

№6)
4
3

№7)
2
2

№8)
2
3

№9)
3
3

Задание 49
№1
<?php
	echo 60 * 60 * 24;
?>

№2
<?php
	echo 60 * 60 * 24 * 30;
?>

№3
<?php
	echo 60 * 60 * 24 * 365;
?>

№4
<?php
	echo 60 * 24;
?>

№5
<?php
	echo 60 * 24;
?>

№6
<?php
	echo 1024 * 1024;
?>

№7
<?php
	echo 1024 * 1024 * 1024;
?>

№8
<?php
	echo 1024 * 1024 * 1024 * 10;
?>

№9
<?php
	echo 1024 * 1024 * 1024 * 1024;
?>

№10
<?php
	echo 1024 * 1024 * 1024;
?>

Задание 50

№1
<?php
$r = 5;
 $s = pi() * $r * $r;
 print $s;
?>

№2
<?php
$a = 5;
$s = $a * $a ;
 print $s;
?>

№3
<?php
$a = 5;
$b = 10 ;
$s = $a * $b ;
 print $s;
?>

№4
<?php
$a = 5;
$b = 10 ;
$s = 2* ($a + $b) ;
 print $s;
?>

№5
<?php
  $tc = 25;
  $tf = ($tc * 9 / 5) + 32; 
print $tf ;
?>

№6
<?php
  $tf = 77; 
  $tc = ($tf - 32) * 5 / 9;
print $tc;
?>