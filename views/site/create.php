<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbTarif */

$this->title = 'Transaksi Invoice Id: ' . $model->id;

?>
<div class="tb-tarif-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'list' => $list
    ]) ?>

</div>