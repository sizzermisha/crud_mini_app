<?php 
	$unbufferedResult = $pdo->query("SELECT * FROM users");
	
	foreach ($unbufferedResult as $row) 
	{
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$age = $row['age'];
		$number = $row['number'];

		echo <<<HTML
		<tr>
			<td colspan="0">$id</td>
			<td colspan="1">$name</td>
			<td colspan="2">$email</td>
			<td colspan="3">$age</td>
			<td colspan="4">$number</td>
		</tr>

		HTML;
	}
?>