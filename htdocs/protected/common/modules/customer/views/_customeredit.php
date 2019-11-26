<?php
use usni\library\utils\TimezoneUtil;
use usni\library\modules\users\utils\UserUtil;
use \usni\library\utils\CustomerProgressUtil;
$model   = $formDTO->getModel();

?>

<?= $form->field($model, 'username')->textInput();?>
<?= $form->field($model, 'progress')->dropdownList(CustomerProgressUtil::getProgressDropdown());?>
<?= $form->field($model, 'status')->dropdownList(UserUtil::getStatusDropdown());?>
<?= $form->field($model, 'type')->dropdownList(UserUtil::getCustomerTypeDropdown());?>
<?= $form->field($model, 'timezone')->select2input(TimezoneUtil::getTimezoneSelectOptions());?>
<?= $form->field($model, 'groups')->select2input($formDTO->getGroups(), true, ['multiple'=>'multiple']);?>
<?php
if($model->scenario == 'create' || $model->scenario == 'registration')
{
?>
    <?= $form->field($model, 'password')->passwordInput();?>
    <?= $form->field($model, 'confirmPassword')->passwordInput();?>
<?php
}
?>