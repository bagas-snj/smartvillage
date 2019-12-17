<?php
/* Smarty version 3.1.31, created on 2019-12-16 19:05:21
  from "C:\xampp98\htdocs\smartvillage\backend\views\operator\kategori-pembangunan\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df77301270583_00839887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3a7127142c64f93f432f04baf0f5e865aa714b4' => 
    array (
      0 => 'C:\\xampp98\\htdocs\\smartvillage\\backend\\views\\operator\\kategori-pembangunan\\form.tpl',
      1 => 1515914817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df77301270583_00839887 (Smarty_Internal_Template $_smarty_tpl) {
?>




<div id="result-role"></div>
<form id="form-role" onsubmit="return false;" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Kategori Pembangunan</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","nama",$_smarty_tpl->tpl_vars['data']->value->nama,array("class"=>"form-control","required"=>''));?>

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
        ajaxTransfer("operator/kategori-pembangunan/save", data, "#result-role");
    })
<?php echo '</script'; ?>
><?php }
}
