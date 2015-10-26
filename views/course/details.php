<?php

//use yii\helpers\Html;
//use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ขั้นตอนการสมัคร');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .right-line {
  position: relative;
  z-index: 1;
  overflow: hidden;
  color: #000;
  margin: 30px 0;
}
.right-line:after {
  position: absolute;
  top: 55%;
  overflow: hidden;
  width: 100%;
  height: 1px;
  content: '\a0';
  background-color: #ddd;
  border-left: solid 20px #fff;
}
</style>
<h3 class="example-title">ขั้นตอนการสมัคร</h3>
<section>     
    <div class="row">
            <div class="col-md-12">                
                <h4 class="right-line"><i class="glyphicon glyphicon-info-sign"></i> วิธีการสมัคร</h4>
            </div>
        <div class="col-md-12">
            <p>1.กรอกแบบฟอร์มใบสมัครอย่างชัดเจน และส่งกลับมาที่ โทรสาร 0-2668-7136 หรือล่วงหน้าก่อนวันอบรมอย่างน้อย 15 วัน </p>
                                        <p>2.หลังจากส่งใบสมัครมาแล้วภายใน 7 วัน หากไม่มีเจ้าหน้าที่ติดต่อกลับไป กรุณาติดต่อกับเจ้าหน้าที่เพื่อยืนยันการสมัคร 0-2244-5226</p>
                                        <p>3.อัตราค่าลงทะเบียนรวมค่าเอกสารในการอบรมเรียบร้อยแล้ว</p>
                                        <p>4.ผู้ที่จะเข้ารับการอบรม จะได้รับการตอบรับและยืนยัน จากทางสำนักคอมพิวเตอร์ก่อน ทุกหลักสูตร โดยจะดำเนินการยืนยันประมาณ 1
สัปดาห์ก่อนการอบรมเป็นอย่างน้อย มิฉะนั้น อาจไม่ได้รับ อนุญาติให้เข้ารับการอบรมได้</p>
                                        <p>5.กรณีที่ผู้สมัครไม่สามารถเข้ารับการอบรมได้ กรุณาแจ้งยกเลิกล่วงหน้าก่อนการอบรมไม่น้อยกว่า 7 วันทำการ มิฉะนั้นจะต้องชำระค่าลง
ทะเบียนเต็มอัตรา สำหรับข้าราชการ/พนักงานองค์กรของรัฐ ต้องมีหนังสือแจ้งการยกเลิกด้วยทุกครั้ง</p>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12">
                <h4 class="right-line"><i class="glyphicon glyphicon-usd"></i> การชำระค่าลงทะเบียน</h4>
            </div>
        <div class="col-md-12">
             <p>วิธีที่ 1 ชำระด้วยตนเองเป็น เงินสด ณ วันสอบ</p>
                                            
        </div>
    </div>
    <div class="row">
            <div class="col-md-12">
                <h4 class="right-line"><i class="glyphicon glyphicon-wrench"></i> เงื่อนไขการรับส่วนลดพิเศษ</h4>
            </div>
        <div class="col-md-12">
            <p>1.ทุก ๆ หลักสูตร หากชำระค่าลงทะเบียน ล่วงหน้าก่อนการอบรม 7 วัน จะได้รับส่วนลด 10% ทุกหลักสูตร </p>
            <p>2.ทางศูนย์คอมพิวเตอร์ขอสงวนสิทธิ์ในการเปลี่ยนแปลงค่าลงทะเบียน, ตารางและเงื่อนไข การรับส่วนลดนี้ โดยไม่ต้องแจ้งให้ทราบล่วงหน้า </p>
        </div>
    </div>
    
    <div class="row">
            <div class="col-md-12">
                <h4 class="right-line"><i class="glyphicon glyphicon-education"></i> วุฒิบัตร</h4>
            </div>
        <div class="col-md-12">
             <p>ผู้ผ่านการอบรมทุกท่านที่มีเวลาอบรมไม่น้อยกว่า 80% จะได้รับวุฒิบัตรรับรองจากมหาวิทยาลัยสวนดุสิต โดยจะมอบให้หลังจากการอบรมเสร็จสิ้นประมาณ 2 สัปดาห์ </p>
        </div>
    </div>
    </section>

</div>
