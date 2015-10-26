<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Room */

$this->title = Yii::t('app', 'เพิ่มห้องอบรม');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ห้องอบรม'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
