<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Roomreg */

$this->title ='จองห้องเรียบร้อยแล้ว';
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ข้อมูลการจอง'), 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomreg-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'rid',
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
