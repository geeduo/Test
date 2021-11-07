<?php

$id = $_GET['id'];
$news = $params['items'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Новости</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<p><h2><?=$news['title']?></h2></p>
	<hr class="line">
	<span class="announce"><p><?=$news['content']?></p></span>
	<hr>
	<p><a href="/" class="margin">Все новости >></a></p>
</body>
</html>
