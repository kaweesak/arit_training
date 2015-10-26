<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = Yii::t('app', 'ลงทะเบียนเรียน');
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Students'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_registerform', [
        'model' => $model,
        'courselist' => $courselist,
    ]) ?>

</div>
