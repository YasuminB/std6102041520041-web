<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $client_no
 * @property string $f_name
 * @property string $l_name
 * @property string $tel_no
 * @property string $pref_type
 * @property string $max_rent
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_no', 'f_name', 'l_name'], 'required'],
            [['max_rent'], 'number'],
            [['client_no', 'tel_no'], 'string', 'max' => 10],
            [['f_name', 'l_name'], 'string', 'max' => 100],
            [['pref_type'], 'string', 'max' => 50],
            [['client_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_no' => 'Client No',
            'f_name' => 'F Name',
            'l_name' => 'L Name',
            'tel_no' => 'Tel No',
            'pref_type' => 'Pref Type',
            'max_rent' => 'Max Rent',
        ];
    }
}
