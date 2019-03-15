<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GlossaryCount */

$this->title = 'Create Glossary Count';
$this->params['breadcrumbs'][] = ['label' => 'Glossary Counts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glossary-count-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
