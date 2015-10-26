<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Roomreg */

$this->title = Yii::t('app', 'จองห้องอบรม');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomreg-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_register', [
        'model' => $model,
    ]) ?>

</div>
