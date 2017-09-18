<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\System */

$this->title = $model->webname;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Systems'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="system-view">



    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
     //       'id',
            'webname',
            'weburl:url',
            'sitelogo',
            'keywords',
            'description',
            'icp',
            'addr',
            'tel',
            'count',
            'introduction:ntext',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
