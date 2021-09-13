<?php

    $sum = add(1, 2, "+");
    echo $sum;



    function add($a, $b, $logic)
    {
        switch($logic)
        {
            case "+":
                return "연산하신 결과는 : $a + $b = " . ($a + $b) . " 입니다.";
            case "-":
                return "연산하신 결과는 : $a - $b = " . ($a - $b) . " 입니다.";
            case "/":
                return ($b == 0) ? "0으로 나눌 수 없습니다." : "연산하신 결과는 : $a / $b = " . ($a / $b) . " 입니다";
            case "*":
                return "연산하신 결과는  : $a * $b = " . ($a * $b) . " 입니다.";
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