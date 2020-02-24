<?php

namespace frontend\controllers;
use backend\models\ProductAttachment;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use  backend\models\Product;
use backend\models\Category;

class ProductController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        /*product details*/
        $list = new Product();
        $model = $list->findOne($id);


        /*get product attachmnets*/
        $attachments = new ProductAttachment();
        $gallery = $attachments->find()->where(['product_id'=>$id])->all();
        return $this->render('index',['model'=> $model , 'gallery'=>$gallery]);

    }
    public function actionProductCategory($id){
        /*fetch product data*/
        $product = new Product();
        $products = $product->find()->where(['category'=>$id])->all();

        /*

        /*fetch category data*/
        $model= new Category();
        $result =  $model->find()->all();
        return $this->render('product_category',['products'=> $products , 'result'=> $result]);
    }

}
