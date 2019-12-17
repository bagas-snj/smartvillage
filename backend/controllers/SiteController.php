<?php

namespace backend\controllers;

use backend\models\Dusun;
use backend\models\KategoriPembangunan;
use backend\models\LaporAduan;
use backend\models\Mitra;
use backend\models\Pembangunan;
use backend\models\Penduduk;
use backend\models\RequestPembangunan;
use backend\models\Rtrw;
use backend\models\SumberDanaPembangunan;
use backend\models\User;
use backend\models\LaporProgress;
use Yii;
use yii\helpers\Url;

class SiteController extends BaseController
{
    public function behaviors()
    {

        return parent::behaviors();

    }

    public function actions()
    {
        return parent::actions();
    }

    public function actionIndex()
    {
        if (!parent::isLogin()) {
            return $this->redirect(Url::toRoute('site/login'));
        }

        $user=User::find()->count();
        $penduduk=Penduduk::find()->count();
        $request=RequestPembangunan::find()->count();
        $lapor=LaporAduan::find()->count();
        $pembangunan=Pembangunan::find()->count();
        $dusun=Dusun::find()->count();
        $rtrw=Rtrw::find()->count();
        $mitraOption = [0 => '- Cari Data -'];
        $mitra = Mitra::find()->all();
        foreach ($mitra as $item) {
            $mitraOption[$item->id] = $item->nama_mitra;
        }
        $kategoriOption = [0 => '- Cari Data -'];
        $kategori = KategoriPembangunan::find()->all();
        foreach ($kategori as $item) {
            $kategoriOption[$item->id] = $item->nama;
        }
        $sumberOption = [0 => '- Cari Data -'];
        $sumber= SumberDanaPembangunan::find()->all();
        foreach ($sumber as $item) {
            $sumberOption[$item->id] = $item->nama;
        }

        $pembangunanTerbaru=Pembangunan::find()->limit(5)->all();

        $pembangunanAll=KategoriPembangunan::find()->all();
        $dataCount=[];
        foreach ($pembangunanAll as $item){
            $kategoriAll=Pembangunan::find()->where(['kategori_pembangunan_id'=>$item->id])->count();
            $dataCount[]=[
                'nama_kategori'=>$item->nama,
                'jumlah'=>$kategoriAll,
            ];
        }


        $dataPembangunan=Pembangunan::find()->all();
            foreach ($dataPembangunan as $item){
                $laporCount=LaporProgress::find()->where(['pembangunan_id'=>$item->id])
                    ->sum('capaian_progress');
                $item->prosentase=round($laporCount,3);
            }

        $params=[
            'totalUser'=>$user,
            'totalPenduduk'=>$penduduk,
            'totalRequest'=>$request,
            'totalLapor'=>$lapor,
            'totalPembangunan'=>$pembangunan,
            'totalDusun'=>$dusun,
            'totalRtrw'=>$rtrw,
            'mitraOption'=>$mitraOption,
            'sumberOption'=>$sumberOption,
            'kategoriOption'=>$kategoriOption,
            'pembangunanTerbaru'=>$pembangunanTerbaru,
            'dataCount'=>$dataCount,
            'dataPembangunan'=>$dataPembangunan
        ];
       return $this->render('index.tpl',$params);
    }

    public function actionDetail()
    {

        return $this->render('detail.tpl');
    }

    public function actionLogin()
    {
        return $this->renderPartial('login-form.tpl');
    }

    public function actionValidateLogin()
    {
        $username = Yii::$app->request->post('username', '');
        $password = sha1(Yii::$app->request->post('password', ''));
        $cekUsername=User::findOne(['username'=>$username]);
        $cekPassword=User::findOne(['password'=>$password]);
        $data = User::findOne(['username' => $username, 'password' => $password]);

        if(is_null($cekUsername)){
            return "
            <div class='alert alert-danger'>Username Salah!</div>";
        }

        if(is_null($cekPassword)){
            return "
            <div class='alert alert-danger'>Password Salah!</div>";
        }
        if(strlen($password)<8){
            return "
            <div class='alert alert-warning'>Password Kurang dari 8 Karakter!</div>";
        }
        $data->last_login = date('Y-m-d H:i:s');
        $data->save();
        Yii::$app->session->set('user', $data);

        return "
        <div class='alert alert-success'>Login berhasil</div>
        <script> 
            setTimeout(function(){
                location.href = baseURL;
            }, 1500);
        </script>";
    }

    public function actionLogout()
    {
        //Yii::$app->session->set('user', null);
        Yii::$app->session->removeAll();
        Yii::$app->session->destroy();
        return $this->redirect(Url::toRoute('site/login'));
    }
}
