<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel common\models\InfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'info');
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

 



<div class="articleList padEm">
 <hr><hr>


    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'layout' => '{items}  <div class="clear"></div>  {pager} ',
        'itemOptions' => ['class' => 'item'],
        'itemView' =>'list_index',

    ]) ?>


 <hr><hr>
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
