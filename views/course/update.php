<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Course */

$this->title = Yii::t('app', 'แก้ไข {modelClass}: ', [
    'modelClass' => 'Course',
]) . ' ' . $model->course_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'หลักสูตร'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->course_id, 'url' => ['view', 'id' => $model->course_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'แก้ไข');
?>
<div class="course-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
