<?php

namespace backend\controllers;

use backend\helpers\StringHelper;
use backend\models\Role;
use backend\models\User;
use Yii;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\helpers\Url;


class BaseController extends Controller
{
    public function behaviors()
    {
        self::initialize();
        return [];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    private function initialize()
    {

        $this->layout = 'main.tpl';
    }


    public static function isLogin()
    {
        $isLogin = Yii::$app->session->get('user', false);
        return $isLogin ? true : false;
    }

    public static function isAdmin()
    {
        $isAdmin = Yii::$app->session->get('user', false);
        $group = Role::findByName('admin');

        return $isAdmin->role->id == $group->id ? true : false;
    }

    public static function isKades()
    {
        $isAdmin = Yii::$app->session->get('user', false);
        $group = Role::findByName('kades');

        return $isAdmin->role->id == $group->id ? true : false;
    }

    public static function isOperator()
    {
        $isAdmin = Yii::$app->session->get('user', false);
        $group = Role::findByName('operator');
        return $isAdmin->role->id == $group->id ? true : false;
    }


    public function getTime()
    {
        $dateTime = \DateTime::createFromFormat("d/m/Y  H:i:s", '31/01/2015');
        return $dateTime->format('m-d-Y H:i:s');
    }

    public static function getActiveUser()
    {
        return Yii::$app->session->get('user', null);
    }

    public static function throw404Error($message=null)
    {
        throw new NotFoundHttpException($message);
    }
}
