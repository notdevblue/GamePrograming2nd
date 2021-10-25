<?PHP

	$db_name = "ggm211";
	$table_name = "tb_Users";

	$alter_table = "ALTER TABLE `";
	$alter_table .= $db_name . "`.`" . $table_name . "` ";
	$alter_table .= "ADD COLUMN `user_id` ";
	$alter_table .= "VARCHAR(1000) NOT NULL DEFAULT 0";
	$alter_table .= "AFTER `status`";

	$ret = mysqli_query($dbo, $alter_table) or die ("Error create_table querying DB");

	$dbo = mysqli_connect("localhost", "ggm211", "1234", "Ggm211") or die("connect fail!!");
	$ret = mysqli_query($dbo, $create_table) or die("Error create_table querying DB");

	$select_table = "SHOW FULL COLUMNS FROM ";
	$select_table .= $db_name . "." . $table_name . ";";
	$ret1 = mysqli_query($dbo, $select_table) or die ("Error select_table querying DB");

	mysqli_close($dbo);
?>