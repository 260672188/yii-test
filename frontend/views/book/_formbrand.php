<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>


<?= $form->field($model, 'name', [
        'template' => '  {input}<div class="help-block">{error}</div>',
        'inputOptions' => [
            'placeholder' => '请输入'.$model->getAttributeLabel('name'),
        ],
    ])?>

    <?= $form->field($model, 'tel' , [
        'template' => '  {input}<div class="help-block">{error}</div>',
        'inputOptions' => [
            'placeholder' => '请输入'.$model->getAttributeLabel('tel'),
        ],
		])->textInput(['maxlength' => true]) ?>

   

    <?= $form->field($model, 'city',[
        'template' => '  {input} <div class="help-block">{error}</div>',
        'inputOptions' => [
            'placeholder' =>'请输入'. $model->getAttributeLabel('city'),
        ],])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business',[
        'template' => '  {input} <div class="help-block">{error}</div>',
        'inputOptions' => [
            'placeholder' =>  '请输入'.$model->getAttributeLabel('business'),
        ],])->textarea() ?>



    <div class="form-group  "  style="background-color: #fff" >
        <input type="submit" value="提交申请">     


    </div>

    <?php ActiveForm::end(); ?>

</div>
