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

<div class="card" style="width: 18rem;">
  <img src="<?php echo Html::a($model->image)?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo Html::a($model->fullname)?></h5>
    <p class="card-text"><?php echo Html::a($model->bio)?>.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Email Id<?php echo Html::a($model->mailid)?></li>
    <li class="list-group-item">Mobile Number<br> <?php echo Html::a($model->phoneno)?></li>
     </ul>
  <div class="card-body">
       <main>
    <a href="<?php echo Html::a($model->facebookid)?>" class="fa fa-facebook"></a>
    <a href="<?php echo Html::a($model->twitter)?>" class="fa fa-twitter"></a>
    <a href="<?php echo Html::a($model->instagramid)?>" class="fa fa-instagram"></a>
    <a href="<?php echo Html::a($model->linkedinid)?>" class="fa fa-linkedin"></a>
    <a href="<?php echo Html::a($model->websitelink)?>" class="fa fa-chrome"></a>
       </main>
  </div>
  <ul class="list-group list-group-flush">
      <li class="list-group-item">Created at <br> <?php echo Yii::$app->formatter->asDate($model->updated_at)?><br>
     </li>
     </ul>
</div>