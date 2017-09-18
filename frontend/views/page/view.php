<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title = $model->title;
$this->registerMetaTag(['name' => 'keywords', 'content' =>$model->keywords ]);
$this->registerMetaTag(['name' => 'description', 'content' =>$model->description ]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="team">
    <!-- container -->
    <div class="container">
        <div class="team-info" >
            <h3 class="wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;"> <?= $model->title ?></h3>
            <div class="team-grids col-sm-12  " style="text-align:center;" >

         
                <?=  $model->content  ?>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //container -->
</div>








 