<?php

namespace app\controllers;


use yii\web\Controller;

class SecondController extends Controller
{
    public function actionIndex(){
        echo "yes";
        die;
    }
    public function actionTest(){

        $response=[];
        $response['name']='Code Import';
        $response['list']=['HTML','CSS','JS'];

        // $this->layout=false;
        return $this->render('test');
        // return $this->renderPartial('test',$response);
    }
}