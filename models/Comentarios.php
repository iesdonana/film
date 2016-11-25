<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comentarios".
 *
 * @property integer $id
 * @property string $cuerpo
 * @property integer $id_ficha
 *
 * @property Fichas $idFicha
 */
class Comentarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comentarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cuerpo', 'id_ficha'], 'required'],
            [['cuerpo'], 'string'],
            [['id_ficha'], 'integer'],
            [['id_ficha'], 'exist', 'skipOnError' => true, 'targetClass' => Fichas::className(), 'targetAttribute' => ['id_ficha' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cuerpo' => 'Cuerpo',
            'id_ficha' => 'Id Ficha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFicha()
    {
        return $this->hasOne(Fichas::className(), ['id' => 'id_ficha'])->inverseOf('comentarios');
    }
}
