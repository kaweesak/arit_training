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
<body>
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
            ['label'=>'Banner','url'=>['/banner/index']],
            ['label'=>'Gallery','url'=>['/album/admin']],          
          ]],
          ['label' => 'จัดการคอร์ส', 'items'=>[
            ['label'=>'ห้องอบรม','url'=>['/room/index']],
            ['label'=>'ตารางการใช้ห้อง','url'=>['/event/index']],
            ['label'=>'จองห้องอบรม','url'=>['/roomreg/register']],
          ]],
          ['label' => 'จัดการห้องอบรม', 'items'=>[
            ['label'=>'ห้องอบรม','url'=>['/room/index']],
            ['label'=>'ตารางการใช้ห้อง','url'=>['/event/index']],
            ['label'=>'จองห้องอบรม','url'=>['/roomreg/register']],
          ]],
          Yii::$app->user->isGuest ?
          ['label' => 'เข้าสู่ระบบ', 'url' => ['/user/security/login']] :
          ['label'=>'Account ('. Yii::$app->user->identity->username .')','items'=>[
            ['label' => 'จัดการระบบ', 'url' => ['/category/admin']],
            ['label'=>'Logout','url'=>['/user/security/logout'],'linkOptions' => ['data-method' => 'post']],
            ]],
          ],
          ]);
          NavBar::end();
          ?>

          <div class="container well">
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading">จัดการข้อมูลเว็บไซต์</div>
                <div class="panel-body">
                  <ul class="list-group">
                    <li class="list-group-item"><a href="<?= Url::to(['/news/admin']);?>">จัดการข่าวสาร</a></li>
                    <li class="list-group-item"><a href="<?= Url::to(['/banner/index']);?>">Banner</a></li>
                    <li class="list-group-item"><a href="<?= Url::to(['/album/admin']);?>">Gallery</a></li>
                  </ul>
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">จัดการคอร์ส</div>
                <div class="panel-body">
                  <ul class="list-group">
                    <li class="list-group-item"><a href="<?= Url::to(['/category/admin']);?>">จัดการหมวดหมู่</a></li>
                    <li class="list-group-item"><a href="<?= Url::to(['/course/admin']);?>">จัดการหลักสูตร</a></li>
                    <li class="list-group-item"><a href="<?= Url::to(['/classroom/admin']);?>">เปิดคอร์สอบรม</a></li>
                    <li class="list-group-item"><a href="<?= Url::to(['/student/admin']);?>">ข้อมูลการสมัคร</a></li>
                  </ul>
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">จัดการห้องอบรม</div>
                <div class="panel-body">
                  <ul class="list-group">
                    <li class="list-group-item"><a href="<?= Url::to(['/room/admin']);?>">จัดการห้องอบรม</a></li>
                    <li class="list-group-item"><a href="<?= Url::to(['/roomreg/admin']);?>">ข้อมูลการจองห้อง</a></li>
                    <li class="list-group-item"><a href="<?= Url::to(['/event/admin']);?>">ตารางการใช้ห้อง</a></li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-md-9">

              <?= $content ?>
            </div>


          </div>


          <?php $this->endBody() ?>
        </body>
        </html>
        <?php $this->endPage() ?>
