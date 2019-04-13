<?php

//namespace applications;

class Controller {

    public function articlesView() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $view = new View();
            $view->render('', 'articlesview');
            $article = new Article();
            $articles = $article->getArticles();
            return $articles;
        }
    }
    
    public function zalupa(){
        echo 'Работаем дальше пацаны!';
    }

}
