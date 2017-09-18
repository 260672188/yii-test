<?php
use yii\helpers\Html;
use yii\widgets\ListView;
/* @var $this yii\web\View */
$siteconfig=\common\models\System::findOne(['id'=>1]);
$this->title=$siteconfig->webname;
$this->registerMetaTag(['name' => 'keywords', 'content' =>$siteconfig->keywords]);
$this->registerMetaTag(['name' => 'description', 'content' =>$siteconfig->description]);
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
   <!-- 轮播（Carousel）指标 -->
     
   <!-- 轮播（Carousel）项目 -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="/images/sy1.jpg" alt="First slide" >
      </div>
    
   </div>
   <!-- 轮播（Carousel）导航 -->
</div> 
  <!--banner end-->
<!--  lc star-->
<div class="lc">
	  <div class="container" > 	
	  		<div class="lc-show">
	  			<ul>
	  				<li><img src="/images/c1.jpg" class="img-responsive center-block"><p>拼团实惠</p></li>
	  				
	  				<li><img src="/images/c2.jpg" class="img-responsive center-block"><p>流程简单</p></li>
	  				
	  				<li><img src="/images/c3.jpg" class="img-responsive center-block"><p>产地直销</p></li>
	  				
	  				<li><img src="/images/c4.jpg" class="img-responsive center-block"><p>正品保障</p></li>
	  				
	  				<li><img src="/images/c5.jpg" class="img-responsive center-block"><p>高效物流</p></li>
	  				
	  			</ul>
	  		</div>
	  </div>
 </div> 
  <!--  lc end-->
<!--  product  star-->
  <div class="product-show">
  		<div class="container"> 
  			<div class="row product-ju">
				<div class="col-md-5 col-sm-4 col-xs-3"><div class="hg"></div></div>
				<div class="col-md-2 col-sm-3 col-xs-6 xs" >每日好货<span>Daily Good</span></div>
				<div class="col-md-5 col-sm-4 col-xs-3"><div class="hg"></div></div> 	
			</div> 	
	  		<div class="row ">
				<div class="col-md-4 col-sm-4 col-xs-6"><img src="/images/b1-1.png" class="img-responsive"></div>
				<div class="col-md-4 col-sm-4 col-xs-6"><img src="/images/b1-2.png" class="img-responsive"></div>
				<div class="col-md-4 col-sm-4 col-xs-6"><img src="/images/b1-3.png" class="img-responsive"></div>
				<div class="col-md-4 col-sm-4 col-xs-6"><img src="/images/b1-4.png" class="img-responsive"></div>
				<div class="col-md-4 col-sm-4 col-xs-6"><img src="/images/b1-5.png" class="img-responsive"></div>
				<div class="col-md-4 col-sm-4 col-xs-6"><img src="/images/b1-6.png" class="img-responsive"></div>
				<div class="col-md-4 col-sm-4 col-xs-6"><img src="/images/b1-7.png" class="img-responsive"></div>
				<div class="col-md-4 col-sm-4 col-xs-6"><img src="/images/b1-8.png" class="img-responsive"></div>
				<div class="col-md-4 col-sm-4 col-xs-6"><img src="/images/b1-9.png" class="img-responsive"></div>	  			
	  		</div>	  		
  		</div>  	
  </div>
  
  
 <!--  product  end-->
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


