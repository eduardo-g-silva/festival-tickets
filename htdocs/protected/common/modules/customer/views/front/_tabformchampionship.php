<?php
use usni\UsniAdaptor;
use frontend\widgets\TabbedActiveForm;
use frontend\widgets\FormButtons;
use usni\library\widgets\Tabs;
use usni\library\widgets\TabbedActiveFormAlert;
use usni\library\utils\ArrayUtil;


$one = '<span class="fa-stack"><span class="fa fa-circle-o fa-stack-2x"></span><strong class="fa-stack-1x">1</strong></span>';
$two = '<span class="fa-stack"><span class="fa fa-circle-o fa-stack-2x"></span><strong class="fa-stack-1x">2</strong></span>';
$three = '<span class="fa-stack"><span class="fa fa-circle-o fa-stack-2x"></span><strong class="fa-stack-1x">3</strong></span>';
$four = '<span class="fa-stack"><span class="fa fa-circle-o fa-stack-2x"></span><strong class="fa-stack-1x">4</strong></span>';

if($formDTO->getScenario() == 'registration')
{
    $caption = UsniAdaptor::t('customer', 'Championship 2020 Registration - (Please complete the 4 sections on the form before you submit it.)');
}
else
{
    $caption = UsniAdaptor::t('customer', 'Edit Competitor Profile');
}
$errors = ArrayUtil::merge($formDTO->getModel()->errors, $formDTO->getPerson()->errors, $formDTO->getAddress()->errors);
echo TabbedActiveFormAlert::widget(['model' => $formDTO->getModel(), 'errors' => $errors]);
$form = TabbedActiveForm::begin([
                                    'id'          => 'customerprofileeditview', 
                                    'layout'      => 'horizontal',
                                    'options'     => ['enctype' => 'multipart/form-data'],
                                    'caption'     => $caption
                               ]); 
?>
<?php
            $items[] = [
                'options' => ['id' => 'tabuser'],
                'label' => UsniAdaptor::t('application', $one.'<strong> Account Details</strong>'),
                'class' => 'active',
                'content' => $this->render('/front/_customeredit', ['form' => $form, 'formDTO' => $formDTO])
            ];
            $deleteUrl = UsniAdaptor::createUrl('customer/site/delete-image');
            $items[] = [
                'options' => ['id' => 'tableader'],
                'label' => UsniAdaptor::t('users', $two.' <strong>Details for Leader</strong>'),
                'content' => $this->render('@usni/library/modules/users/views/_personeditleader.php', ['form' => $form, 'formDTO' => $formDTO,
                                                                                                 'showDeleteLink' => false, 'deleteUrl' => $deleteUrl])
            ];
            $items[] = [
                'options' => ['id' => 'tabfollower'],
                'label' => UsniAdaptor::t('users', $three.' <strong>Details for Follower</strong>'),
                'content' => $this->render('@usni/library/modules/users/views/_personeditfollower.php', ['form' => $form, 'formDTO' => $formDTO,
                    'showDeleteLink' => false, 'deleteUrl' => $deleteUrl])
            ];
            $items[] = [
                'options' => ['id' => 'tabaddress'],
                'label' => UsniAdaptor::t('users', $four.' <strong>Address</strong>'),
                'content' => $this->render('@usni/library/modules/users/views/_addressedit', ['formDTO' => $formDTO, 'form' => $form])
            ];
            echo Tabs::widget(['items' => $items]);
    ?>
    <div class="row"><h4 style="float: right;color: #f00;"><strong>Please complete the 3 tabs above and submit the form.</strong></h4></div>
    <?= FormButtons::widget(
    ['submitButtonLabel' => UsniAdaptor::t('application', 'Submit the form'), 'showCancelButton' => true, 'cancelUrl' => UsniAdaptor::createUrl('site/default/index')]
);?>
<?php TabbedActiveForm::end();