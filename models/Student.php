<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property integer $classid
 * @property string $course_id
 * @property string $stucode
 * @property string $fname
 * @property string $lname
 * @property string $faculity
 * @property string $major
 * @property string $address
 * @property string $phone
 * @property string $score
 * @property string $past
 * @property string $status
 * @property string $created_dt
 */
class Student extends \yii\db\ActiveRecord
{
    public $captcha;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['classid'], 'integer'],
            [['stucode', 'fname', 'lname','captcha'], 'required'],
            [['address', 'past', 'status'], 'string'],
            [['created_dt'], 'safe'],
            [['course_id'], 'string', 'max' => 10],
            [['stucode', 'phone'], 'string', 'max' => 20],
            [['fname', 'lname', 'faculity', 'major', 'score'], 'string', 'max' => 255],
            [['captcha'], 'captcha']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'classid' => Yii::t('app', 'ห้องเรียน'),
            'course_id' => Yii::t('app', 'หลักสูตร'),
            'stucode' => Yii::t('app', 'รหัสนักศึกษา'),
            'fname' => Yii::t('app', 'ชื่อ'),
            'lname' => Yii::t('app', 'นามสกุล'),
            'faculity' => Yii::t('app', 'คณะ'),
            'major' => Yii::t('app', 'สาขา'),
            'address' => Yii::t('app', 'ที่อยู่'),
            'phone' => Yii::t('app', 'เบอร์โทรศัพท์'),
            'score' => Yii::t('app', 'คะแนน'),
            'past' => Yii::t('app', 'เกรด'),
            'status' => Yii::t('app', 'สถานะ'),
            'created_dt' => Yii::t('app', 'วันที่'),
        ];
    }
}
