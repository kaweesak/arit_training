<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RoomregSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Roomregs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomreg-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Roomreg'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rid',
            'username',
            'company',
            'phone',
            'capacity',
            // 'usedate',
            // 'description:ntext',
            // 'status',
            // 'created_dt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
