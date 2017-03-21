<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ConcertSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Concert places';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concert-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create concert place', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'place_id',
            'place_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
