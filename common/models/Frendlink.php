<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "frendlink".
 *
 * @property integer $id
 * @property string $username
 * @property string $sitetitle
 * @property string $siteurl
 * @property string $pic
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Frendlink extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'frendlink';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sitetitle'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'sitetitle', 'siteurl', 'pic'], 'string', 'max' => 255],
            [['sitetitle'], 'unique'],
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
            'sitetitle' => Yii::t('app', 'Sitetitle'),
            'siteurl' => Yii::t('app', 'Siteurl'),
            'pic' => Yii::t('app', 'Pic'),
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
