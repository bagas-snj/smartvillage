<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 05/12/2017
 * Time: 13.42
 */

namespace api\modules\v1\controllers;
use backend\models\LaporProgress;
use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\filters\ContentNegotiator;
use yii\filters\RateLimiter;
use yii\filters\VerbFilter;
use yii\web\Response;
use backend\models\Pembangunan;
use backend\controllers\BaseController as BaseController;


class PembangunanController extends BaseController
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
        $data=Pembangunan::find()->all();
        if ($data) {
            foreach ($data as $item){
                $lapor=LaporProgress::find()->where(['pembangunan_id'=>$item->id])
                    ->sum('capaian_progress');
                $item->foto= Yii::$app->urlManagerBackend->baseUrl. '/pembangunan/' . $item->foto;
                $item->sumber_dana_pembangunan_id=$item->sumber->nama;
                $item->kategori_pembangunan_id=$item->kategori->nama;
                $item->status_pembangunan_id=$item->status->nama;
                $item->mitra_id=$item->mitra->nama_mitra;
                $item->prosentase=round($lapor,3);
            }
            return[
                'status'=>true,
                'message'=>'Data Tersedia!',
                'data'=>$data,
            ];
        } else {
            return[
                'status'   => false,
                'message'   => 'Data tidak ada !'
            ];
        }
    }

    public function actionGetPembangunan(){

        $pembangunan=Pembangunan::find()->all();

        return[
            'status'=>true,
            'message'=>'Data Tersedia!',
            'data'=>$pembangunan,
        ];
    }


}