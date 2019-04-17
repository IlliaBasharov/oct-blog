<!doctype>
<html>
	<head>
		<title></title>
                <link href="css/main.css" rel="stylesheet" type="text/css"/>
                <script src="../js/main.js" type="text/javascript"></script>
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	</head>
	<body>
		<form>
                    <input type="submit" formaction='http://oct-blog/autorization.php' value="Войти" class="w3-button w3-teal" id="enter" />
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
                    <a href='<?=$link?>'><div class="w3-panel w3-pale-blue w3-leftbar w3-border-teal w3-hover-light-grey" id="newsText"><h3><?=$news['name']?></h3><p><?=$news['text']?></p></div></a>
			<?php endforeach; ?>
		</div>
	</body>
</html>