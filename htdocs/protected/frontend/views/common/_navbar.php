<?php
use usni\UsniAdaptor;
use usni\library\utils\CustomerTypeUtil;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

$model  = UsniAdaptor::app()->user->getIdentity();

switch ($model->type) {
    case CustomerTypeUtil::CUSTOMER_TYPE_FESTIVAL_SINGLE:
        $items = [
            ['label' => 'Festival Passes (single)', 'url' => ['/catalog/productCategories/site/view?id=5']],
            [
                'label' => 'Workshops',
                'items' => [
                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=4'],
                ],
            ],
        ];
        break;
    case CustomerTypeUtil::CUSTOMER_TYPE_FESTIVAL_COUPLE:
        $items = [
            ['label' => 'Festival Passes (couples)', 'url' => ['/site/about']],
            [
                'label' => 'Workshops',
                'items' => [
                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=4'],
                ],
            ],
        ];
        break;
    case CustomerTypeUtil::CUSTOMER_TYPE_COMPETITOR:
        $items = [
            ['label' => 'Competitor Passes', 'url' => ['/catalog/productCategories/site/view?id=6']],
            [
                'label' => 'Workshops',
                'items' => [
                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Competitors', 'url' => '/catalog/productCategories/site/view?id=4'],
                ],
            ],
        ];
        break;
    default: //volunteer, concesion, workshop
        $items = [
            [
                'label' => 'Workshops',
                'items' => [
                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=4'],
                ],
            ],
        ];
}

?>
<div class="container">
<?php
NavBar::begin([
    //'brandLabel' => 'Home',
    'innerContainerOptions' => ['class' => 'container-fluid'],
    //'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'id' => 'menu',
        'class' => 'navbar',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-left'],
    'items' => $items,
]);
NavBar::end();
?>
</div>
