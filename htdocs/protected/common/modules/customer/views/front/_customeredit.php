<?php

use usni\library\utils\TimezoneUtil;
use customer\models\Customer;
use yii\helpers\Html;
use usni\library\utils\CustomerTypeUtil;
use usni\library\utils\CustomerProgressUtil;

$model = $formDTO->getModel();
?>

<?php
if ($model->scenario != 'editprofile') {
    ?>
    <?= $form->field($model, 'username')->textInput(); ?>
    <?php
}
?>
<?php
if ($model->scenario == 'registration') {
    ?>
    <?= Html::activeHiddenInput($model, 'status', ['value' => Customer::STATUS_PENDING]); ?>
    <?= Html::activeHiddenInput($model, 'type', ['value' => CustomerTypeUtil::CUSTOMER_TYPE_COMPETITOR]); ?>
    <?= Html::activeHiddenInput($model, 'progress', ['value' => CustomerProgressUtil::CUSTOMER_PROGRESS_WAITING]); ?>
    <?php
} else {
    ?>
    <?= Html::activeHiddenInput($model, 'status', ['value' => $model->status]); ?>
    <?= Html::activeHiddenInput($model, 'type', ['value' => $model->type]); ?>
    <?= Html::activeHiddenInput($model, 'progress', ['value' => $model->type]); ?>
    <?php
}
?>
<?= $form->field($model, 'timezone')->select2input(TimezoneUtil::getTimezoneSelectOptions()); ?>
<?= Html::activeHiddenInput($model, 'groups', ['value' => $formDTO->getGroups()]); ?>
<?php
if ($model->scenario == 'create' || $model->scenario == 'registration') {
    ?>
    <?= $form->field($model, 'password')->passwordInput(); ?>
    <?= $form->field($model, 'confirmPassword')->passwordInput(); ?>
    <?php
}
?>