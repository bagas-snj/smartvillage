<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 02/11/2017
 * Time: 11.36
 */

namespace backend\models;


class Pekerjaan extends  BaseModel
{
    public function behaviors()
    {
        return [];
    }

    public static function tableName()
    {
        return 'pekerjaan';
    }

    public static function primaryKey()
    {
        $primary_key = 'id';
        return array($primary_key);
    }

    public function attributeLabels()
    {
        $field = ['id', 'pekerjaan'];

        $attributeLabels = array();
        foreach ($field as $key) {
            $attributeLabels[$key] = ucwords(str_replace('_', ' ', $key));
        }

        return $attributeLabels;
    }


}