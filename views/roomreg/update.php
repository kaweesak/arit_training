<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Roomreg */

$this->title = Yii::t('app', 'แก้ไขข้อมูล: ', [
    'modelClass' => 'Roomreg',
]) . ' ' . $model->rid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Roomregs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rid, 'url' => ['view', 'id' => $model->rid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="roomreg-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
