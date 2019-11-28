<?php

$s1val = $_POST['s1'];
$s2val = $_POST['s2'];
$s3val = $_POST['s3'];
$s4val = $_POST['s4'];
$s5val = $_POST['s5'];
$s6val = $_POST['s6'];


$c1val = $_POST['c1'];
$c2val = $_POST['c2'];
$c3val = $_POST['c3'];
$c4val = $_POST['c4'];
$c5val = $_POST['c5'];
$c6val = $_POST['c6'];




$suball = (( $s1val*$c1val ) + ( $s2val*$c2val ) + ( $s3val*$c3val )+ ( $s4val*$c4val ) + ( $s5val*$c5val ) + ( $s6val*$c6val ) );
$crall = $c1val + $c2val + $c3val+ $c4val+ $c5val+ $c6val;

$cgpa = $suball / $crall;

 $cgpaformated = number_format ($cgpa, 2);

echo "<p>Your CGPA: " . $cgpa . "</p>";
echo "<br/><p>" . " Your CGPA Formated: ". $cgpaformated . "</p>";


if ( $cgpaformated > 3.75 )
 echo "<p><br/>". " .. Oh Boy! You are awesome and outstanding! </p>";

else if ( $cgpaformated > 3.49 && $cgpaformated <= 3.75 )
  echo "<br/>". "<p>You are excellent!! :D Carry on!</p>";


?>