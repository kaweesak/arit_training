<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClassroomSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classroom-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'class_id') ?>

    <?= $form->field($model, 'course_id') ?>

    <?= $form->field($model, 'opendate') ?>

    <?= $form->field($model, 'recive') ?>

    <?= $form->field($model, 'place') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'teacher_id') ?>

    <?php // echo $form->field($model, 'created_dt') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
