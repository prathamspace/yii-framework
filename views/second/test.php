<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Html;
use app\assets\TestAsset;


AppAsset::register($this);

$this->title = 'Second Test Page';
$this->params['breadcrumbs'][] = $this->title;
// echo print_r($list);
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the test view
    </p>

    <!-- <code><?= __FILE__ ?></code> -->
</div>

<?php

$this->registerJs('alert("Second Controller boom!");');

?>