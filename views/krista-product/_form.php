<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KristaProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="krista-product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'autor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'short_story')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'full_story')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'xfields')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_seo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comm_num')->textInput() ?>

    <?= $form->field($model, 'allow_comm')->textInput() ?>

    <?= $form->field($model, 'allow_main')->textInput() ?>

    <?= $form->field($model, 'approve')->textInput() ?>

    <?= $form->field($model, 'fixed')->textInput() ?>

    <?= $form->field($model, 'allow_br')->textInput() ?>

    <?= $form->field($model, 'symbol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metatitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_date')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'old_price')->textInput() ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= $form->field($model, 'related')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'label')->textInput() ?>

    <?= $form->field($model, 'action_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yadirect')->textInput() ?>

    <?= $form->field($model, 'yamarket')->textInput() ?>

    <?= $form->field($model, 'yamarket_descr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rst')->textInput() ?>

    <?= $form->field($model, 'warranty')->textInput() ?>

    <?= $form->field($model, 'sort_index')->textInput() ?>

    <?= $form->field($model, 'filters')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bonus_price')->textInput() ?>

    <?= $form->field($model, 'sale_percent')->textInput() ?>

    <?= $form->field($model, 'specifications')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'specifications_parsed')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'site_id')->textInput() ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'collection')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sizes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'art')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube_video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'components')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cost_price')->textInput() ?>

    <?= $form->field($model, 'production_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
