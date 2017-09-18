<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title ='招商加盟';
//$this->title = $model->title;
//$this->registerMetaTag(['name' => 'keywords', 'content' =>$model->keywords ]);
//$this->registerMetaTag(['name' => 'description', 'content' =>$model->description ]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
 			<div class="zs">
				<div class="container">
					<div class="row">
						<div class="col-md-12 fadeInLeft animated zs-grid">
							<h1 class="text-center" style="color: #ff6b5c; margin-bottom: 50px;">2016最后一块未开发高利润的行业</h1>
							<img src="images/z1.jpg" class="img-responsive">
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-12 fadeInLeft animated zs-grid">
							<h1 class="text-center" style="color: #ff6b5c; margin-bottom: 50px;  ">传统水果店与拼一下相比</h1>
							<img src="images/z2.jpg" class="img-responsive">
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-12 fadeInLeft animated zs-grid">
							<h1 class="text-center" style="color: #39969a; margin-bottom: 50px;  ">传统电商与拼一下相比</h1>
							<img src="images/z3.jpg" class="img-responsive">
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-12 fadeInLeft animated zs-grid">
							<h1 class="text-center" style="color: #ff6b5c;  font-size:50px;margin-bottom: 20px; ">合伙人收益分析</h1>
							<h1 class="text-center" style="color: #ff6b5c; font-size: 28px; color: #393939;">直接业务收入来源</h1>
							<img src="images/z41.jpg" class="img-responsive">
							<h1 class="text-center" style="color: #ff6b5c; font-size: 28px; color: #393939;">自有货源收益</h1>
							<img src="images/z51.jpg" class="img-responsive">
							<h1 class="text-center" style="color: #ff6b5c; font-size: 28px; color: #393939;">广告收益</h1>
							<img src="images/z6.jpg" class="img-responsive">
							<h1 class="text-center" style="color: #ff6b5c; font-size: 28px; color: #393939;">入驻平台收益</h1>
							<img src="images/z81.jpg" class="img-responsive">
							<h1 class="text-center" style="color: #ff6b5c; font-size: 28px; color: #393939;">合伙人货源来源</h1>
							<img src="images/z7.jpg" class="img-responsive">
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-12 fadeInLeft animated zs-grid">
							<h1 class="text-center" style="color: #ff6b5c;  font-size:50px;margin-bottom: 20px; ">市场开拓</h1>
							<h1 class="text-center" style="color: #ff6b5c; font-size: 28px; color: #393939; margin: 30px 0;">拼团对市场开拓的优势</h1>
							<div class="col-md-12 products-grid">
								<img src="images/zf.jpg" class="img-responsive">
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-12 fadeInLeft animated zs-grid">
							<h1 class="text-center" style="color: #ff6b5c; font-size: 28px; color: #393939; margin: 30px 0;">政府扶持</h1>
							<div class="col-md-12 products-grid">
								<img src="images/z10.jpg" class="img-responsive">
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>

 <div class="mail"   id="book">
        <!-- container -->
        <div class="container">
            <h2 class="text-center" style="margin: 20px 0; font-size: 30px; color: #333;">拼一下商务留言板</h2>
            <p class="text-center" style="margin: 30px 0; font-size: 14px; color: #666;">如果您想进入拼购行业，或者盘活资产/利用自己闲暇时间做有意义的事，您可以申请成为拼一下城市合伙人。</p>
    <div class="col-md-12 contact-form wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
    <?= $this->render('@app/views/book/_formly', [
        'model' => $model,
    ]) ?>
    <?php
    if( Yii::$app->getSession()->hasFlash('success') ) {
        echo Alert::widget([
            'options' => [
                'class' => 'alert-success', //这里是提示框的class
            ],
            'body' => Yii::$app->getSession()->getFlash('success'), //消息体
        ]);
    }
    ?>


    </div></div></div>

			</div>
			<script src="js/public.js"></script>
			<script src="js/createTag.js"></script>





 