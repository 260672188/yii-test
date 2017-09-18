<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Lookup;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FrendlinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Frendlinks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="frendlink-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Frendlink'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'sitetitle',
            'siteurl:url',
            'pic',
            //'status',

            [
                'class' => 'backend\widgets\grid\SwitcherColumn',
                'attribute' => 'status'
            ],
            'status' => [
                'label' => '状态',
                'attribute'=>'status',  //排序

                'filter'=>Html::activeTextInput($searchModel, 'status' ,['class'=>'form-control']),
                'value' => function ($model, $key, $index, $status) {
                    return  Lookup::item('status', $model->status) ;
                },
            ],
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
