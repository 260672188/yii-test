<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Category;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
//            'keywords',
//            'description',
            'title',
            // 'pic',

            'pid' => [
                //  'label' => '所属分类',
                'attribute'=>'pid',  //排序
                'filter'=>Html::activeTextInput($searchModel, 'pid' ,['class'=>'form-control']),   //搜索框
                'value' => function ($model, $key, $index, $pid) {
                    return  Category::item( 'pro' ,$model->pid) ;
                }, 'format' => 'raw',

            ],
            // 'content:ntext',
            // 'status',
             'created_at:datetime',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
