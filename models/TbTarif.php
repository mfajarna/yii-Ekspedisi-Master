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
 * @property string $service
 */
class TbTarif extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_tarif';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kota_asal', 'kota_tujuan', 'berat'], 'required'],
            [['tarif', 'service'], 'safe'],
            [['berat', 'tarif'], 'integer'],
            [['kota_asal', 'kota_tujuan', 'service'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kota_asal' => 'Kota Asal',
            'kota_tujuan' => 'Kota Tujuan',
            'berat' => 'Berat',
            'tarif' => 'Tarif',
            'service' => 'Service',
        ];
    }
}
