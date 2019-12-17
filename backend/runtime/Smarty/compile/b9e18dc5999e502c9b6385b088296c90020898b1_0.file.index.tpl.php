<?php
/* Smarty version 3.1.31, created on 2019-12-16 18:56:44
  from "C:\xampp98\htdocs\smartvillage\backend\views\operator\report\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df770fc0ff023_58037669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9e18dc5999e502c9b6385b088296c90020898b1' => 
    array (
      0 => 'C:\\xampp98\\htdocs\\smartvillage\\backend\\views\\operator\\report\\index.tpl',
      1 => 1515914817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df770fc0ff023_58037669 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Report Mitra"),$_smarty_tpl);?>


<form id="form-targets" onsubmit="return false;" class="form-horizontal">
    <table class="table table-striped">
        <tr>
            <td width="12%">Pilih Tanggal</td>
            <td width="3%">:</td>
            <td> <?php echo yii\helpers\Html::input("text","tanggal",'',array("class"=>"form-control","required"=>''));?>
</td>
        </tr>

        <tr>
            <td>Pilih Mitra</td>
            <td>:</td>
            <td><?php echo yii\helpers\Html::dropDownList("mitra_id",'',$_smarty_tpl->tpl_vars['mitraOption']->value,array("class"=>"form-control","required"=>''));?>
</td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input class="btn btn-primary" type="submit" value="Buka Laporan"></td>
        </tr>
    </table>
    <?php echo yii\helpers\Html::hiddenInput(Yii::$app->request->csrfParam,Yii::$app->request->csrfToken);?>

</form>
<hr>
<div id="result-targets"></div>
<?php echo '<script'; ?>
>
    $("#form-targets").submit(function () {
        var data = getFormData("form-targets");
        ajaxTransfer("operator/report/report-mitra", data, "#result-targets");
    });
    $('select[name=mitra_id]').chosen();
    $('input[name=tanggal]').datepicker({
        format: 'yyyy-mm-dd'
    })
<?php echo '</script'; ?>
>

<?php }
}
