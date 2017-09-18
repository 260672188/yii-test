<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel common\models\InfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'partner');
$this->params['breadcrumbs'][] = $this->title;
?>
 
  <!--  新闻资讯 end-->
 <div class="container" style="margin-bottom: 50px;"> 	
  		<div class="row"> 			
  			<div class=" bt-text  animated"  style="margin: 40px 0;">
  					<h1 style="font-size: 1.875em;">成功案例<span class="pull-right"><a href="#" style="font-size: 0.6em; color: #333333;">查看更多></a></span></h1>
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



