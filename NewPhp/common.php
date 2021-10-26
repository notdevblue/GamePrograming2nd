<?php

	function p()
	{
		$args = func_get_args();
		echo "<div align='left'><pre>= RESULT = \n";
	
		if(is_array($args))
		{
			$i = 0;
			foreach($args as $tgt)
			{
				echo "[param:" . (++$i) . "\n";
				print_r($tgt);
				echo "\n";
			}
		}
		echo "</pre></div>";
	}


	function setCode($length = 10, $characters = "12356abdkkygnp")
	{
		#random code
		$ran_code = "";
		$i = 0;
		while($i < $length)
		{
			$char = substr($characters, mt_rand(0, strlen($characters) -1), 1);
			$ran_code .= $char;
			++$i;
		}
		return ran_code;
	}

	function is_rendCode($array)
	{
		$isFlag = true;
		while($isFlag) {
			$ret_code  = setCode();
			if(!in_array($ret_code, $array))
			{
				array_push($array,$ret_code);
				$isFlag = false;
			}
		}
		return $array;
	}

?>