<?php
	//echo "Hello World!";
	//echo time(); // Прошло секунд с 01.01.1970

	function add($param1, $param2) {
		return $param1 + $param2;
	}

	$a = $_GET['a'];
	$b = $_GET['b'];
	//echo "a+b=".($a+$b); // Находит сумму a и b, значения перменных задаются в адресной строке запросом типа "http://localhost/blog_GB/?a=3&b=6". Тогда страница: a+b=9
	echo add($a, $b); // аналогично, через функцию
	
	echo "<br><br>";
	for ($i=0; $i<10; $i++) {
		echo $i."<br>"; // Выводит последовательность от 0 до 9, каждая цифра с новой строки.
	}
?>