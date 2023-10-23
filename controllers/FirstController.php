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




        // echo '<pre>';
        // print_r($data);
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
}