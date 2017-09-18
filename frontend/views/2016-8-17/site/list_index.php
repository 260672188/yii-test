<?php
use yii\helpers\Html;

?>




<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
 <?= Html::a(Html::decode(Html::img($model->pic, ['alt' => '$model->title' ,'class'=>'img-responsive'])), ['partner/view', 'id' => $model->id])  ?>

        <h6 class="text-center  "  style="margin-bottom: 5px;"><?= Html::a(Html::encode($model->title), ['partner/view', 'id' => $model->id],['class'=>'list-a'])  ?></h6>
</div>
     


<!--
    <a href='/xyal/zlzz/sczt/2014/1020/269.html' class='pic' target='_blank'><img src='/uploads/allimg/141020/1-141020112343547-lp.jpg'/>
                        <div class='picFc'></div></a><p class="line20 center">
        <a href="/xyal/zlzz/sczt/2014/1020/269.html" target="_blank">腾州机床280平方2011年11-8上海工博</a></p>
                </li>  -->