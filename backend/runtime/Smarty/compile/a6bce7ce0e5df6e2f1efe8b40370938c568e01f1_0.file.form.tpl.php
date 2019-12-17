<?php
/* Smarty version 3.1.31, created on 2017-12-18 09:20:36
  from "D:\xampp\htdocs\smartvillage\backend\views\operator\mitra\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3725f469a685_94865748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6bce7ce0e5df6e2f1efe8b40370938c568e01f1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\operator\\mitra\\form.tpl',
      1 => 1513563629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3725f469a685_94865748 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="result-entities"></div>
<form id="form-entities" onsubmit="return false;" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Nama Mitra</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","nama_mitra",$_smarty_tpl->tpl_vars['data']->value->nama_mitra,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['data']->value->id > 0) {?>
        <?php } else { ?>
        <div class="form-group">
            <label for="name" class="col-sm-3 col-xs-12 control-label">Username</label>
            <div class="col-sm-8 col-xs-12">
                <?php echo yii\helpers\Html::input("text","username",'',array("class"=>"form-control","required"=>''));?>

            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-3 col-xs-12 control-label">Password</label>
            <div class="col-sm-8 col-xs-12">
                <?php echo yii\helpers\Html::input("password","password",'',array("class"=>"form-control","required"=>''));?>

            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-3 col-xs-12 control-label">Konfirmasi Password</label>
            <div class="col-sm-8 col-xs-12">
                <?php echo yii\helpers\Html::input("password","password2",'',array("class"=>"form-control","required"=>''));?>

            </div>
        </div>

    <?php }?>

    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Alamat</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","alamat",$_smarty_tpl->tpl_vars['data']->value->alamat,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">No Telp</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","no_telp",$_smarty_tpl->tpl_vars['data']->value->no_telp,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Email</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","email",$_smarty_tpl->tpl_vars['data']->value->email,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </div>

    <?php echo yii\helpers\Html::hiddenInput('id',$_smarty_tpl->tpl_vars['data']->value->id);?>

    <?php echo yii\helpers\Html::hiddenInput(Yii::$app->request->csrfParam,Yii::$app->request->csrfToken);?>

</form>

<?php echo '<script'; ?>
>
    $("#form-entities").submit(function () {
        var data = getFormData("form-entities");
        ajaxTransfer("operator/mitra/save", data, "#result-entities");
    })

<?php echo '</script'; ?>
><?php }
}
