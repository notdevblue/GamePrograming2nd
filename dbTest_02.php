<?php
    $dbc = mysqli_connect("localhost", "root", "autoset", "hanbase") or die("Error connecting to MySQL server");


    $atk = 100;
    $def = 100;
    $hp  = 100;
    $max = 500;

    $lv     = 0;
    $exp    = 0;
    $status = 1;

    $rndarr = array("atk", "def", "hp");

    foreach($rndarr as $key => $val)
    {
        srand((double)microtime() * 1000000);

        switch($val)
        {
            case "atk":
                $atk = rand($atk, $max);
                break;
            case "def":
                $def = rand($def, $max);
                break;
            case "hp":
                $hp = rand($hp, $max);
                break;
            default:
                break;
        }
    }

    $query = "INSERT INTO `datatable` (`name`, `lv`, `atk`, `def`, `hp`, `exp`, `status`) VALUES"
     . "('test', '" . $lv . "', '" . $atk . "', '" . $def . "', '" . $hp . "', '" . $exp . "', '" . $status . "');";

    $ret = mysqli_query($dbc, $query) or die("Error querying DB");

    $query = "SELECT * FROM datatable";
    $arr_ret = mysqli_query($dbc, $query) or die("Error querying select DB");
    if(mysqli_num_rows($arr_ret) > 0) 
    {
        while($row = mysqli_fetch_assoc($arr_ret))
        {
            p($row);
        }
    }
    else
    {
        echo "테이블에 데이터가 없습니다";
    }

    mysqli_close($dbc);

    // TODO : P
     
?>