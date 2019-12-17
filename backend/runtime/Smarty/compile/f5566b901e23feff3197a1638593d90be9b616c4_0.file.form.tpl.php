<?php
/* Smarty version 3.1.31, created on 2017-11-27 09:52:16
  from "D:\xampp\htdocs\smartvillage\backend\views\master\dusun\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a1b7de04ce2c8_23371869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5566b901e23feff3197a1638593d90be9b616c4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\master\\dusun\\form.tpl',
      1 => 1511749817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1b7de04ce2c8_23371869 (Smarty_Internal_Template $_smarty_tpl) {
?>




<div id="result-role"></div>
<form id="form-role" onsubmit="return false;" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Nama Dusun</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","nama_dusun",$_smarty_tpl->tpl_vars['data']->value->nama_dusun,array("class"=>"form-control","required"=>''));?>

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
        ajaxTransfer("master/dusun/save", data, "#result-role");
    })
<?php echo '</script'; ?>
><?php }
}
