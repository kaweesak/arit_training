<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Roomreg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="roomreg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::classname(), [
      'mask' => '99-9999-9999',
      'clientOptions'=>[
          'removeMaskOnSubmit'=>true //กรณีไม่ต้องการให้มันบันทึก format ลงไปด้วยเช่น 9-9999-99999-999 ก็จะเป็น 9999999999999
      ]
     ]) ?>

    <?= $form->field($model, 'capacity')->widget(\yii\widgets\MaskedInput::classname(), [
          'mask' => '999',
      ]) ?>
    <?= $form->field($model, 'usedate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows'=>6])?>

    <?= $form->field($model, 'captcha')->widget(\yii\captcha\Captcha::classname(), [
        // configure additional widget properties here
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'บันทึก') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
