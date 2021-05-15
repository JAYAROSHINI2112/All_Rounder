<?php

use PharIo\Manifest\Url;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url as HelpersUrl;

/* @var $this yii\web\View */
/* @var $dataP  rovider yii\data\ActiveDataProvider */ ?>
<style>
.card{
  margin-left: 30%;
}
 </style>
<?php
$this->title = 'Accounts';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="account-index">

    <h1><?= Html::encode($this->title) ?></h1>

   
<div class="container-xxl">
<p>
        <?= Html::a('Update', ['view', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
    </p>

<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">OUR TEAM</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                               <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title"><?php echo Html::a($model->fullname)?></h4>
                                    <p class="card-text"><?php echo Html::a($model->bio)?></p><br>
                                    <p class="card-text"><?php echo Html::a($model->mailid)?>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            
                       
        </div>
    </div>
</section> 
