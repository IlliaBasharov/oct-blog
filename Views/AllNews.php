<?php
include_once 'config.php';
?>
<!doctype>
<html>
	<head>
		<title></title>
                <link href="css/main.css" rel="stylesheet" type="text/css"/>                
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="../js/cabinet.js" type="text/javascript"></script>
	</head>
	<body>
		<form>
                    <input type="submit" formaction=<?=$URL_SITE.DIRECTORY_SEPARATOR.'autorization.php'?> value="Войти" class="w3-button w3-teal" id="enter" />
		</form>
		<div id="index_allNewsDiv">
			<?php
                        $db = new DataBase();
                        $news_array = array_reverse($db->getNews());
                        //=====================старая версия
			//$news_array=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
                        $link='singleNews.php?newsId=';
			foreach ($news_array as $news):
			?>
                    <a href='<?=$link.$news['id']?>'><div class="w3-panel w3-pale-blue w3-leftbar w3-border-teal w3-hover-light-grey" id="newsText"><h3><?=$news['name']?></h3><p><?=$news['text']?></p></div></a>
			<?php endforeach; ?>
		</div>
	</body>
</html>