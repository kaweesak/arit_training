<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Album */

$this->title = Yii::t('app', 'Create Album');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Albums'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="album-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
        'initialPreview'=>[],
        'initialPreviewConfig'=>[]
    ]) ?>

</div>
