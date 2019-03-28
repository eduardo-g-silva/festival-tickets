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
            ->query("SELECT * FROM qry_products_sold_count where name like 'Aldana%'")
//            ->pipe(new Group(array(
//                "by"=>"isbn"
//            )))
            ->pipe(new Sort(array(
                "isbn"=>"asc"
            )))
            ->pipe($this->dataStore('workshops_aldana'));

        $this->src('tickets')
            ->query("SELECT * FROM qry_products_sold_count where name like 'Christian%'")
//            ->pipe(new Group(array(
//                "by"=>"isbn"
//            )))
            ->pipe(new Sort(array(
                "isbn"=>"asc"
            )))
            ->pipe($this->dataStore('workshops_christian'));
        $this->src('tickets')
            ->query("SELECT * FROM qry_products_sold_count where name like 'Miguel Angel%'")
//            ->pipe(new Group(array(
//                "by"=>"isbn"
//            )))
            ->pipe(new Sort(array(
                "isbn"=>"asc"
            )))
            ->pipe($this->dataStore('workshops_zoto'));

        $this->src('tickets')
            ->query("SELECT * FROM qry_products_sold_count where name like 'Stefania%'")
//            ->pipe(new Group(array(
//                "by"=>"isbn"
//            )))
            ->pipe(new Sort(array(
                "isbn"=>"asc"
            )))
            ->pipe($this->dataStore('workshops_stefania'));

    }
}
