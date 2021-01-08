<?php

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1> KOJAY EXPRESS</h1>

        <p class="lead">Trusted Delivery Platform!</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4"> </div>
            <div class="col-lg-4"> 
            <h4 class="text-center">Input Data</h4>
                <?php $form = ActiveForm::begin() ?>

                <?= $form->field($model, 'kota_asal')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'kota_tujuan')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'berat')->textInput(['maxlength' => true, 'type' => 'number']) ?>

                <div class="form-grup">
                <?= Html::submitButton('Check', ['create' => $model->id], ['class' => 'btn btn-primary']); ?>
            </div>
                <?php ActiveForm::end(); ?>
            
            </div>
            <div class="col-lg-4"> </div>
        
        </div>

    </div>
</div>
