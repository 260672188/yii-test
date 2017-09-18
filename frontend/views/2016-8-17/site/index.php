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
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="/images/banner3.jpg" alt="First slide">
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

<div class="container" style="margin-top: 50px; ">
<div class="row"> 			
  			<div class=" bt-text  bounceIn animated"  style="margin: 40px 0;">
  					<h1 style="font-size: 1.875em;">合作伙伴<span class="pull-right"><a href="http://www.pingoing.cn/partner" style="font-size: 0.6em; color: #333333;">查看更多></a></span></h1>
  			</div>

<!--

<div class="col-md-3 new-show bounceIn animated">
  					<a href="#">
  					<img src="images/cg4.jpg">
  					<p class="text-center" >嘉兴合伙人颜先生</p>
  					</a>
  				</div>

-->


     
    <div class="news-shows">
  <?php $partners = \common\models\Partner::find()->orderBy(['id' => SORT_DESC])->limit(8)->all();        ?>
        <?php foreach ($partners as $k => $v): ?>

       <div class="col-md-3 new-show bounceIn animated">

             <?= Html::a(Html::decode(Html::img($v->pic, ['alt' => $v->title ,'class'=>'img-responsive'])), ['partner/view', 'id' => $v->id])  ?>
            <p class="text-center  "  style="margin-bottom: 5px;"><?= Html::a(Html::encode($v->title), ['partner/view', 'id' => $v->id],['class'=>'list-a'])  ?></p>
        </div>
        <?php endforeach; ?>


    </div>  </div>



</div>

 <div class="madia">
  	<div class="container">
  		<div class="news-text bounceIn animated"  style="margin: 30px 0;">
  					<h1 style="font-size: 1.875em;">媒体合作<span class="pull-right"><a href="#" style="font-size: 0.6em; color: #333333;">查看更多></a></span></h1>
  		</div>
  		<div class="row">
  			<div class="col-md-3 col-xs-3 fadeInRight animated">
  					<img src="/images//bd.jpg" class="img-responsive"> 					
  			</div>
  			<div class="col-md-3 col-xs-3 fadeInRight animated">
  					<img src="/images//sl0.jpg" class="img-responsive"> 					
  			</div>
  			<div class="col-md-2 col-xs-2  fadeInRight animated">
  					<img src="/images//tx.jpg" class="img-responsive"> 					
  			</div>
  			<div class="col-md-2  col-xs-2 fadeInRight animated">
  					<img src="/images//sh.jpg" class="img-responsive"> 					
  			</div>
  			<div class="col-md-2 col-xs-2 fadeInRight animated">
  					<img src="/images//tt.jpg" class="img-responsive"> 					
  			</div>
  			
  			<div class="col-md-3 col-xs-3 fadeInRight animated">
  					<img src="/images//al.jpg" class="img-responsive"> 					
  			</div>
  			<div class="col-md-3  col-xs-3 fadeInRight animated">
  					<img src="/images//sd.jpg" class="img-responsive"> 					
  			</div>
  		
  			<div class="col-md-3 col-xs-3 fadeInRight animated">
  					<img src="/images//zs.jpg" class="img-responsive"> 					
  			</div>
  			<div class="col-md-3  col-xs-3 fadeInRight animated">
  					<img src="/images//zh.jpg" class="img-responsive"> 					
  			</div>	
  		</div> 		
  	</div>	
</div> 


