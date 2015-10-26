<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "roomreg".
 *
 * @property integer $rid
 * @property string $username
 * @property string $company
 * @property string $phone
 * @property string $capacity
 * @property string $usedate
 * @property string $description
 * @property string $status
 * @property string $created_dt
 */
class Roomreg extends \yii\db\ActiveRecord
{
  public $captcha;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roomreg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'company','phone', 'capacity', 'usedate','captcha'], 'required'],
            [['description', 'status'], 'string'],
            [['created_dt'], 'safe'],
            [['username', 'company', 'usedate'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 50],
            [['capacity'], 'string', 'max' => 10],
            [['captcha'], 'captcha']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rid' => Yii::t('app', 'Rid'),
            'username' => Yii::t('app', 'ชื่อผู้ติดต่อ'),
            'company' => Yii::t('app', 'หน่วยงาน'),
            'phone' => Yii::t('app', 'เบอร์ติดต่อ'),
            'capacity' => Yii::t('app', 'จำนวนผู้เข้าอบรม'),
            'usedate' => Yii::t('app', 'วันที่อบรม'),
            'description' => Yii::t('app', 'รายละเอียดอื่นๆ'),
            'status' => Yii::t('app', 'สถานะ'),
            'created_dt' => Yii::t('app', 'วันที่'),
        ];
    }
}
