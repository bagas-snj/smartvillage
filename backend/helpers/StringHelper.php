<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 22/10/2017
 * Time: 01.59
 */

namespace backend\helpers;


class StringHelper
{
    public static function getAlias($string){
        $alias = str_replace(' ', '-', strtolower(strip_tags($string)));
        $alias = preg_replace('/[^A-Za-z0-9\-]/', '', $alias);

        return $alias;
    }

}