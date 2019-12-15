<?php
use usni\UsniAdaptor;
use usni\library\utils\CustomerTypeUtil;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

$model  = UsniAdaptor::app()->user->getIdentity();

switch ($model->type) {
    case CustomerTypeUtil::CUSTOMER_TYPE_FESTIVAL_SINGLE:
        $items = [
            ['label' => 'Festival Passes (single)', 'url' => ['/site/about']],
            [
                'label' => 'Workshops',
                'items' => [
                    ['label' => 'Leaders', 'url' => '#'],
                    ['label' => 'Followers', 'url' => '#'],
                    ['label' => 'Couples', 'url' => '#'],
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
                    ['label' => 'Leaders', 'url' => '#'],
                    ['label' => 'Followers', 'url' => '#'],
                    ['label' => 'Couples', 'url' => '#'],
                    ['label' => 'Competitors', 'url' => '#'],
                ],
            ],
        ];
        break;
    case CustomerTypeUtil::CUSTOMER_TYPE_COMPETITOR:
        $items = [
            ['label' => 'Competitor Passes', 'url' => ['/site/about']],
            [
                'label' => 'Workshops',
                'items' => [
                    ['label' => 'Leaders', 'url' => '#'],
                    ['label' => 'Followers', 'url' => '#'],
                    ['label' => 'Couples', 'url' => '#'],
                    ['label' => 'Competitors', 'url' => '#'],
                ],
            ],
        ];
        break;
    default: //volunteer, concesion, workshop
        $items = [
            [
                'label' => 'Workshops',
                'items' => [
                    ['label' => 'Leaders', 'url' => '#'],
                    ['label' => 'Followers', 'url' => '#'],
                    ['label' => 'Couples', 'url' => '#'],
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
