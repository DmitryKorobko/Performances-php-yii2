<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Performances */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="performances-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'performance_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'performance_date')->textInput() ?>

    <?= $form->field($model, 'artist_id')->textInput() ?>

    <?= $form->field($model, 'place_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
