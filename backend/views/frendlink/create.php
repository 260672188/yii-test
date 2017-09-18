<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Frendlink */

$this->title = Yii::t('app', 'Create Frendlink');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Frendlinks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="frendlink-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
