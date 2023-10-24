<?php

namespace app\controllers;
use yii;
use app\components\MyBehaviour;
class DemoController extends \yii\web\Controller
{


    public function behaviors()
    {
        return [
            /*
            * There are two types of behavious
             1) Named
             2) Anonymous
            */


            // MyBehaviour::class  // --This one is named

            // 'behaviour'=>MyBehaviour::class, // This one is anonymous
            // [
            //     'class'=>MyBehaviour::class,
            //     'prop1'=>'test'
            // ]


             'behaviour2'=>[
                'class'=>MyBehaviour::class,
                 'prop1'=>'test',
                 'prop2'=>'testing2'
             ]

        ];
    }


    public function actionIndex()
    {
        return $this->render('index');
    }
    
    
    public function actionDemo_home()
    {
            $model = new \app\models\Students();

            if ($model->load(Yii::$app->request->post())) {
                if ($model->validate()) {
                    // form inputs are valid, do something here
                    return;
                }
            }

            return $this->render('demo_home', [
                'model' => $model,
            ]);
    }
    
    // To Set Session

    public function actionSetSession(){

        Yii::$app->session->set('username','Zoro');
        Yii::$app->session->setFlash('message','sucesss');

        echo 'set Session';
    }


    // To Get Session

    public function actionGetSession(){

        echo Yii::$app->session->get('username');
        echo 'get Session';
    }
    
    // To Delete Session
    public function actionUnsetSession(){
        
        // There are two methods to do so
        // 1)
        // unset(Yii::$app->session['username']);
    
        // 2)
        Yii::$app->session->remove('username');


        // To Destroy a complete session

        Yii::$app->session->destroy();


        echo 'Unset Session';
    }
}
