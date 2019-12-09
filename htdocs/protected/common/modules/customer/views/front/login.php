<?php

use usni\UsniAdaptor;
use yii\helpers\Html;

/* @var $this \frontend\web\View */

$this->bodyClass = 'registration login';

?>

<div id="reg-champ-form">
    <div class="logo-form"><?php echo Html::img('/images/logo-tango-festival.png'); ?></div>
    <span class="championship-form-title">UK Tango Festival 2020 Registration</span>
    <div class="form-group row">
        <div class="col-sm-12">
            <div class="about-registration">
                <p>To keep the milongas Balanced, Couple Registration has priority.</p>
                <p>You are welcome to register as single and you will be in a waiting list until another complementary dancer register.</p>
                <p>If you have any problem please send us a facebook message <a href="https://www.facebook.com/uktangofestival/">https://www.facebook.com/uktangofestival/</a> and we will contact you within a day.</p>
                <p>Alternatively you can email us to: <a href = "mailto: info@uktangofestival.com">info@uktangofestival.com</a></p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="well">
                        <h2><?php echo UsniAdaptor::t('customer', 'New Regstration'); ?></h2>
                        <p><strong><?php echo UsniAdaptor::t('customer', "I don't have account details" )?></strong></p>
                        <br>
                        <br>
                        <div class="row center-block">
                            <?= Html::a('Social Dancer Festival Registration', ['/customer/site/register'], ['class' => 'reg-form-btn-submit new-registration']) ?>
                            <br>
                            <?= Html::a('Championship Registration', ['/customer/site/championship'], ['class' => 'reg-form-btn-submit new-registration']) ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="well">
                        <?php echo $this->render('/front/_loginform', ['formDTO' => $formDTO]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
