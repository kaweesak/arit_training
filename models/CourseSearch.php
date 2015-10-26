<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Course;

/**
 * CourseSearch represents the model behind the search form about `app\models\Course`.
 */
class CourseSearch extends Course
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id', 'course_name', 'description', 'course_detail', 'duration', 'f_jan', 'f_feb', 'f_mar', 'f_apr', 'f_may', 'f_jun', 'f_july', 'f_aug', 'f_sep', 'f_oct', 'f_nov', 'f_dec', 'level', 'status', 'photo', 'created_dt'], 'safe'],
            [['category_id'], 'integer'],
            [['price'], 'number'],
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
        $query = Course::find();

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
            'category_id' => $this->category_id,
            'price' => $this->price,
            'created_dt' => $this->created_dt,
        ]);

        $query->andFilterWhere(['like', 'course_id', $this->course_id])
            ->andFilterWhere(['like', 'course_name', $this->course_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'course_detail', $this->course_detail])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'f_jan', $this->f_jan])
            ->andFilterWhere(['like', 'f_feb', $this->f_feb])
            ->andFilterWhere(['like', 'f_mar', $this->f_mar])
            ->andFilterWhere(['like', 'f_apr', $this->f_apr])
            ->andFilterWhere(['like', 'f_may', $this->f_may])
            ->andFilterWhere(['like', 'f_jun', $this->f_jun])
            ->andFilterWhere(['like', 'f_july', $this->f_july])
            ->andFilterWhere(['like', 'f_aug', $this->f_aug])
            ->andFilterWhere(['like', 'f_sep', $this->f_sep])
            ->andFilterWhere(['like', 'f_oct', $this->f_oct])
            ->andFilterWhere(['like', 'f_nov', $this->f_nov])
            ->andFilterWhere(['like', 'f_dec', $this->f_dec])
            ->andFilterWhere(['like', 'level', $this->level])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
