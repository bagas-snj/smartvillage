<?php

namespace backend\models;

class Role extends BaseModel
{
    public function behaviors()
    {
        return [];
    }

    public static function tableName()
    {
        return 'roles';
    }

    public static function primaryKey()
    {
        $primary_key = 'id';
        return array($primary_key);
    }

    public function attributeLabels()
    {
        $field = ['id', 'name', 'icon', 'sort'];

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
