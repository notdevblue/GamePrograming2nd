<?php

    



    function add($a, $b, $logic)
    {
        switch($logic)
        {
            case "+":
                return $a + $b;
            case "-":
                return $a - $b;
            case "/":
                return $b == 0 ? 0 : ($a / $b);
            case "*":
                return $a * $b;
            default:
                return 0;
        }
    }


    // $max_line = 5;
    // $max = 6;
    // $cnt_null = 1;


    // for($r = 0; $r < $max_line; ++$r)
    // {
    //     for($i = 0; $i < $max; ++$i)
    //     {
    //         if($i < $cnt_null)
    //         {
    //             $arr[$r][$i + 6] = "&nbsp";
    //         }
    //         else
    //         {
    //             $arr[$r][$i + 6] = "*";
    //         }
    //     }
    //     --$cnt_null;
    // }

?>