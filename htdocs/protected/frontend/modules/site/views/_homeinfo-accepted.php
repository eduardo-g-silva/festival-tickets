<?php
use usni\UsniAdaptor;
use usni\library\utils\CustomerTypeUtil;
use yii\helpers\Html;
use yii\helpers\Url;

if ( Yii::$app->user->isGuest )
    return Yii::$app->getResponse()->redirect('/customer/site/login',302);
?>

<?php
$model  = UsniAdaptor::app()->user->getIdentity();
?>
<h3 class="home">UK Tango Festival & Championship 2020</h3>
<div class="row">
    <div class="col-xs-12">
        <div class="home-info">
            <p>Dear <?= $model->name; ?>,</p>
            <p>In this site you can buy Festival, Competitor Passes and Workshops.</p>
            <p>You can also see the detail of the items you bought in <?= Html::a('Your Account', ['/customer/site/my-account']) ?>.</p>
            <p>If you have any problem or inquire you can email us to: <a href = "mailto: info@uktangofestival.com">info@uktangofestival.com</a></p>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
