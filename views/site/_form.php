<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbTarif */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-tarif-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kota_asal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kota_tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'berat')->textInput() ?>

    <?php

    if($model->berat > 5)
    {
        ?>
        <input type="text" name="TbTarif[tarif]" class="form-control" id="ongkir" placeholder="Ongkir" value=30000>
        <?php
    }
    else{

        ?>
        <input type="text" name="TbTarif[tarif]" class="form-control" id="ongkir" placeholder="Ongkir" value=20000>
        <?php
    }

    
    
    ?>

    <?= $form->field($model, 'service')->dropDownList(
        $list, ['prompt' => 'Select Service']
    ); ?>   


    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>