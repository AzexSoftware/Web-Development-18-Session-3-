<?php

	function sayHello()
	{
		echo "Hello";
	}
	sayHello();


	function sayHelloTo($name)
	{
		echo "Hello " . $name;
	}
	sayHelloTo("Reem");


	function sum($num1 , $num2)
	{
		$res = $num1 + $num2;
		return $res;
	}
	$res = sum(3 , 4);
	$res = $res + 5;
	echo $res;



	function select($start , $end){
		echo "<select>";
		for ($i = $start ; $i <= $end ; $i++){
			echo "<option> $i </option>";
		}
		echo "</select>";
	}
	select(1 , 10);
	select(20 , 30);


?>



					

