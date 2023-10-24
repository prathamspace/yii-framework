<?php
/** @var yii\web\View $this */
?>
<h1>demo/index</h1>

<?php 
        $session =Yii::$app->session;
        echo  $session->getFlash('message');       

        if($session->has('usename')){
            echo  Yii::$app->session->get('username').' is usename';       
        }
?>


<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
