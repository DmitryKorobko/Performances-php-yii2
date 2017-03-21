<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Concert */

$this->title = 'Create concert place';
$this->params['breadcrumbs'][] = ['label' => 'Concert places', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concert-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
