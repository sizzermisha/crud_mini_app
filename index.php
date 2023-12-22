<?php 
	try {
		$pdo = new PDO(
			"mysql:host=localhost;dbname=test", // host, dbname
			"root", // user
			"" // pasword
		);

		$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
	} catch (PDOException $e) {
		echo "Произошла ошибка подключения MySQL";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<!-- <input type="button" value="Создать нового пользователя"> -->
	<div class="list_users">
		<p class="list_users_text">Список зарегестрированных пользователей</p>
		<table>
			<thead>
				<tr>
					<th colspan="0">ID пользователя</th>
					<th colspan="1">Имя пользователья</th>
					<th colspan="2">Адрес почты</th>
					<th colspan="3">Возраст</th>
					<th colspan="4">Номер телефона</th>
				</tr>
			</thead>
			<tbody>
				<?php require_once("list_users.php"); ?>
			</tbody>
		</table>
	</div>
</body>
</html>