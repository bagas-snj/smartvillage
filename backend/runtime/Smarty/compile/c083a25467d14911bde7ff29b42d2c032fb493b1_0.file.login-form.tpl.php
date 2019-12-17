<?php
/* Smarty version 3.1.31, created on 2019-11-29 20:58:29
  from "C:\xampp98\htdocs\smartvillage\backend\views\site\login-form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5de12405a336c4_95011747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c083a25467d14911bde7ff29b42d2c032fb493b1' => 
    array (
      0 => 'C:\\xampp98\\htdocs\\smartvillage\\backend\\views\\site\\login-form.tpl',
      1 => 1515914817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de12405a336c4_95011747 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Login User"),$_smarty_tpl);?>






<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smartvillage | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
template/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
css/font-awesome-4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
template/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
template/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
css/style.css">
  <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/jQuery/jQuery-2.1.4.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
script/lib.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
script/core.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
> baseURL = "<?php echo yii\helpers\Url::home(true);?>
"; <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/dist/js/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/dist/js/respond.min.js"><?php echo '</script'; ?>
>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo yii\helpers\Url::home(true);?>
/img/logo.png" class="img img-responsive">
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Login Di Sini</p>
    <div id="result-user"></div>
    <form id="form-user" onsubmit="return false;">
      <div class="form-group has-feedback">
          <?php echo yii\helpers\Html::input("text","username",'',array("class"=>"form-control","placeholder"=>"Username","required"=>''));?>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <?php echo yii\helpers\Html::input("password","password",'',array("class"=>"form-control","placeholder"=>"Password","required"=>''));?>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat text-bold">Login <i class="glyphicon glyphicon-log-in"></i></button>
        </div>
      </div>
        <?php echo yii\helpers\Html::hiddenInput(Yii::$app->request->csrfParam,Yii::$app->request->csrfToken);?>

    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/dist/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $.widget.bridge('uibutton', $.ui.button);
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
script/moment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/fastclick/fastclick.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/dist/js/app.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $("#form-user").submit(function () {
        var data = getFormData("form-user");
        ajaxTransfer("site/validate-login", data, "#result-user");
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
