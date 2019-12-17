<?php
/* Smarty version 3.1.31, created on 2018-01-15 09:53:15
  from "D:\xampp\htdocs\smartvillage\backend\views\mitra\report\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5c179b412577_70102445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dec0a95d558ac2124b673d5c0dd736f69996100' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\mitra\\report\\index.tpl',
      1 => 1515914817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5c179b412577_70102445 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Report Harian"),$_smarty_tpl);?>


<form id="form-targets" onsubmit="return false;" class="form-horizontal">
    <table class="table table-striped">
        <tr>
            <td width="12%">Pilih Tanggal</td>
            <td width="3%">:</td>
            <td> <?php echo yii\helpers\Html::input("text","tanggal",'',array("class"=>"form-control","required"=>''));?>
</td>
        </tr>

        <tr>
            <td>Pilih Pembangunan</td>
            <td>:</td>
            <td><?php echo yii\helpers\Html::dropDownList("pembangunan_id",'',$_smarty_tpl->tpl_vars['pembangunanOption']->value,array("class"=>"form-control","required"=>''));?>
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
        ajaxTransfer("operator/report", data, "#result-targets");
    });
    $('select[name=pembangunan_id]').chosen();
    $('input[name=tanggal]').datepicker({
        format: 'yyyy-mm-dd'
    })
<?php echo '</script'; ?>
>

<?php }
}
