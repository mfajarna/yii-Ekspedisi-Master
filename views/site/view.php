<?php

use yii\helpers\Html;

?>

<div class="tb-service-index">

   <div class="row">
        <div class="col-lg-6">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> <label>Dari : </label> <?= Html::encode($model->kota_asal) ?> </li>
            <li class="list-group-item"> <label>ke : </label> <?= Html::encode($model->kota_tujuan) ?> </li>
            <li class="list-group-item"> <label>Berat : </label> <?= Html::encode($model->berat) ?> </li>
            <li class="list-group-item"> <label>Tarif : </label> <?= Html::encode($model->tarif) ?> </li>
            <li class="list-group-item"> <label>Service : </label> <?= Html::encode($model->service) ?> </li>
        </ul>
        </div>   
   </div>
    
        

    <p>
        <?= Html::a('Export to Excel', ['create','id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Export to PDF', ['create','id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>


</div>