<?php

use yii\helpers\Html;
//use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Course */

$this->title ='หลักสูตรอบรม';
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Courses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-view">

    <h3><?= Html::encode($this->title) ?></h3>


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

            'course_id',
            'course_name',
             
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
            
           
           
        ],
    ]); ?>
</div>
