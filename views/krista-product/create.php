<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KristaProduct */

$this->title = 'Create Krista Product';
$this->params['breadcrumbs'][] = ['label' => 'Krista Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="krista-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
