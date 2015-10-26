<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use app\models\Room;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string $title
 * @property string $roomid
 * @property string $start
 * @property string $finish
 * @property string $note
 * @property integer $is_allday
 * @property string $created
 */
class Event extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title', 'roomid', 'start', 'finish'], 'required'],
            [['start', 'finish', 'created'], 'safe'],
            [['is_allday'], 'integer'],
            [['title', 'note'], 'string', 'max' => 255],
            [['roomid'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', '#'),
            'title' => Yii::t('app', 'หัวข้ออบรม'),
            'roomid' => Yii::t('app', 'ห้อง'),
            'start' => Yii::t('app', 'เริ่มต้น'),
            'finish' => Yii::t('app', 'สิ้นสุด'),
            'note' => Yii::t('app', 'หมายเหตุ'),
            'is_allday' => Yii::t('app', 'Allday'),
            'created' => Yii::t('app', 'วันที่'),
        ];
    }

    public function getRoom() {
        return $this->hasOne(Room::className(), ['roomid' => 'roomid']);
    }

    public function getRoomList() {
        $list = Room::find()->where(['status' => 'Y'])->all();
        return ArrayHelper::map($list, 'roomid', 'roomname');
    }

}
