<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis1".
 *
 * @property int $id
 * @property string $nama_jenis
 * @property string $keterangan
 */
class Jenis1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_jenis', 'keterangan'], 'required'],
            [['nama_jenis', 'keterangan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_jenis' => 'Nama Jenis',
            'keterangan' => 'Keterangan',
        ];
    }
}
