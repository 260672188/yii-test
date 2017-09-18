<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
 
use  common\widgets\Alert;

/* @var $this yii\web\View */
/* @var $model common\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>



        <?php    // echo  $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?php // echo  $form->field($model, 'name')->textInput(['maxlength' => true]);

 //  var_dump($form->field($model,'name' ));

    ?>


  <?= $form->field($model, 'name', [
        'template' => '  {input} <div class="help-block">{error}</div>',
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('name'),
        ],
    ])->textInput(['maxlength' => true])  ?>




    <?= $form->field($model, 'tel' , [
        'template' => '  {input} <div class="help-block">{error}</div>',
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('tel'),
        ],
		])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mail' ,[
        'template' => '  {input}',
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('mail'),
        ],])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city',[
        'template' => '  {input}',
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('city'),
        ],])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'money',[
        'template' => '  {input}',
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('money'),
        ],])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business',[
        'template' => '  {input}',
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('business'),
        ],])->textInput(['maxlength' => true]) ?>





    <div class="form-group  " >
        <input type="submit" value="提交申请">

      


    </div>

    <?php ActiveForm::end(); ?>

</div>
