<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 02/11/2017
 * Time: 11.38
 */

namespace backend\models;


class Dusun extends BaseModel
{
    public function behaviors()
    {
        return [];
    }

    public static function tableName()
    {
        return 'dusun';
    }

    public static function primaryKey()
    {
        $primary_key = 'id';
        return array($primary_key);
    }

    public function attributeLabels()
    {
        $field = ['id', 'nama_dusun'];

        $attributeLabels = array();
        foreach ($field as $key) {
            $attributeLabels[$key] = ucwords(str_replace('_', ' ', $key));
        }

        return $attributeLabels;
    }

}