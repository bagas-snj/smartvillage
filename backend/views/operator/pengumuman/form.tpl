{use class="yii\helpers\Html"}
{use class="yii\helpers\Url"}
<div id="result-entities"></div>
<form id="form-entities" onsubmit="return false;" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Perihal</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "perihal", $data->perihal, ["class" => "form-control", "required" => ""])}
        </div>
    </div>


    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Isi</label>
        <div class="col-sm-8 col-xs-12">
            <textarea name="isi" class="form-control" required="">{$data->isi}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Tanggal Pengumuman</label>
        <div class="col-sm-8 col-xs-12">

            {Html::input("text", "tgl_pengumuman", $data->tgl_pengumuman, ["class" => "form-control datetime", "required" => ""])}
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </div>

    {Html::hiddenInput('id', $data->id)}
    {Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken)}
</form>

<script>
    $("#form-entities").submit(function () {
        var data = getFormData("form-entities");
        ajaxTransfer("operator/pengumuman/save", data, "#result-entities");
    })

    $('.datetime').datetimepicker({
        format : 'Y-m-d',
    });

</script>