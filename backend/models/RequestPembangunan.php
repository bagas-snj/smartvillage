<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 02/11/2017
 * Time: 19.27
 */

namespace backend\models;


class RequestPembangunan extends BaseModel
{
    public function behaviors()
    {
        return [];
    }

    public static function tableName()
    {
        return 'request_pembangunan';
    }

    public static function primaryKey()
    {
        $primary_key = 'id';
        return array($primary_key);
    }

    public function attributeLabels()
    {
        $field = ['id', 'judul', 'deskripsi','longitude','latitude', 'users_id','kategori_pembangunan_id','status'];

        $attributeLabels = array();
        foreach ($field as $key) {
            $attributeLabels[$key] = ucwords(str_replace('_', ' ', $key));
        }

        return $attributeLabels;
    }

    public  function getUser(){
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }
    public  function  getKategori(){
        return $this->hasOne(KategoriPembangunan::className(), ['id' => 'kategori_pembangunan_id']);
    }
}