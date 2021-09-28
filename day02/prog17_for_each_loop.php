<?php
$arr = array("Apple" , "Mango" , "Orange" , "Banana" , "Papaya" );
/*For each example 1 */
foreach ( $arr as $value ){
	print "<br>".$value;
}
echo "<br>";
foreach ($arr as $key => $value) {
	# code...
	echo "<br> At key ".$key." of the Array, the value is ".$value;
}
echo "<pre>";
print_r($arr);
echo "<b>";
var_dump($arr);

// print "<br>";
// /*For each example 2 */
// foreach ( $arr as $key => $value) {
// 	print "<br>At key ".$key." of the array, the value is ".$value;
// }
// ?> 