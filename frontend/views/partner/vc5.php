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
					<h3 class="fadeInRight animated text-center z-caption">海南合伙人吴先生<span class="pull-right"> </span></h3>
					<p class="text-center" style="font-size: 14px; margin: 20px 0;">发布时间:2016年-08月-02日 点击：</p>
					<div class=" fadeInLeft animated products-grid ">
						<div class="col-md-12  ">
							<img src="/images/wu.png" class=" img-responsive center-block">
							
							<p class="text03">批发商吴老板。在听闻了“拼一下商城”创业项目后，也毅然由传统行业转向了当下最火热的互联网+ 社交购物拼一下创业项目。在项目运营初期，郭先生常常亲自出马为用户服务，所以经常能看到引人注目的现象，就是郭先生开着私家车送货品。不仅用户可以快速收到订单，吴老板也节省了一部分快递费。

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