<?php

namespace app\components;

use yii\base\Behavior;
use Yii;
Class MyBehaviour extends Behavior{

    public $prop1;
    public $prop2;



    // Getters

    public function getProps1()
    {
        return $this->prop1;
    }
    public function getProps2()
    {
        return $this->prop2;
    }



    public function events()
    {
        echo "yes" . $this->prop1.'<br/>';
        echo $this->prop2;
        return [];
    }
}
