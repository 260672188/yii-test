<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ChannelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Channels');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="channel-index">

     
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Channel'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pid',
            'title',
            'auth_key',
            'cid',
            // 'description',
            // 'keyword',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'type',
            // 'order',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
