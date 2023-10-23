<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use app\assets\TestAsset;


TestAsset::register($this);

$this->title = 'About Page';
$this->params['breadcrumbs'][] = $this->title;
// echo print_r($list);
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the test <strong>About</strong> view
    </p>

    <!-- <code><?= __FILE__ ?></code> -->
</div>

<?php

$this->registerJs('alert("First Controller boom!");');

?>