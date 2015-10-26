<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uploads".
 *
 * @property integer $id
 * @property string $ref
 * @property string $filename
 * @property string $realfilename
 * @property string $created_dt
 */
class Uploads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'uploads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_dt'], 'safe'],
            [['ref'], 'string', 'max' => 50],
            [['filename', 'realfilename'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ref' => Yii::t('app', 'Ref'),
            'filename' => Yii::t('app', 'Filename'),
            'realfilename' => Yii::t('app', 'Realfilename'),
            'created_dt' => Yii::t('app', 'Created Dt'),
        ];
    }
}
