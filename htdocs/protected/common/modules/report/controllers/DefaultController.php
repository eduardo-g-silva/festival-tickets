<?php

namespace common\modules\report\controllers;

use yii\web\Controller;
use koolreport;
use common\modules\report\reports\workshops\WorkshopsSales;
use common\modules\report\reports\dancers\Dancers;
use common\modules\report\reports\wad\Wad;
use common\modules\report\reports\wzoto\Wzoto;
use common\modules\report\reports\wtotis\Wtotis;


/**
 * Default controller for the `report` module
 */

class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionWorkshops()
    {
        $WorkshopsSales = new WorkshopsSales();
        return $this->render('index', array("report"=>$WorkshopsSales,));
    }
    public function actionDancers()
    {
        $WorkshopsSales = new Dancers();
        return $this->render('index', array("report"=>$WorkshopsSales,));
    }
    public function actionWad()
    {
        $WorkshopsSales = new Wad();
        return $this->render('index', array("report"=>$WorkshopsSales,));
    }
    public function actionWzoto()
    {
        $WorkshopsSales = new Wzoto();
        return $this->render('index', array("report"=>$WorkshopsSales,));
    }
    public function actionWtotis()
    {
        $WorkshopsSales = new Wtotis();
        return $this->render('index', array("report"=>$WorkshopsSales,));
    }
}
