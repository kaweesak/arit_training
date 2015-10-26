<?php

use yii\helpers\Html;
use yii\bootstrap\Carousel;
use yii\db\Query;
use app\models\Category;
use app\models\Banner;
use app\models\Classroom;
use app\models\News;

$connection = \Yii::$app->db;
/* @var $this yii\web\View */

$this->title = 'ศูนย์ฝึกอบรมคอมพิวเตอร์';
?>
<?php
$banners = Banner::find()->where(['status' => 'Y'])->all();
$items = [];

if (!empty($banners)) {
    foreach ($banners as $value) {
        $items[] = [
            'content' => '<img src="' . Yii::getAlias('@web') . '/uploads/banner/' . $value->filename . '"/>',
            //'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
            'options' => ['interval' => '600'],
        ];
    }
}
?>
<?php
echo Carousel::widget([
    'items' => $items,
    'options' => ['class' => 'Carousel slide'],
    'controls' => ['<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>', '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'],
]);
?>
<!--
<div class="sdu-promo">
    <div class="container">
        <div class="col-sm-9">
            <h3><b>"โปรโมชั่น"</b> นะครับ</h3>
        </div>
        <div class="col-sm-3">
            <a class="btn btn-default" href="#">Donate Now</a>
        </div>
    </div>
</div>-->
<br/>
<!--Start left column-->
<div class="col-sm-9">
    <b>หลักสูตรอบรม</b>
    <br/>
    <!--    <div class="panel panel-info">
            <div class="panel-heading"><b>หลักสูตรอบรม</b></div>-->
    <table class="table table-bordered" id="t_regis">
        <thead>
            <tr >
                <th>หลักสูตร </th>
                <th>วันอบรม</th>
                <th>รับ</th>                
                <th>ลงชื่อ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $connection = Yii::$app->getDb();
            $command = $connection->createCommand("select co.class_id,cc.course_name,co.opendate,co.recive,cc.price,cc.course_id from course cc,classroom co where cc.course_id = co.course_id and co.status='Open'");

            $class_list = $command->queryAll();
            //$class_list = Classroom::find()->joinwith(course)->where(['status' => 'Open'])->all();
            //$list_wd = Yii::app()->db->createCommand(" select co.class_id,cc.course_name,co.opendate,co.recive,cc.price,cc.course_id from course cc,courseopen co where cc.course_id = co.course_id and co.status='Open' ")->query();
            foreach ($class_list as $wd) {
            ?>
            <th>
                <p class="text-primary">  <?php echo $wd['course_name']; ?></p>
            </th>
            <td><?php echo $wd['opendate']; ?> </td>
            <td><?php echo $wd['recive']; ?></td>            
            <td>
                <?php
                if ($wd['opendate'] == '--รอเปิด--') {

                } else {

                    echo Html::a('ลงชื่อ', ['student/register', 'co' => $wd['course_id'], 'cl' => $wd['class_id']], ['class' => 'btn btn-info btn-sm']);
                }
                ?>

            </td>
            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>
    <!--    </div>-->
    <br/>
    <b>ข่าวสารและกิจกรรม</b>
    <br/>
    <!--    <div class="panel panel-info">
            <div class="panel-heading"><b>ข่าว</b></div>-->
    <table class="table">
        <thead><tr>  </tr> </thead>

        <?php
        $list = News::find()->orderBy(['newsid' => SORT_DESC])->limit(10)->all();
        //$list = Yii::app()->db->createCommand("select * FROM news ORDER BY news_id DESC LIMIT 5")->query();

        foreach ($list as $ds) {
            ?>
            <tr>

                <td>
                    <span class="label label-primary"> <?php echo $ds['created_dt']; ?>  </span> &nbsp;&nbsp;
                    <strong> <?php echo Html::a($ds['topic'], ['news/view', 'id' => $ds['newsid']]); ?> </strong>
                </td>
            </tr>

            <?php
        }
        ?>
    </table>
    <!--    </div>-->
    <br/>
    <b>แกลลอรี่</b>


</div>
<!--End left column-->

<!--Start right column-->
<div class="col-sm-3">
    <div class="well">

        <?= Html::a(Html::img(Yii::getAlias('@web') . '/uploads/image/certificate.jpg', ['class' => 'img-responsive']),['mos/certificate']) ?>
        <br/>
        <div class="list-group">
            <?php
            $cats = Category::find()->all();
            //$cats = $model->queryAll();
            if (!empty($cats)) {
                foreach ($cats as $value) {
                    echo Html::a($value->category_name, ['course/courselist', 'catid' => $value->category_id], ['class' => 'list-group-item list-group-item-info']);
                }
            }
            ?>
        </div>
        <?= Html::img(Yii::getAlias('@web') . '/uploads/image/illus_discount.png', ['class' => 'img-responsive']) ?>
        <?= Html::img(Yii::getAlias('@web') . '/uploads/image/snp.png', ['class' => 'img-responsive']) ?>
        <a href="http://info.flagcounter.com/avTi"><img src="http://s01.flagcounter.com/count2/avTi/bg_FFFFFF/txt_000000/border_CCCCCC/columns_3/maxflags_2/viewers_0/labels_0/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
    </div>
</div>
<!--End right column-->
<!-- Three columns of text below the carousel -->
