<?php
use usni\UsniAdaptor;
use usni\library\utils\CustomerProgressUtil;
/* @var $this \frontend\web\View */
/* @var $homePageDTO \frontend\dto\HomePageDTO */

$this->title = UsniAdaptor::t('application', 'Home');

//egs echo $this->render('/_carousel');

$model  = UsniAdaptor::app()->user->getIdentity();

If ($model->progress == CustomerProgressUtil::CUSTOMER_PROGRESS_APPROVED or $model->progress == CustomerProgressUtil::CUSTOMER_PROGRESS_PAID) {
    echo $this->render('/_homeinfo-accepted');
} else {
    echo $this->render('/_homeinfo');
}

//echo $this->render('/_homeproductslist', ['products' => $homePageDTO->getCompetitorsProducts()]);

