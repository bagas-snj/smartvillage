<?php

namespace backend\controllers;

use backend\models\Role;
use backend\models\Uploader;
use backend\models\User;
use Yii;
use yii\base\Exception;
use yii\web\UploadedFile;
use yii\helpers\Url;

class UserController extends BaseController
{
    //public $enableCsrfValidation=false;

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
        $user = User::find()->all();
        $sesi = $this->activeUser;
        $isAdmin = $this->isAdmin();

        $params = [
            'data' => $user,
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
            $data = User::findOne($id);
        } else {
            $data = new User();
        }
        $roleOption = [];
        $role = Role::find()->all();
        foreach ($role as $item) {
            $roleOption[$item->id] = $item->name;
        }
        $params = [
            'data' => $data,
            'roleOption' => $roleOption,
        ];
        return $this->renderPartial('form.tpl', $params);
    }
    public function actionDetail()
    {
        $id = Yii::$app->request->post('id', 0);
        $data = User::findOne($id);

        $params = [
            'user' => $data,
            'detail' => true
        ];
        return $this->renderPartial('profile.tpl', $params);
    }

    public function actionSave()
    {
        $id = Yii::$app->request->post('id', 0);
        if ($id) {
            $data = User::findOne($id);
        } else {
            $data = new User();
            $password = Yii::$app->request->post('password', '');
            $password2 = Yii::$app->request->post('password2', '');
            $data->roles_id = intval(Yii::$app->request->post('roles_id', ''));

            if (strlen($password) < 8) {
                return "
                <div class='alert alert-danger'>Terjadi kesalahan! Password minimal 8 karakter</div>";
            } else if ($password != $password2) {
                return "
                <div class='alert alert-danger'>Terjadi kesalahan! Konfirmasi password tidak sesuai</div>";
            }
            $data->password = sha1($password);
        }

        $data->username = strip_tags(Yii::$app->request->post('username', ''));
        $data->email = strip_tags(Yii::$app->request->post('email', ''));
        $data->auth_key = Yii::$app->security->generateRandomString();
        $cek_username = User::findOne(['username' => $data->username]);
        $cek_email = User::findOne(['email' => $data->email]);
        if (!is_null($cek_username)) {
            if ($cek_username->id != $id) {
                return "
                <div class='alert alert-danger'>Terjadi kesalahan! Username telah dipakai sebelumnya. </div>";
            }
        }
        if (!is_null($cek_email)) {
            if ($cek_email->id != $id) {
                return "
                <div class='alert alert-danger'>Terjadi kesalahan! Email telah dipakai sebelumnya. </div>";
            }
        }
        $data->name = strip_tags(Yii::$app->request->post('name', ''));
        $file = new Uploader();
        $file->file = UploadedFile::getInstance($file, 'file');
        if (!is_null($file->file)) {
            if (!file_exists('uploads/user')) {
                mkdir('uploads/user', 0777, true);
            }
            $file->extension = ['jpg', 'png'];
            $file->destination = 'uploads/user/';

            if ($file->upload()) {
                $filename = $file->uploadedFile;
            } else {
                $filename = null;
            }
            $oldFile = $data->photo;
            if (strlen($oldFile) > 0) {
                @unlink('uploads/user/' . $oldFile);
            }
            $data->photo = $filename;
        }
        try {
            $data->save();
            if ($this->activeUser->id == $data->id) {
                Yii::$app->session->set('user', $data);
            }

            return "
            <div class='alert alert-success'>Data berhasil disimpan</div>
            <script> reloadData(); closeModal(1500); </script>";
        } catch (Exception $e) {
            return "
            <div class='alert alert-danger'>Terjadi kesalahan! Data gagal disimpan</div>";
        }
    }
    public function actionChangePassword()
    {
        $id = Yii::$app->request->post('id', 0);
        $user = User::findOne($id);
        if (is_null($user)) {
            return "
            <div class='alert alert-danger'>Terjadi kesalahan! Data tidak tersedia!</div>";
        }

        $params['user'] = $user;
        return $this->renderPartial('password-form.tpl', $params);
    }
    public function actionUpdatePassword()
    {
        $password = Yii::$app->request->post('password', '');
        $password2 = Yii::$app->request->post('password2', '');
        if (strlen($password) < 8) {
            return "
            <div class='alert alert-danger'>Terjadi kesalahan! Password minimal 8 karakter</div>";
        } else if ($password != $password2) {
            return "
            <div class='alert alert-danger'>Terjadi kesalahan! Konfirmasi password tidak sesuai</div>";
        }

        $id = Yii::$app->request->post('id', 0);
        $user = User::findOne($id);
        if (is_null($user)) {
            return "
            <div class='alert alert-danger'>Terjadi kesalahan! Data tidak tersedia!</div>";
        }

        $user->password = sha1($password);
        $user->save();
        $userId = $user->id;

        return "
        <div class='alert alert-success'>Password berhasil diubah</div>
        <a id='ubah-data-btn' onclick='loadModal(this)' target='user/form' data='id=$userId' title='Ubah Data'></a>
        <script>
        setTimeout(function(){
            $('#ubah-data-btn').click();
        }, 1500);
        </script>";
    }

    public function actionDelete()
    {
        $id = Yii::$app->request->post('id', 0);
        $data = User::findOne($id);

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

    public function actionProfile()
    {
        $user = $this->ActiveUser;
        $params = [
            'data' => $user,
            'detail' => false
        ];
        if (Yii::$app->request->isPost) {
            return $this->renderPartial('profile.tpl', $params);
        } else {
            return $this->render('profile.tpl', $params);
        }
    }

    public function actionLogin()
    {
        $id = Yii::$app->request->post('id', 0);

        $data = User::findOne($id);

        $data->last_login = date('Y-m-d H:i:s');
        $data->save();
        Yii::$app->session->set('user', $data);

        return "
        <div class='alert alert-success'>Anda berhasil Login sebagai $data->name</div>
        <script>
            setTimeout(function(){
                location.href = baseURL;
            }, 1500);
        </script>";
    }
}