<?php

namespace app\modules\BumaKRG\shop\widgets;

//use app\assets\LastItemAsset;
use yii\base\Widget;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


class Buy extends Widget
{

    public $model;

    public function init()
    {
        //LastItemAsset::register($this->getView());
        parent::init();
    }

    public function run()
    {


        //return Html::tag('form',$content,['action' => '', 'method' => post]);

        echo "<form id='buy' action='buy' method='get'><input type='text' name='count'><input type='hidden' name='name' value='{$this->model->name}'><input type='hidden' name='price' value='{$this->model->cost}'><input type='submit' value='Добавить в корзину'></form>";


        //return '<div>Купить</div>';
    }

}