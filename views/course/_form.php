<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;

use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\Course */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="course-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'course_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        ArrayHelper::map(Category::find()->all(),'category_id','category_name'),
        ['prompt'=>'เลือกหมวดหมู่']
    ) ?>

    <?= $form->field($model, 'description')->widget(\yii\redactor\widgets\Redactor::className()) ?>

    <?= $form->field($model, 'course_detail')->widget(\yii\redactor\widgets\Redactor::className()) ?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_jan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_feb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_mar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_apr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_may')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_jun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_july')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_aug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_sep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_oct')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_nov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_dec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Close' => 'Close', 'Open' => 'Open', ], ['prompt' => 'สถานะ']) ?>

    <?= $form->field($model, 'photo')->fileInput() ?>

    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
