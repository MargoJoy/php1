<?php
namespace App\Model\schedule;


use App\Model\database\DB;

class TrainSchedule
{
    protected $data;

    public function getInfo()
    {
        $data = [];
        $db = new DB();
        $information = $db->query('SELECT * FROM spb.train_schedule');
        foreach ($information as $info) {
            $this->data[] = new Schedule($info['id'], $info['departure'], $info['dep_time'], $info['arival'], $info['ariv_time']);
        }
        return $this->data;
    }

    public function findById($id)
    {
        $db = new DB();
        $sql = 'SELECT * FROM spb.train_schedule WHERE id=:id';
        $data = [':id' => $id];
        $result = $db->query($sql, $data);
        if (!empty($result)) {
            return $result[0];
        } else {
            return false;
        }
    }

    public function setSchedule($id, $departure, $dep_time, $arival, $ariv_time)
    {
        $db = new DB();

        $query = 'UPDATE spb.train_schedule SET departure=:departure, dep_time=:dep_time, arival=:arival, ariv_time=:ariv_time WHERE id=:id';

        $cangeInfo = [':id' => $id, ':departure' => $departure, ':dep_time' => $dep_time, ':arival' => $arival, ':ariv_time' => $ariv_time];

        $db->query($query, $cangeInfo);
    }

}

