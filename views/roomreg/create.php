<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Roomreg */

$this->title = Yii::t('app', 'Create Roomreg');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Roomregs'), 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomreg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
