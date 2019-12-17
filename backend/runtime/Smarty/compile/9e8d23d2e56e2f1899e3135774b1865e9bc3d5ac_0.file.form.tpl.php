<?php
/* Smarty version 3.1.31, created on 2017-11-01 21:54:29
  from "D:\xampp\htdocs\smartvillage\backend\views\master\role\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f9e0258e1250_48845614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e8d23d2e56e2f1899e3135774b1865e9bc3d5ac' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\master\\role\\form.tpl',
      1 => 1509546845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f9e0258e1250_48845614 (Smarty_Internal_Template $_smarty_tpl) {
?>




<div id="result-role"></div>
<form id="form-role" onsubmit="return false;" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Nama Role</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","name",$_smarty_tpl->tpl_vars['data']->value->name,array("class"=>"form-control","required"=>''));?>

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
    $("#form-role").submit(function () {
        var data = getFormData("form-role");
        ajaxTransfer("master/role/save", data, "#result-role");
    })
<?php echo '</script'; ?>
><?php }
}
