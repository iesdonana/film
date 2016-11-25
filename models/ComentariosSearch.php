<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comentarios;

/**
 * ComentariosSearch represents the model behind the search form about `app\models\Comentarios`.
 */
class ComentariosSearch extends Comentarios
{
    public $titulo;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cuerpo'], 'safe'],
            [['titulo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function attributes()
    {
        return array_merge(['titulo'], parent::attributes());
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Comentarios::find()->select('comentarios.*, titulo')
                    ->innerJoin('fichas f', 'f.id = comentarios.id_ficha')
                    ->asArray();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['ilike', 'cuerpo', $this->cuerpo]);
        $query->andFilterWhere(['ilike', 'titulo', $this->titulo]);

        return $dataProvider;
    }
}
