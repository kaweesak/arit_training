<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ห้องอบรม');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
              </div>
              <div class="panel-body">

    <p>
        <?= Html::a(Yii::t('app', 'บันทึกข้อมูล'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'roomid',
            'roomname',
            'roomnum',
            'capacity',
            'description:ntext',
            // 'color',
            // 'photo',
            // 'created_dt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

  </div>
</div>
</div>
