<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use BumaKRG\shop\models\Category;
use yii\helpers\ArrayHelper;



/* @var $this yii\web\View */
/* @var $model app\modules\BumaKRG\shop\models\Product */
/* @var $form yii\widgets\ActiveForm */

$categories = ArrayHelper::map(Category::find()->all(),'id','name');

?>



<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList($categories) ?>

    <?= $form->field($model, 'cost')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
