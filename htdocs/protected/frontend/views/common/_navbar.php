<?php
use usni\UsniAdaptor;
use usni\library\utils\CustomerTypeUtil;
use usni\library\utils\CustomerProgressUtil;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

$model  = UsniAdaptor::app()->user->getIdentity();

switch ($model->type) {
    case CustomerTypeUtil::CUSTOMER_TYPE_FESTIVAL_LEADER:
        $items = [
            ['label' => 'Home', 'url' => ['/']],
            ['label' => 'Buy Leader Passes', 'url' => ['/catalog/productCategories/site/view?id=15']],
//            [
//                'label' => 'Workshops',
//                'items' => [
//                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
//                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=16'],
//                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=18'],
//                ],
//            ],
            ['label' => 'Program', 'url' => ['/cms/site/page?alias=program']],
            ['label' => 'About Us', 'url' => ['/cms/site/page?alias=about-us']],
        ];
        break;
    case CustomerTypeUtil::CUSTOMER_TYPE_FESTIVAL_FOLLOWER:
        $items = [
            ['label' => 'Buy Follower Passes', 'url' => ['/catalog/productCategories/site/view?id=5']],
//            [
//                'label' => 'Workshops',
//                'items' => [
//                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
//                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=16'],
//                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=18'],
//                ],
//            ],
        ];
        break;
    case CustomerTypeUtil::CUSTOMER_TYPE_FESTIVAL_COUPLE:
        $items = [
            ['label' => 'Buy Couples Passes', 'url' => ['/catalog/productCategories/site/view?id=17']],
//            [
//                'label' => 'Workshops',
//                'items' => [
//                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
//                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=16'],
//                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=18'],
//                ],
//            ],
        ];
        break;
    case CustomerTypeUtil::CUSTOMER_TYPE_COMPETITOR:
        $items = [
            ['label' => 'Buy Competitor Passes', 'url' => ['/catalog/productCategories/site/view?id=6']],
//            [
//                'label' => 'Workshops',
//                'items' => [
//                    ['label' => 'Competitors', 'url' => '/catalog/productCategories/site/view?id=19'],
//                    '<li class="divider"></li>',
//                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
//                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=16'],
//                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=18'],
//                ],
//            ],
        ];
        break;
    default: //volunteer, concession, workshop
        $items = [
//            [
//                'label' => 'Workshops',
//                'items' => [
//                    ['label' => 'Leaders', 'url' => '/catalog/productCategories/site/view?id=4'],
//                    ['label' => 'Followers', 'url' => '/catalog/productCategories/site/view?id=4'],
//                    ['label' => 'Couples', 'url' => '/catalog/productCategories/site/view?id=4'],
//                ],
//            ],
        ];
}

?>
<div class="container">
<?php
If ($model->progress == CustomerProgressUtil::CUSTOMER_PROGRESS_APPROVED or $model->progress == CustomerProgressUtil::CUSTOMER_PROGRESS_PAID) {
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
}
?>
</div>
