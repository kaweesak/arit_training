<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'รายละเอียดหลักสูตร');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= //GridView::widget([
       \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        //'showHeader' => false,
        'layout'=>"{items}",
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn',
                'header'=>'ลำดับ',
                ],

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
            'course_id',
             //'course_name',
             [
               'attribute' => 'course_name',
               'format' => 'raw',
               'value' => function ($model) {
                 return Html::a($model->course_name, ['view','id'=>$model->course_id]);
              },
             ],
            //'category_id',
            //'description:ntext',
            //'course_detail:ntext',
            // 'duration',
            [
              'attribute' => 'duration',
              'contentOptions' => ['class' => 'text-center'],
              'headerOptions' => ['class' => 'text-center']
            ],
            // 'price:decimal',
            // 'f_jan',
            // 'f_feb',
            // 'f_mar',
            // 'f_apr',
            // 'f_may',
            // 'f_jun',
            // 'f_july',
            // 'f_aug',
            // 'f_sep',
            // 'f_oct',
            // 'f_nov',
            // 'f_dec',
            // 'level',
            // 'status',
            // 'img:ntext',
            // 'created',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
