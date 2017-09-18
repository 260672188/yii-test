<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model common\models\Info */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'info'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="articleIndex clearfix">
    <div class="width1000 auto clearfix mainDiv top30">
        <div class="mainLeft ">
            <?= Breadcrumbs::widget([

                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [
                ],
                'tag'=>'p',
                'itemTemplate'=>'{link}/',
                'activeItemTemplate'=>'{link}',
                'options'=> ['class' => 'line30 top10'],
            ]) ?>

            <div class="bodytitleWap">
                <p class="center font20 colred "><?= $model->title ?></p>
                <div class="info"> <small>发布时间:</small><?= date('Y年-m月-d日',$model->created_at) ; ?>  <small>点击：</small>
                    <script src="/plus/count.php?view=yes&aid=18&mid=1" type='text/javascript' language="javascript"></script>
                    次</div>
            </div>
            <div class="line24 font14 body col555 pad20">
                <?=  $model->content  ?>

            </div>


        </div>
        <div class="mainRight clearfix">

            <div class="top15 left20"><span class=" font24b colred">案例展示</span><span class="col666 left10"><strong>CASE</strong></span></div>
            <div class="caseList left20 top20 clearfix">
                　		    <a href="/xyal/zlzz/" class="a hover top10">展览制作与设计</a>
                　　        <a href='/xyal/zlzz/dxzt'>大型展台案例</a><a href='/xyal/zlzz/sczt'>双层展台案例</a><a href='/xyal/zlzz/xxzt'>小型展台案例</a><a href='/xyal/zlzz/zxzt'>中型展台案例</a>
                　　		    <a href="/xyal/qyzt/" class="a hover top10">企业展厅设计制作</a>
                　　
                　　		    <a href="/xyal/ppzmd/" class="a hover top10">品牌专买店设计制作</a>
                　　
                　　		    <a href="/xyal/hdchzx/" class="a hover top10">活动策划执行</a>
                　　
                　　		    <a href="/xyal/qyxz/" class="a hover top10">企业巡展策划制作</a>
                　　
                　　		    <a href="/xyal/zlqcxt/" class="a hover top10">展览器材系统应用</a>
                　　        <a href='/xyal/zlqcxt/bybz'>变异标准展位</a><a href='/xyal/zlqcxt/dfz'>大方柱</a><a href='/xyal/zlqcxt/xjxt'>桁架系统</a><a href='/xyal/zlqcxt/zybt'>主要八通</a>
                　
            </div>

        </div>
    </div>
</div>

