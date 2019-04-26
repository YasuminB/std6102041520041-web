<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $id
 * @property string $staff_no
 * @property string $f_name
 * @property string $l_name
 * @property string $position
 * @property string $sex
 * @property string $dob
 * @property string $salary
 * @property int $branch_id
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_no', 'f_name', 'l_name'], 'required'],
            [['dob'], 'safe'],
            [['salary'], 'number'],
            [['branch_id'], 'integer'],
            [['staff_no', 'sex'], 'string', 'max' => 10],
            [['f_name', 'l_name', 'position'], 'string', 'max' => 100],
            [['staff_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'staff_no' => 'Staff No',
            'f_name' => 'F Name',
            'l_name' => 'L Name',
            'position' => 'Position',
            'sex' => 'Sex',
            'dob' => 'Dob',
            'salary' => 'Salary',
            'branch_id' => 'Branch ID',
        ];
    }
}
