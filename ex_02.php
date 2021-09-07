<?php

	$size = 10;
    $starArr = array();

	for($i = 0; $i < $size / 2; ++$i)
	{
		RepeatForFull($i, "&nbsp");
		RepeatForFull($size / 2 - $i, "*");
        RepeatForFull($size / 2 - $i, "&nbsp");
		RepeatForFull($i + 1, "*");

		$starArr[] = "<br>";
	}

	for($i = 0; $i < $size / 2; ++$i)
	{
		RepeatForFull($size / 2 - $i, "*");
		RepeatForFull($i, "&nbsp");
		RepeatForFull($i + 1, "*");

		$starArr[] = "<br>";
	}

    function RepeatForFull($i, $str)
    {
        global $starArr;

		for($j = 0; $j < $i; ++$j)
		{
			$starArr[] = $str;
		}
    }

    // for($i = 0; $i < count($starArr); ++$i)
    // {
    //     echo $starArr[$i];
    // }

    foreach($starArr as $key => $value)
    {
        echo $value;
    }

?>