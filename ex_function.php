<?php

    $i = 1;
    for($j = 1; $j < 90; ++$j)
    {
        echo ($j % 10 + 1) . " * $i = " . (($j % 10 + 1) * $i) . " <br>";

        if($j % 10 == 0)
        {
            ++$i;
            echo "<br>";
        }
    }



    // for($i = 1; $i < 10; ++$i)
    // {
    //     repeat($i);

    //     echo "<br>";
    // }


    // function repeat($first)
    // {
    //     for($i = $first; $i < 10; ++$i)
    //     {
    //         echo "$first * $i = " . ($first * $i) . " <br>";
    //     }        
    // }

?>