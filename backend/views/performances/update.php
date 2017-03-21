<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Performances */

$this->title = 'Update Performances: ' . $model->performance_id;
$this->params['breadcrumbs'][] = ['label' => 'Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->performance_id, 'url' => ['view', 'performance_id' => $model->performance_id, 'artist_id' => $model->artist_id, 'place_id' => $model->place_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="performances-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
