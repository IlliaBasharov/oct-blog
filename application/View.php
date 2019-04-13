<?php

class View {

    public function render($page, $template) {
        include_once 'views' . DIRECTORY_SEPARATOR . $template . '.php';
    }

}
