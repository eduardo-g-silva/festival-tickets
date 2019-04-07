<?php

namespace common\modules\report\reports\workshops;

use \koolreport\processes\Group;
use \koolreport\processes\Sort;
use \koolreport\processes\Limit;

class WorkshopsSales extends \koolreport\KoolReport
{

    protected function settings()
    {
        $config = include $_SERVER['DOCUMENT_ROOT'] .'/protected/common/config/koolphp.php';
        return array(
            "dataSources"=>$config
        );
    }


    public function setup()
    {

        $this->src('tickets')
            ->query("SELECT * FROM qry_products_sold where name like 'Aldana%' group by isbn")
            ->pipe(new Sort(array(
                "isbn"=>"asc",
                'type' => "desc"
            )))
            ->pipe($this->dataStore('workshops_aldana'));

        $this->src('tickets')
            ->query("SELECT * FROM qry_products_sold where name like 'Christian%' group by isbn")
            ->pipe(new Sort(array(
                "isbn"=>"desc",
                'type' => "desc"
            )))
            ->pipe($this->dataStore('workshops_christian'));


        $this->src('tickets')
            ->query("SELECT * FROM qry_products_sold where name like 'Miguel Angel%' group by isbn")
            ->pipe(new Sort(array(
                "isbn"=>"asc",
                'type' => "desc"
            )))
            ->pipe($this->dataStore('workshops_zoto'));

        $this->src('tickets')
            ->query("SELECT * FROM qry_products_sold where name like ' Stefania%' group by isbn")
            ->pipe(new Sort(array(
                "isbn"=>"asc",
                'type' => "desc"
            )))
            ->pipe($this->dataStore('workshops_stefania'));

    }
}

