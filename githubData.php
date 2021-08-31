<?php

    // echo "<pre>"; // Pretty
    // echo print_r($_POST); // PHP has two special variables named "$_POST, $_GET". POST contains recived datas.
    // echo "</pre>";

    $height = 5;

    if($_POST["postData"] == 1)
    {
        for($i = 0; $i < $height; ++$i)
	    {   
		    for($j = 0; $j <= $i; ++$j)
		    {
		    	echo "* ";
		    }
		    echo "<br>";
	    }
    }
    else if($_POST["postData"] == 2)
    {
	    for($i = 0; $i < $height; ++$i)
	    {
	    	for($j = 0; $j < $height - $i; ++$j)
	    	{
	    		echo "&nbsp";
	    	}
	    	for($j = 0; $j <= $i; ++$j)
	    	{
	    		echo "* ";
	    	}

            echo "<br>";
        }
    }

?>