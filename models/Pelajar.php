<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelajar".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $tgl_lahir
 * @property string $jekel
 * @property string $alamat
 * @property int $id_fakultas
 *
 * @property Fakultas $fakultas
 */
class Pelajar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    
    public static function tableName()
    {
        return 'pelajar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'tgl_lahir', 'jekel', 'alamat', 'id_fakultas'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['id_fakultas'], 'integer'],
            [['nim'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 35],
            [['jekel'], 'string', 'max' => 15],
            [['alamat'], 'string', 'max' => 100],
            [['id_fakultas'], 'exist', 'skipOnError' => true, 'targetClass' => Fakultas::className(), 'targetAttribute' => ['id_fakultas' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'tgl_lahir' => 'Tgl Lahir',
            'jekel' => 'Jekel',
            'alamat' => 'Alamat',
            'id_fakultas' => 'Id Fakultas',
        ];
    }

    /**
     * Gets query for [[Fakultas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFakultas()
    {
        return $this->hasOne(Fakultas::className(), ['id' => 'id_fakultas']);
    }
}
