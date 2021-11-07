<?php



$news = $params['items'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$params['title']?></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
			<p><h1>Новости</h1></p>
			<hr>
	<?php
		foreach ($news as $key) { ?>

			<p class="margin"><span class="card__date"><?=date('d.m.Y',$key['idate'])?></span>
				<a href="?id=<?=$key['id']?>"><span class="href"><?=$key['title']?></span></a></p>
			<p class="announce"><?= $key['announce']?></p>
		<?php } ?>
			<hr>
	<?php
		$id_page = 1;
		while ($id_page <= $params['total_pages']) { ?>

			<a href="?page=<?=$id_page?>" class="knopka"><?=$id_page?></a>

		<?php
		$id_page ++;
		}
	?>


</body>
</html>