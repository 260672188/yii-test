<?php
use yii\helpers\Html;
?>
<p><em>•</em>
    <?= Html::a(Html::encode($model->title), ['view', 'id' => $model->id])  ?>
     </p> 

