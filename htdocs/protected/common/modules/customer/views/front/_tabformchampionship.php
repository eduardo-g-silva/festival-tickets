<?php
use usni\UsniAdaptor;
use frontend\widgets\TabbedActiveForm;
use frontend\widgets\FormButtons;
use usni\library\widgets\Tabs;
use usni\library\widgets\TabbedActiveFormAlert;
use usni\library\utils\ArrayUtil;

if($formDTO->getScenario() == 'registration')
{
    $caption = UsniAdaptor::t('customer', 'Register Account to Compete in Championship 2020');
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
                'label' => UsniAdaptor::t('application', 'Account'),
                'class' => 'active',
                'content' => $this->render('/front/_customeredit', ['form' => $form, 'formDTO' => $formDTO])
            ];
            $deleteUrl = UsniAdaptor::createUrl('customer/site/delete-image');
            $items[] = [
                'options' => ['id' => 'tableader'],
                'label' => UsniAdaptor::t('users', 'Details for Leader'),
                'content' => $this->render('@usni/library/modules/users/views/_personeditleader.php', ['form' => $form, 'formDTO' => $formDTO,
                                                                                                 'showDeleteLink' => false, 'deleteUrl' => $deleteUrl])
            ];
            $items[] = [
                'options' => ['id' => 'tabfollower'],
                'label' => UsniAdaptor::t('users', 'Details for Follower'),
                'content' => $this->render('@usni/library/modules/users/views/_personeditfollower.php', ['form' => $form, 'formDTO' => $formDTO,
                    'showDeleteLink' => false, 'deleteUrl' => $deleteUrl])
            ];
            $items[] = [
                'options' => ['id' => 'tabaddress'],
                'label' => UsniAdaptor::t('users', 'Address'),
                'content' => $this->render('@usni/library/modules/users/views/_addressedit', ['formDTO' => $formDTO, 'form' => $form])
            ];
            echo Tabs::widget(['items' => $items]);
    ?>
<?= FormButtons::widget(['submitButtonLabel' => UsniAdaptor::t('application', 'Continue'), 'showCancelButton' => false]);?>
<?php TabbedActiveForm::end();