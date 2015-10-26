<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classroom".
 *
 * @property integer $class_id
 * @property string $course_id
 * @property string $opendate
 * @property string $recive
 * @property string $place
 * @property string $status
 * @property integer $teacher_id
 * @property string $created_dt
 */
class Classroom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'classroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'string'],
            [['teacher_id'], 'integer'],
            [['created_dt'], 'safe'],
            [['course_id', 'recive'], 'string', 'max' => 10],
            [['opendate', 'place'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'class_id' => Yii::t('app', 'ID'),
            'course_id' => Yii::t('app', 'หลักสูตร'),
            'opendate' => Yii::t('app', 'วันที่เปิดอบรม'),
            'recive' => Yii::t('app', 'รับจำนวน'),
            'place' => Yii::t('app', 'สถานที่เรียน'),
            'status' => Yii::t('app', 'สถานะ'),
            'teacher_id' => Yii::t('app', 'อาจารย์ผู้สอน'),
            'created_dt' => Yii::t('app', 'วันที่'),
        ];
    }

    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['course_id' => 'course_id']);
    }

}
