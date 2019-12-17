<?php
use usni\UsniAdaptor;
use usni\library\utils\CustomerTypeUtil;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

$model  = UsniAdaptor::app()->user->getIdentity();

switch ($model->type) {
    case CustomerTypeUtil::CUSTOMER_TYPE_FESTIVAL_LEADER:
        $items = [
            ['label' => 'Festival Leader Passes', 'url' => ['/catalog/productCategories/site/view?id=15']],
            [
                'label' => 'Workshops',
                'items' => [
                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=16'],
                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=18'],
                ],
            ],
        ];
        break;
    case CustomerTypeUtil::CUSTOMER_TYPE_FESTIVAL_FOLLOWER:
        $items = [
            ['label' => 'Festival Follower Passes', 'url' => ['/catalog/productCategories/site/view?id=5']],
            [
                'label' => 'Workshops',
                'items' => [
                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=16'],
                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=18'],
                ],
            ],
        ];
        break;
    case CustomerTypeUtil::CUSTOMER_TYPE_FESTIVAL_COUPLE:
        $items = [
            ['label' => 'Festival Couples Passes', 'url' => ['/catalog/productCategories/site/view?id=17']],
            [
                'label' => 'Workshops',
                'items' => [
                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=16'],
                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=18'],
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
                    ['label' => 'Competitors', 'url' => '/catalog/productCategories/site/view?id=19'],
                    '<li class="divider"></li>',
                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=16'],
                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=18'],
                ],
            ],
        ];
        break;
    default: //volunteer, concession, workshop
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
