<?php

namespace common\models;

use Yii;
use common\helpers\Tree;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $title
 * @property integer $pid
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $slug
 * @property string $description
 * @property string $descriptions
 * @property string $keywords
 * @property integer $article
 * @property integer $sort
 * @property string $module
 */
class Category extends \yii\db\ActiveRecord
{
    private static $_items = array();
    private $cen;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title',  'slug'], 'required'],
            [['pid', 'created_at', 'updated_at', 'article', 'sort'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['slug'], 'string', 'max' => 20],
            [['description', 'keywords', 'module'], 'string', 'max' => 255],
            [['descriptions'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'pid' => Yii::t('app', 'Pid'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'slug' => Yii::t('app', 'Slug'),
            'description' => Yii::t('app', 'Description'),
            'descriptions' => Yii::t('app', 'Descriptions'),
            'keywords' => Yii::t('app', 'Keywords'),
            'article' => Yii::t('app', 'Article'),
            'sort' => Yii::t('app', 'Sort'),
            'module' => Yii::t('app', 'Module'),
        ];
    }

    /*
     * 修改后的 按照模型分类的tree
     * 修改时间: 2016年9月2日14:06:39
     *  author:  alen
     */

    public static function tree($list= null,$module=null)
    {

        if (is_null($list) & is_null($module)) {
            $list = self::find()->asArray()->all();
        }
        elseif (is_null($list) & $module == 'new') {
            $list = self::find()->where(['module' => 'new'])->asArray()->all();
        } elseif   (is_null($list) & $module == 'pro') {
        $list = self::find()->where(['module' => 'pro'])->asArray()->all();
        }
        $tree = Tree::build($list);
        return $tree;
    }

    /*
     * 原始的 tree
     */
    public static function treeb($list = null)
    {
        if (is_null($list)) {
            $list = self::find()->asArray()->all();
        }

        $tree = Tree::build($list);
        return $tree;
    }


    /**
     * 分类名下拉列表
     */
    public static function getDropDownlist($tree = [], &$result = [], $deep = 0, $separator = '　', $separators = '└─')
    {
        if (empty($tree)) {
            $tree = self::tree();
        }
        $deep++;
        foreach ($tree as $list) {
            if ($deep ==1) {
                $result[$list['id']] =   $list['title'];
            } elseif ($deep >1) {
                $result[$list['id']] = str_repeat( $separator, $deep - 1) .  $separators . $list['title'];
            }
            if (isset($list['children'])) {
                self::getDropDownlist($list['children'], $result, $deep);
            }
        }
        return $result;
    }


    /**
     * 分类名下拉列表 备份
     */
    public static function getDropDownlistb($tree = [], &$result = [], $deep = 0, $separator = '　', $separators = '└─')
    {
        if (empty($tree)) {
            $tree = self::tree();
        }
        $deep++;
        foreach ($tree as $list) {
            if ($deep ==1) {
                $result[$list['id']] =   $list['title'];
            } elseif ($deep >1) {
                $result[$list['id']] = str_repeat( $separator, $deep - 1) .  $separators . $list['title'];
            }
            if (isset($list['children'])) {
                self::getDropDownlist($list['children'], $result, $deep);
            }
        }
        return $result;
    }


    /**
     * 获取分类名
     */
    public   function getPtitle( )
    {
        return static::find()->select('title')->where(['id' => $this->pid])->scalar();
    }


    //写入时间
    public  function  beforeSave($insert) {
        if(parent::beforeSave($insert)){

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


//下拉列表  原始版本
    public static function items($module) {
        if (!isset(self::$_items[$module]))
            self::loadItems($module);
        return self::$_items[$module];
    }

    public static function item($module, $id) {
        if (!isset(self::$_items[$module]))
            self::loadItems($module);
        return isset(self::$_items[$module][$id]) ? self::$_items[$module][$id] : false;
    }

    private static function loadItems($module) {
        self::$_items[$module] = array();
        $models = self::findAll(['module' => $module]);
        foreach ($models as $model)
            self::$_items[$module][$model->id] = $model->title;
    }

/*
 *
 *
 */
    public function getCategoryNameById($id)
    {
        $list = $this->lists();

        return isset($list[$id]) ? $list[$id] : null;
    }

    public static function getIdByName($name)
    {
        $list = self::lists();

        return array_search($name, $list);
    }

    public static function findByIdOrSlug($id)
    {
        if (intval($id) == 0) {
            $condition = ["slug" => $id];
        } else {
            $condition = [
                $id
            ];
        }

        return static::findOne($condition);
    }

    /*
     *
     *
     */


}
