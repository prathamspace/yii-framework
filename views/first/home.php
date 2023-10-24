<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use app\assets\TestAsset;
use yii\bootstrap5\Breadcrumbs;
use app\widgets\Form;
TestAsset::register($this);

$this->title = 'Home-Page';
$this->params['breadcrumbs'][] = $this->title;
// echo print_r($list);


// TYPE-one without hyperlinks

// $listArray=[
//     'home',
//     'about',
//     'first'
// ]

// TYPE-second without hyperlinks


$listArray=[
    [
        'label'=>'Home',
        'url'=>'home'
    ],
    [
        'label'=>'About',
        'url'=>'about',
        'template'=>'<li class="boom"><b>{link}</b></li>/'
    ],
    [
        'label'=>'testing about with passing id',
        'url'=>['about','id'=>10]
    ]
]



?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the test <strong> home</strong> view
    </p>


    <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(
                [   'itemTemplate'=>"<li><b>{link}</b></li>/\n",
                    'links' => $listArray
                ]
                ) ?>
        <?php endif ?>


    <!-- Showing Custom Widget -->

    <?= 
        Form::widget(['pageType'=>'Home Page','records'=>[1,2,3,4]]);
    ?> 


    <!-- <code><?= __FILE__ ?></code> -->
</div>

<?php

$this->registerJs('alert("First Controller boom!");');

?>