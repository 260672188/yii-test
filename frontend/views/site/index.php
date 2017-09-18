<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use  yii\helpers\Url;
/* @var $this yii\web\View */
$siteconfig=\common\models\System::findOne(['id'=>1]);
$this->title='招商外包－'.$siteconfig->webname;
$this->registerMetaTag(['name' => 'keywords', 'content' =>$siteconfig->keywords]);
$this->registerMetaTag(['name' => 'description', 'content' =>$siteconfig->description]);
 
?>
<!--banner star-->
<div id="myCarousel" class="carousel slide " data-ride="carousel">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>

    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="/images/ban1.png" alt="First slide">
        </div>
        <div class="item">
            <img src="/images/ban6.jpg" alt="First slide">
        </div>
        <div class="item">
            <img src="/images/ban7.jpg" alt="First slide">
        </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
</div>
<!--banner end-->

<div class="main  fadeInRight  animated">
    <div class="container">
        <img src="/images/bt1.png" class="img-responsive ">
        <div class="row main-text fadeInRight animated">
            <div class="col-md-4 col-sm-5 col-lg-offset-1  col-sm-offset-1 ">
                <h2>互联网界业务的领军品牌</h2>
                <div class="line"></div>
                <p>品途国际,目前为30多家企业提供渠道建设以及全网营销服务,通过不断整合推广资源,积累业务服务经验,培养了近100人的品途团队，为客户提供优质服务奠定良好的基础的同时集聚了丰富的媒体资源，海陆空全覆盖。线上以百度，360等搜索引擎为主要的全网络推广，涵盖PC端与移动端，全面覆盖一二三四线城市，辐射全国的2000多万投资者与代理商。
                </p>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-offset-1  col-sm-offset-1 main-pic ">
                <img src="/images/mx.jpg" class="img-responsive">
            </div>
        </div>
    </div>
</div>
<!--main end-->
<div class="service  fadeInRight  animated">
    <div class="container ">
        <img src="/images/bt2.png" class="img-responsive ">
        <div class="row ser-ju">
            <div class="col-md-4 col-sm-4 ser-grid ">
                <div class="thumbnail">
                    <a href="<?= Url::to(['site/service']);?>">
                        <img src="/images/ser1.jpg">
                        <div class="caption">
                            <h3>招商外包</h3>
                            <p>按效果付费一站式招商解决方案</p>
                            <p class="a1">了解更多</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 ser-grid ">
                <div class="thumbnail">
                    <a href="<?= Url::to(['site/project']);?>">
                        <img src="/images/ser2.jpg">
                        <div class="caption">
                            <h3>项目推广</h3>
                            <p>帮助企业推广市场，快速获得资金</p>
                            <p class="a1">了解更多</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 ser-grid">
                <div class="thumbnail">
                    <a href="<?= Url::to(['site/oto']);?>">
                        <img src="/images/ser3.jpg">
                        <div class="caption">
                            <h3>OTO解决方案</h3>
                            <p>线上线下全融合的营销新模式</p>
                            <p class="a1">	了解更多</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--service end-->
<div class="partner">
    <div class="container ">
        <h2 class="text01">合作客户</h2>
        <div id="div1">
            <ul>
                <li><img src="/images/a1.png"> </li>
                <li><img src="/images/a2.png"> </li>
                <li><img src="/images/a3.png"> </li>
                <li><img src="/images/a4.png"> </li>
                <li><img src="/images/a5.png"> </li>
                <li><img src="/images/a6.png"> </li>
                <li><img src="/images/a7.png"> </li>
                <li><img src="/images/a8.png"> </li>
                <li><img src="/images/a9.jpg"> </li>
                <li><img src="/images/a10.jpg"> </li>
                <li><img src="/images/a11.jpg"> </li>

            </ul>
        </div>
    </div>
</div>

<?php  $this->registerJs('
window.onload = function() {
				var oDiv = document.getElementById(\'div1\');
				var oUl = oDiv.getElementsByTagName(\'ul\')[0];
				oUl.innerHTML += oUl.innerHTML;
				oUl.style.width = oUl.children.length * oUl.children[0].offsetWidth + \'px\';
				var left = 0;
				setInterval(function() {
					left -= 2;
					oUl.style.left = (left % 400 - 400) % 400 + \'px\';
				}, 30);
			};
');
?>
