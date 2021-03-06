<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

use kartik\widgets\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\Album */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="album-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'ref')->hiddenInput(['maxlength' => 50])->label(false); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <div class="form-group field-upload_files">
      <label class="control-label" for="upload_files[]"> ภาพถ่าย </label>
    <div>
      <?= FileInput::widget([
                     'name' => 'upload_ajax[]',
                     'options' => ['multiple' => true,'accept' => 'image/*'], //'accept' => 'image/*' หากต้องเฉพาะ image
                      'pluginOptions' => [
                          'overwriteInitial'=>false,
                          'initialPreviewShowDelete'=>true,
                          'initialPreview'=> $initialPreview,
                          'initialPreviewConfig'=> $initialPreviewConfig,
                          'uploadUrl' => Url::to(['/album/upload-ajax']),
                          'uploadExtraData' => [
                              'ref' => $model->ref,
                          ],
                          'maxFileCount' => 100
                      ]
                  ]);
      ?>
    </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'บันทึก') : Yii::t('app', 'แก้ไข'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
