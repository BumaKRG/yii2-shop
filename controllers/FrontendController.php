<?php


namespace BumaKRG\shop\controllers;

use BumaKRG\shop\models\Category;
use BumaKRG\shop\models\Product;
use yii;



class FrontendController extends \yii\web\Controller
{
    public function actionCategory($id)
    {
        //$products = Product::find()->where(['category_id' => $id])->all();

        $category = Category::findOne(['id' => $id]);

        $products = $category->products;

        $cat_name = Category::findOne([]);
        return $this->render('category' , ['products' => $products, 'catName' => $category->name]);
    }

    public function actionIndex()
    {
        $categories = Category::find()->all();
        return $this->render('index', ['categories' => $categories]);
    }
    
    public function actionBuy($name, $price, $count){
    
      
        Yii::$app->cart->put($name, $price, $count);  
        var_dump(Yii::$app->cart->getCost());
    }

}
