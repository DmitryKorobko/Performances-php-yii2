<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Performances */

$this->title = $model->performance_id;
$this->params['breadcrumbs'][] = ['label' => 'Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="performances-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'performance_id' => $model->performance_id, 'artist_id' => $model->artist_id, 'place_id' => $model->place_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'performance_id' => $model->performance_id, 'artist_id' => $model->artist_id, 'place_id' => $model->place_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'performance_id',
            'performance_name',
            'performance_date',
            'artist_id',
            'artist.artist_name',
            'artist.band_name',
            'place_id',
            'place.place_name',
        ],
    ]) ?>

</div>
