<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RoomregSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ข้อมูลการจองห้อง');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomreg-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'rid',
            'username',
            'company',
            'phone',
            'capacity',
            'usedate',
            // 'description:ntext',
             'status',
            // 'created_dt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
