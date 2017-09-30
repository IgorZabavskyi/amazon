<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%product}}".
 *
 * @property integer $id
 * @property string $asin
 * @property string $title
 * @property string $price
 * @property string $picture
 * @property string $ean
 * @property string $brand
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['asin', 'title', 'picture', 'ean', 'brand'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'asin' => 'ASIN',
            'title' => 'Title',
            'price' => 'Price',
            'picture' => 'Picture',
            'ean' => 'EAN',
            'brand' => 'Brand',
        ];
    }
}
