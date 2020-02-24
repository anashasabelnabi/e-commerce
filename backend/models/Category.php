<?php

namespace backend\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image_path
 * @property string $image_base_url
 * @property array  $attachments
 * @property CategoryAttachment[] $categoryAttachments
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    //public $attachments;
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    public function behaviors()
    {
        return [

            /*[
                'class' => UploadBehavior::class,
                'attribute' => 'attachments',
                'multiple' => true,
                'uploadRelation' => 'categoryAttachments',
                'pathAttribute' => 'path',
                'baseUrlAttribute' => 'base_url',
                'orderAttribute' => 'order',
                'typeAttribute' => 'type',
                'sizeAttribute' => 'size',
                'nameAttribute' => 'name',
            ]*/
            [
                'class' => UploadBehavior::class,
                'attribute' => 'image',
                'pathAttribute' => 'image_path',
                'baseUrlAttribute' => 'image_base_url',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['title', 'description'], 'string', 'max' => 255],
            [['image_path', 'image_base_url'], 'string', 'max' => 1024],
            [[/*'attachments'*/'image'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'title' => Yii::t('backend', 'Title'),
            'description' => Yii::t('backend', 'description'),
            'image' => Yii::t('backend', 'Image'),

        ];
    }

    /**
     * Gets query for [[CategoryAttachments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryAttachments()
    {
        return $this->hasMany(CategoryAttachment::className(), ['category_id' => 'id']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category' => 'id']);
    }

}
