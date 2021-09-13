<?php

    $i = 1;
    for($j = 1; $j < 90; ++$j)
    {
        if($j % 10 == 0)
        {
            ++$i;
            echo "<br>";
            continue;
        }

        echo " $i * " .  ($j % 10) . " = " . (($j % 10) * $i) . " <br>";

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