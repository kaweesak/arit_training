<?php

use yii\helpers\Html;
//use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->topic;
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'News'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <h3><?= Html::encode($this->title) ?></h3>
    <br/>
    <?= $model->detail; ?>

</div>
