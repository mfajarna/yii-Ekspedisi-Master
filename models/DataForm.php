<?php

namespace app\models;


use yii;
use yii\base\Model;


class DataForm extends Model
    {
        public $kota_asal;
        public $kota_tujuan;
        public $berat;
        public $tarif;



        public function rules()
        {
            return [
                [['kota_asal','kota_tujuan','berat'], 'required'],
                [['tarif'], 'safe'],
                [['berat', 'tarif'], 'integer']
            ];
        }
    }



?>