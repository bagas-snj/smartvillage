<?php
/* Smarty version 3.1.31, created on 2017-11-28 07:37:35
  from "D:\xampp\htdocs\smartvillage\backend\views\master\pendidikan\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a1cafcf565731_30215628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f467e81776a42556f1c7431bc4b5865a84c10c75' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\master\\pendidikan\\form.tpl',
      1 => 1511749640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1cafcf565731_30215628 (Smarty_Internal_Template $_smarty_tpl) {
?>




<div id="result-role"></div>
<form id="form-role" onsubmit="return false;" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Nama Pendidikan</label>
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
        ajaxTransfer("master/pendidikan/save", data, "#result-role");
    })
<?php echo '</script'; ?>
><?php }
}
