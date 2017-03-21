<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Concert */

$this->title = 'Update Concert: ' . $model->place_id;
$this->params['breadcrumbs'][] = ['label' => 'Concerts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->place_id, 'url' => ['view', 'id' => $model->place_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="concert-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
