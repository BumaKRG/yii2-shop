<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
?>
<div class="site-index">
<h1>Категории товаров</h1>

<?php

foreach ($categories as $category) {
    echo Html::a($category->name,['frontend/category', 'id' => $category->id])."<br>\n";
}


?>
</div>


