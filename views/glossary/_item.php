<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Glossary */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="post">
    <h2><?= Html::encode($model->title) ?></h2>
    <h2><?= Html::encode($model->description) ?></h2>
    <h2><?= Html::encode($model->prize) ?></h2>
    <h2><?= Html::encode($model->money_code_id) ?></h2>

</div>

