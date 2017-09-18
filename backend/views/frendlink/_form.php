<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Lookup;

/* @var $this yii\web\View */
/* @var $model common\models\Frendlink */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="frendlink-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'sitetitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'siteurl')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'pic')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload',[]) ?>

    <?= $form->field($model, 'status')->radioList(  Lookup::items('status' ) )?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
