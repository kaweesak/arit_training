<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
//use app\assets\AppAsset;
use bootflat\assets\BootflatAsset;
//AppAsset::register($this);
BootflatAsset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@bootflat/dist');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body style="background-color:#f1f2f6">
  <?php $this->beginBody() ?>

  <div class="wrap">
    <?php
    NavBar::begin([
      'brandLabel' => 'ศูนย์ฝึกอบรมคอมพิวเตอร์',
      'brandUrl' => Yii::$app->homeUrl,
      'options' => [
        'class' => 'navbar-default navbar-fixed-top',
      ],
      ]);
      echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
          ['label' => 'หน้าแรก', 'url' => ['/site/index']],
          ['label' => 'จัดการข้อมูลเว็บไซต์', 'items' => [
            ['label'=>'จัดการข่าวสาร','url'=>['/news/admin']],
            ['label'=>'Banner','url'=>['/banner/admin']],
            ['label'=>'Gallery','url'=>['/album/admin']],
          ]],
          ['label' => 'จัดการคอร์ส', 'items'=>[
            ['label'=>'จัดการหมวดหมู่','url'=>['/category/admin']],
            ['label'=>'จัดการหลักสูตร','url'=>['/course/admin']],
            ['label'=>'เปิดคอร์สอบรม','url'=>['/classroom/admin']],
            ['label'=>'ข้อมูลการสมัคร','url'=>['/student/admin']],
          ]],
          ['label' => 'จัดการห้องอบรม', 'items'=>[
            ['label'=>'จัดการห้องอบรม','url'=>['/room/admin']],
            ['label'=>'ข้อมุลการจองห้อง','url'=>['/roomreg/admin']],
            ['label'=>'ตารางการใช้ห้อง','url'=>['/event/admin']],
          ]],
          ['label' => 'รายรับ-รายจ่าย', 'items'=>[
            ['label'=>'xxxxx','url'=>['/room/index']],
            ['label'=>'xxxxx','url'=>['/event/index']],
            ['label'=>'xxxxx','url'=>['/roomreg/register']],
          ]],
          Yii::$app->user->isGuest ?
          ['label' => 'เข้าสู่ระบบ', 'url' => ['/user/security/login']] :
          ['label'=>'Account ('. Yii::$app->user->identity->username .')','items'=>[
            ['label' => 'จัดการระบบ', 'url' => ['/admin/index']],
            ['label'=>'Logout','url'=>['/user/security/logout'],'linkOptions' => ['data-method' => 'post']],
            ]],
          ],
          ]);
          NavBar::end();
          ?>

          <div class="container well">
            <div class="col-lg-12">
              <?= $content ?>
            </div>


          </div>


          <?php $this->endBody() ?>
        </body>
        </html>
        <?php $this->endPage() ?>
