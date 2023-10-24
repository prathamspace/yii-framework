<?php

namespace app\components;

use yii\base\Component;
use Yii;
Class CommonComponent extends Component{
    public function getToken(){
        return 'dsfd3232';
    }
    public function getData(){
        $data=Yii::$app->db->createCommand('select * from students')->queryAll();
        return $data;
    }
}
