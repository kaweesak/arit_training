<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassroomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'เปิดคอร์สอบรม');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classroom-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'เปิดคอร์สอบรม'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'class_id',
            'course_id',
            'opendate',
            'recive',
            'place',
            // 'status',
            // 'teacher_id',
            // 'created_dt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
