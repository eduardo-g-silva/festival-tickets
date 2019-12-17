<?php

use usni\UsniAdaptor;
use frontend\widgets\FormButtons;
use usni\library\utils\ArrayUtil;
use usni\library\utils\TimezoneUtil;
use customer\models\Customer;
use yii\helpers\Html;
use usni\library\utils\CustomerTypeUtil;
use usni\library\utils\CustomerProgressUtil;
use usni\library\widgets\Thumbnail;
use yii\web\View;
use kartik\widgets\SwitchInput;
use usni\library\widgets\TabbedActiveFormAlert;
use frontend\widgets\TabbedActiveForm;

$model = $formDTO->getModel();
$modelPerson  = $formDTO->getPerson();

if ($formDTO->getScenario() == 'registration') {
    $caption = '';
} else {
    $caption = UsniAdaptor::t('customer', 'Edit Competitor Profile');
}

$deleteUrl = UsniAdaptor::createUrl('customer/site/delete-image');
$errors = ArrayUtil::merge($formDTO->getModel()->errors, $formDTO->getPerson()->errors, $formDTO->getAddress()->errors);

echo TabbedActiveFormAlert::widget(['model' => $formDTO->getModel(), 'errors' => $errors]);

$form = TabbedActiveForm::begin([
    'id'          => 'customerprofileeditview',
    'layout'      => 'horizontal',
    'options'     => ['enctype' => 'multipart/form-data'],
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'label' => 'col-sm-4',
            'wrapper' => 'col-sm-8'
            ],
        ],
    ]);

?>

<div id="reg-champ-form">
    <div class="logo-form"><?php echo Html::img('/images/logo-tango-festival.png');?></div>
    <span class="championship-form-title">Festival Registration 2020</span>
    <div class="form-group row">
    <div class="col-sm-12">
        <span class="championship-form-subtitle">Account Details</span>
        <?= Html::activeHiddenInput($model, 'status', ['value' => Customer::STATUS_PENDING]); ?>
        <?= Html::activeHiddenInput($model, 'progress', ['value' => CustomerProgressUtil::CUSTOMER_PROGRESS_WAITING]); ?>
        <?= Html::activeHiddenInput($model, 'groups', ['value' => '2']); ?>
        <?= $form->field($model, 'username')->textInput(['style'=>'max-width:300px']); ?>
        <?= $form->field($model, 'password')->passwordInput(['style'=>'max-width:300px']); ?>
        <?= $form->field($model, 'confirmPassword')->passwordInput(['style'=>'max-width:300px']); ?>
        <?php //$form->field($model, 'timezone')->select2input(TimezoneUtil::getTimezoneSelectOptions());?>
    </div>
</div>
    <div class="form-group row">
        <div class="col-sm-12">
            <span class="championship-form-subtitle">Dancer Details</span>
            <?= Html::activeHiddenInput($modelPerson, 'registration_type', ['value' => "N/A"]);?>
            <?= Html::activeHiddenInput($modelPerson, 'city', ['value' => "N/A"]);?>
            <?= Html::activeHiddenInput($modelPerson, 'partner_role', ['value' => "N/A"]);?>
            <?= Html::activeHiddenInput($modelPerson, 'partner_city', ['value' => "N/A"]);?>
            <?= $form->field($modelPerson, 'firstname')->textInput(['style'=>'max-width:300px']);?>
            <?= $form->field($modelPerson, 'lastname')->textInput(['style'=>'max-width:300px']);?>
            <?= $form->field($modelPerson, 'email')->textInput(['style'=>'max-width:300px']);?>
            <?= $form->field($modelPerson, 'mobilephone')->textInput(['style'=>'max-width:300px']);?>
            <?= $form->field($model, 'type')->dropDownList([CustomerTypeUtil::CUSTOMER_TYPE_FESTIVAL_COUPLE => 'Couple', CustomerTypeUtil::CUSTOMER_TYPE_FESTIVAL_LEADER => 'Leader',CustomerTypeUtil::CUSTOMER_TYPE_FESTIVAL_FOLLOWER => 'Follower'],['prompt'=>'Please select','style'=>'max-width:200px'])->label("Ticket Type"); ?>
            <?= $form->field($modelPerson, 'dancing_role')->dropDownList(['Leader' => 'Leader', 'Follower' => 'Follower'],['prompt'=>'Please select','style'=>'max-width:200px'])->label('Your Dancing Role');?>
            <?= $form->field($modelPerson, 'partner_firstname');?>
            <?= $form->field($modelPerson, 'partner_lastname')->textInput();?>
            <?= $form->field($modelPerson, 'comments')->textarea(['options' => ['placeholder' => 'Anthing you want to let us know ...']]); ?>
        </div>
    </div>
<?php
//$this->render('@usni/library/modules/users/views/_personeditleader.php');
//$this->render('@usni/library/modules/users/views/_personeditfollower.php', ['form' => $form, 'formDTO' => $formDTO,'showDeleteLink' => false, 'deleteUrl' => $deleteUrl]);
//$this->render('@usni/library/modules/users/views/_addressedit', ['formDTO' => $formDTO, 'form' => $form]);
?>
<?= FormButtons::widget(
    [
        'layout' => "<div class='text-center'>{cancel}{submit}</div>",
        'submitButtonOptions' => ['class' => 'reg-form-btn-submit', 'id' => 'save'],
        'cancelButtonOptions' => ['class' => 'reg-form-btn-cancel', 'id' => 'cancel-button'],
        'submitButtonLabel' => UsniAdaptor::t('application', 'Submit the form'),
        'showCancelButton' => true,
        'cancelUrl' => UsniAdaptor::createUrl('site/default/index')
    ]
); ?>

</div>
<?php //ActiveForm::end(); ?>
<?php TabbedActiveForm::end(); ?>




<?php
$script = <<< JS
 $(document).ready(function() {
   $(".field-person-dancing_role").hide();
   $(".field-person-partner_firstname").hide();
   $(".field-person-partner_lastname").hide();
   $('#customer-type').on('change', function() {
    if ( $(event.target).val() == '5') { //couple
       $('#person-dancing_role').val('');
       $('#person-partner_firstname').val('');
       $('#person-partner_lastname').val('');
       $('#customer-groups').val('7');
       $(".field-person-dancing_role").show();
       $(".field-person-partner_firstname").show();
       $(".field-person-partner_lastname").show();
    } else{
        if ( $(event.target).val() == '3') { //leader
            $('#person-dancing_role').val('Leader');
            $('#customer-groups').val('10');
        }
        if ( $(event.target).val() == '4') { //follower
            $('#person-dancing_role').val('Follower');
            $('#customer-groups').val('11');
        }
       $(".field-person-dancing_role").hide();
       $(".field-person-partner_firstname").hide();
       $(".field-person-partner_lastname").hide();
       $('input#person-partner_role').val('N/A');
       $('#person-partner_firstname').val('N/A');
       $('#person-partner_lastname').val('N/A');
      }
    });
   $('#person-dancing_role').on('change', function() {
    if ( $(event.target).val() == 'Leader') {
       $('input#person-partner_role').val('Follower');
    } else {
       $('input#person-partner_role').val('Leader');
      }
    });
   $('#customerprofileeditview').on('beforeSubmit', function (e) {
        $('#save').html('Sending please wait...');
        $('#save').attr('disabled','disabled');
        return true;
    });
});
JS;
$this->registerJs($script, View::POS_READY);
?>
