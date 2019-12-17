<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 26/11/2017
 * Time: 19.33
 */

namespace backend\models;


use yii\base\Model;

class LoginInfo extends Model
{
    public $id;
    public $username;

    public function rules()
    {
        return
            [
                [['id', 'username'], 'required'],
                [['id'], 'integer'],
                [['username'],'trim'],
                [['username'], 'exist', 'targetClass' => '\backend\models\User'],
            ];
    }

    public function importUser(User $user)
    {
        $this->id = $user->id;
        $this->username = $user->username;
        return $this;
    }

}