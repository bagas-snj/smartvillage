<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 05/12/2017
 * Time: 13.42
 */

namespace api\modules\v1\controllers;
use backend\models\RequestPembangunan;
use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\filters\ContentNegotiator;
use yii\filters\RateLimiter;
use yii\filters\VerbFilter;
use yii\web\Response;
use backend\controllers\BaseController as BaseController;
use yii\base\Exception;
use backend\models\User;




class RequestPembangunanController extends BaseController
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
        $data= new RequestPembangunan();
        $data->judul=Yii::$app->request->post('judul','');
        $data->deskripsi=Yii::$app->request->post('deskripsi','');
        $data->users_id=$user->id;
        //test
        $data->status='requestbaru';
        $kategoriId=intval(Yii::$app->request->post('kategori_pembangunan_id',''));
		$data->kategori_pembangunan_id=$kategoriId;

		//var_dump($data);
	

		try{
		  $data->save();
			  return[
			    'status'=>true,
			    'message'=>'Data Berhasil disimpan',
		 	  ];
		}catch(Exception $e){
			 return[
		        	'status'=>false,
			        'message'=>'Data gagal disimpan',	
                ];
        }
    } 
    public function actionDelete($id){

    }

}
