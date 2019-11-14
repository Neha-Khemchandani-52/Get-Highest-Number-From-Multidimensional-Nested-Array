<?php 
/***
 * Description :To find Highest Number From Multidimensional Nested Array
 * Added By :Neha Khemchandani
 * Date Added : 14th November,2019
 */
$arr = array(500,array(141,151,161,2000), 2, 3, array(101, 202, array(303,404,1000)));
$max = array();
function getHighestNumber($arr,&$max)
{
	foreach($arr AS $key => $value)
	{
		if(is_array($value))
		{
			getHighestNumber($value,$max);

		}
		else
		{
			array_push($max,$value);

		}
	}

}
## calling Function
getHighestNumber($arr,$max);
echo '<pre>';
print_r($max);  //array max()
$highest_number = max($max); // Highest Value from array max
echo PHP_EOL;
echo "Highest Number From given input Array is: ".$highest_number;


?>