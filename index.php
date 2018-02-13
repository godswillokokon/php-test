<?php


	$index = range('a','z');

	if (isset($_POST['string']) &&!empty($_POST['string']))
	{
		$string = $_POST['string'];

		

		$lowcase = strtolower($string);

		$spilt_str = str_split($lowcase);

		end($spilt_str);
		$index_key = key($spilt_str);

		for ($i=0; $i <=$index_key; $i++) 
		{ 
			$search = array_search($spilt_str[$i], $index);

		if ($search % 2 == 1)
			 {
				$search += 1;
				$even = $search / 2;
				$search ='e'.$even;
			 
			 } else {

		if ($search % 2 == 0)

		 {
			$search += 1;
			$odd = $search * 3;
			$odd_main = $odd + 1;
			$search = 'o'.$odd_main; 
		 }

			        }

			        print_r($search);

		}

	
}


?>
<form action="index.php" method="POST">
			<input type="text" name = "string">
                        <input type = "submit" name ="submit">
		</form>



