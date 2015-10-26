<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Room */

$this->title = $model->roomid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rooms'), 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->roomid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->roomid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
<div class="text-center">
  <?= $model->getPhotosViewer(); ?>
</div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'roomid',
            'roomname',
            'roomnum',
            'capacity',
            'description:ntext',
            'color',
            'photo',
            'status',
            'created_dt',
        ],
    ]) ?>

</div>
