<?php

class Article {

    protected $connection;

    public function getConnection() {
        if ($this->connection === null) {
            $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }
        return $this->connection;
    }

    public function getArticles() {

        $db = $this->getConnection();
        if (!$db->connect_errno) {
            $sql = "SELECT title, article_text, create_date from articles ORDER BY create_date, id DESC";
            $result = $db->query($sql);

            
            while ($row = mysqli_fetch_array($result)) {
                $msg .= "<dl id=".'main'."><dt>" . $row['title'] . "</dt><dd>" . $row['article_text'] ."<p>"."Статья добавлена: " .$row['create_date']."</dd></dl>";
            }
        } else {
            $msg = 'Подключение к базе данных не удалось!';
        }

        return $msg;
    }

}
