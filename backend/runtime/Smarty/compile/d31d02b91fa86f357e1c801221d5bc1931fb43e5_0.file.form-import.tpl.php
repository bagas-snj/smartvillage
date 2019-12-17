<?php
/* Smarty version 3.1.31, created on 2017-12-05 16:10:31
  from "D:\xampp\htdocs\smartvillage\backend\views\operator\penduduk\form-import.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a266287a26332_02269442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd31d02b91fa86f357e1c801221d5bc1931fb43e5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\operator\\penduduk\\form-import.tpl',
      1 => 1512446843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a266287a26332_02269442 (Smarty_Internal_Template $_smarty_tpl) {
?>



<div id="result-entities-import"></div>
<form id="form-entities-import" onsubmit="return false;" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="file" class="col-sm-3 col-xs-12 control-label">File</label>
        <div class="col-sm-8 col-xs-12">
            <?php echo yii\helpers\Html::fileInput('Uploader[file]',null,array('class'=>'form-control','required'=>''));?>

            <small><a target="_blank" href="<?php echo (yii\helpers\Url::home(true)).('download/penduduk-example.xlsx');?>
"><i class="glyphicon glyphicon-download-alt"></i> Download Template</a></small>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Upload">
        </div>
    </div>

    <?php echo yii\helpers\Html::hiddenInput(Yii::$app->request->csrfParam,Yii::$app->request->csrfToken);?>

</form>

<?php echo '<script'; ?>
>
    $("#form-entities-import").submit(function () {
        var data = getFormData("form-entities-import");
        ajaxTransfer("master/penduduk/upload-import", data, "#modal-output");
    })
<?php echo '</script'; ?>
><?php }
}
