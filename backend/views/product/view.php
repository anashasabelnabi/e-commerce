<?php

use backend\models\Category;
use trntv\yii\datetime\DateTimeWidget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description',
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
                    'model' => $model,
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
            'image_base_url:url',
        ],
    ]) ?>

</div>
