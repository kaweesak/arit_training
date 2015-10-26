<?php

//use yii\helpers\Html;
//use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ตารางเทียบโอนรายวิชา');
$this->params['breadcrumbs'][] = $this->title;
?>

<h3 class="example-title">ตารางเทียบโอนรายวิชา</h3>
<div class="row">
  <div class="col-lg-12">
    <table >
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          สำหรับนักศึกษามหาวิทยาลัยสวนดุสิต เมื่อผ่านเกณฑ์การประเมินผลแล้วสามารถนำผลการอบรมไปเทียบโอนเป็นรายวิชาเลือกเสรีได้ โดยรายวิชาที่สามารเทียบโอนได้ดังต่อไปนี้ :
        </td>
      </tr>
    </table>
    <br />
    <table class="table table-bordered table-hover">
      <tr><td bgcolor="#37BC9B">รายวิชาอบรม</td><td bgcolor="#37BC9B">รหัสวิชา</td><td bgcolor="#37BC9B">ชื่อรายวิชาเทียบโอน</td><td bgcolor="#37BC9B">หน่วยกิต</td></tr>
      <tr><td>1. โปรแกรมสำเร็จรูป</td><td>4122604</td><td>โปรแกรมสำเร็จรูปและการประยุกต์ใช้งาน</td><td>3(2-2)</td></tr>
      <tr><td rowspan="5">2. Microsoft Word</td><td>1544601</td><td>พื้นฐานคอมพิวเตอร์กับงานเอกสารภาษาไทย</td><td>2(1-2)</td></tr>
      <tr><td>3501202</td><td>การใช้งานโปรแกรมคอมพิวเตอร์เพื่องานเอกสารธุรกิจ 2	</td><td>3(2-2)</td></tr>
      <tr><td>4120102</td><td>การประยุกต์ใช้คอมพิวเตอร์</td><td>2(1-2)</td></tr>
      <tr><td>4122601</td><td>โปรแกรมสำเร็จรูปเพื่อวารสารศาสตร์</td><td>2(1-2)</td></tr>
      <tr><td>4123615</td><td>โปรแกรมประยุกต์ด้านงานธุรการ</td><td>3(2-2)</td></tr>
      <tr><td rowspan="4">3. Microsoft Excel</td><td>4120102</td><td>การประยุกต์ใช้คอมพิวเตอร์ </td><td>2(1-2)</td></tr>
      <tr><td>4123603</td><td>โปรแกรมประยุกต์ด้านการเงินการบัญชี</td><td>3(2-2)</td></tr>
      <tr><td>4123607</td><td>การประยุกต์ใช้คอมพิวเตอร์ในงานธุรกิจ</td><td>3(2-2)</td></tr>
      <tr><td>4123615</td><td>โปรแกรมประยุกต์ด้านงานธุรการ </td><td>3(2-2)</td></tr>
      <tr><td rowspan="4">4. Microsoft Access</td><td>4120102</td><td>การประยุกต์ใช้คอมพิวเตอร์ </td><td>2(1-2)</td></tr>
      <tr><td>	4123604</td><td>โปรแกรมประยุกต์ด้านการควบคุมสินค้า</td><td>3(2-2)</td></tr>
      <tr><td>	4123607</td><td>การประยุกต์ใช้คอมพิวเตอร์ในงานธุรกิจ</td><td>3(2-3)</td></tr>
      <tr><td>	4123615</td><td>โปรแกรมประยุกต์ด้านงานธุรการ</td><td>3(2-2)</td></tr>
      <tr><td rowspan="2">5. Microsoft PowerPoint</td><td>4120102</td><td>การประยุกต์ใช้คอมพิวเตอร์</td><td>2(1-2)</td></tr>
      <tr><td>	4123615</td><td>โปรแกรมประยุกต์ด้านงานธุรการ</td><td>3(2-2)</td></tr>
      <tr><td>6. Adobe Photoshop</td><td>4122603</td><td>คอมพิวเตอร์กราฟิก</td><td>3(2-2)</td></tr>
      <tr><td>7. ระบบปฏิบัติการ Unix</td><td>4121401</td><td>ระบบปฏิบัติการ </td><td>3(2-2)</td></tr>
      <tr><td>8. การจัดการสำนักงานอัตโนมัติ</td><td>4122602</td><td>ปรแกรมประยุกต์ด้านการจัดการสำนักงานอัตโนมัติ</td><td>3(2-2)</td></tr>
      <tr><td rowspan="2">9. Adobe Illustrator</td><td>2032402</td><td>การออกแบบด้วยคอมพิวเตอร์ </td><td>3(2-2)</td></tr>
      <tr><td>	3054302</td><td>การออกแบบโฆษณาด้วยคอมพิวเตอร์</td><td>2(1-2)</td></tr>
      <tr><td rowspan="2">10. Adobe InDesign</td><td>3024301</td><td>การออกแบบสิ่งพิมพ์ด้วยคอมพิวเตอร์ </td><td>2(1-2)**</td></tr>
      <tr><td>	3501201</td><td>การใช้งานโปรแกรมคอมพิวเตอร์เพื่องานเอกสารธุรกิจ 1	</td><td>3(2-2)</td></tr>
      <tr><td>11. e-commerce</td><td>3562104</td><td>การจัดการธุรกิจด้วยคอมพิวเตอร์ </td><td>3(2-2)</td></tr>
      <tr><td>12. Authorware</td><td>4123612</td><td>คอมพิวเตอร์ช่วยสอน</td><td>3(2-2)</td></tr>
      <tr><td rowspan="2">13. Macromedia Flash</td><td>2034412</td><td>โปรแกรมประยุกต์งานผสมหลายสื่อ</td><td>3(2-2)</td></tr>
      <tr><td>	4123617</td><td>การประยุกต์ใช้งานมัลติมีเดีย	</td><td>3(2-2)</td></tr>
      <tr><td rowspan="2">14. Macromedia Director</td><td>2034412</td><td>โปรแกรมประยุกต์งานผสมหลายสื่อ</td><td>3(2-2)</td></tr>
      <tr><td>	4123617</td><td>การประยุกต์ใช้งานมัลติมีเดีย	</td><td>3(2-2)</td></tr>
      <tr><td rowspan="2">15. Dreamweaver</td><td>2034412</td><td>โปรแกรมประยุกต์งานผสมหลายสื่อ</td><td>3(2-2)</td></tr>
      <tr><td>	4123617</td><td>การประยุกต์ใช้งานมัลติมีเดีย</td><td>3(2-2)</td></tr>
      <tr><td rowspan="2">16. Microsoft FrontPage</td><td>2034412</td><td>โปรแกรมประยุกต์งานผสมหลายสื่อ</td><td>3(2-2)</td></tr>
      <tr><td>	4123617</td><td>การประยุกต์ใช้งานมัลติมีเดีย</td><td>3(2-2)</td></tr>
      <tr><td>17. SPSS for Windows	</td><td>4123601</td><td>โปรแกรมประยุกต์ด้านสถิติและวิจัย</td><td>3(2-2)</td></tr>
    </table>

    <br />
    <table>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ** <b>หมายเหตุ:</b> กรุณาตรวจสอบการเทียบโอนกับทางทะเบียนก่อนเข้ารับการอบรม**
        </td>
      </tr>
      <tr><td>&nbsp;</td></tr>
    </table>
  </div><!--.col -->
</div> <!--.row -->
