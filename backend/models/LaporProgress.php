<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 18/12/2017
 * Time: 10.53
 */

namespace backend\models;


class LaporProgress extends BaseModel
{
    public function behaviors()
    {
        return [];
    }

    public static function tableName()
    {
        return 'lapor_progress';
    }

    public static function primaryKey()
    {
        $primary_key = 'id';
        return array($primary_key);
    }

    public function attributeLabels()
    {
        $field = ['id','image','tanggal','capaian_progress','uraian_pekerjaan','pembangunan_id'];

        $attributeLabels = array();
        foreach ($field as $key) {
            $attributeLabels[$key] = ucwords(str_replace('_', ' ', $key));
        }

        return $attributeLabels;
    }
    public  function getPembangunan(){
        return $this->hasOne(Pembangunan::className(), ['id' => 'pembangunan_id']);
    }

}