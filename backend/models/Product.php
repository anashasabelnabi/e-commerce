<?php

namespace backend\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%product}}".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $category
 * @property string $created_at
 * @property string $image_path
 * @property string $image_base_url
 *
 * @property array  $attachments
 * @property Category $category0
 * @property ProductAttachment[] $productAttachments
 */
class Product extends \yii\db\ActiveRecord
{
    public $attachments;
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%product}}';
    }
    public function behaviors()
    {
        return [

            [
                'class'=>TimestampBehavior::class,
                'updatedAtAttribute' => false,

            ],
            [
                'class' => UploadBehavior::class,
                'attribute' => 'attachments',
                'multiple' => true,
                'uploadRelation' => 'productAttachments',
                'pathAttribute' => 'path',
                'baseUrlAttribute' => 'base_url',
                'orderAttribute' => 'order',
                'typeAttribute' => 'type',
                'sizeAttribute' => 'size',
                'nameAttribute' => 'name',
            ],
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
            [['title', 'description', 'category' ], 'required'],
            [['category'], 'integer'],
            [['created_at'], 'default', 'value' => function () {
                return date(DATE_ISO8601);
            }],
            [['created_at'], 'filter', 'filter' => 'strtotime', 'skipOnEmpty' => true],
            [['title', 'description'], 'string', 'max' => 255],
            [['image_path', 'image_base_url'], 'string', 'max' => 1024],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category' => 'id']],
            [['image','attachments'],'safe'],
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
            'category' => Yii::t('backend' , 'category'),
            'created_at' => Yii::t('backend' , 'created_at'),
            'image' => Yii::t('backend', 'Image'),

        ];
    }

    /**
     * Gets query for [[Category0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory0()
    {
        return $this->hasOne(Category::className(), ['id' => 'category']);
    }

    /**
     * Gets query for [[ProductAttachments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductAttachments()
    {
        return $this->hasMany(ProductAttachment::className(), ['product_id' => 'id']);
    }
}
