<?php
//variables 
$title ="Learning PHP";
$my_name="Zainab";
$num =27;
$float =25.11;
$bool=false;
$bool2=true;
$nothing =null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?> </title>
</head>
<body>
    <?php 
    echo '<h1> Hello : '. $my_name .'!</h1>' ;
    echo $num;
    echo '<br>';
    echo $float;
    ?> 
   
</body>
</html>