<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $id
 * @property string $username
 * @property string $keywords
 * @property string $description
 * @property string $name
 * @property string $tel
 * @property string $mail
 * @property string $city
 * @property string $money
 * @property string $business
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[  'name', 'tel'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            ['tel','match','pattern'=>'/^1[0-9]{10}$/','message'=>'{attribute}必须为1开头的11位纯数字'],
            [['username', 'keywords', 'description', 'name', 'tel', 'mail', 'city', 'money', 'business'], 'string', 'max' => 255],
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
            'keywords' => Yii::t('app', 'Keywords'),
            'description' => Yii::t('app', 'Description'),
            'name' => Yii::t('app', '姓名'),
            'tel' => Yii::t('app', '电话'),
            'mail' => Yii::t('app', 'Mail'),
            'city' => Yii::t('app', '公司名字'),
            'money' => Yii::t('app', 'Money'),
            'business' => Yii::t('app', '项目说明'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }


    public  function  beforeSave($insert) {
        if(parent::beforeSave($insert)){
          //  $this->username = Yii::$app->user->identity->username;
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
