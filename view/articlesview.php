<!DOCTYPE html>
<html>
    <head>
        <title>Article list</title>
        <style>
            #main{
                width: 70%;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
        <script>
            window.onload = function () {
                var btn;
                btn = document.getElementsByName('log_in')[0];
                btn.onclick = function () {
                   location.replace("http://news-project.local/zalupa");
                }
            }
        </script>
    </head>
    <body>
        <header>

            <h1 align="center">
                Свежие статьи
            </h1>
            <hr>

            <pre>
            </pre>
        </header>
        <main>
            <div id="main">
                <?php
                $articles = new Controller();
                if (empty($articles->articlesView())) {
                    echo 'Новых новостей нет. Вы можете добавить новость!';
                } else {
                    echo $articles->articlesView();
                }
                ?>
            </div>
        </main>
        <footer>
            <input type="button" name="log_in" value="Войти"/>
        </footer>
    </body>
</html>
