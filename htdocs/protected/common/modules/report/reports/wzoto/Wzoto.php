<?php
namespace common\modules\report\reports\wzoto;

use \koolreport\processes\Group;
use \koolreport\processes\Sort;
use \koolreport\processes\Limit;

class Wzoto extends \koolreport\KoolReport
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
            ->query("SELECT * FROM qry_products_sold WHERE isbn LIKE 'w-zotto%'")
//            ->pipe(new Group(array(
//                "by"=>"type",
//                "sum"=>"dancers"
//            )))
            ->pipe(new Sort(array(
                "isbn"=>"desc"
            )))
            //->pipe(new Limit(array(10)))
            ->pipe($this->dataStore('wzoto'));

        $this->src('tickets')
            ->query("SELECT * FROM qry_products_sold_count WHERE category_id != 4")
            ->pipe(new Sort(array(
                "dancers"=>"desc"
            )))
            //->pipe(new Limit(array(10)))
            ->pipe($this->dataStore('tickets-sold'));

        $this->src('tickets')
            ->query("SELECT country, SUM(dancers) AS dancers FROM qry_products_sold WHERE isbn NOT LIKE 'w-%' GROUP BY country")
            ->pipe(new Sort(array(
                "country"=>"desc"
            )))
            //->pipe(new Limit(array(10)))
            ->pipe($this->dataStore('map'));

    }
}

