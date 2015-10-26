<?php

namespace app\models;

use Yii;
use yii\web\uploadFile;

/**
 * This is the model class for table "course".
 *
 * @property string $course_id
 * @property string $course_name
 * @property integer $category_id
 * @property string $description
 * @property string $course_detail
 * @property string $duration
 * @property string $price
 * @property string $f_jan
 * @property string $f_feb
 * @property string $f_mar
 * @property string $f_apr
 * @property string $f_may
 * @property string $f_jun
 * @property string $f_july
 * @property string $f_aug
 * @property string $f_sep
 * @property string $f_oct
 * @property string $f_nov
 * @property string $f_dec
 * @property string $level
 * @property string $status
 * @property string $img
 * @property string $created
 *
 * @property Category $category
 */
class Course extends \yii\db\ActiveRecord
{
    public $course_image;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id'], 'required'],
            [['category_id'], 'integer'],
            [['description', 'course_detail', 'status', 'photo'], 'string'],
            [['price'], 'number'],
            [['created_dt', 'course_image', 'photo'], 'safe'],
            [['course_id', 'duration'], 'string', 'max' => 10],
            [['course_name', 'f_jan', 'f_feb', 'f_mar', 'f_apr', 'f_may', 'f_jun', 'f_july', 'f_aug', 'f_sep', 'f_oct', 'f_nov', 'f_dec', 'level'], 'string', 'max' => 255],
            [['course_id'], 'unique'],
            [['course_image'], 'file', 'extensions' => ['jpg', 'png', 'gif']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'course_id' => Yii::t('app', 'รหัสวิชา'),
            'course_name' => Yii::t('app', 'หลักสูตร'),
            'category_id' => Yii::t('app', 'หมวดหมู่'),
            'description' => Yii::t('app', 'รายละเอียดเบื้องต้น'),
            'course_detail' => Yii::t('app', 'รายละเอียด'),
            'duration' => Yii::t('app', 'ระยะเวลา(ชั่วโมง)'),
            'price' => Yii::t('app', 'ราคา'),
            'f_jan' => Yii::t('app', 'ม.ค.'),
            'f_feb' => Yii::t('app', 'ก.พ.'),
            'f_mar' => Yii::t('app', 'มี.ค.'),
            'f_apr' => Yii::t('app', 'เม.ย.'),
            'f_may' => Yii::t('app', 'พ.ค.'),
            'f_jun' => Yii::t('app', 'มิ.ย.'),
            'f_july' => Yii::t('app', 'ก.ค.'),
            'f_aug' => Yii::t('app', 'ส.ค.'),
            'f_sep' => Yii::t('app', 'ก.ย.'),
            'f_oct' => Yii::t('app', 'ต.ค.'),
            'f_nov' => Yii::t('app', 'พ.ย.'),
            'f_dec' => Yii::t('app', 'ธค.'),
            'level' => Yii::t('app', 'ระดับความยาก'),
            'status' => Yii::t('app', 'สถานะ'),
            'photo' => Yii::t('app', 'รูปภาพ'),
            'created_dt' => Yii::t('app', 'วันที่สร้าง'),
            'course_image' => Yii::t('app', 'รูปภาพ'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['category_id' => 'category_id']);
    }

    public function getClassroom()
    {
        return $this->hasMany(Classroom::className(), ['course_id' => 'course_id']);
    }
    
    public function getImageFile()
    {
        //return isset($this->avatar)?$this->avatar:
    }
}
