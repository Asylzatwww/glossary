<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlossaryCountHistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="glossary-count-history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'action') ?>

    <?= $form->field($model, 'location') ?>

    <?= $form->field($model, 'count_before') ?>

    <?= $form->field($model, 'count_now') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'glossary_count_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
