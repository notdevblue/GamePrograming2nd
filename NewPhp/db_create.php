<?php
	require "init.php";

	$post = $_POST;

	$db_name = "ggm211";
	$table_name = "tb_Users";

	$create_table = "CREATE TABLE `" . $db_name . "`.`" . $table_name . "`(";
	$create_table .= "`id` INT NOT NULL AUTO_INCREMENT,";
	$create_table .= "`count` INT NOT NULL DEFAULT 0,";
	$create_table .= "`reg_date` DATETIME NULL,";
	$create_table .= "`status` TINYINT(1) NOT NULL DEFAULT 1,";
	$create_table .= "PRIMARY KEY (`id`));";

	$dbo = mysqli_connect("localhost", "ggm211", "1234", "Ggm211") or die("connect fail!!");
	$ret = mysqli_query($dbo, $create_table) or die("Error create_table querying DB");
	mysqli_close($dbo);

?>