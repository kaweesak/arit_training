<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roomid')->dropDownList($model->getRoomList(),['prompt'=>'เลือกห้อง']) ?>

    <?= $form->field($model, 'start')->widget(\yii\jui\DatePicker::classname(), [
      'name'=>'dt1',
      'language' => 'th',
      'dateFormat' => 'yyyy-MM-dd',
      'options'=>['style'=>'width:250px;', 'class'=>'form-control'],
]) ?>

    <?= $form->field($model, 'finish')->widget(\yii\jui\DatePicker::classname(), [
      'name'=>'dt2',
      'language' => 'th',
      'dateFormat' => 'yyyy-MM-dd',
      'options'=>['style'=>'width:250px;', 'class'=>'form-control'],
]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'บันทึก') : Yii::t('app', 'แก้ไข'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
