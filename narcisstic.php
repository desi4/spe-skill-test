<?php 
	if (isset($_POST['number'])) {
		$number = $_POST['number'];
		$length = strlen($number);
		echo $number .' = ' .$length. ' Digits'; 
		echo '<br>';

		if ($length > 0) {
			$item = [];
			$result = [];
			$values = 0;
			for ($i=0; $i < $length; $i++) {
				$item[$i] = $number[$i];
				$result[$i] = pow($item[$i], $length);
				$values +=  $result[$i];
			}
			echo 'Result = ' . $values;
			echo '<br><br>';
			echo 'Narcisstic number: ';
			if ($values == $number) {
				echo 'true';
			} else {
				echo 'false';
			}
			
		}
	} else {
		echo 'input number is empty';
	}
?>