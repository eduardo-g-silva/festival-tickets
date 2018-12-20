<?php
use usni\UsniAdaptor;

/* @var $this \frontend\web\View */
/* @var $homePageDTO \frontend\dto\HomePageDTO */

$this->title = UsniAdaptor::t('application', 'Home');

//egs echo $this->render('/_carousel');
echo "<h3>" . UsniAdaptor::t('products', 'Competitors Passes') . "</h3>";
echo $this->render('/_homeproductslist', ['products' => $homePageDTO->getCompetitorsProducts()]);

