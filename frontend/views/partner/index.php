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
  <!--  新闻资讯 end-->
 <div class="container" style="margin-bottom: 50px;"> 	
  		<div class="row"> 			
  			<div class=" bt-text  animated"  style="margin: 40px 0;">
  					<h1 style="font-size: 1.875em;">成功案例<span class="pull-right"><a href="<?=Url::to(['partner/index'])  ?>" style="font-size: 0.6em; color: #333333;">查看更多></a></span></h1>
  			</div>
  			<div class="news-shows">
 
 
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'layout' => '{items}  <div class="clearfix  "></div> <div class="text-center " style="margin: 15px;"> {pager}</div> ',
                        'itemOptions' => ['class' => 'item'],
                        'itemView' =>'list_index',
                     ]) ?>
					   				<div class="clearfix"></div>
            </div>
                </div>
            </div>



