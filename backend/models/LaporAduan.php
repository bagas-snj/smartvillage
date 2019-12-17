<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 02/11/2017
 * Time: 19.28
 */

namespace backend\models;


class LaporAduan extends BaseModel
{
    public function behaviors()
    {
        return [];
    }

    public static function tableName()
    {
        return 'lapor_aduan';
    }

    public static function primaryKey()
    {
        $primary_key = 'id';
        return array($primary_key);
    }

    public function attributeLabels()
    {
        $field = ['id', 'foto', 'deskripsi', 'users_id','pembangunan_id','status'];

        $attributeLabels = array();
        foreach ($field as $key) {
            $attributeLabels[$key] = ucwords(str_replace('_', ' ', $key));
        }

        return $attributeLabels;
    }

    public  function getUser(){
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }
    public  function  getPembangunan(){
        return $this->hasOne(Pembangunan::className(), ['id' => 'pembangunan_id']);
    }


}