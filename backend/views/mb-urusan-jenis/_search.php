<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MbUrusanJenisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mb-urusan-jenis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mb_urusan_jenis_id') ?>

    <?= $form->field($model, 'mb_urusan_jenis_kode') ?>

    <?= $form->field($model, 'mb_urusan_jenis_nama') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
