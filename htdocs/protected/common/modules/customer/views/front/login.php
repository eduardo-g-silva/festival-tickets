<?php
use usni\UsniAdaptor;
use yii\helpers\Html;

/* @var $this \frontend\web\View */
?>
<div class="row">
    <div class="col-sm-6">
        <div class="well">
            <h2><?php echo UsniAdaptor::t('customer', 'New Regstration');?></h2>
            <p>To keep the milongas Balanced, Couple Registration has priority.</p>
            <p>You are welcome to register as single and you will be in a waiting list until another complementary dancer register.</p>
            <p>If you have any problem please send us a facebook message <a href="https://www.facebook.com/uktangofestival/">https://www.facebook.com/uktangofestival/</a> and we will contact you within a day.</p>
            <p>Alternatively you can email us to: <a href = "mailto: info@uktangofestival.com">info@uktangofestival.com</a></p>
            <br>
            <div class="row">
            <div class="col-xs-12 col-lg-6 center">
                <?= Html::a('Social Dancer Festival Registration', ['/customer/site/register'], ['class'=>'btn btn-success']) ?>
            </div>
            <div class="col-xs-12 col-lg-6 center">
                <?= Html::a('Championship Registration', ['/customer/site/championship'], ['class'=>'btn btn-success']) ?>
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="well">
            <?php echo $this->render('/front/_loginform', ['formDTO' => $formDTO]);?>
        </div>
    </div>
</div>
        
