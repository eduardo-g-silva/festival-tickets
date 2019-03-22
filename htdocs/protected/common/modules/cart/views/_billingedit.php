<?php
use usni\library\utils\CountryUtil;

/* @var $this \frontend\web\View */
/* @var $form \usni\library\bootstrap\ActiveForm */

// EGS adding registration code

?>
<div class="row">
    <div class="col-sm-12">
        <p>Type the registration code received in the confirmation email</p>
        <p>(competitors please type the word "COMPETITORS" as the registration code.)</p>
        <p>(workshops please type the word "WORKSHOPS" as the registration code.)</p>
        <?= $form->field($model, 'registration_code')->textInput();?>
        <hr>
    </div>
    <div class="col-sm-6">
        <?= $form->field($model, 'firstname')->textInput();?>
        <?= $form->field($model, 'lastname')->textInput();?>
        <?= $form->field($model, 'email')->textInput();?>
        <?= $form->field($model, 'mobilephone')->textInput();?>
        <?= $form->field($model, 'address1')->textInput();?>
    </div>
    <div class="col-sm-6">
        <?= $form->field($model, 'address2')->textInput();?>
        <?= $form->field($model, 'city')->textInput();?>
        <?= $form->field($model, 'state')->textInput();?>
        <?= $form->field($model, 'country')->select2input(CountryUtil::getCountries());?>
        <?= $form->field($model, 'postal_code')->textInput();?>
    </div>
</div>

