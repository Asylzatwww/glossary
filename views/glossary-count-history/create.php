<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GlossaryCountHistory */

$this->title = 'Create Glossary Count History';
$this->params['breadcrumbs'][] = ['label' => 'Glossary Count Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glossary-count-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
