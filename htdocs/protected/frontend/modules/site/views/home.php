<?php
use usni\UsniAdaptor;

/* @var $this \frontend\web\View */
/* @var $homePageDTO \frontend\dto\HomePageDTO */

$this->title = UsniAdaptor::t('application', 'Home');

//egs echo $this->render('/_carousel');

echo $this->render('/_homeinfo');

//echo $this->render('/_homeproductslist', ['products' => $homePageDTO->getCompetitorsProducts()]);

