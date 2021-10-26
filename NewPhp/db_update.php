<?PHP

	$db_name = "ggm211";
	$table_name = "tb_Users";


	$select_table = "SELEC * FROM ";
	$select_table .= $db_name . "." . $table_name;
	$select_table .= " Where user_id = 0";

	$dbo = mysqli_connect("localhost", "ggm211", "1234", "Ggm211") or die("connect fail!!");
	$ret1 = mysqli_query($dbo, $select_table) or die ("Error select_table querying DB");

	$ret_row = array();
	if($ret1->num_rows > 0)
	{
		while($row = $ret1->fetch_assoc())
		{
			array_push($ret_row, $row[id]);
		}
	}
	else
	{
		$ret_select = "0 results";
	}

	$ret_code = array();
	foreach($ret_row as $key => $val)
	{
		$ret_code = is_rendCode($ret_code);
	}


	mysqli_close($dbo);
?>
