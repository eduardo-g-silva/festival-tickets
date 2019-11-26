<?php
use usni\UsniAdaptor;
use yii\helpers\Html;
?>
<h3 class="home">UK Tango Festival & Championship Registration 2020</h3>
<div class="row">
    <div class="col-xs-12">
        <div class="home-info">
            <p>To keep the milongas Balanced, Couple Registration has priority.</p>
            <p>You are welcome to register as single and you will be in a waiting list until another complementary dancer register.</p>
            <p>If you have any problem please send us a facebook message <a href="https://www.facebook.com/uktangofestival/">https://www.facebook.com/uktangofestival/</a> and we will contact you within a day.</p>
            <p>Alternatively you can email us to: <a href = "mailto: info@uktangofestival.com">info@uktangofestival.com</a></p>
            <br>
            <div class="col-xs-12 col-lg-4 center">
                <?= Html::a('Registration for the Festival', ['/customer/site/register'], ['class'=>'btn btn-primary']) ?>
            </div>
            <div class="col-xs-12 col-lg-4 center">
            <?= Html::a('Register to participate in Championship', ['/customer/site/championship'], ['class'=>'btn btn-primary']) ?>
            </div>
        </div>
    </div>

</div>