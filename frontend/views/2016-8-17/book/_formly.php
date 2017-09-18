<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

 

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <div class="form-group  " >
        <input type="submit" value="提交申请">     


    </div>

    <?php ActiveForm::end(); ?>

</div>
