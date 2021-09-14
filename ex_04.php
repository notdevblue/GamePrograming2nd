<?php

    $arr = array(
        array(
            "id" => 1001,
            "name" => "Knight",
            "city" => "seoul"
        ),
        array(
            "id" => 1003,
            "name" => "Magic",
            "city" => "busan"
        ),
        array(
            "id" => 1003,
            "name" => "Magic",
            "city" => "seoul"
        ),
        array(
            "id" => 1001,
            "name" => "Knight",
            "city" => "busan"
        )
        );

    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    
    $keys = array_column($arr, 'id'); 

    $keys = array_combine($keys, array(array(), array(), array(), array()));

    for($i = 0; $i < 4; ++$i)
    {
        $keys[$arr[$i]["id"]][] = $arr[$i]["city"] . " " .$arr[$i]["name"];
    }

    // echo "<pre>";
    // print_r($keys);
    // echo "</pre>";

    $ret_id = array_column($arr, "id");
    $tmp_val = array();

    foreach($ret_id as $key => $val)
    {
        $tmp_val[$key] =array();
    }

    $ret_local = array_column($arr, "city");
    $ret_job = array_column($arr, "name");
    $ret = array_combine($ret_id, $tmp_val);


    echo "<pre>";
    print_r($ret_local);
    print_r($ret_job);
    print_r($ret);
    echo "</pre>";


    foreach($ret_id as $key => $val)
    {
        $tmp = $ret[$val];
        array_push($tmp, $ret_local[$key] . " " . $ret_job[$key]);
        $ret[$val] = $tmp;
    }

    echo "<pre>";
    print_r($ret);
    echo "</pre>";



    // + 예전에 반복문 하나만 사용해서 구구단 찍어보라고 하셨을 때 쓴 코드
    // $i = 1;
    // for($j = 1; $j < 90; ++$j)
    // {
    //     if($j % 10 == 0)
    //     {
    //         ++$i;
    //         echo "<br>";
    //         continue;
    //     }
    //     echo " $i * " .  ($j % 10) . " = " . (($j % 10) * $i) . " <br>";
    // }



?>