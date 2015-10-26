<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ตารางการใช้ห้อง');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'บันทึกข้อมูล'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= \yii2fullcalendar\yii2fullcalendar::widget([
      'id'=>'calendar',
      'options' => [
          'lang' => 'th',
          'header'=>[
              'left'=>'prev,next today',
              'center'=>'title',
              'right'=>'month,agendaWeek,agendaDay',
          ],
          'timeFormat'=>' ',
          ],
        'events'=>$events,
    ]); ?>
    <br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            'room.roomname',
            'start',
            'finish',
            // 'note',
            // 'is_allday',
            // 'created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
