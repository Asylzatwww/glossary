<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KristaProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="krista-product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'autor') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'short_story') ?>

    <?= $form->field($model, 'full_story') ?>

    <?php // echo $form->field($model, 'xfields') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'title_seo') ?>

    <?php // echo $form->field($model, 'vendor') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'descr') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'alt_name') ?>

    <?php // echo $form->field($model, 'comm_num') ?>

    <?php // echo $form->field($model, 'allow_comm') ?>

    <?php // echo $form->field($model, 'allow_main') ?>

    <?php // echo $form->field($model, 'approve') ?>

    <?php // echo $form->field($model, 'fixed') ?>

    <?php // echo $form->field($model, 'allow_br') ?>

    <?php // echo $form->field($model, 'symbol') ?>

    <?php // echo $form->field($model, 'tags') ?>

    <?php // echo $form->field($model, 'metatitle') ?>

    <?php // echo $form->field($model, 'order_date') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'old_price') ?>

    <?php // echo $form->field($model, 'stock') ?>

    <?php // echo $form->field($model, 'related') ?>

    <?php // echo $form->field($model, 'label') ?>

    <?php // echo $form->field($model, 'action_url') ?>

    <?php // echo $form->field($model, 'yadirect') ?>

    <?php // echo $form->field($model, 'yamarket') ?>

    <?php // echo $form->field($model, 'yamarket_descr') ?>

    <?php // echo $form->field($model, 'rst') ?>

    <?php // echo $form->field($model, 'warranty') ?>

    <?php // echo $form->field($model, 'sort_index') ?>

    <?php // echo $form->field($model, 'filters') ?>

    <?php // echo $form->field($model, 'bonus_price') ?>

    <?php // echo $form->field($model, 'sale_percent') ?>

    <?php // echo $form->field($model, 'specifications') ?>

    <?php // echo $form->field($model, 'specifications_parsed') ?>

    <?php // echo $form->field($model, 'site_id') ?>

    <?php // echo $form->field($model, 'brand') ?>

    <?php // echo $form->field($model, 'collection') ?>

    <?php // echo $form->field($model, 'sizes') ?>

    <?php // echo $form->field($model, 'art') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'youtube_video') ?>

    <?php // echo $form->field($model, 'components') ?>

    <?php // echo $form->field($model, 'cost_price') ?>

    <?php // echo $form->field($model, 'production_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
