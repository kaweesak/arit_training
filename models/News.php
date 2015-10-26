<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $newsid
 * @property integer $userid
 * @property string $topic
 * @property string $detail
 * @property string $created_dt
 * @property string $updated_dt
 * @property integer $view
 * @property string $status
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'topic', 'created_dt', 'updated_dt', 'status'], 'required'],
            [['userid', 'view'], 'integer'],
            [['detail', 'status'], 'string'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['topic'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'newsid' => Yii::t('app', 'ID'),
            'userid' => Yii::t('app', 'Userid'),
            'topic' => Yii::t('app', 'หัวข้อข่าว'),
            'detail' => Yii::t('app', 'เนื้อหา'),
            'created_dt' => Yii::t('app', 'Created Dt'),
            'updated_dt' => Yii::t('app', 'Updated Dt'),
            'view' => Yii::t('app', 'จำนวนการเข้าชม'),
            'status' => Yii::t('app', 'สถานะ'),
        ];
    }
}
