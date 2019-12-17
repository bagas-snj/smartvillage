<?php
/* Smarty version 3.1.31, created on 2018-01-14 19:20:49
  from "D:\xampp\htdocs\smartvillage\backend\views\operator\pengumuman\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5b4b2136c2c4_91328166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4dbe6138897b3b4ac701f34dd2454de163b1fa3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\operator\\pengumuman\\form.tpl',
      1 => 1515932437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5b4b2136c2c4_91328166 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="result-entities"></div>
<form id="form-entities" onsubmit="return false;" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Perihal</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","perihal",$_smarty_tpl->tpl_vars['data']->value->perihal,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>


    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Isi</label>
        <div class="col-sm-8 col-xs-12">
            <textarea name="isi" class="form-control" required=""><?php echo $_smarty_tpl->tpl_vars['data']->value->isi;?>
</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Tanggal Pengumuman</label>
        <div class="col-sm-8 col-xs-12">

            <?php echo yii\helpers\Html::input("text","tgl_pengumuman",$_smarty_tpl->tpl_vars['data']->value->tgl_pengumuman,array("class"=>"form-control datetime","required"=>''));?>

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
        ajaxTransfer("operator/pengumuman/save", data, "#result-entities");
    })

    $('.datetime').datetimepicker({
        format : 'Y-m-d',
    });

<?php echo '</script'; ?>
><?php }
}
