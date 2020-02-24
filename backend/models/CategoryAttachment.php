<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%category_attachment}}".
 *
 * @property int $id
 * @property int $category_id
 * @property string $path
 * @property string $base_url
 * @property string $type
 * @property int|null $size
 * @property string $name
 * @property int $created_at
 *
 * @property Category $category
 */
class CategoryAttachment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%category_attachment}}';
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
            [['category_id', 'path'], 'required'],
            [['category_id', 'size', 'order'], 'integer'],
            [['base_url', 'path', 'type', 'name'], 'string', 'max' => 255],

            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'category_id' => Yii::t('backend', 'Category ID'),
            'base_url' => Yii::t('backend', 'Base Url'),
            'path' => Yii::t('backend', 'Path'),
            'size' => Yii::t('backend', 'Size'),
            'order' => Yii::t('backend', 'Order'),
            'type' => Yii::t('backend', 'Type'),
            'name' => Yii::t('backend', 'Name')
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    public function getUrl()
    {
        return $this->base_url . '/' . $this->path;
    }
}
