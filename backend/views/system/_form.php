<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\System */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="system-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'webname')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'weburl')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'sitelogo')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload', []) ?>
    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'introduction')->textarea(['rows' => 6])->widget('kucha\ueditor\UEditor', []) ?>


    <?= $form->field($model, 'status')->radioList( ['1'=>'显示','2'=>'隐藏']   )?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
