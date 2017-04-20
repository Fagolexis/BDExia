<?php

namespace MainBundle\Model;

use MainBundle\Entity\Dates;

class DateModel
{
    public function __construct() {
    }

    public function createDate($type,$date)
    {
        $dateToCreate = new Dates();
        $dateToCreate->setDate($date)->setTypeDate($type);
        return $dateToCreate;
    }

    public function currentDate($type)
    {
    	$date = new \DateTime(date('Y-m-d H:i:s'));
    	$dateToCreate = new Dates();
        $dateToCreate->setDate($date)->setTypeDate($type);
        return $dateToCreate;
    }
}