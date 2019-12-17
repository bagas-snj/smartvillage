<?php
/* Smarty version 3.1.31, created on 2018-01-15 17:12:11
  from "D:\xampp\htdocs\smartvillage\backend\views\operator\pembangunan\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5c7e7bd97272_44586124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33333d24676fe8f5bae8d714807cc097ca754a45' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\operator\\pembangunan\\form.tpl',
      1 => 1515914817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5c7e7bd97272_44586124 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="result-entities"></div>
<form id="form-entities" onsubmit="return false;" class="form-horizontal">

    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Nama Pembangunan</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","nama_pembangunan",$_smarty_tpl->tpl_vars['data']->value->nama_pembangunan,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>
    <div class="form-group">
        <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Kategori Pembangunan</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::dropDownList("kategori_pembangunan_id",$_smarty_tpl->tpl_vars['data']->value->kategori_pembangunan_id,$_smarty_tpl->tpl_vars['kategoriOption']->value,array("class"=>"form-control"));?>

        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Anggaran</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("number","anggaran",$_smarty_tpl->tpl_vars['data']->value->anggaran,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Tanggal Mulai</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","tgl_mulai",$_smarty_tpl->tpl_vars['data']->value->tgl_selesai,array("class"=>"form-control datetime","required"=>''));?>

        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Tanggal Selesai</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","tgl_selesai",$_smarty_tpl->tpl_vars['data']->value->tgl_selesai,array("class"=>"form-control datetime","required"=>''));?>

        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Longitude</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","longitude",$_smarty_tpl->tpl_vars['data']->value->longitude,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Latitude</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","latitude",$_smarty_tpl->tpl_vars['data']->value->latitude,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>
    <div class="form-group">
        <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Sumber Dana</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::dropDownList("sumber_dana_pembangunan_id",$_smarty_tpl->tpl_vars['data']->value->sumber_dana_pembangunan_id,$_smarty_tpl->tpl_vars['sumberOption']->value,array("class"=>"form-control"));?>

        </div>
    </div>
    <div class="form-group">
        <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Status Pembangunan</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::dropDownList("status_pembangunan_id",$_smarty_tpl->tpl_vars['data']->value->status_pembangunan_id,$_smarty_tpl->tpl_vars['statusOption']->value,array("class"=>"form-control"));?>

        </div>
    </div>
    <div class="form-group">
        <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Mitra</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::dropDownList("mitra_id",$_smarty_tpl->tpl_vars['data']->value->mitra_id,$_smarty_tpl->tpl_vars['mitraOption']->value,array("class"=>"form-control"));?>

        </div>
    </div>
    <div class="form-group">
        <label for="photo" class="col-sm-3 col-xs-12 control-label">Foto</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::fileInput('Uploader[file]',null,array('class'=>'form-control'));?>

        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Keterangan</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","keterangan",$_smarty_tpl->tpl_vars['data']->value->keterangan,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>



    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </div>

    <?php echo yii\helpers\Html::hiddenInput('id',$_smarty_tpl->tpl_vars['data']->value->id);?>

    <?php echo yii\helpers\Html::hiddenInput('users_id',$_smarty_tpl->tpl_vars['sesi']->value);?>

    <?php echo yii\helpers\Html::hiddenInput(Yii::$app->request->csrfParam,Yii::$app->request->csrfToken);?>

</form>

<?php echo '<script'; ?>
>
    $("#form-entities").submit(function () {
        var data = getFormData("form-entities");
        ajaxTransfer("operator/pembangunan/save", data, "#result-entities");
    })

    $('select[name=mitra_id]').chosen();
    $('select[name=sumber_dana_pembangunan_id]').chosen();
    $('select[name=kategori_pembangunan_id]').chosen();
    $('select[name=status_pembangunan_id]').chosen();
    $('.datetime').datetimepicker({
        format : 'Y-m-d',
    });
<?php echo '</script'; ?>
><?php }
}
