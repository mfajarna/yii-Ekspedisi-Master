<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_tarif".
 *
 * @property int $id
 * @property string $kota_asal
 * @property string $kota_tujuan
 * @property int $berat
 * @property int $tarif
 */
class Service extends \yii\db\ActiveRecord
{
 
    public static function tableName()
    {
        return 'tb_service';
    }


    public function rules()
    {
        return [
            [['service', 'deskripsi', 'estimasi'], 'required'],
            [['service', 'deskripsi','estimasi'], 'string', 'max' => 255],
        ];
    }

  
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service' => 'Service',
            'deskripsi' => 'Deskripsi',
            'estimasi' => 'estimasi',
        
        ];
    }
}
