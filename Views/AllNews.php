<!doctype>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form>
			<input type="submit" action='Autorization.php' name="index_goToLogin" value="Войти" />
		</form>
		<div id="index_allNewsDiv">
			<?php
			$news_array=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
			foreach ($news_array as $news):
			?>
				<div>
					<a href='<?=$link?>'><?=$news['head']?></a><!--TODO $link=ссылка на singleNews-->
				</div>
				<div>
					<p><?=$news['text']?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</body>
</html>