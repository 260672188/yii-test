<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Articale */

$this->title = Yii::t('app', 'Create Articale');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Articales'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articale-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
