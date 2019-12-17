<?php
/* Smarty version 3.1.31, created on 2019-12-16 18:56:36
  from "C:\xampp98\htdocs\smartvillage\backend\views\operator\lapor-aduan\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df770f407d974_63491791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a2cdd9a56e797ff6f1b337b98af8a846636aed8' => 
    array (
      0 => 'C:\\xampp98\\htdocs\\smartvillage\\backend\\views\\operator\\lapor-aduan\\index.tpl',
      1 => 1515914817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df770f407d974_63491791 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Data Laporan Aduan Masyarakat"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
?>
<table id="user-table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Pembangunan</th>
        <th>Tanggal Aduan</th>
        <th>Pelapor</th>
        <th>Status</th>
        <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    <?php $_smarty_tpl->_assignInScope('nomor', 1);
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['nomor']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->pembangunan->nama_pembangunan;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->pembangunan->tgl_mulai;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->user->username;?>
</td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->status == 'laporanbaru') {?>
                    <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['item']->value->status;?>
</span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->status == 'dipending') {?>
                    <span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['item']->value->status;?>
</span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->status == 'ditolak') {?>
                    <span class="label label-danger><?php echo $_smarty_tpl->tpl_vars['item']->value->status;?>
</span>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['item']->value->status == 'diverifikasi') {?>
                    <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['item']->value->status;?>
</span>
                <?php }?>
            </td>
            <td class="center nowrap">
                <?php if ($_smarty_tpl->tpl_vars['item']->value->status != 'diverifikasi') {?>
                    <a onclick="verifikasiData(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
)" class="btn btn-info btn-xs glyphicon glyphicon-pencil"
                       title="VerifikasiData"></a>
                    <a onclick="tolakData(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
)" class="btn btn-danger btn-xs glyphicon glyphicon-remove"
                       title="VerifikasiData"></a>
                <?php }?>

            </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </tbody>
</table>
<?php echo '<script'; ?>
>
    function reloadData() {
        ajaxTransfer('operator/lapor-aduan', { }, '#main-content');
    }

    function verifikasiData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan verifikasi data?', function () {
            ajaxTransfer('operator/lapor-aduan/verifikasi', { id: id }, '#modal-output');
        });
    }
    function tolakData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan verifikasi data?', function () {
            ajaxTransfer('operator/lapor-aduan/tolak', { id: id }, '#modal-output');
        });
    }
    dataTables('#user-table');
<?php echo '</script'; ?>
><?php }
}
