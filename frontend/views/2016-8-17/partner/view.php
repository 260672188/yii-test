<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model common\models\Info */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'info'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
  


 <div class="container" style="margin-bottom: 50px;"> 	
  		<div class="row"> 			
  			<h3 class="fadeInRight animated text-center" ><?=  $model->title  ?><span class="pull-right"> </span></h3>
			<p class="text-center" style="font-size: 14px; margin: 20px 0;"><?= date('Y年-m月-d日',$model->created_at) ; ?></p>
			<div class="wow fadeInLeft animated products-grid " >
				<div class="col-md-12   ">

 
	  <?= $model->content ?>
 
					<a href="../" class="pull-right" style="font-size: 16px; color: #333333;">返回上页></a>
					<div class="clearfix"> </div>
				</div>				
				<div class="clearfix"> </div>
			</div>
  		</div>
  </div>
  <!--  新闻资讯 end-->
 


 
