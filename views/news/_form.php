<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'topic')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'detail')->widget(\yii\redactor\widgets\Redactor::className(),[
        'clientOptions'=>[
            'imageUpload'=> Url::to(['/redactor/upload/image']),
            'imageManagerJson' => Url::to(['/redactor/upload/image-json']),
            'fileUpload' => Url::to(['/redactor/upload/file']),
            'lang' => 'th',
            'minHeight' => 300,
            'plugins' => ['clips', 'fontcolor','imagemanager','video']
        ],
    ]
    )?>

<?= $form->field($model, 'status')->dropDownList([ 'N' => 'N', 'U' => 'U',], ['prompt' => '']) ?>

    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'บันทึก') : Yii::t('app', 'แก้ไข'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
