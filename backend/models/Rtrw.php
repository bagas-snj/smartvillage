<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 24/11/2017
 * Time: 09.59
 */

namespace backend\models;


class Rtrw extends BaseModel
{

    public function behaviors()
    {
        return [];
    }

    public static function tableName()
    {
        return 'rt_rw';
    }

    public static function primaryKey()
    {
        $primary_key = 'id';
        return array($primary_key);
    }

    public function attributeLabels()
    {
        $field = ['id', 'rw_parent', 'rt_child', 'dusun_id'];

        $attributeLabels = array();
        foreach ($field as $key) {
            $attributeLabels[$key] = ucwords(str_replace('_', ' ', $key));
        }

        return $attributeLabels;
    }

    public  function getDusun(){
        return $this->hasOne(Dusun::className(), ['id' => 'dusun_id']);
    }
    public function getParent()
    {
        return $this->hasOne(Rtrw::className(), ['id' => 'rt_child']);
    }

    public function getChild()
    {
        return $this->hasMany(Rtrw::className(), ['rt_child' => 'id']);
    }

}