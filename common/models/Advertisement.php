<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "advertisement".
 *
 * @property integer $id
 * @property string $username
 * @property string $title
 * @property string $pic
 * @property string $content
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Advertisement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advertisement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'title', 'pic','content'], 'required'],
            [['content'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'title', 'pic'], 'string', 'max' => 255],
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
            'username' => Yii::t('app', 'Username'),
            'title' => Yii::t('app', 'Title'),
            'pic' => Yii::t('app', 'Pic'),
            'content' => Yii::t('app', 'Content'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    public  function  beforeSave($insert) {
        if(parent::beforeSave($insert)){
            $this->username = Yii::$app->user->identity->username;
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
