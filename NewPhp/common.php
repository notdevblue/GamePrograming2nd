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


?>