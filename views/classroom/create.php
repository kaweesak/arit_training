<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Classroom */

$this->title = Yii::t('app', 'เปิดคอร์สอบรม');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Classrooms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classroom-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
