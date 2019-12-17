<?php
/* Smarty version 3.1.31, created on 2017-12-03 03:40:06
  from "D:\xampp\htdocs\smartvillage\backend\views\master\rtrw\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a230fa6ce8788_47756903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62fabae4631c689a94614d3a842f8cecae6833c9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\master\\rtrw\\form.tpl',
      1 => 1512247191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a230fa6ce8788_47756903 (Smarty_Internal_Template $_smarty_tpl) {
?>



<div id="result-entities"></div>
<form id="form-entities" onsubmit="return false;" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Nama</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","rw_parent",$_smarty_tpl->tpl_vars['data']->value->rw_parent,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['data']->value->rt_child > 0) {?>
    <div class="form-group">
        <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Induk</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::dropDownList("rt_child",$_smarty_tpl->tpl_vars['data']->value->rt_child,$_smarty_tpl->tpl_vars['parentOption']->value,array("class"=>"form-control"));?>

        </div>
    </div>
    <?php } else { ?>
    <div class="form-group">
        <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Induk</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::dropDownList("rt_child",$_smarty_tpl->tpl_vars['data']->value->rt_child,$_smarty_tpl->tpl_vars['parentOption']->value,array("class"=>"form-control"));?>

        </div>
    </div>
    <?php }?>
    <div class="form-group">
        <label for="entity_type" class="col-sm-3 col-xs-12 control-label">Dusun</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::dropDownList("dusun_id",$_smarty_tpl->tpl_vars['data']->value->dusun_id,$_smarty_tpl->tpl_vars['dusunOption']->value,array("class"=>"form-control"));?>

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
        ajaxTransfer("master/rtrw/save", data, "#result-entities");
    })

    $('select[name=rt_child]').chosen();
    $('select[name=dusun_id]').chosen();
<?php echo '</script'; ?>
><?php }
}
