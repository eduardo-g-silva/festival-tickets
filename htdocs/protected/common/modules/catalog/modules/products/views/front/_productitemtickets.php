<?php
/**
 * @copyright Copyright (C) 2016 Usha Singhai Neo Informatique Pvt. Ltd
 * @license https://www.gnu.org/licenses/gpl-3.0.html
 */
use usni\UsniAdaptor;
use usni\library\utils\FileUploadUtil;
use products\widgets\PriceWidget;
use usni\library\utils\Html;

$addCartLabel       = UsniAdaptor::t('cart', 'Add to Cart');
$addWishListLabel   = UsniAdaptor::t('wishlist', 'Add to Wish List');
$addCompareLabel    = UsniAdaptor::t('products', 'Add to Compare');

// EGStodo main template lists products


?>

<?php echo Html::beginTag('div', $containerOptions);?>
    <div class="product-thumb transition">
        <div class="image">
                <?php echo FileUploadUtil::getThumbnailImage($model, 'image', ['thumbWidth' => $productWidth, 'thumbHeight' => $productHeight]); ?>
        </div>
        <div class="caption">  
            <h4>
                    <?php echo $model['name']; ?>
            </h4>
            <p>
                <?php echo $model['description']; ?>
            </p>
        </div>
        <div class="price">
            <?php echo PriceWidget::widget(['priceExcludingTax' => $model['finalPriceExcludingTax'],
                    'tax'  => $model['tax'],
                    'defaultPrice' => $model['price']]); ?>
        </div>


        <div class="add-to-cart">
        <?php
                if($model['quantity'] > 0)
                {
                ?>

                    <input type="hidden" name="quantity" value="1" />
                        <button type="button" class="add-cart" data-productid = "<?php echo $model['id'];?>">
                            <i class="fa fa-shopping-cart"></i>
                            <span><?php echo $addCartLabel;?></span>
                        </button>
                <?php
                }
                else
                {
                ?>
                    <h3>Sold out</h3>
                <?php
                }
                ?>
        </div>
    </div>
<hr>
<?php echo Html::endTag('div');