<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 02/11/2017
 * Time: 19.26
 */

namespace backend\models;
use yii\helpers\Url;


class Pembangunan extends BaseModel
{
    public function behaviors()
    {
        return [];
    }

    public static function tableName()
    {
        return 'pembangunan';
    }

    public static function primaryKey()
    {
        $primary_key = 'id';
        return array($primary_key);
    }

    public function attributeLabels()
    {
        $field = ['id', 'nama_pembangunan','foto','anggaran','tgl_mulai','tgl_selesai','longitude','latitude','keterangan','prosentase','sumber_dana_pembangunan_id','kategori_pembangunan_id','status_pembangunan_id','users_id','mitra_id'];

        $attributeLabels = array();
        foreach ($field as $key) {
            $attributeLabels[$key] = ucwords(str_replace('_', ' ', $key));
        }

        return $attributeLabels;
    }

    public  function getUser(){
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }
    public  function getSumber(){
        return $this->hasOne(SumberDanaPembangunan::className(), ['id' => 'sumber_dana_pembangunan_id']);
    }
    public  function getKategori(){
        return $this->hasOne(KategoriPembangunan::className(), ['id' => 'kategori_pembangunan_id']);
    }
    public  function getStatus(){
        return $this->hasOne(StatusPembangunan::className(), ['id' => 'status_pembangunan_id']);
    }
    public  function getMitra(){
        return $this->hasOne(Mitra::className(), ['id' => 'mitra_id']);
    }
    public  function getLaporan(){
        return $this->hasOne(LaporProgress::className(), ['pembangunan_id' => 'id']);
    }



}