<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Performances */

$this->title = 'Create Performances';
$this->params['breadcrumbs'][] = ['label' => 'Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="performances-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
