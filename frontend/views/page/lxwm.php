<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title ='联系我们';
 
?>
 
<div class="mail">
		<!-- container -->
		<div class="container">		
			<div class="col-md-12 contact-form  bounceIn animated" >
		 <div class="col-md-6 contact-form  " >
 
				<h2 class="   bounceIn animated" style="margin: 20px 0; font-size: 30px; color: #333;">拼一下商务留言板</h2>
				<p class="  bounceIn animated" style="margin: 30px 0; font-size: 14px; color: #666;">如果您想进入拼购行业，或者盘活资产/利用自己闲暇时间做有意义的事，您可以申请成为拼一下城市合伙人。</p>
 
			    <?= $this->render('@app/views/book/_formlxwm', [
        'model' => $model,
    ]) ?>
    <?php
    if( Yii::$app->getSession()->hasFlash('success') ) {
        echo Alert::widget([
            'options' => [
                'class' => 'alert-success', //这里是提示框的class
            ],
            'body' => Yii::$app->getSession()->getFlash('success'), //消息体
        ]);
    }
    ?>
        </div>
			
								<div class="col-md-6 contact-form  " >
		 <?= $lxwm->content ?>
		 </div>
		        </div>
        <div class="clearfix"> </div>

    </div>
</div>
<!-- //container -->

