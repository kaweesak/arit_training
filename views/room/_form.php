<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\color\ColorInput;

/* @var $this yii\web\View */
/* @var $model app\models\Room */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">

    <?php $form = ActiveForm::begin(['options' => [ 'enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'roomname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roomnum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capacity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(\yii\redactor\widgets\Redactor::className()) ?>

    <?= $form->field($model, 'color')->widget(ColorInput::classname(),[
      'options'=>['placeholder'=>'เลือกสีประจำห้อง'] ,
      ])?>

    <?= $form->field($model, 'status')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => 'สถานะห้อง']) ?>

    <?= $form->field($model, 'room_img[]')->fileInput(['multiple' => true]) ?>
    <div class="well">
      <?= $model->getPhotosViewer(); ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'เพิ่มข้อมูล') : Yii::t('app', 'แก้ไขข้อมูล'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
