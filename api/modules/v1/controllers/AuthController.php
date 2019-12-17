<?php

namespace api\modules\v1\controllers;

use backend\models\LoginInfo;
use backend\models\Penduduk;
use Yii;
use yii\db\Exception;
use yii\filters\ContentNegotiator;
use yii\filters\RateLimiter;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\helpers\Html;
use backend\models\User;
use yii\web\Controller;

class AuthController extends Controller
{
    /**
     * @var string|array the configuration for creating the serializer that formats the response data.
     */
    public $serializer = 'yii\rest\Serializer';
    /**
     * @inheritdoc
     */
    public $enableCsrfValidation = false;
    
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        return array_merge([
            'contentNegotiator' => [
                'class' => ContentNegotiator::className(),
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                    'application/xml' => Response::FORMAT_XML,
                ],
            ],
            'verbFilter' => [
                'class' => VerbFilter::className(),
                'actions' => $this->verbs(),
            ],
            'rateLimiter' => [
                'class' => RateLimiter::className(),
            ],
        ], $behaviors);
    }

    /**
     * @inheritdoc
     */
    public function afterAction($action, $result)
    {
        $result = parent::afterAction($action, $result);
        return $this->serializeData($result);
    }

    /**
     * Declares the allowed HTTP verbs.
     * Please refer to [[VerbFilter::actions]] on how to declare the allowed verbs.
     * @return array the allowed HTTP verbs.
     */
    protected function verbs()
    {
        return [];
    }

    /**
     * Serializes the specified data.
     * The default implementation will create a serializer based on the configuration given by [[serializer]].
     * It then uses the serializer to serialize the given data.
     * @param mixed $data the data to be serialized
     * @return mixed the serialized data.
     */
    protected function serializeData($data)
    {
        return Yii::createObject($this->serializer)->serialize($data);
    }
    
	public function actionRegister()
	{
	    $nik=Yii::$app->request->post('nik','');
        $username =Yii::$app->request->post('username','');
        $password=Yii::$app->request->post('password','');
        $password2=Yii::$app->request->post('password2','');
	    if(strlen($nik)<15){
	        return[
                'status'=>false,
	            'message'=>'NIK harus 16 digit',
            ];
        }
        $dataPenduduk=Penduduk::find()->where(['nik'=>$nik])->one();
	    if(is_null($dataPenduduk)){
	        return [
                'status'=>false,
	            'message' =>'NIK tidak ditemukan',
            ];
        }
        $cekUsername=User::find()->where(['username'=>$username])->one();
	    if(!is_null($cekUsername)){
	        return[
                'status'=>false,
	            'message'=>'Username sudah digunakan',
            ];
        }
        if(strlen($password) < 8){
                return [
                    'status'=>false,
                    'message'=>'Password yang anda masukkan kurang dari 8 karakter',
                ];
        }

        if($password2 !=$password){
            return[
                'status'=>false,
                'message'=>'Konfirmasi password tidak sesuai!'
            ];
        }
        else{
            $data= new User();
            $data->username=$username;
            $data->roles_id=6;
            $data->password=sha1($password);
            $data->penduduk_id=$dataPenduduk['id'];

            try{
                $data->save();
                return [
                    'status'=> true,
                    'message'=>'Register sukses',
                ];

            }catch (Exception $e){
                return [
                    'status'=> false,
                    'message'=>'Register Gagal! Silahkan Register Kembali!',
                ];
            }

        }

	}

	public function actionLogin()
	{
	    $loginInfo = new LoginInfo();
        $username = Yii::$app->request->post('username', '');
        $password = sha1(Yii::$app->request->post('password', ''));
        $data = User::findOne(['username' => $username, 'password' => $password]);
        if (is_null($data)) {
            return [
                'status' =>false,
                'message' =>'Username atau Password Salah',
            ];
        }else{
            $loginInfo->importUser($data);
            $data->last_login = date('Y-m-d H:i:s');
            $data->access_token = ($data->access_token == '' || $data->access_token == null) ? base64_encode( $loginInfo->username.':'.$data->password.'smartvillage') : $data->access_token;
            $data->save();
            return array_merge([
                'status' => true,
                'role'=>$data->role->name,
                'message' => 'Login berhasil!',
                'access_token' => $data->access_token,
                'username' => $data->username,
            ], $loginInfo->toArray());
        }
	}
}
