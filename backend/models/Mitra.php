<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 18/12/2017
 * Time: 08.37
 */

namespace backend\models;


class Mitra extends BaseModel
{
    public function behaviors()
    {
        return [];
    }

    public static function tableName()
    {
        return 'mitra';
    }

    public static function primaryKey()
    {
        $primary_key = 'id';
        return array($primary_key);
    }

    public function attributeLabels()
    {
        $field = ['id', 'nama_mitra','alamat','no_telp','email','users_id'];

        $attributeLabels = array();
        foreach ($field as $key) {
            $attributeLabels[$key] = ucwords(str_replace('_', ' ', $key));
        }

        return $attributeLabels;
    }
    public  function getUserMitra(){
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }

}