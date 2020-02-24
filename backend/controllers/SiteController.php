<?php

namespace backend\controllers;

use backend\models\Category;
use backend\models\Product;
use Yii;

/**
 * Site controller
 */
class SiteController extends \yii\web\Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function beforeAction($action)
    {
        $this->layout = Yii::$app->user->isGuest || !Yii::$app->user->can('loginToBackend') ? 'base' : 'common';

        return parent::beforeAction($action);
    }
    public function actionIndex(){

        $category = new  Category();
        $categories =$category->find()->all();

        $product = new Product();
        $products = $product->find()->all();
        return $this->render('index',['categories'=>$categories,'products'=>$products]);

    }
}
