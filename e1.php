<?php
	function arrMinim(array $arr ){
		$min = $arr[0];
		for ($i = 1; $i<=sizeof($arr); $i++){
			$n2= $arr[$i];
			$min = getMin($min,$n2);
		}
		echo $min;
	}
	
	function getMin($num1, $num2){
		return $num1 < $num2 ? $num1 : $num2;
	}
	
	$myArr = array(1,4,3,2,1,5,67);
	
	arrMinim($myArr);
?>