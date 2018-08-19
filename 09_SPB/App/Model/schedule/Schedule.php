<?php

namespace App\Model\schedule;


class Schedule
{
    public $id;
    public $departure;
    public $dep_time;
    public $arival;
    public $ariv_time;

    public function __construct($id, $departure, $dep_time, $arival, $ariv_time)
    {
        $this->id = $id;
        $this->departure = $departure;
        $this->dep_time = $dep_time;
        $this->arival = $arival;
        $this->ariv_time = $ariv_time;
    }

}