<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Course */

$this->title = $model->course_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Courses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->course_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->course_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'course_id',
            'course_name',
            'category_id',
            'description:ntext',
            'course_detail:ntext',
            'duration',
            'price',
            'f_jan',
            'f_feb',
            'f_mar',
            'f_apr',
            'f_may',
            'f_jun',
            'f_july',
            'f_aug',
            'f_sep',
            'f_oct',
            'f_nov',
            'f_dec',
            'level',
            'status',
            'photo:ntext',
            'created_dt',
        ],
    ]) ?>

</div>
