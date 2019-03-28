<?php

namespace common\modules\report\controllers;

use yii\web\Controller;
use koolreport;
use common\modules\report\reports\workshops\WorkshopsSales;


/**
 * Default controller for the `report` module
 */

class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $WorkshopsSales = new WorkshopsSales();

        return $this->render('index', array("report"=>$WorkshopsSales,));
    }
}
