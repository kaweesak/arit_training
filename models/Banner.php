<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id
 * @property string $filename
 * @property string $caption
 * @property string $status
 */
class Banner extends \yii\db\ActiveRecord
{
  public $banner_img;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['caption','status'], 'required'],
            [['status'], 'string'],
            [['filename', 'caption'], 'string', 'max' => 255],
            [['banner_img'],'file','skipOnEmpty'=>true,'on'=>'update','extensions'=>'jpg,png,gif']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'filename' => Yii::t('app', 'รูปภาพ'),
            'caption' => Yii::t('app', 'Caption'),
            'status' => Yii::t('app', 'สถานะ'),
            'banner_img' => Yii::t('app', 'รูปภาพ'),
        ];
    }
}
