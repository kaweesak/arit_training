<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Classroom;

/**
 * ClassroomSearch represents the model behind the search form about `app\models\Classroom`.
 */
class ClassroomSearch extends Classroom
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'teacher_id'], 'integer'],
            [['course_id', 'opendate', 'recive', 'place', 'status', 'created_dt'], 'safe'],
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

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Classroom::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'class_id' => $this->class_id,
            'teacher_id' => $this->teacher_id,
            'created_dt' => $this->created_dt,
        ]);

        $query->andFilterWhere(['like', 'course_id', $this->course_id])
            ->andFilterWhere(['like', 'opendate', $this->opendate])
            ->andFilterWhere(['like', 'recive', $this->recive])
            ->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
