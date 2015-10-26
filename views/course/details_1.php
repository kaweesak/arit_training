<?php

//use yii\helpers\Html;
//use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ขั้นตอนการสมัคร');
$this->params['breadcrumbs'][] = $this->title;
?>

<h3 class="example-title">ขั้นตอนการสมัคร</h3>
        <div class="row">
        <div class="col-md-12">
        <div class="timeline">
        <dl>
            <dt>ขั้นตอนที่ 1</dt>
        <dd class="pos-left clearfix">
        <div class="circ"></div>
        <div class="time"></div>
        <div class="events">
        <div class="pull-left">

        <div class="events-body">
        <h4 class="events-heading"><i class="glyphicon glyphicon-pencil"></i> ใบสมัครเข้ารับการอบรม</h4>
        <p>ดาวน์โหลดใบสมัครเข้ารับการอบรม <a href="">(PDF)</a></p>
        </div>
        </div>
        </dd>
         <dt>ขั้นตอนที่ 2</dt>
        <dd class="pos-right clearfix">
            <div class="circ"></div>
            <div class="time"></div>
            <div class="events">
                <div class="pull-left">
<!--                    <img class="events-object img-rounded" src="img/photo-2.jpg"></div>-->
                <div class="events-body">
                    <h4 class="events-heading"><i class="glyphicon glyphicon-info-sign"></i> วิธีการสมัคร</h4>
                    <p>1.กรอกแบบฟอร์มใบสมัครอย่างชัดเจน และส่งกลับมาที่ โทรสาร 0-2668-7136 หรือล่วงหน้าก่อนวันอบรมอย่างน้อย 15 วัน </p>
                                        <p>2.หลังจากส่งใบสมัครมาแล้วภายใน 7 วัน หากไม่มีเจ้าหน้าที่ติดต่อกลับไป กรุณาติดต่อกับเจ้าหน้าที่เพื่อยืนยันการสมัคร 0-2244-5226</p>
                                        <p>3.อัตราค่าลงทะเบียนรวมค่าเอกสารในการอบรมเรียบร้อยแล้ว</p>
                                        <p>4.ผู้ที่จะเข้ารับการอบรม จะได้รับการตอบรับและยืนยัน จากทางสำนักคอมพิวเตอร์ก่อน ทุกหลักสูตร โดยจะดำเนินการยืนยันประมาณ 1
สัปดาห์ก่อนการอบรมเป็นอย่างน้อย มิฉะนั้น อาจไม่ได้รับ อนุญาติให้เข้ารับการอบรมได้</p>
                                        <p>5.กรณีที่ผู้สมัครไม่สามารถเข้ารับการอบรมได้ กรุณาแจ้งยกเลิกล่วงหน้าก่อนการอบรมไม่น้อยกว่า 7 วันทำการ มิฉะนั้นจะต้องชำระค่าลง
ทะเบียนเต็มอัตรา สำหรับข้าราชการ/พนักงานองค์กรของรัฐ ต้องมีหนังสือแจ้งการยกเลิกด้วยทุกครั้ง</p>
                </div>
            </div>
        </dd>
        <dt>ขั้นตอนที่ 3</dt>
        <dd class="pos-left clearfix">
            <div class="circ"></div>
            <div class="time"></div>
            <div class="events">
                <div class="pull-left">
<!--                    <img class="events-object img-rounded" src="img/photo-3.jpg"></div>-->
                <div class="events-body">
                    <h4 class="events-heading"><i class="glyphicon glyphicon-usd"></i> การชำระค่าลงทะเบียน</h4>
                    <p>วิธีที่ 1 ชำระด้วยตนเองเป็น เงินสด หรือ เช็ค สั่งจ่ายในนาม "มหาวิทยาลัยราชภัฏสวนดุสิต"</p>
                                            <p>วิธีที่ 2 โอนเงินเข้าบัญชีสะสมทรัพย์ ธนาคารกรุงเทพ สาขาราชวิถี   ชื่อบัญชี มหาวิทยาลัยราชภัฏสวนดุสิต(โครงการอบรมคอมพิวเตอร์)  เลขที่
บัญชี 131-0-59811-3   หลังจากโอนเงินกรุณาส่งโทรสารสำเนาใบนำฝากโดยระบุชื่อผู้เข้าอบรม ชื่อหลักสูตรและวันที่อบรมมาที่โทรสาร 0-2668-7136  และนำใบนำฝากตัวจริงมาแสดงในวันลงทะเบียนด้วย</p>
                                            <p>มหาวิทยาลัยราชภัฏสวนดุสิต เป็นมหาวิทยาลัยในกำกับของรัฐบาลจึงไม่อยู่ในเกณฑ์ที่จะต้องถูกหักภาษี ณ ที่จ่าย 3%</p>
                </div>
            </div>
        </dd>
        <dt>ขั้นตอนที่ 4</dt>
        <dd class="pos-right clearfix">
            <div class="circ">

            </div><div class="time"></div>
            <div class="events">
                <div class="pull-left">
<!--                    <img class="events-object img-rounded" src="img/photo-4.jpg"></div>-->
                <div class="events-body">
                    <h4 class="events-heading"><i class="glyphicon glyphicon-wrench"></i> เงื่อนไขการรับส่วนลดพิเศษ</h4>
                    <p>1.ทุก ๆ หลักสูตร หากชำระค่าลงทะเบียน ล่วงหน้าก่อนการอบรม 7 วัน จะได้รับส่วนลด 10% ทุกหลักสูตร </p>
                    <p>2.ทางศูนย์คอมพิวเตอร์ขอสงวนสิทธิ์ในการเปลี่ยนแปลงค่าลงทะเบียน, ตารางและเงื่อนไข การรับส่วนลดนี้ โดยไม่ต้องแจ้งให้ทราบล่วงหน้า </p>
                </div>
            </div>
        </dd>
         <dt>ขั้นตอนที่ 5</dt>
        <dd class="pos-left clearfix">
            <div class="circ">

            </div><div class="time"></div>
            <div class="events">
                <div class="pull-left">
<!--                    <img class="events-object img-rounded" src="img/photo-4.jpg"></div>-->
                <div class="events-body">
                    <h4 class="events-heading"><i class="glyphicon glyphicon-education"></i> วุฒิบัตร</h4>
                    <p>ผู้ผ่านการอบรมทุกท่านที่มีเวลาอบรมไม่น้อยกว่า 80% จะได้รับวุฒิบัตรรับรองจากมหาวิทยาลัยราชภัฏสวนดุสิต โดยจะมอบให้หลังจากการอบรมเสร็จสิ้นประมาณ 2 สัปดาห์ </p>
                </div>
            </div>
        </dd>
        </dl>

        </div>
    </div>

</div>
