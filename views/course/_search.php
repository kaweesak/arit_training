<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CourseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="course-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'course_id') ?>

    <?= $form->field($model, 'course_name') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'course_detail') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'f_jan') ?>

    <?php // echo $form->field($model, 'f_feb') ?>

    <?php // echo $form->field($model, 'f_mar') ?>

    <?php // echo $form->field($model, 'f_apr') ?>

    <?php // echo $form->field($model, 'f_may') ?>

    <?php // echo $form->field($model, 'f_jun') ?>

    <?php // echo $form->field($model, 'f_july') ?>

    <?php // echo $form->field($model, 'f_aug') ?>

    <?php // echo $form->field($model, 'f_sep') ?>

    <?php // echo $form->field($model, 'f_oct') ?>

    <?php // echo $form->field($model, 'f_nov') ?>

    <?php // echo $form->field($model, 'f_dec') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'created') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
