<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

use kartik\widgets\ActiveForm;

use backend\models\MbRekeningStruk;
/* @var $this yii\web\View */
/* @var $model backend\models\MbRekeningKelompok */
/* @var $form yii\widgets\ActiveForm */
$form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]);
?>
<div class="box box-default">
	<div class="box-header with-border">
		<h3 class="box-title"><?= $model->isNewRecord ? 'Tambah Data' : 'Edit Data' ?></h3>

		<div class="box-tools pull-right">
			<?= Html::a('<i class="fa fa-reply" aria-hidden="true"></i> Kembali', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
			<?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-check" aria-hidden="true"></i> Simpan' : '<i class="fa fa-check" aria-hidden="true"></i> Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-sm' : 'btn btn-primary btn-sm']) ?>
		</div>
	</div>
	<div class="box-body">
		<!--?= $form->field($model, 'mb_rekening_struk_id')->textInput() ?-->
		<?= $form->field($model, 'mb_rekening_struk_id')->dropDownList(
             ArrayHelper::map(MbRekeningStruk::find()->all(),'mb_rekening_struk_id','mb_rekening_struk_nama'),
            [
                'prompt'=>'---Pilih Struk Rekening---',
            ]); ?>

	    <?= $form->field($model, 'mb_rekening_kelompok_kode')->textInput() ?>

	    <?= $form->field($model, 'mb_rekening_kelompok_nama')->textInput(['maxlength' => true]) ?>

	    <?= $form->field($model, 'mb_rekening_kelompok_ket')->textInput(['maxlength' => true]) ?>
	</div>
</div>
<?php ActiveForm::end(); ?>
