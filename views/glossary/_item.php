<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Glossary */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="container">
    <div class="row">
        <div class="col-2">
            <img src="<?= $model->id ?>" />
        </div>
        <div class="col-2">
            <?= Html::encode($model->title) ?>
        </div>
        <div class="col-2">
            <?= Html::encode($model->description) ?>
        </div>
        <div class="col-2">
            <?= Html::encode($model->prize) ?>
        </div>
        <div class="col-2">
            <?= Html::encode($model->money_code_id) ?>
        </div>
    </div>


</div>

