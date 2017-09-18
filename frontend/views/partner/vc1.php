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
					<h3 class="fadeInRight animated text-center z-caption">马鞍山合伙人杨先生<span class="pull-right"> </span></h3>
					<p class="text-center" style="font-size: 14px; margin: 20px 0;">发布时间:2016年-08月-02日 点击：</p>
					<div class=" fadeInLeft animated products-grid ">
						<div class="col-md-12  ">
							<img src="/images/yang.png" class=" img-responsive center-block ">
							<p class="text03">放弃投资机构成熟、收入稳定的工作，转战本地商超，赢来人生第二春，拼一下商城圆马鞍山杨先生的创业梦。
杨先生做了十几年收入稳定的工作，大家羡慕的铁饭碗，工作十分稳定。但是为了能让自己的孩子以后能接受更好的教育，铁饭碗也保证不了那么大的开销，陈先生需要一份能为他带来高额收入工作，几番思索，杨先生辞去工作，凑集数十万元，准备投资实体连锁超市。
在参加喜士多连锁超市加盟会的时候，杨先生无意中收到了一张传单。传单上介绍了一种全新的连锁超市模式，不用租赁昂贵门面，不用进行装修，只需有个房间，借助APP就可以开启创业。加盟实体连锁超市前期需要数十万的投入，而这种模式仅需几万，从投资风险来看，后者要小的多。
第二天，杨先生就来到了拼一下商城上海长风景畔的招商部，招商同事详细的介绍了运营模式，拼一下商城利用互联网+思维，让创业者在租赁一个放货的房间，借助拼一下的销售平台，向城市居民提供便利品销售和其他生活服务。这种模式相较于实体便利店，投资小，风险低，对居民的粘性更强。
陈先生觉得既然自己已经有了投资实体店的准备，上手应该很容易，当天就达成合作，做事雷厉风行，现在项目做得风生水起，
每天虽然很累，但是很充实。他相信凭借自己的努力，一定能为自己的孩子创造一个很美好的未来！</p>
							<a href="<?=Url::to(['partner/index'])  ?>" class="pull-right" style="font-size: 16px; color: #333333; margin-bottom: 10px;">返回上页></a>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
	</div>		
			<!--  新闻资讯 end-->