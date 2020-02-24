<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
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
