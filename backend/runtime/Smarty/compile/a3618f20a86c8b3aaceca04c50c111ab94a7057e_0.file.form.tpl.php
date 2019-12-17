<?php
/* Smarty version 3.1.31, created on 2017-12-05 12:42:57
  from "D:\xampp\htdocs\smartvillage\backend\views\operator\penduduk\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a2631e1d315c0_68932121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3618f20a86c8b3aaceca04c50c111ab94a7057e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\operator\\penduduk\\form.tpl',
      1 => 1512452571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2631e1d315c0_68932121 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="result-entities"></div>
<form id="form-entities" onsubmit="return false;" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">NIK</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","nik",$_smarty_tpl->tpl_vars['data']->value->nik,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Nama Lengkap</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","nama_lengkap",$_smarty_tpl->tpl_vars['data']->value->nama_lengkap,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Tempat Lahir</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","tempat_lahir",$_smarty_tpl->tpl_vars['data']->value->tempat_lahir,array("class"=>"form-control","required"=>''));?>

        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Tanggal Lahir</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::input("text","tanggal_lahir",$_smarty_tpl->tpl_vars['data']->value->tanggal_lahir,array("class"=>"form-control datetime","required"=>''));?>

        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['data']->value->id == 0) {?>

    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Jenis Kelamin</label>
        <div class="col-sm-8 col-xs-12">
                <label>
                    <input type="radio" name="jenis_kelamin" value="L"> Pria
                </label>

                <label>
                    <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                </label>
        </div>
    </div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value->jenis_kelamin == 'L') {?>
            <div class="form-group">
                <label for="name" class="col-sm-3 col-xs-12 control-label">Jenis Kelamin</label>
                <div class="col-sm-8 col-xs-12">
                    <label>
                        <input type="radio" name="jenis_kelamin" value="L" checked> Pria
                    </label>

                    <label>
                        <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                    </label>
                </div>
            </div>
            <?php } else { ?>
            <div class="form-group">
                <label for="name" class="col-sm-3 col-xs-12 control-label">Jenis Kelamin</label>
                <div class="col-sm-8 col-xs-12">
                    <label>
                        <input type="radio" name="jenis_kelamin" value="L"> Pria
                    </label>

                    <label>
                        <input type="radio" name="jenis_kelamin" value="P" checked> Perempuan
                    </label>
                </div>
            </div>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['data']->value->rt_rw_id > 0) {?>
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">RT/RW</label>
            <div class="col-sm-8 col-xs-12">
                <?php echo yii\helpers\Html::dropDownList("rt_rw_id",$_smarty_tpl->tpl_vars['data']->value->rt_rw_id,$_smarty_tpl->tpl_vars['rtOption']->value,array("class"=>"form-control"));?>

            </div>
        </div>
    <?php } else { ?>
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">RT/RW</label>
            <div class="col-sm-8 col-xs-12">
                <?php echo yii\helpers\Html::dropDownList("rt_rw_id",$_smarty_tpl->tpl_vars['data']->value->rt_rw_id,$_smarty_tpl->tpl_vars['rtOption']->value,array("class"=>"form-control"));?>

            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['data']->value->agama_id > 0) {?>
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Agama</label>
            <div class="col-sm-8 col-xs-12">
                <?php echo yii\helpers\Html::dropDownList("agama_id",$_smarty_tpl->tpl_vars['data']->value->agama_id,$_smarty_tpl->tpl_vars['agamaOption']->value,array("class"=>"form-control"));?>

            </div>
        </div>
    <?php } else { ?>
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Agama</label>
            <div class="col-sm-8 col-xs-12">
                <?php echo yii\helpers\Html::dropDownList("agama_id",$_smarty_tpl->tpl_vars['data']->value->agama_id,$_smarty_tpl->tpl_vars['agamaOption']->value,array("class"=>"form-control"));?>

            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['data']->value->pekerjaan_id > 0) {?>
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Pekerjaan</label>
            <div class="col-sm-8 col-xs-12">
                <?php echo yii\helpers\Html::dropDownList("pekerjaan_id",$_smarty_tpl->tpl_vars['data']->value->pekerjaan_id,$_smarty_tpl->tpl_vars['pekerjaanOption']->value,array("class"=>"form-control"));?>

            </div>
        </div>
    <?php } else { ?>
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Pekerjaan</label>
            <div class="col-sm-8 col-xs-12">
                <?php echo yii\helpers\Html::dropDownList("pekerjaan_id",$_smarty_tpl->tpl_vars['data']->value->pekerjaan_id,$_smarty_tpl->tpl_vars['pekerjaanOption']->value,array("class"=>"form-control"));?>

            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['data']->value->id == 0) {?>

        <div class="form-group">
            <label for="name" class="col-sm-3 col-xs-12 control-label">Status Perkawinan</label>
            <div class="col-sm-8 col-xs-12">
                <label>
                    <input type="radio" name="status_perkawinan" value="Sudah Menikah"> Menikah
                </label>

                <label>
                    <input type="radio" name="status perkawinan" value="Belum Menikah"> Belum
                </label>
            </div>
        </div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value->status_perkawinan == 'Sudah Menikah') {?>
            <div class="form-group">
                <label for="name" class="col-sm-3 col-xs-12 control-label">Status Perkawinan</label>
                <div class="col-sm-8 col-xs-12">
                    <label>
                        <input type="radio" name="status_perkawinan" value="Sudah Menikah" checked> Menikah
                    </label>

                    <label>
                        <input type="radio" name="status perkawinan" value="Belum Menikah"> Belum
                    </label>
                </div>
            </div>
        <?php } else { ?>
            <div class="form-group">
                <label for="name" class="col-sm-3 col-xs-12 control-label">Status Perkawinan</label>
                <div class="col-sm-8 col-xs-12">
                    <label>
                        <input type="radio" name="status_perkawinan" value="Sudah Menikah"> Menikah
                    </label>

                    <label>
                        <input type="radio" name="status perkawinan" value="Belum Menikah" checked> Belum
                    </label>
                </div>
            </div>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['data']->value->pendidikan_id > 0) {?>
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Pendidikan</label>
            <div class="col-sm-8 col-xs-12">
                <?php echo yii\helpers\Html::dropDownList("pendidikan_id",$_smarty_tpl->tpl_vars['data']->value->pendidikan_id,$_smarty_tpl->tpl_vars['pendidikanOption']->value,array("class"=>"form-control"));?>

            </div>
        </div>
    <?php } else { ?>
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Pendidikan</label>
            <div class="col-sm-8 col-xs-12">
                <?php echo yii\helpers\Html::dropDownList("pendidikan_id",$_smarty_tpl->tpl_vars['data']->value->pendidikan_id,$_smarty_tpl->tpl_vars['pendidikanOption']->value,array("class"=>"form-control"));?>

            </div>
        </div>
    <?php }?>

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
        ajaxTransfer("operator/penduduk/save", data, "#result-entities");
    })

    $('select[name=rt_rw_id]').chosen();
    $('select[name=agama_id]').chosen();
    $('select[name=pekerjaan_id]').chosen();
    $('select[name=pendidikan_id]').chosen();
    $('.datetime').datetimepicker({
        format : 'Y-m-d',
    });
<?php echo '</script'; ?>
><?php }
}
