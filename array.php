<h1>Array</h1>
<?php
// $family =array('father','mother','brother') ;
// echo $family[1];
// $family[1]='love';
// $family[3]='sister';

// echo $family[1];
// echo $family[3];
// echo count($family);

// $family =['father','mother','brother'];

// //Assositive Array
// $family =[
//     'Designer'=>'Zainab',
//     'programmer'=>'May',
//     'Gamer'=>'Sara',  
// ];

// echo $family['Designer'];
?>
<form action="array.php" method="get">
 
<input type="text" name="name">
      <input type="submit">   
</form>
<?php
$name =$_GET['name'];
$score = [
'Nour' => ['Score' =>'90','Grade' =>'A'],
'Majed' => ['Score' =>'40','Grade' =>'C'],
'Anas' => ['Score' =>'20','Grade' =>'F'],
];

echo 'Score: '.$score[$name]['Score'];
echo '<br>';
echo 'Grade: '.$score[$name]['Grade'];
?>