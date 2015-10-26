<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ตารางอบรม');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'layout'=>"{items}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
                'header'=>'ลำดับ',
                ],

            //'course_id',
            [
            'attribute'=>'category_id',
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) {
                return $model->category->category_name;
            },
            'group'=>true,  // enable grouping,
            'groupedRow'=>true,                    // move grouped column to a single grouped row
            'groupOddCssClass'=>'kv-grouped-row',  // configure odd group cell css class
            'groupEvenCssClass'=>'kv-grouped-row', // configure even group cell css class
            ],          
            'course_name',
            //'category_id',
            //'description:ntext',
            //'course_detail:ntext',
            // 'duration',
            // 'price',
             'f_oct',
             'f_nov',
             'f_dec',
             'f_jan',
             'f_feb',
             'f_mar',
             'f_apr',
             'f_may',
             'f_jun',
             'f_july',
             'f_aug',
             'f_sep',
            // 'level',
            // 'status',
            // 'img:ntext',
            // 'created',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
