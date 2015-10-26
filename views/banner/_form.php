<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(['options' => [ 'enctype' => 'multipart/form-data']]); ?>
    
    <?= $form->field($model, 'banner_img')->fileInput() ?>
      *ขนาดแบนเนอร์ 1280 x 450 พิกเซล
    <?= $form->field($model, 'caption')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Y' => 'แสดง banner', 'N' => 'ไม่แสดง banner', ], ['prompt' => 'เลือกสถานะ']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'บันทึก') : Yii::t('app', 'แก้ไข'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
