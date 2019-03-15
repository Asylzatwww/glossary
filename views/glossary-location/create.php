<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GlossaryLocation */

$this->title = 'Create Glossary Location';
$this->params['breadcrumbs'][] = ['label' => 'Glossary Locations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glossary-location-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
