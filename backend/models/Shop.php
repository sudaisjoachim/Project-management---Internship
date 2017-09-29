<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shop".
 *
 * @property int $shop_owner_id
 * @property int $shop_number
 * @property string $shop_owner_names
 * @property string $shop_address
 * @property string $shop_email
 * @property string $shop_phone
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 */
class Shop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shop_number'], 'required'],
            [['shop_number'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['shop_owner_names'], 'string', 'max' => 50],
            [['shop_address'], 'string', 'max' => 500],
            [['shop_email'], 'string', 'max' => 60],
            [['shop_phone'], 'string', 'max' => 12],
            [['description'], 'string', 'max' => 10000],
            [['shop_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shop_owner_id' => 'Shop Owner ID',
            'shop_number' => 'Shop Number',
            'shop_owner_names' => 'Shop Owner Names',
            'shop_address' => 'Shop Address',
            'shop_email' => 'Shop Email',
            'shop_phone' => 'Shop Phone',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
