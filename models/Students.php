<?php

namespace app\models;

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
        
        // --------------Insert-------------//

        // $sql=Yii::$app->db->createCommand()->insert('students',[
        //     'id'=>5,
        //     'name'=>'zoro',
        //     'email'=>'zoro@gmail.com',
        //     'phone_no'=>1231223
        // ])->execute();
        

        // $lastid=Yii::$app->db->getLastInsertID();
        //  echo $lastid;




        // --------------Update-------------//

        // $sql=Yii::$app->db->createCommand()->update('students',[
        //     // 'id'=>5,
        //     'name'=>'luffy',
        //     'email'=>'luffy@gmail.com',
        //     'phone_no'=>1231223
        // ],array('id'=>3))->execute();
        

        // $lastid=Yii::$app->db->getLastInsertID();
        //  echo $lastid;



        

        // --------------Delete-------------//

        // $sql=Yii::$app->db->createCommand()->delete('students','id=: id',array(':id'=>3))->execute(); // With Binding
        
        // $sql=Yii::$app->db->createCommand()->delete('students',array('id'=>5))->execute(); // Without Binding
        


        // --------------select-------------//

        // $query = (new Query())->select('students.*')->from('students')->where(['name'=>'pratham'])->all();
        // echo "<pre>";
        // print_r($query);
        
        // Printing SQl Command
        // echo $query->createCommand()->rawSql()
        
        // --------------select-------------//

        $query = (new Query())
        ->select('students.*')
        ->from('students')
        ->leftJoin('subjecys','subjecys.students_id=students.id')
        ->where(['name'=>'pratham'])
        ->andWhere(['email'=>'pratham@gmail.com']);
        // echo "<pre>";
        // print_r($query);
        
        // Printing SQl Command
        echo $query->createCommand()->getRawSql();
        die;




        return '1';
    }
}
