<?php
/* Smarty version 3.1.31, created on 2017-12-06 11:18:37
  from "D:\xampp\htdocs\smartvillage\backend\views\operator\kategori-pembangunan\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a276f9dab4025_87868218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ce02e63ffcede5765b6715649eb0e7f47d67eb8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\operator\\kategori-pembangunan\\form.tpl',
      1 => 1512533757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a276f9dab4025_87868218 (Smarty_Internal_Template $_smarty_tpl) {
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
