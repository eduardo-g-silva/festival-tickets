<?php
/**
 * @copyright Copyright (C) 2016 Usha Singhai Neo Informatique Pvt. Ltd
 * @license https://www.gnu.org/licenses/gpl-3.0.html
 */
use usni\library\widgets\Thumbnail;

/* @var $listViewDTO \productCategories\dto\ProductCategoryListViewDTO */
/* @var $this \frontend\web\View */

$productCat         = $listViewDTO->getProductCategory();
$title              = $productCat['name'];
$this->title        = $this->params['breadcrumbs'][] = $title;

$this->params['productCategory'] = $productCat;
?>
<h2><?php echo $productCat['name']?></h2>
<?php
echo $this->render('//common/_searchresults', ['listViewDTO' => $listViewDTO, 'title' => $title]);
    