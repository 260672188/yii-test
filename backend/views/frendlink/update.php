<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Frendlink */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Frendlink',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Frendlinks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="frendlink-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
