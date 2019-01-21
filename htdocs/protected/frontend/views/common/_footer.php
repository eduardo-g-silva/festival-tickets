<?php
use usni\UsniAdaptor;
use usni\library\utils\Html;
use common\modules\stores\models\Store;
use newsletter\models\NewsletterCustomers;

/* @var $this \frontend\web\View */
?>
<!-- begin:footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5><?php echo UsniAdaptor::t('cms', 'Information'); ?></h5>
                <ul class="list-unstyled">
                    <li>
                        <?php echo Html::a(UsniAdaptor::t('cms', 'About Us'), UsniAdaptor::createUrl('cms/site/page', ['alias' => UsniAdaptor::t('cms', 'about-us')])); ?>
                    </li>
                    <li>
                        <?php echo Html::a(UsniAdaptor::t('cms', 'Privacy Policy'), UsniAdaptor::createUrl('cms/site/page', ['alias' => UsniAdaptor::t('cms', 'privacy-policy')])); ?>
                    </li>
                    <li>
                        <?php echo Html::a(UsniAdaptor::t('cms', 'Terms & Conditions'), UsniAdaptor::createUrl('cms/site/page', ['alias' => UsniAdaptor::t('cms', 'terms')])); ?>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <?php
            echo '<p>Copyright &copy; ' . date("Y") . " - " . ' UK Tango Festival - All Rights Reserved.</p>';
        ?>
    </div>
</footer>
<!-- end:footer -->