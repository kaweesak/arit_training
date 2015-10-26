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

    <p>
        <?= Html::a(Yii::t('app', 'Create Course'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'course_id',
            'course_name',
            'category_id',
            //'description:ntext',
            //'course_detail:ntext',
             'duration',
             'price',
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
