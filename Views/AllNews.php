<!doctype>
<html>
	<head>
		<title></title>
                <link href="css/main.css" rel="stylesheet" type="text/css"/>
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
		<form>
			<input type="submit" formaction='http://oct-blog/autorization.php' value="enter"  class="w3-button w3-teal" id="enter"/>
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
				<div class="w3-panel w3-pale-blue w3-leftbar w3-border-teal" id="newsText">
                                    <a href='<?=$link?>'><?=$news['head']?></a>
					<p><?=$news['text']?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</body>
</html>