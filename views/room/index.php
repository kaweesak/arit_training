<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ห้องอบรม');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-index">

   
    <div class="row">
        <div class="col-lg-12">
            <p>
<?= Html::img(Yii::getAlias('@web') . '/uploads/room/room-logo.gif', ['class' => 'img-responsive']) ?>
            </p>
            <p>
                เปิดให้บริการเช่าห้องประชุมสำหรับการจัดอบรม ในราคาประหยัด พร้อมด้วยอุปกรณ์อำนวยความสะดวกครบครัน โดยเรา มีห้องให้เลือกหลายห้อง ตามความต้องการของผู้เช่า
            </p>
            <p>
                <b>เวลาทำการ : </b>เปิดให้เช่าทุกวัน 08.00 - 19.00 น.<br/>
                <b>ติดต่อสอบถาม </b>: คุณ น้ำ 022445220
            </p>
        </div>
    </div>
<br/>
<br/>
    <?php
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "{items}",
        'itemView' => '_item',
    ]);
    ?>

  
<div class="row">
    <div class="col-lg-12">
        <?php echo Html::a('จองห้องอบรม',['/roomreg/register'],['class'=>'btn btn-info']); ?>
       
    </div>    
</div>
</div>
