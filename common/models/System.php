<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "system".
 *
 * @property integer $id
 * @property string $webname
 * @property string $weburl
 * @property string $sitelogo
 * @property string $keywords
 * @property string $description
 * @property string $icp
 * @property string $addr
 * @property string $tel
 * @property string $count
 * @property string $introduction
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class System extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'system';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['webname', 'weburl', 'sitelogo', 'icp', 'addr', 'tel', 'count', 'created_at', 'updated_at'], 'required'],
            [['introduction'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['webname', 'weburl', 'sitelogo', 'keywords', 'description', 'icp', 'addr', 'tel', 'count'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'webname' => Yii::t('app', 'Webname'),
            'weburl' => Yii::t('app', 'Weburl'),
            'sitelogo' => Yii::t('app', 'Sitelogo'),
            'keywords' => Yii::t('app', 'Keywords'),
            'description' => Yii::t('app', 'Description'),
            'icp' => Yii::t('app', 'Icp'),
            'addr' => Yii::t('app', 'Addr'),
            'tel' => Yii::t('app', 'Tel'),
            'count' => Yii::t('app', 'Count'),
            'introduction' => Yii::t('app', 'Introduction'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    public  function  beforeSave($insert) {
        if(parent::beforeSave($insert)){
        //    $this->auth_key = Yii::$app->user->identity->username;
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
