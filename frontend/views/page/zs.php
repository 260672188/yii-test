<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title ='招商加盟';
//$this->title = $model->title;
//$this->registerMetaTag(['name' => 'keywords', 'content' =>$model->keywords ]);
//$this->registerMetaTag(['name' => 'description', 'content' =>$model->description ]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
	<!--nav end  -->
			<!--banner star-->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- 轮播（Carousel）指标 -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					
				</ol>
				<!-- 轮播（Carousel）项目 -->
				<div class="carousel-inner">
					<div class="item active" >
						<img src="/images/banner3.jpg" alt="First slide" >
					</div>
					<div class="item">
						<img src="/images/banner4.jpg" alt="First slide">
					</div>
					<div class="item">
						<img src="/images/banner5.jpg" alt="First slide">
					</div>
				</div>
				<!-- 轮播（Carousel）导航 -->
			</div>
			<!--banner end-->			
			<div class="zs">
					<img src="/images/m2.jpg" class="img-responsive">
					<img src="/images/m3.jpg" class="img-responsive">
			</div>
			<div class="fc">
				<div class="container">
					<h1>全民创业时代 政策重点扶持项目</h1>
						<div class="row">							
							<div class="col-md-3 col-sm-6 col-xs-6"><img src="/images/fc1.jpg" class="img-responsive"></div>
							<div class="col-md-3 col-sm-6 col-xs-6"><img src="/images/fc2.jpg" class="img-responsive"></div>
							<div class="col-md-3 col-sm-6 col-xs-6"><img src="/images/fc3.jpg" class="img-responsive"></div>
							<div class="col-md-3 col-sm-6 col-xs-6"><img src="/images/fc4.jpg" class="img-responsive"></div>
							<div class="col-md-3 col-sm-6 col-xs-6"><img src="/images/fc5.jpg" class="img-responsive"></div>
							<div class="col-md-3 col-sm-6 col-xs-6"><img src="/images/fc6.jpg" class="img-responsive"></div>
							<div class="col-md-3 col-sm-6 col-xs-6"><img src="/images/fc7.jpg" class="img-responsive"></div>
							<div class="col-md-3 col-sm-6 col-xs-6"><img src="/images/fc8.jpg" class="img-responsive"></div>
							<div class="col-lg-12 fc1">
								<p class="text-center">自2015年6月，国务院常务会议正式确定大力推进大众创业万众创新的政策措施以来，<br>拼一下商城作为全民创业的领导平台，受到了政府的高度关注和大力支持。</p>
							
							</div>
						</div>
				</div>
			</div>
			<div class="zs">
					<img src="/images/m8.jpg" class="img-responsive">
					<img src="/images/m7.jpg" class="img-responsive">
					<img src="/images/m9.jpg" class="img-responsive">
					<img src="/images/m10.jpg" class="img-responsive">
					<img src="/images/m11.jpg" class="img-responsive">
			</div>			
			<!-- 媒体合作 star-->
 <div class="madia">
  	<div class="container">
  		<div class="news-text bounceIn animated"  style="margin: 30px 0;">
  					<h1 >媒体合作</h1><!--<span class="pull-right"><a href="#" style="font-size: 0.6em; color: #333333;">查看更多></a></span>-->
  		</div>
  		<div class="row">
  			<div class="col-md-3 col-xs-6 fadeInRight animated">
  					<img src="/images/bd.jpg" class="img-responsive"> 					
  			</div>
  			<div class="col-md-3 col-xs-6 fadeInRight animated">
  					<img src="/images/sl0.jpg" class="img-responsive"> 					
  			</div>
  			<div class="col-md-3 col-xs-6  fadeInRight animated">
  					<img src="/images/tx.jpg" class="img-responsive"> 					
  			</div>
  			<div class="col-md-3  col-xs-6 fadeInRight animated">
  					<img src="/images/sh.jpg" class="img-responsive"> 					
  			</div>
  			<div class="col-md-3 col-xs-6 fadeInRight animated">
  					<img src="/images/zh.jpg" class="img-responsive"> 					
  			</div>
  			
  			<div class="col-md-3 col-xs-6 fadeInRight animated">
  					<img src="/images/al.jpg" class="img-responsive"> 					
  			</div>
  			<div class="col-md-3  col-xs-6 fadeInRight animated">
  					<img src="/images/sd.jpg" class="img-responsive"> 					
  			</div>
  		
  			<div class="col-md-3 col-xs-6 fadeInRight animated">
  					<img src="/images/zs.jpg" class="img-responsive"> 					
  			</div>
  			
  		</div> 		
  	</div>	
</div> 
<!--媒体合作 end-->
	<div class="mail"   id="book">
		<!-- container -->
		<div class="container">		
				<h2 class="text-center bounceIn animated" >拼一下商务留言板</h2>
				<p class="text-center bounceIn animated" style="margin: 30px 0; font-size: 14px; color: #666;">如果您想进入拼购行业，或者盘活资产/利用自己闲暇时间做有意义的事，您可以申请成为拼一下城市合伙人。</p>
				<div class="col-md-12 contact-form  bounceIn animated" >
				<?= $this->render('@app/views/book/_formly', [
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
				<div class="clearfix"> </div>
			</div>
		</div>		


 
			<script src="/js/public.js"></script>
			<script src="/js/createTag.js"></script>





 