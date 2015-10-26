<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Roomreg */

$this->title = $model->rid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ข้อมูลการจองห้อง'), 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomreg-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->rid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->rid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'rid',
            'username',
            'company',
            'phone',
            'capacity',
            'usedate',
            'description:ntext',
            'status',
            'created_dt',
        ],
    ]) ?>

</div>
