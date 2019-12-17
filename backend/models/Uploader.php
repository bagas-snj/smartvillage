<?php
namespace backend\models;

class Uploader extends \yii\db\ActiveRecord
{
    public $file, $uploadedFile, $extension = [], $destination;

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function behaviors()
    {
        return [];
    }

    public function upload()
    {
        if (is_null($this->file)) {
            return false;
        } else if ($this->validate()) {
            if (in_array($this->file->extension, $this->extension)) {
                $newName = md5(time() . mt_rand()) . '.' . $this->file->extension;
                $this->file->saveAs($this->destination . $newName);
                $this->uploadedFile = $newName;

                return true;
            } else {
                return false;
            }
        } else {
            $this->uploadedFile = null;
            return false;
        }
    }

}
