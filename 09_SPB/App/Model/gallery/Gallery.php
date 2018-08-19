<?php
namespace App\Model\gallery;


use App\Model\database\DB;

class Gallery
{
    protected $data;
    public function getImages()
    {
        $this->data = [];
        $db = new DB();
        $images = $db->query('SELECT * FROM spb.images');
        foreach ($images as $image){
            $this->data[] = new Image($image['id'], $image['description'], $image['name']);
        }
        return $this->data;
    }

    public function getImage(int $id)
    {
        $db = new DB();
        $image = $db->query('SELECT * FROM spb.images WHERE id=:id',[':id' => $id]);
        return $image;
    }

    public function setImage($fileName, $fileDesc)
    {
        $db = new DB();

        $query = 'INSERT INTO spb.images (name, description) VALUES (:fileName, :fileDesc)';
        $filleData = [':fileName' => $fileName, ':fileDesc' => $fileDesc];
        $db->query($query, $filleData);
    }
}
