{use class="yii\helpers\Html"}
{use class="yii\helpers\Url"}
<div id="result-entities"></div>
<form id="form-entities" onsubmit="return false;" class="form-horizontal">

    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Nama Pembangunan</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "nama_pembangunan", $data->nama_pembangunan, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Kategori Pembangunan</label>
        <div class="col-sm-8 col-xs-12">
            {Html::dropDownList("kategori_pembangunan_id", $data->kategori_pembangunan_id, $kategoriOption, ["class" => "form-control"])}
        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Anggaran</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("number", "anggaran", $data->anggaran, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Tanggal Mulai</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "tgl_mulai", $data->tgl_selesai, ["class" => "form-control datetime", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Tanggal Selesai</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "tgl_selesai", $data->tgl_selesai, ["class" => "form-control datetime", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Longitude</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "longitude", $data->longitude, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Latitude</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "latitude", $data->latitude, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Sumber Dana</label>
        <div class="col-sm-8 col-xs-12">
            {Html::dropDownList("sumber_dana_pembangunan_id", $data->sumber_dana_pembangunan_id, $sumberOption, ["class" => "form-control"])}
        </div>
    </div>
    <div class="form-group">
        <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Status Pembangunan</label>
        <div class="col-sm-8 col-xs-12">
            {Html::dropDownList("status_pembangunan_id", $data->status_pembangunan_id, $statusOption, ["class" => "form-control"])}
        </div>
    </div>
    <div class="form-group">
        <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Mitra</label>
        <div class="col-sm-8 col-xs-12">
            {Html::dropDownList("mitra_id", $data->mitra_id, $mitraOption, ["class" => "form-control"])}
        </div>
    </div>
    <div class="form-group">
        <label for="photo" class="col-sm-3 col-xs-12 control-label">Foto</label>
        <div class="col-sm-8 col-xs-12">
            {Html::fileInput('Uploader[file]', null, ['class' => 'form-control']) }
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Keterangan</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "keterangan", $data->keterangan, ["class" => "form-control", "required" => ""])}
        </div>
    </div>



    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </div>

    {Html::hiddenInput('id', $data->id)}
    {Html::hiddenInput('users_id', $sesi)}
    {Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken)}
</form>

<script>
    $("#form-entities").submit(function () {
        var data = getFormData("form-entities");
        ajaxTransfer("operator/pembangunan/save", data, "#result-entities");
    })

    $('select[name=mitra_id]').chosen();
    $('select[name=sumber_dana_pembangunan_id]').chosen();
    $('select[name=kategori_pembangunan_id]').chosen();
    $('select[name=status_pembangunan_id]').chosen();
    $('.datetime').datetimepicker({
        format : 'Y-m-d',
    });
</script>