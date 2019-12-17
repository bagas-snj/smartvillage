<?php
/**
 * Created by PhpStorm.
 * User: ELL
 * Date: 24/11/2017
 * Time: 10.13
 */

namespace backend\controllers\master;

use backend\models\Dusun;
use Yii;
use yii\base\Exception;
use yii\helpers\Url;
use backend\controllers\BaseController;
use backend\models\Rtrw;


class RtrwController extends BaseController
{
    public function behaviors()
    {
        return parent::behaviors();
    }

    public function actions()
    {
        return parent::actions();
    }
    public function  actionIndex(){
        if(!parent::isLogin()){
            return $this->redirect(Url::toRoute('site/login'));
        }

        $data = Rtrw::find()->all();
        $sesi = $this->activeUser;
        $isAdmin = $this->isAdmin();

        $params = [
            'data' => $data,
            'sesi' => $sesi,
            'isAdmin' => $isAdmin
        ];
        if (Yii::$app->request->isPost) {
            return $this->renderPartial('index.tpl', $params);
        } else {
            return $this->render('index.tpl', $params);
        }
    }

    public function actionForm()
    {
        $id = Yii::$app->request->post('id', 0);
        if ($id) {
            $data = Rtrw::findOne($id);
        } else {
            $data = new Rtrw();
        }
        $parentOption = [0 => '- Main Parent -'];
        $parent = Rtrw::find()->all();
        foreach ($parent as $item) {
            if($item->id == $data->id){
                continue;
            }
            $parentOption[$item->id] = $item->rw_parent;
        }
        $dusunOption = [];
        $dusun=Dusun::find()->all();
        foreach ($dusun as $item){

            $dusunOption[$item->id]=$item->nama_dusun;
        }

        $params = [
            'data' => $data,
            'parentOption' => $parentOption,
            'dusunOption' => $dusunOption,
        ];
        return $this->renderPartial('form.tpl', $params);
    }
    public function actionSave()
    {
        $id = Yii::$app->request->post('id', 0);
        if ($id) {
            $data = Rtrw::findOne($id);
        } else {
            $data = new Rtrw();
        }
        $parentId = Yii::$app->request->post('rt_child', 0);
        $data->rw_parent = strip_tags(Yii::$app->request->post('rw_parent', ''));
        $data->rt_child = intval($parentId) == 0 ? 0 : $parentId;
        $data->dusun_id = Yii::$app->request->post('dusun_id','');
        try {
            $data->save();
            return "
            <div class='alert alert-success'>Data berhasil disimpan</div>
            <script> reloadData(); closeModal(1500); </script>";
        } catch (Exception $e) {
            return "
            <div class='alert alert-danger'>Terjadi kesalahan! Data gagal disimpan</div>";
        }
    }
    public function  actionDelete(){
        $id = Yii::$app->request->post('id', 0);
        $data = Rtrw::findOne($id);
        try {
            $data->delete();
            return "
            <div class='alert alert-success'>Data berhasil dihapus</div>
            <script> reloadData(); closeModal(1500); </script>";
        } catch (Exception $e) {
            return "
            <div class='alert alert-danger'>Terjadi kesalahan! Data gagal dihapus</div>";
        }
    }
}