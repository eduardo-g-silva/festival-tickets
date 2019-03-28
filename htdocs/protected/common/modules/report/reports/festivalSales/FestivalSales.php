<?php
require_once "../../../koolreport/autoload.php";
use \koolreport\processes\Group;
use \koolreport\processes\Sort;
use \koolreport\processes\Limit;

class FestivalSales extends \koolreport\KoolReport
{

    protected function settings()
    {
        $config = include "../../../config.php";
        return array(
            "dataSources"=>$config
        );
    }


    public function setup()
    {
        $this->src('tickets')
            ->query("SELECT * FROM qry_products_sold")
            ->pipe(new Group(array(
                "by"=>"isbn",
                "sum"=>"total"
            )))
            ->pipe(new Sort(array(
                "total"=>"desc"
            )))
            //->pipe(new Limit(array(10)))
            ->pipe($this->dataStore('festival_sales'));
    }
}

