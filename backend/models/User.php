<?php

namespace backend\models;

use Yii;
use yii\db\Expression;
use yii\helpers\Url;
use yii\web\IdentityInterface;
use yii\web\UploadedFile;
use yii\base\NotSupportedException;

class User extends BaseModel implements IdentityInterface
{
    public $imageFile;
    
    public function behaviors()
    {
        return parent::behaviors();
    }

    public static function tableName()
    {
        return 'users';
    }

    public static function primaryKey()
    {
        $primary_key = 'id';
        return array($primary_key);
    }

    public function attributeLabels()
    {
        $field = ['id', 'roles_id', 'name', 'username', 'password','auth_key','access_token','password_reset_token', 'email', 'photo', 'last_login','penduduk_id', 'created_at', 'updated_at', 'deleted_at'];

        $attributeLabels = array();
        foreach ($field as $key) {
            $attributeLabels[$key] = ucwords(str_replace('_', ' ', $key));
        }

        return $attributeLabels;
    }

    public function getRole()
    {
        return $this->hasOne(Role::className(), ['id' => 'roles_id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    public function getPenduduk()
    {
        return $this->hasOne(Penduduk::className(), ['id' => 'penduduk_id']);
    }



    public function getDisplayPhoto()
    {
        if(strlen($this->photo) > 0 && is_file('uploads/user/'.$this->photo)){
            return Url::home(true).'uploads/user/'.$this->photo;
        } else{
            return Url::home(true).'img/user.jpg';
        }
    }

    public function roleAs($roleList)
    {
        $roleList = explode("|", $roleList);
        if(in_array($this->role->name, $roleList)){
            return true;
        } else{
            return false;
        }
    }

    public function memberOf($groupList)
    {
        $groupList = explode("|", $groupList);
        if(in_array($this->role->group->alias, $groupList)){
            return true;
        } else{
            return false;
        }
    }


    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['users.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }
    public function getId()
    {
        return $this->getPrimaryKey();
    }


    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
    public static function findByUsernameInactive($username)
    {
        return static::findOne(['username' => $username]);
    }

    public static function findByEmailInactive($email)
    {
        return static::find()->where(['email' => $email])->andWhere(['not', ['email' => null]])->one();
    }
}
