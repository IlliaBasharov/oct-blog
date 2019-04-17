<!doctype>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form>
			<input type="submit" formaction='http://oct-blog/autorization.php' value="enter" />
		</form>
		<div id="index_allNewsDiv">
			<?php
                        $db = new DataBase();
                        $news_array = $db->getNews();
                        //=====================старая версия
			//$news_array=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
                        $link='Views'.DIRECTORY_SEPARATOR.'SingleNews.php';
			foreach ($news_array as $news):
			?>
				<div>
					<a href='<?=$link?>'><?=$news['head']?></a>
				</div>
				<div>
					<p><?=$news['text']?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</body>
</html>