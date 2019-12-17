<?php
/* Smarty version 3.1.31, created on 2018-01-14 23:58:41
  from "D:\xampp\htdocs\smartvillage\backend\views\user\password-form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5b8c41aa9964_82880969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1816fcd34ea464f77638a6c7f5ce4e4663b62b37' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\user\\password-form.tpl',
      1 => 1515914817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5b8c41aa9964_82880969 (Smarty_Internal_Template $_smarty_tpl) {
?>



<div id="result-user"></div>
<form id="form-user" onsubmit="return false;" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="password" class="col-sm-3 col-xs-12 control-label">Password</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::passwordInput("password",null,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>
    <div class="form-group">
        <label for="password2" class="col-sm-3 col-xs-12 control-label">Konfirmasi Password</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::passwordInput("password2",null,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </div>

    <?php echo yii\helpers\Html::hiddenInput('id',$_smarty_tpl->tpl_vars['user']->value->id);?>

    <?php echo yii\helpers\Html::hiddenInput(Yii::$app->request->csrfParam,Yii::$app->request->csrfToken);?>

</form>

<?php echo '<script'; ?>
>
    $("#form-user").submit(function () {
        var data = getFormData("form-user");
        ajaxTransfer("user/update-password", data, "#result-user");
    })
<?php echo '</script'; ?>
><?php }
}
