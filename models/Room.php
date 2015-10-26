<?php

namespace app\models;

use Yii;
use \yii\web\UploadedFile;
use \yii\helpers\ArrayHelper;
use \yii\helpers\Html;
/**
 * This is the model class for table "room".
 *
 * @property integer $roomid
 * @property string $roomname
 * @property string $roomnum
 * @property string $capacity
 * @property string $description
 * @property string $color
 * @property string $photo
 *@property string $status
 * @property string $created_dt
 */
class Room extends \yii\db\ActiveRecord
{
  public $upload_foler='uploads/room';
  public $room_img;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['roomname', 'roomnum'], 'required'],
            [['description', 'status'], 'string'],
            [['created_dt'], 'safe'],
            [['roomname', 'capacity', 'color', 'photo'], 'string', 'max' => 255],
            [['roomnum'], 'string', 'max' => 100],
            [['room_img'],'file','skipOnEmpty'=>true,'on'=>'update','maxFiles' => 6,'extensions'=>'jpg,png,gif']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'roomid' => Yii::t('app', 'ID'),
            'roomname' => Yii::t('app', 'ชื่อห้อง'),
            'roomnum' => Yii::t('app', 'หมายเลขห้อง'),
            'capacity' => Yii::t('app', 'ความจุ(คน)'),
            'description' => Yii::t('app', 'รายละเอียด'),
            'color' => Yii::t('app', 'สีประจำห้อง'),
            'photo' => Yii::t('app', 'รูปภาพ'),
            'status' => Yii::t('app', 'สถานะห้อง'),
            'created_dt' => Yii::t('app', 'วันที่'),
            'room_img'=>Yii::t('app', 'รูปภาพ'),
        ];
    }

    public function getEvent()
    {
        return $this->hasMany(Event::className(), ['roomid' => 'roomid']);
    }

    public function upload($model,$attribute)
    {
        $photo  = UploadedFile::getInstance($model, $attribute);
          $path = $this->getUploadPath();
        if ($this->validate() && $photo !== null) {
            $fileName = md5($photo->baseName.time()) . '.' . $photo->extension;
            //$fileName = $photo->baseName . '.' . $photo->extension;
            if($photo->saveAs($path.$fileName)){
              return $fileName;
            }
        }
        return $model->isNewRecord ? false : $model->getOldAttribute($attribute);
    }

    public function uploadMultiple($model,$attribute)
    {
      $photos  = UploadedFile::getInstances($model, $attribute);
      $path = $this->getUploadPath();
      if ($this->validate() && $photos !== null) {
          $filenames = [];
          foreach ($photos as $file) {
                  $filename = md5($file->baseName.time()) . '.' . $file->extension;
                  if($file->saveAs($path . $filename)){
                    $filenames[] = $filename;
                  }
          }
          if($model->isNewRecord){
            return implode(',', $filenames);
          }else{
            return implode(',',(ArrayHelper::merge($filenames,$model->getOwnPhotosToArray())));
          }
      }
      return $model->isNewRecord ? false : $model->getOldAttribute($attribute);
    }

    public function getUploadPath(){
      return Yii::getAlias('@webroot').'/'.$this->upload_foler.'/';
    }

    public function getUploadUrl(){
      return Yii::getAlias('@web').'/'.$this->upload_foler.'/';
    }

    public function getPhotoViewer(){
      return empty($this->photo) ? Yii::getAlias('@web').'/img/none.png' : $this->getUploadUrl().$this->photo;
    }

    public function getPhotosViewer(){
      $photos = $this->photo ? @explode(',',$this->photo) : [];
      $img = '';
      foreach ($photos as  $photo) {
        $img.= ' '.Html::img($this->getUploadUrl().$photo,['class'=>'img-thumbnail','style'=>'max-width:300px;']);
      }
      return $img;
    }

    public function getOwnPhotosToArray()
    {
      return $this->getOldAttribute('room_img') ? @explode(',',$this->getOldAttribute('room_img')) : [];
    }
}
