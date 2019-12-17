<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 02/11/2017
 * Time: 11.34
 */

namespace backend\models;


class Penduduk extends BaseModel
{
    public function behaviors()
    {
        return [];
    }

    public static function tableName()
    {
        return 'penduduk';
    }

    public static function primaryKey()
    {
        $primary_key = 'id';
        return array($primary_key);
    }

    public function attributeLabels()
    {
        $field = ['id', 'nik','nama_lengkap','tempat_lahir','tanggal_lahir','jenis_kelamin','agama_id','status_perkawinan','pekerjaan_id','penddikan_id','rt_rw_id'];

        $attributeLabels = array();
        foreach ($field as $key) {
            $attributeLabels[$key] = ucwords(str_replace('_', ' ', $key));
        }

        return $attributeLabels;
    }
    public  function getAgama(){
        return $this->hasOne(Agama::className(), ['id' => 'agama_id']);
    }
    public  function getPekerjaan(){
        return $this->hasOne(Pekerjaan::className(), ['id' => 'pekerjaan_id']);
    }
    public  function getPendidikan(){
        return $this->hasOne(Pendidikan::className(), ['id' => 'pendidikan_id']);
    }
    public  function getRt(){
        return $this->hasOne(User::className(), ['id' => 'rt_rw_id']);
    }


}