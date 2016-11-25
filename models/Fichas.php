<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fichas".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $duracion
 * @property string $anyo
 *
 * @property Comentarios[] $comentarios
 */
class Fichas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fichas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo'], 'required'],
            [['duracion', 'anyo'], 'number'],
            [['titulo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'duracion' => 'Duracion',
            'anyo' => 'Anyo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentarios::className(), ['id_ficha' => 'id'])
                ->inverseOf('ficha');
    }
}
