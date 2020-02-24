<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%product_attachment}}".
 *
 * @property int $id
 * @property int $product_id
 * @property string $path
 * @property string $base_url
 * @property string $type
 * @property int|null $size
 * @property string $name
 * @property int $created_at
 *
 * @property Product $product
 */
class ProductAttachment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%product_attachment}}';
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'updatedAtAttribute' => false
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'path'], 'required'],
            [['product_id', 'size', 'order'], 'integer'],
            [['base_url', 'path', 'type', 'name'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'product_id' => Yii::t('backend', 'Product ID'),
            'base_url' => Yii::t('backend', 'Base Url'),
            'path' => Yii::t('backend', 'Path'),
            'size' => Yii::t('backend', 'Size'),
            'order' => Yii::t('backend', 'Order'),
            'type' => Yii::t('backend', 'Type'),
            'name' => Yii::t('backend', 'Name')
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
    public function getUrl()
    {
        return $this->base_url . '/' . $this->path;
    }
}
