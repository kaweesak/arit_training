<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentSearch represents the model behind the search form about `app\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'classid'], 'integer'],
            [['course_id', 'stucode', 'fname', 'lname', 'faculity', 'major', 'address', 'phone', 'score', 'past', 'status', 'created_dt'], 'safe'],
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
        $query = Student::find();

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
            'id' => $this->id,
            'classid' => $this->classid,
            'created_dt' => $this->created_dt,
        ]);

        $query->andFilterWhere(['like', 'course_id', $this->course_id])
            ->andFilterWhere(['like', 'stucode', $this->stucode])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'faculity', $this->faculity])
            ->andFilterWhere(['like', 'major', $this->major])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'score', $this->score])
            ->andFilterWhere(['like', 'past', $this->past])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
