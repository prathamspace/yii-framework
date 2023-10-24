<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\modules\admin\models\Students;
/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $data=Students::find()->asArray()->all();
        echo "<pre>";
        print_r($data);
        return $this->render('index');
    }
}
