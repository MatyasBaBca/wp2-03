<?php 

$number = filter_input(INPUT_POST, 'number');
$currency = filter_input(INPUT_POST, 'currency');
define ("EUR", 25.65);

//$number = "60";
//echo "<center>" . $number* 25 . "</center>";

if ($currency == "czktoeur") {
$result = $number / EUR; }
else {$result = $number * EUR;}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
<?php
if ($currency == "czktoeur") {
$result = $number / EUR; }
else {$result = $number * EUR;}
echo $number CZK = $result EUR;



?>
 </body>
 </html>