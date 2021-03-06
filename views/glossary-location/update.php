<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GlossaryLocation */

$this->title = 'Update Glossary Location: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Glossary Locations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="glossary-location-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
