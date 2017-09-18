<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\InfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'partner');
$this->params['breadcrumbs'][] = $this->title;
?>
   <!--nav end  -->
  <!--banner star-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
   <!-- 轮播（Carousel）指标 -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
   </ol>   
   <!-- 轮播（Carousel）项目 -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="/images/banner3.jpg" alt="First slide" >
      </div>
      <div class="item">
        <img src="/images/banner4.jpg" alt="First slide">
      </div>
      <div class="item">
         <img src="/images/banner5.jpg" alt="First slide">
      </div>
       <div class="item">
         <img src="/images/banner6.jpg" alt="First slide">
      </div>
   </div>
   <!-- 轮播（Carousel）导航 -->
</div> 
  		 <!--  新闻资讯star-->
	<div class="inner">		
			<div class="container" style="background: #eef6f6;">
				<div class="row">
					<h3 class="fadeInRight animated text-center z-caption">驻马店合伙人田先生<span class="pull-right"> </span></h3>
					<p class="text-center" style="font-size: 14px; margin: 20px 0;">发布时间:2016年-08月-02日 点击：</p>
					<div class=" fadeInLeft animated products-grid ">
						<div class="col-md-12  ">
							<img src="/images/tian.png" class=" img-responsive center-block ">
							<p class="text03">驻马店的田先生一直经商创业，在了解拼一下商城的项目后，立马签约合作，而且自己有货物渠道，决定线上销售线下体验，非常具有商业头脑。除了开线下体验店以为，田先生还有很多思路，我们公司也很支持有想法的创业者，现在田先生已经有3家线下体验店了，祝福田先生的连锁店越开越多。</p>
							<a href="<?=Url::to(['partner/index'])  ?>" class="pull-right" style="font-size: 16px; color: #333333; margin-bottom: 10px;">返回上页></a>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
	</div>		
			<!--  新闻资讯 end-->
