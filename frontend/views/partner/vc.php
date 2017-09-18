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
  <div class="container" style="margin-bottom: 50px;"> 	
  		<div class="row"> 			
  			<div class=" bt-text  animated"  style="margin: 40px 0;">
  					<h1 style="font-size: 1.875em;">成功案例<span class="pull-right"><a href="<?=Url::to(['partner/index'])  ?>" style="font-size: 0.6em; color: #333333;">查看更多></a></span></h1>
  			</div>
  			<div class="news-shows">
  				
  				<div class="col-md-4 new-show bounceIn animated">
  					<a href="<?=Url::to(['partner/vc2'])  ?>">
  					<img src="/images/cg9.jpg">
  					<p class="text-center text01" >梦想并不遥远<br><span class="text02">社交购物平台拼一下商城改变生活</span></p>
  					</a>
  				</div>
  				<div class="col-md-4 new-show bounceIn animated">
  					<a href="<?=Url::to(['partner/vc1'])  ?>">
  					<img src="/images/cg6.jpg">
  					<p class="text-center text01" >世界那么大，陪我拼一下<br><span class="text02">拼一下商城引领全民创业热潮</span></p>
  					</a>
  				</div>
  				<div class="col-md-4 new-show bounceIn animated">
  					<a href="<?=Url::to(['partner/vc0'])  ?>">
  					<img src="/images/cg5.jpg">
  					<p class="text-center text01" >传统快递联手拼一下商城<br><span class="text02">时代给了我们希望，也给了我们机会</span></p>
  					</a>
  				</div>
  				<div class="col-md-4 new-show bounceIn animated">
  					<a href="<?=Url::to(['partner/vc4'])  ?>">
  					<img src="/images/cg7.jpg">
  					<p class="text-center text01" >消费者中的洪荒之力<br><span class="text02">无论大小，都是我们的拼客户</span></p>
  					</a>
  				</div>
  				<div class="col-md-4 new-show bounceIn animated">
  					<a href="<?=Url::to(['partner/vc3'])  ?>">
  					<img src="/images/cg8.jpg">
  					<p class="text-center text01" >年轻也能创业<br><span class="text02">有机会，就努力拼</span></p>
  					</a>
  				</div>
  				<div class="col-md-4 new-show bounceIn animated">
  					<a href="<?=Url::to(['partner/vc5'])  ?>">
  					<img src="/images/cg10.jpg">
  					<p class="text-center text01" >老板转型，亲自送货<br><span class="text02">传统店老板转型社交电商拼一下</span></p>
  					</a>
  				</div>
  				<div class="clearfix"></div>
				
  			</div>
  		</div>
  </div>
  <!--  新闻资讯 end-->


