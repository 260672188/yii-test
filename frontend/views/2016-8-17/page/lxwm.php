<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title ='联系我们';
//$this->title = $model->title;
//$this->registerMetaTag(['name' => 'keywords', 'content' =>$model->keywords ]);
//$this->registerMetaTag(['name' => 'description', 'content' =>$model->description ]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
 
<div class="mail">
		<!-- container -->
		<div class="container">		
			<div class="col-md-12 contact-form  bounceIn animated" >
		 <div class="col-md-6 contact-form  " >
 
				<h2 class="   bounceIn animated" style="margin: 20px 0; font-size: 30px; color: #333;">拼一下商务留言板</h2>
				<p class="  bounceIn animated" style="margin: 30px 0; font-size: 14px; color: #666;">如果您想进入拼购行业，或者盘活资产/利用自己闲暇时间做有意义的事，您可以申请成为拼一下城市合伙人。</p>
			
            <form>
                <input type="text" placeholder="姓名" required>
                <input type="text" placeholder="手机" required>
                <input type="text" placeholder="E-mail" required>
                <input type="text" placeholder="经营城市" required>
                <input type="text" placeholder="预计投资金额" required>
                <input type="text" placeholder="现经营生意" required>
                <input type="submit" value="提交申请">
            </form>
        </div>
			
								<div class="col-md-6 contact-form  " >
		 <?= $model->content ?>
		 </div>
		        </div>
        <div class="clearfix"> </div>

    </div>
</div>
<!-- //container -->

