<?php

    $dbc = mysqli_connect("localhost", "root", "autoset", "hanbase") or die("Error connecting to MySQL server");

    $query = "INSERT INTO `datatable` (`id`, `name`, `lv`, `atk`, `def`, `hp`, `exp`, `status`) VALUES"
     . "(NULL, '" . $_POST["postData"] . "', '" . rand(10,50) . "', '" . rand(10,50) . "', '" . rand(10,50) . "', '" . rand(10,50) . "', '" . rand(10,50) . "', '" . rand(10,50) . "');";
    
    $ret = mysqli_query($dbc, $query) or die("Error querying DB");
     

    echo "<pre>";
    print_r($dbc);
    print_r($ret);
    echo "</pre>";


?>