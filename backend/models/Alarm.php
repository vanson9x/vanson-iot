<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "alarm".
 *
 * @property integer $id
 * @property string $begin
 * @property integer $count
 * @property integer $id_product
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Product $idProduct
 */
class Alarm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alarm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['begin', 'count', 'id_product'], 'required'],
            ['begin', 'safe'],
            [['count', 'id_product'], 'integer'],
            [['id_product'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['id_product' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'begin' => 'Bắt đầu',
            'count' => 'Thời gian',
            'id_product' => 'Mã thiết bị',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'id_product']);
    }
}
