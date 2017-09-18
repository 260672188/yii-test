<?php
use yii\helpers\Html;
?>


 	<div class="col-md-4 new-show bounceIn animated">
        <?= Html::a(Html::decode(Html::img($model->pic, ['alt' => '$model->title' ,'class'=>'img-responsive'])), ['view', 'id' => $model->id])  ?>

        <p class="text-center  "  style="margin-bottom: 5px;"><?= Html::a(Html::encode($model->title), ['view', 'id' => $model->id],['class'=>'list-a'])  ?></p>
 
    </div>

