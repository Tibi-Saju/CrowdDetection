<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=shops", "root", "");

if(isset($_POST["action"]))
{
	

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT time, nopeople  
		FROM shop2 
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'language'		=>	$row["time"],
				'total'			=>	$row["nopeople"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>