<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ArtistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Artist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'artist_id',
            'artist_name',
            'band_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
