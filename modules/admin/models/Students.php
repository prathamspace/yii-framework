<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\Query;
/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $phone_no
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'email', 'phone_no'], 'required'],
            [['id', 'phone_no'], 'integer'],
            [['name', 'email'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone_no' => 'Phone No',
        ];
    }

    public function getData(){
            return '1';
    }
}
