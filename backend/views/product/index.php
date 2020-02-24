<?php

use backend\models\Category;
use trntv\yii\datetime\DateTimeWidget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            [
                'attribute' => 'category',
                'filter'    =>ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'title'),
                'value'=>function($model){
                    return $model->category0->title;
                }
            ],
            [
                'attribute' => 'created_at',
                'options' => ['style' => 'width: 10%'],
                'format' => 'datetime',
                'filter' => DateTimeWidget::widget([
                    'model' => $searchModel,
                    'attribute' => 'created_at',
                    'phpDatetimeFormat' => 'dd.MM.yyyy',
                    'momentDatetimeFormat' => 'DD.MM.YYYY',
                    'clientEvents' => [
                        'dp.change' => new JsExpression('(e) => $(e.target).find("input").trigger("change.yiiGridView")'),
                    ],
                ]),
            ],
            [
                'attribute' => 'image_path',
                'format' => 'raw',
                'label' => 'Image',
                'value' => function ($model) {
                    return Html::a(Html::img($model->image_base_url.$model->image_path,
                        ['width' => '120','height'=>'120']),$model->image_base_url.$model->image_path);

                },

            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
