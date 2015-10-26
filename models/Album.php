<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
/**
 * This is the model class for table "album".
 *
 * @property integer $id
 * @property string $ref
 * @property string $name
 * @property string $created_dt
 */
class Album extends \yii\db\ActiveRecord
{
  const UPLOAD_FOLDER='uploads/photolibrarys';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'album';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created_dt'], 'safe'],
            [['ref'], 'string', 'max' => 50],
            [['name'], 'string', 'max' => 255],
            [['ref'], 'unique']
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
            'name' => Yii::t('app', 'ชื่อแกลเลอรี่'),
            'created_dt' => Yii::t('app', 'วันที่'),
        ];
    }

    public static function getUploadPath(){
        return Yii::getAlias('@webroot').'/'.self::UPLOAD_FOLDER.'/';
    }

    public static function getUploadUrl(){
        return Url::base(true).'/'.self::UPLOAD_FOLDER.'/';
    }

    public function getThumbnails($ref,$name){
         $uploadFiles   = Uploads::find()->where(['ref'=>$ref])->all();
         $preview = [];
        foreach ($uploadFiles as $file) {
            $preview[] = [
                'url'=>self::getUploadUrl(true).$ref.'/'.$file->realfilename,
                'src'=>self::getUploadUrl(true).$ref.'/thumbnail/'.$file->realfilename,
                'options' => ['title' => $name]
            ];
        }
        return $preview;
    }


}
