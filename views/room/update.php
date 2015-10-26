<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Room */

$this->title = Yii::t('app', 'แก้ไข {modelClass}: ', [
    'modelClass' => 'Room',
]) . ' ' . $model->roomnum;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ห้องอบรม'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->roomid, 'url' => ['view', 'id' => $model->roomid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
              </div>
              <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

  </div>
</div>
</div>
