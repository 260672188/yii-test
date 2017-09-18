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
					<h3 class="fadeInRight animated text-center z-caption">衡阳合伙人王先生<span class="pull-right"> </span></h3>
					<p class="text-center" style="font-size: 14px; margin: 20px 0;">发布时间:2016年-08月-02日 点击：</p>
					<div class=" fadeInLeft animated products-grid ">
						<div class="col-md-12  ">
							<img src="/images/w1.png" class=" img-responsive center-block ">
							<img src="/images/w2.png" class=" img-responsive center-block ">
							<p class="text03">衡阳客户是我们项目刚启动第一位合作的客户，在做本地推广的时候，客户群体中惊现洪荒之力。这满背的力量也让业务人员更加卖力。
王先生表示现在拼一下的消费者各种行业各种年龄都有，商品都是熟人推荐，老人也不怕上当，年轻人也不怕受骗，而且现在智能机普遍，手机用户越来越多，再加上社交购物的缘故客户具有很强的粘性，购物用户在倍数增长。不多说了，希望王先生借助洪荒之力，生意越做越好。

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
