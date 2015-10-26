<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use app\models\Course;
/* @var $this yii\web\View */
/* @var $model app\models\Classroom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classroom-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_id')->dropDownList(
        ArrayHelper::map(Course::find()->all(),'course_id','course_name'),
        ['prompt'=>'เลือกคอร์ส']
    ) ?>

    <?= $form->field($model, 'opendate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recive')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Wait' => 'Wait', 'Open' => 'Open', 'Close' => 'Close', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'teacher_id')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
