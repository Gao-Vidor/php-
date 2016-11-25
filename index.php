<?php
	
	function code()
{
	$arr= array('0' =>1 ,'1'=>2,'2'=>3 );
	foreach ($arr as $value) 
	{
		switch ($value) {
			case '1':
				echo "<div style='background:red;width:200px;height:200px;margin:2px;'>$value</br></div>";
				break;
			case '2':
				echo "<div style='background:green;width:200px;height:200px;margin:2px;'>$value</br></div>";
				break;
			case '3':
				echo "<div style='background:blue;width:200px;height:200px;margin:2px;'>$value</br></div>";
				break;
			default:
				echo "null";
				break;
		}
	}

}
	
	code();
?>
