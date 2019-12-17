{set title="Login User"}

{use class="yii\helpers\Html"}
{use class="yii\widgets\ActiveForm"}
{use class="yii\helpers\Url"}

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smartvillage | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{Url::home(true)}template/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{Url::home(true)}css/font-awesome-4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{Url::home(true)}template/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="{Url::home(true)}template/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="{Url::home(true)}css/style.css">
  <script src="{Url::home(true)}template/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <script src="{Url::home(true)}script/lib.js"></script>
  <script src="{Url::home(true)}script/core.min.js"></script>
  <script> baseURL = "{Url::home(true)}"; </script>

  <script src="{Url::home(true)}template/dist/js/html5shiv.min.js"></script>
  <script src="{Url::home(true)}template/dist/js/respond.min.js"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="{Url::home(true)}/img/logo.png" class="img img-responsive">
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Login Di Sini</p>
    <div id="result-user"></div>
    <form id="form-user" onsubmit="return false;">
      <div class="form-group has-feedback">
          {Html::input("text", "username", '', ["class" => "form-control", "placeholder"=>"Username", "required" => ""])}
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          {Html::input("password", "password", '', ["class" => "form-control", "placeholder"=>"Password", "required" => ""])}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat text-bold">Login <i class="glyphicon glyphicon-log-in"></i></button>
        </div>
      </div>
        {Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken)}
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="{Url::home(true)}template/dist/js/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{Url::home(true)}script/moment.js"></script>
<script src="{Url::home(true)}template/bootstrap/js/bootstrap.min.js"></script>
<script src="{Url::home(true)}template/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="{Url::home(true)}template/plugins/fastclick/fastclick.min.js"></script>
<script src="{Url::home(true)}template/dist/js/app.min.js"></script>
<script>
    $("#form-user").submit(function () {
        var data = getFormData("form-user");
        ajaxTransfer("site/validate-login", data, "#result-user");
    })
</script>
</body>
</html>