{use class="yii\helpers\Html"}
{use class="yii\widgets\ActiveForm"}
{use class="yii\helpers\Url"}

<div id="result-login"></div>
<form id="form-login" onsubmit="return false;" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Username</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "username", $data->username, ["class" => "form-control", "required" => ""])}
        </div>
    </div>

	 <div class="form-group">
        <label for="password" class="col-sm-3 col-xs-12 control-label">Password</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("password", "password", $data->password, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Masuk">
        </div>
    </div>

    {Html::hiddenInput('id', $data->id)}
    {Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken)}
</form>

<script>
    $("#form-login").submit(function () {
        var data = getFormData("form-login");
        ajaxTransfer("master/login/save", data, "#result-login");
    })
</script>