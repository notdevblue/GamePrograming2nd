<?PHP

	$db_name = "ggm211";
	$table_name = "tb_Users";

	$alter_table = "ALTER TABLE `";
	$alter_table .= $db_name . "`.`" . $table_name . "` ";
	$alter_table .= "ADD COLUMN `user_id` ";
	$alter_table .= "VARCHAR(1000) NOT NULL DEFAULT 0";
	$alter_table .= "AFTER `status`";

	$dbo = mysqli_connect("localhost", "ggm211", "1234", "Ggm211") or die("connect fail!!");
	// 주소, username, password, 데이터베이스 이름, port, socket
	// 127.0.0.1, 'root', 비번, 'datatable'
	
	$ret = mysqli_query($dbo, $alter_table) or die ("Error create_table querying DB");

	$select_table = "SHOW FULL COLUMNS FROM ";
	$select_table .= $db_name . "." . $table_name . ";";
	$ret1 = mysqli_query($dbo, $select_table) or die ("Error select_table querying DB");

	mysqli_close($dbo);
?>