<?php
use yii\helpers\Html;

 ?>
<div class="row">
    <div class="col-md-7">
            <?= $model->getPhotosViewer(); ?>
          
    </div>
    <div class="col-md-5">
        <h4><?php echo Html::encode($model->roomname); ?></h4><h4> ขนาด <?php echo Html::encode($model->capacity); ?> เครื่อง</h4>
        <h4><?php echo Html::encode($model->roomnum); ?></h4>
        <h4>ประกอบด้วย</h4>
        <?php echo $model->description; ?>
        <!--<a class="btn btn-primary" href="#">รายละเอียด <span class="glyphicon glyphicon-chevron-right"></span></a>-->
    </div>
  </div>
<br/>
