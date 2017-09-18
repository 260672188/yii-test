<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "channel".
 *
 * @property integer $id
 * @property string $pid
 * @property string $title
 * @property string $auth_key
 * @property string $cid
 * @property string $description
 * @property string $keyword
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $type
 * @property integer $order
 */
class Channel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'channel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title',  'type'], 'required'],
            [['status', 'created_at', 'updated_at', 'order'], 'integer'],
            [['pid'], 'string', 'max' => 10],
            [['title', 'type'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['cid'], 'string', 'max' => 2],
            [['description'], 'string', 'max' => 200],
            [['keyword'], 'string', 'max' => 100],
            [['title'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'pid' => Yii::t('app', 'Pid'),
            'title' => Yii::t('app', 'Title'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'cid' => Yii::t('app', 'Cid'),
            'description' => Yii::t('app', 'Description'),
            'keyword' => Yii::t('app', 'Keyword'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'type' => Yii::t('app', 'Type'),
            'order' => Yii::t('app', 'Order'),
        ];
    }

    public  function  beforeSave($insert) {
        if(parent::beforeSave($insert)){
            $this->auth_key = Yii::$app->user->identity->username;
            if($insert){
                $this->created_at=time();
                $this->updated_at=time();
            }
            else
                $this->updated_at=time();
            return   TRUE;
        }  else
            return  FALSE;
    }
}
