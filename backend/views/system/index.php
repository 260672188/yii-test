<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SystemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'systems');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="system-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<!--
    <p>
        <?= Html::a(Yii::t('app', 'Create System'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>   -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'webname',
//            'weburl:url',
//            'sitelogo',
//            'keywords',
            // 'description',
            // 'icp',
            // 'addr',
            // 'tel',
            // 'count',
            // 'introduction:ntext',
            // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
