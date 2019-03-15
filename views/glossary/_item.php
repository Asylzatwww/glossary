<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Glossary */
/* @var $form yii\widgets\ActiveForm */
?>


    <div class="row" style="    height: 100px;
    border: 1px solid;">
        <div class="col-md-2">
            <img src="/uploads/glossary-<?= $model->id ?>.jpg" src="width:100px" />
        </div>
        <div class="col-md-2">
            <?= Html::encode($model->title) ?>
        </div>
        <div class="col-md-2">
            <?= Html::encode($model->description) ?>
        </div>
        <div class="col-md-2">
            <?= Html::encode($model->prize) ?>
        </div>
        <div class="col-md-2">
            <?= Html::encode($model->money_code_id) ?>
        </div>
    </div>

