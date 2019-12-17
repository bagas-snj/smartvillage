<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 05/12/2017
 * Time: 13.41
 */

namespace api\modules\v1\controllers;
use backend\controllers\BaseController as BaseController;
use backend\models\LaporAduan;
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


class LaporAduanController extends BaseController
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

    public function actionCreate(){
        $headers=Yii::$app->request->headers;
        $auth=$headers->get('authorization');
        $authCek=explode(' ', $auth);
        $token=$authCek[1];
        $user=User::find()->where(['access_token'=>$token])->one();
        $data= new LaporAduan();
        $data->deskripsi=Yii::$app->request->post('deskripsi','');
        $pembangunanId=intval(Yii::$app->request->post('pembangunan_id',''));
	   $data->foto='0';
        if(is_null($pembangunanId)){
            return[
                'status'=>false,
                'message'=>'Pembangunan yang dipilih tidak valid !!'
            ];
        }
        $data->pembangunan_id=$pembangunanId;
        $data->users_id=$user->id;
        $data->status='laporanbaru';
        //var_dump($data->save());
	 try{
                $data->save();
                return[
                    'status'=>true,
                    'message'=>'Data berhasil disimpan!',

                ];

             }catch (Exception $e){
                return[
                    'status'=>false,
                    'message'=>'Data Gagal Disimpan!',

                ];

        }

        

    
    }
}
