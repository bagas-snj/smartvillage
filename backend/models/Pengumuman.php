<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 14/01/2018
 * Time: 18.48
 */

namespace backend\models;


class Pengumuman extends BaseModel
{
    public function behaviors()
    {
        return [];
    }

    public static function tableName()
    {
        return 'pengumuman';
    }

    public static function primaryKey()
    {
        $primary_key = 'id';
        return array($primary_key);
    }

    public function attributeLabels()
    {
        $field = ['id', 'perihal', 'isi', 'tgl_pengumuman'];

        $attributeLabels = array();
        foreach ($field as $key) {
            $attributeLabels[$key] = ucwords(str_replace('_', ' ', $key));
        }

        return $attributeLabels;
    }


    public static function findByName($name)
    {
        return Role::find()->where(['name'=>$name])->one();
    }

}
