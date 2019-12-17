<?php
/* Smarty version 3.1.31, created on 2017-10-23 21:45:59
  from "D:\xampp\htdocs\smartvillage\backend\views\master\role-group\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ee00a734b8c4_87372726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05d31614028401dd0efb01deaf5d5eda87df973c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\master\\role-group\\form.tpl',
      1 => 1508769950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ee00a734b8c4_87372726 (Smarty_Internal_Template $_smarty_tpl) {
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
        ajaxTransfer("master/role-group/save", data, "#result-role");
    })

<?php echo '</script'; ?>
><?php }
}
