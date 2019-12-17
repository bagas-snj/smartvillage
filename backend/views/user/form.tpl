{use class="yii\helpers\Html"}
{use class="yii\widgets\ActiveForm"}
{use class="yii\helpers\Url"}

<div id="result-user"></div>
<form id="form-user" onsubmit="return false;" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Nama</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "name", $data->name, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="roles_id" class="col-sm-3 col-xs-12 control-label">Role</label>
        <div class="col-sm-8 col-xs-12">
            {if $data->id == 0}
                {Html::dropDownList("roles_id", $data->roles_id, $roleOption, ["class" => "form-control"])}
            {else}
                {Html::input("text", "roles_id", $data->role->name, ["readonly"=>"","class" => "form-control", "required" => ""])}
            {/if}
        </div>
    </div>
	 <div class="form-group">
        <label for="username" class="col-sm-3 col-xs-12 control-label">Username</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "username", $data->username, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
	 <div class="form-group">
        <label for="email" class="col-sm-3 col-xs-12 control-label">Email</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("email", "email", $data->email, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="photo" class="col-sm-3 col-xs-12 control-label">Foto</label>
        <div class="col-sm-8 col-xs-12">
            {Html::fileInput('Uploader[file]', null, ['class' => 'form-control']) }
        </div>
    </div>

    {if intval($data->id) == 0}
    <div class="form-group">
        <label for="password" class="col-sm-3 col-xs-12 control-label">Password</label>
        <div class="col-sm-8 col-xs-12">
            {Html::passwordInput("password", null, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="password2" class="col-sm-3 col-xs-12 control-label">Konfirmasi Password</label>
        <div class="col-sm-8 col-xs-12">
            {Html::passwordInput("password2", null, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    {/if}

    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Simpan">
            {if intval($data->id) != 0}
            <a onclick="loadModal(this)" target="user/change-password" data="id={$data->id}" class="btn btn-primary">Ubah Password</a>
            {/if}
        </div>
    </div>

    {Html::hiddenInput('id', $data->id)}
    {Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken)}
</form>

<script>
    $("#form-user").submit(function () {
        var data = getFormData("form-user");
        ajaxTransfer("user/save", data, "#result-user");
    })

    $('select[name=roles_id]').chosen();
</script>