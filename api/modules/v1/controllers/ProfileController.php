<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 15/01/2018
 * Time: 08.45
 */

namespace api\modules\v1\controllers;
use backend\controllers\BaseController as BaseController;
use backend\models\User;
use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\filters\ContentNegotiator;
use yii\filters\RateLimiter;
use yii\filters\VerbFilter;
use yii\web\Response;
use backend\models\Uploader;
use yii\web\UploadedFile;
use yii\base\Exception;


class ProfileController extends BaseController
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
            'authenticator' => [
                'class' => CompositeAuth::className(),
                'authMethods' => [
                    HttpBasicAuth::className(),
                    HttpBearerAuth::className(),
                    QueryParamAuth::className(),
                ],
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

    public function actionIndex(){


    }

    public function actionGetProfile()
    {
        $headers = Yii::$app->request->headers;
        $auth = $headers->get('authorization');
        $authCek = explode(' ', $auth);
        $token = $authCek[1];
        $user = User::find()->where(['access_token' => $token])->one();

        if(strlen($user->photo)<1){
            $foto='web/img/user.jpg';
        }else{
            $foto=Yii::$app->urlManagerBackend->baseUrl.'/user/'.$user->photo;
        }
        $dataUser[]=[
            'username'=>$user->username,
            'nik'=>$user->penduduk->nik,
            'foto'=>$foto,
        ];

        return[
            'status'=>true,
            'message'=>'Profile tersedia !',
            'data'=>$dataUser
        ];
    }

    public function actionEditProfile(){

        $headers = Yii::$app->request->headers;
        $auth = $headers->get('authorization');
        $authCek = explode(' ', $auth);
        $token = $authCek[1];
        $user = User::find()->where(['access_token' => $token])->one();
        if(!is_null($user)){
            $username=Yii::$app->request->post('username','');
            $password=Yii::$app->request->post('password','');
            $path = Yii::getAlias('@backend') .'/web/uploads/user/';
            $file = new Uploader();
            $file->file = UploadedFile::getInstance($file, 'file');
            if(is_null($username)){
                return[
                    'status'=>false,
                    'message'=>'Username harus terisi',
                ];
            }
            if (strlen($password)<8){
                return[
                    'status'=>false,
                    'message'=>'Password kurang dari 8 karakter',
                ];
            }
            if (!is_null($file->file)){
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                $file->extension = ['jpg', 'png'];
                $file->destination = $path;

                if ($file->upload()) {
                    $filename = $file->uploadedFile;
                } else {
                    $filename = null;
                }
                $oldFile = $user->photo;
                if (strlen($oldFile) > 0) {
                    @unlink($path.'/'. $oldFile);
                }
                $user->photo = $filename;
            }
                $user->username=$username;
                $user->password=sha1($password);

                try{
                    $user->save();
                    return[
                        'status'=>true,
                        'message'=>'Data berhasil disimpan',
                    ];
                }catch (Exception $e){
                    return[
                        'status'=>false,
                        'message'=>'Data gagal disimpan',
                    ];
                }
            }




    }

}