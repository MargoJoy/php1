<?php
require_once __DIR__ . '/Article.php';
require_once __DIR__ . '/Db.php';

class News
{
    protected $database;

    public function getData(array $data = [])
    {
        $db = new DB();

        if (!empty($data)) {
            $sql = 'SELECT * FROM news WHERE id=:id';
            $dbquery = $db->query($sql, $data);
        } else {
            $sql = 'SELECT * FROM news';
            $dbquery = $db->query($sql);
        }

        foreach ($dbquery as $article) {
            $this->database[] = new Article(
                $article['id'],
                $article['title'],
                $article['text'],
                $article['author']);
        }
        return $this->database;
    }
}

