<?PHP
	//echo"변수 선언<br>";
	//echo"<hr>";
	
	//echo"정수형 : \$_int = " . $_int = 1 . "<br>";
	//echo"문자형 : \$_char = " . $_char = 'a' ."<br>";
	//echo"논리형 : \$_bool = " . $_bool = true . "<br>";

	//$a = 'a';
	//echo"$a";

	//$a = 1;
	//echo $a.$a; // <== 11 나옴

	//$a = 'a';
	//echo ++$a;

	//for($i = 'a'; $i <= 'z'; $i++)
	//{
	//	echo $i . " ";
	//
	//	if($i == 'z') break;
	//}


	//$a = "대입";
	//$a .= " 연산자";
	//echo $a;


	//$height = 5;
	//for($i = 0; $i < $height; ++$i)
	//{
	//	for($j = 0; $j <= $i; ++$j)
	//	{
	//		echo "* ";
	//	}
	//	echo "<br>";
	//}

	//$max = 5;
	//for($i = 0; $i < $max; ++$i)
	//{
	//	for($j = 0; $j < $max - $i; ++$j)
	//	{
	//		echo "&nbsp";
	//	}
	//	for($j = 0; $j <= $i; ++$j)
	//	{
	//		echo "* ";
	//	}
	//
	//	echo"<br>";
	//}

	echo"<h1>";

	$size = 10;

	for($i = 0; $i < $size / 2; ++$i)
	{
		for($j = 0; $j < $i; ++$j)
		{
			echo "&nbsp";
		}
		for($j = 0; $j < $size / 2 - $i; ++$j)
		{
			echo "*";
		}

		echo "&nbsp";

		for($j = 0; $j < $size / 2 - $i; ++$j)
		{
			echo "&nbsp";
		}

		for($j = 0; $j <= $i; ++$j)
		{
			echo "*";
		}

		echo "<br>";
	}

	for($i = 0; $i < $size / 2; ++$i)
	{
		for($j = 0; $j < $size / 2 - $i; ++$j)
		{
			echo "*";
		}
		for($j = 0; $j < $i; ++$j)
		{
			echo "&nbsp";
		}

		echo "&nbsp";

		for($j = 0; $j <= $i; ++$j)
		{
			echo "*";
		}

		echo "<br>";
	}

	/*
	OOOOO XXXXO
	XOOOO XXXOO
	XXOOO XXOOO
	XXXOO XOOOO
	XXXXO OOOOO
	*/

	echo"</h1>";

?>