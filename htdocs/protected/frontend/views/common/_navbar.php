<?php

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
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
    'items' => [
        ['label' => 'Festival Passes', 'url' => ['/site/about']],
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
    ],
]);
NavBar::end();
?>
</div>
