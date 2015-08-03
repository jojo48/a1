<?php
// Numeric array
$number=array('one',2,3,'four',5);
//echo $number;
//echo $number[3];
foreach($number as $show){
echo "$show</br>";
}
echo '</br>';

//Associative array (ASSOC) key=>value
$ages=array('Peter'=>32,'Joe'=>23);
foreach($ages as $key=>$show1){
echo "Name = $key : age = $show1</br>";
}
print_r($ages);
echo '<hr>';
var_dump($ages);

// 2 dimension array
$name=array(
			"Peter"=>array(
							'Physic'=>78,
							'Math'=>98,
							'Scient'=>89),
			"Joe"=>array(
							'Physic'=>88,
							'Math'=>68,
							'Scient'=>59),
			);
echo '<hr>';			
echo $name['Peter']['Physic'];
echo '<hr>';

foreach($name as $show){
	foreach($show as $inshow){
		echo"$inshow</br>";
		}
	}
echo '<hr>';
print_r($name);
echo '<hr>';

// array search : array_search(value,array,strict); //strict= true/false
//in_array() 
//










