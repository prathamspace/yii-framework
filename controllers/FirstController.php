<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\Students;

class FirstController extends Controller
{
    public function actionIndex(){

        // $data=Yii::$app->db->createCommand('select * from students')->queryAll();
        
        // $data=Students::find()->all();
        

        //////// Insert ////////
        
        // $data = new Students();  
        // $data->id=1;
        // $data->name='zoro';
        // $data->email='zoro@gmail.com';
        // $data->phone_no=1223232;





        //////// Update ////////

        // $data =Students::findone(1);
        // $data->email='pratham@gmail.com';

        
        // $data->save();
        





        //////// Delete ////////

        // $data=Students::findOne(4);
        
        // $data->delete();

       
       
       
       
       
        //////// Select ////////

        // -> To Select all
        
        // $data=Students::find()->all();

        // -> To Select one
        
        // $data=Students::findone(1);

        // -> To Select data basesd on condition

        // $data=Students::findAll(['id'=>1]);


        // To print/get the values 

        // foreach ($data as $value) {
        //     echo $value->name.'<br>';
        // }
        
        //////// Conditions ////////
        

       // As array 

        // $data=Students::find()->asArray()->all();
        // foreach ($data as $value) {
        //         echo $value['name'].'<br>';
        // }


       // Raw SQL and where condition

       // $data=Students::find()->where(['id'=>[1,2,3],'name'=>'pratham'])->orderBy('name')->all(); // IN


    //    echo $data->createCommand()->getRawSql();
    //    die;


        //////// Join ////////

        $data=Students::find()
        ->select('students.*','subjecys.name')
        ->leftJoin('subjecys','subjecys.student_id=student.id')
        ->where(['students.id'=>[1,2,3],'students.name'=>'pratham'])->orderBy('name');
        echo $data->createCommand()->getRawSql();
        die;
        
        // ->all(); // IN
       

        foreach ($data as $value) {
            echo $value['name'].'<br>';
        }


        
        echo "yes";
        die;
    }
    public function actionAbout(){

        $response=[];
        $response['name']='Code Import';
        $response['list']=['HTML','CSS','JS'];

        // $this->layout=false;
        return $this->render('about');
        // return $this->renderPartial('test',$response);
    }
    public function actionHome(){
        return $this->render('home');
    }



    public function actionQueryBuilder(){
        
        $data = new Students();
        echo $data->getData().'<br>';
        echo 'Query Builder';
    }



    
    public function actionInfo(){
        $data=Yii::$app->request->get();
        echo "<pre>";
        print_r($data);
        echo 'info-page';
        die;
    }
    public function actionViewPro(){
        echo 'View Profile';
        die;
    }
    public function actionDemo(){
        $data2=Yii::$app->request->get();
        echo "<pre>";
        print_r($data2);
        echo 'info-page';
        die;
    }


    public function actionComponent(){
        // echo Yii::$app->common->getToken();
       $data= Yii::$app->common->getData();
        echo "<pre>";
        print_r($data);
        echo 'component';
    }

}