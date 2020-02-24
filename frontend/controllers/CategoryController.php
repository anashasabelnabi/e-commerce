<?php

namespace frontend\controllers;
use backend\models\Category;
use backend\models\CategoryAttachment ;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use  backend\models\Product;


class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        /* object mn el category we gbt elcategories*/
        $model= new Category();
        $result =  $model->find()->all();

        /*object mn elproducts we gbt el products*/

        $product = new Product();
        $products = $product->find()->all();

        return $this->render('index',['result' => $result ,'products'=> $products]);
    }

}
