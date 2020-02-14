<?php

namespace common\modules\report\controllers;

use yii\web\Controller;
use koolreport;
use common\modules\report\reports\workshops\WorkshopsSales;
use common\modules\report\reports\dancers\Dancers;
use common\modules\report\reports\wduran\Wduran;
use common\modules\report\reports\wgodoy\Wgodoy;
use common\modules\report\reports\wbogado\Wbogado;
use common\modules\report\reports\wjuan\Wjuan;


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
    public function actionWduran()
    {
        $WorkshopsSales = new Wduran();
        return $this->render('index', array("report"=>$WorkshopsSales,));
    }
    public function actionWgodoy()
    {
        $WorkshopsSales = new Wgodoy();
        return $this->render('index', array("report"=>$WorkshopsSales,));
    }
    public function actionWbogado()
    {
        $WorkshopsSales = new Wbogado();
        return $this->render('index', array("report"=>$WorkshopsSales,));
    }
    public function actionWjuan()
    {
        $WorkshopsSales = new Wjuan();
        return $this->render('index', array("report"=>$WorkshopsSales,));
    }
}
