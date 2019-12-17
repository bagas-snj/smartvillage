{use class="yii\helpers\Html"}
{use class="yii\helpers\Url"}
<div id="result-entities"></div>
<form id="form-entities" onsubmit="return false;" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Nama Mitra</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "nama_mitra", $data->nama_mitra, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    {if $data->id > 0}
        {else}
        <div class="form-group">
            <label for="name" class="col-sm-3 col-xs-12 control-label">Username</label>
            <div class="col-sm-8 col-xs-12">
                {Html::input("text", "username",'', ["class" => "form-control", "required" => ""])}
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-3 col-xs-12 control-label">Password</label>
            <div class="col-sm-8 col-xs-12">
                {Html::input("password", "password",'',["class" => "form-control", "required" => ""])}
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-3 col-xs-12 control-label">Konfirmasi Password</label>
            <div class="col-sm-8 col-xs-12">
                {Html::input("password", "password2",'',["class" => "form-control", "required" => ""])}
            </div>
        </div>

    {/if}

    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Alamat</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "alamat", $data->alamat, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">No Telp</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "no_telp", $data->no_telp, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Email</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "email", $data->email, ["class" => "form-control", "required" => ""])}
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
        ajaxTransfer("operator/mitra/save", data, "#result-entities");
    })

</script>