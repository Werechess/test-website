<?php
	//echo "Hello World!";
	//echo time(); // ������ ������ � 01.01.1970

	function add($param1, $param2) {
		return $param1 + $param2;
	}

	$a = $_GET['a'];
	$b = $_GET['b'];
	//echo "a+b=".($a+$b); // ������� ����� a � b, �������� ��������� �������� � �������� ������ �������� ���� "http://localhost/blog_GB/?a=3&b=6". ����� ��������: a+b=9
	echo add($a, $b); // ����������, ����� �������
	
	echo "<br><br>";
	for ($i=0; $i<10; $i++) {
		echo $i."<br>"; // ������� ������������������ �� 0 �� 9, ������ ����� � ����� ������.
	}
?>