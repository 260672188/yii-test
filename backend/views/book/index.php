<?php

use yii\helpers\Html;
use yii\grid\GridView;
use  yii\widgets\Pjax;
use  common\models\Lookup;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Books');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= Html::a('批量删除', "javascript:void(0);", ['class' => 'btn btn-success gridview']) ?>
    <?= Html::a('批量隐藏', "javascript:void(0);", ['class' => 'btn btn-success gridviewstatus']) ?>
        <?= Html::a(Yii::t('app', '添加留言'), ['create'], ['class' => 'btn btn-success']) ?>

        <?= Html::a(Yii::t('app', '导出留言'), ['do'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        "options" => ["class" => "grid-view","style"=>"overflow:auto", "id" => "grid"],
        'columns' => [
                [   'class' => 'yii\grid\CheckboxColumn',
                    'name' => 'id',
                ],
//            [
//                'class'=>\yii\grid\CheckboxColumn::className(),
//                'checkboxOptions' => function ($model, $key, $index, $column) {
//                    return ['value'=>$model->id,'class'=>'checkbox'];
//                }
//            ],
                // ......
//            ['class' => 'yii\grid\SerialColumn'],
            'id',
//            'username',
//            'keywords',
 //           'description',
            'name',
             'tel',
             'mail',
             'city',
             'money',
//             'business',Lookup::items('lever')


            'status' => [
                'label' => '状态',
                 'attribute'=>'status',  //排序

                'filter'=>Html::activeTextInput($searchModel, 'status' ,['class'=>'form-control']),
                'value' => function ($model, $key, $index, $status) {
                    return  Lookup::item('status', $model->status) ;
                },
            ],
         //    'status', use  common\models\Lookup;
              
            'created_at:datetime',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],

        ],
    ]);

    $this->registerJs('
$(".gridview").on("click", function () {
    var keys = $("#grid").yiiGridView("getSelectedRows");
    console.log(keys);
      $.post("delall?id="+keys);
});
 
$(".gridviewstatus").on("click", function () {
    var keys = $("#grid").yiiGridView("getSelectedRows");
    console.log(keys);
      $.post("statusup?id="+keys);      
});
');

    ?>
 <!--    $.post("delall?id="+keys);   -->
</div>
