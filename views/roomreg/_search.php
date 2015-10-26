<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RoomregSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="roomreg-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rid') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'company') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'capacity') ?>

    <?php // echo $form->field($model, 'usedate') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_dt') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
