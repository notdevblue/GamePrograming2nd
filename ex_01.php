<?php


	echo"<h1>";

	$size = 10;

	for($i = 0; $i < $size / 2; ++$i)
	{
		RepeatForFull($i, "&nbsp");
		RepeatForFull($size / 2 - $i, "*");
        RepeatForFull($size / 2 - $i, "&nbsp");
		RepeatForFull($i + 1, "*");

		echo "<br>";
	}

	for($i = 0; $i < $size / 2; ++$i)
	{
		RepeatForFull($size / 2 - $i, "*");
		RepeatForFull($i, "&nbsp");
		RepeatForFull($i + 1, "*");

		echo "<br>";
	}

    function RepeatForFull($i, $str)
    {
		for($j = 0; $j < $i; ++$j)
		{
			echo $str;
		}
    }

?>