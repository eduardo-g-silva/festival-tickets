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
            <p>Your email has been validated!</p>
            <p>If you have registered as single, you will be on a waiting list until another complementary dancer registers. We will send you an email when this takes place.</p>
            <p>If you have registered as a couple (Social Dancers or Competitors) shortly you will receive a confirmation email for you to login and buy your tickets.</p>
            <p>If you have any problem or an enquiry you can email us at: <a href = "mailto: info@uktangofestival.com">info@uktangofestival.com</a></p>
            <br>
            <p>You can also log in again in your account to look for updates at any time.</p>
            <p>Couple registrations should see updates on their accounts in no longer than 48 hours!</p>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
