<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_service".
 *
 * @property int $id
 * @property string $service
 * @property string $deskripsi
 * @property string $estimasi
 */
class TbService extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service', 'deskripsi', 'estimasi'], 'required'],
            [['service', 'deskripsi', 'estimasi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service' => 'Service',
            'deskripsi' => 'Deskripsi',
            'estimasi' => 'Estimasi',
        ];
    }
}
