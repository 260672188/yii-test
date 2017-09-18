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
					<h3 class="fadeInRight animated text-center z-caption">驻马店的田先生<span class="pull-right"> </span></h3>
					<p class="text-center" style="font-size: 14px; margin: 20px 0;">发布时间:2016年-08月-02日 点击：</p>
					<div class=" fadeInLeft animated products-grid ">
						<div class="col-md-12  ">
							<img src="/images/cg8.jpg" class=" img-responsive center-block ">
							<p class="text03">近日，马佳佳的演讲《绝望的大学生》红遍网络，在社会阶层日渐板结的今天，年轻人该怎么办？这个问题又一次被推上舆论的风口浪尖。几年前，北大才子陆步轩卖猪肉的新闻传遍大江南北。今年，太原王先生摇身一变，成为拼一下商城太原合伙人，在一片质疑声中，又一次探索“完美学霸模式”的华丽转型。年轻人创业的越来越多，霸道总裁余佳文，情趣老板马佳佳，各行各业，就是缺少一种机会，现在拼一下商城给你这个机会。
在互联网时代，价值实现的方式渐趋多样，大众的舆论也更加包容。从“完美学霸”到平台合伙人，知识已经不仅仅是传统阶层流动的阶梯，知识背后的力量将为新兴行业赋予更多可性能，也为年轻人带来未来的希望。
</p>
							<a href="<?=Url::to(['partner/index'])  ?>" class="pull-right" style="font-size: 16px; color: #333333; margin-bottom: 10px;">返回上页></a>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
	</div>		
			<!--  新闻资讯 end-->