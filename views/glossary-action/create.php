<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GlossaryAction */

$this->title = 'Create Glossary Action';
$this->params['breadcrumbs'][] = ['label' => 'Glossary Actions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glossary-action-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
