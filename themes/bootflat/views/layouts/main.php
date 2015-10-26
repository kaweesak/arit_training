<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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
                'brandUrl' => Yii::$app->homeUrl . 'site/index',
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'หน้าแรก', 'url' => ['/site/index']],
                    ['label' => 'หลักสูตรอบรม', 'items' => [
                            ['label' => 'ระเบียบการสมัคร', 'url' => ['/course/details']],
                            ['label' => 'รายละเอียดหลักสูตร', 'url' => ['/course/index']],
                            ['label' => 'ตารางเทียบโอน', 'url' => ['/course/tables']],
                            ['label' => 'ตารางอบรม', 'url' => ['/course/opens']],
                        ]],
                    ['label' => 'ห้องปฏิบัติการคอมพิวเตอร์', 'items' => [
                            ['label' => 'ห้องอบรม', 'url' => ['/room/index']],
                            '<li class="divider"></li>',
                            ['label' => 'ตารางการใช้ห้อง', 'url' => ['/event/index']],
                            ['label' => 'จองห้องอบรม', 'url' => ['/roomreg/register']],
                        ]],
                    ['label' => 'MOS', 'url' => ['/mos/certification']],
                    ['label' => 'เกี่ยวกับเรา', 'url' => ['/site/about']],
                    //['label' => 'Contact', 'url' => ['/site/contact']],                    
                    Yii::$app->user->isGuest ?                            
                            ['label' => 'เข้าสู่ระบบ', 'url' => ['/user/security/login']] :
                            ['label' => 'Account (' . Yii::$app->user->identity->username . ')', 'items' => [
                            ['label' => 'จัดการระบบ', 'url' => ['/admin/index']],
                            ['label' => 'Profile', 'url' => ['/user/settings/profile']],
                            ['label' => 'Account', 'url' => ['/user/settings/account']],
                            ['label' => 'Logout', 'url' => ['/user/security/logout'], 'linkOptions' => ['data-method' => 'post']],
                        ]],
                ],
            ]);
            NavBar::end();
            ?>

            <div class="container well">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        //'options'=>['class'=>'breadcrumb-arrow'],
                ])
                ?>
                <?= $content ?>
            </div>
        </div>                
        <footer class="footer">
            <div class="container">
                <div class="clearfix">
                    <div class="footer-logo">
                        <a href="#"><img src="<?php echo Yii::getAlias('@web') . "/uploads/image/logo.png"; ?>"></a>
                    </div>
                    <dl class="footer-nav">
                        <dt class="nav-title">แนะนำ</dt>
                        <dd class="nav-item">
                            <?php echo Html::a('มหาวิทยาลัยสวนดุสิต', 'http://www.dusit.ac.th'); ?>
                        </dd>
                        <dd class="nav-item">
                            <?php echo Html::a('สำนักวิทยบริการฯ', 'http://www.arit.dusit.ac.th'); ?>
                        </dd>
                        <dd class="nav-item">
                            <?php echo Html::a('สวนดุสิตโพล', 'http://dusitpoll.dusit.ac.th'); ?>
                        </dd>
                        <dd class="nav-item">
                            <?php echo Html::a('โรงเรียนสาธิตละอออุทิศ', 'http://www.la-orutis.dusit.ac.th'); ?>
                        </dd>
                    </dl>
                    <dl class="footer-nav">
                        <dt class="nav-title">เกี่ยวกับเรา</dt>
                        <dd class="nav-item">
                            <a href="#">บุคลากร</a>
                        </dd>
                        <dd class="nav-item">
                            <a href="#">ติดต่อ</a>
                        </dd>
                    </dl>

                </div>
                <div class="footer-copyright text-center">Copyright &copy; <?php echo date('Y'); ?> by สำนักวิทยบริการและเทคโนโลยีสารสนเทศ มหาวิทยาลัยสวนดุสิต<br/>
                    All Rights Reserved.<br/>

                </div>
            </div>
        </footer>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23506051-2', 'auto');
  ga('send', 'pageview');

</script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
